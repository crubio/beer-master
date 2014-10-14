<?php

class DnsController extends \BaseController {

	/**
	 * Base call for DNS queries
	 *
	 * @return Response
	 */
	public function index()
	{

        require 'Net/DNS2.php';
		// Build the parameter array
        $params = [];
        foreach ($_GET AS $key => $row) {
            $params[$key] = $row;
        }
        $result = [];

        // Sanitize domain name using regex

        // Valid record types config - ptr requires an IP
        $records = [
            1 => 'a',
            2 => 'mx',
            3 => 'spf',
            4 => 'txt',
            5 => 'ptr', 
            6 => 'cname',
            7 => 'whois'
        ];

        // Handle PTR record or fail
        
        if (!in_array($params['type'], array_keys($records))) {
            // Build an error response
            echo 'invalid type';
            die;
        }

        // Set the type
        if (empty($params['type'])) {
            $params['type'] = 'a';
        }

        // Name servers will be google DNS
        $name_servers = [
            'nameservers' => ['8.8.8.8', '8.8.0.0']
        ];

        // Create the request object
        $r = new Net_DNS2_Resolver($name_servers);
        // Set a better time out than the default
        $r->timeout = 4;

        // Go for it!
        try {
            $resolver = $r->query($params['query'], $records[$params['type']] );
            $result['success'] = TRUE;
            $result['message'] = 'Query successful';
        }
        catch(Exception $e) {
            // Message should return in the JSON result
            $result['success'] = FALSE;
            $result['message'] = $e->getMessage();
            $result['result'] = '';
            return Response::json($result);
        }

        // Turn this dude into an array
        settype($resolver, 'array');
        foreach ($resolver['answer'] AS $i => $row) {
            settype($row, 'array');
            if (array_key_exists('rdata', $row)) {
                unset($row['rdata']);
            }

            $result['result'][$i] = $row;
        }
        // Add the question section too
        $result['question'] = $resolver['question'];

        return Response::json($result);

	}

    /**
    * API endpoint for showing info on a DNS query
    */
    public function show($string)
    {

    }

}