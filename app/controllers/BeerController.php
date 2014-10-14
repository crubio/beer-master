<?php

class BeerController extends BaseController {

	/**
	 * Display a collection from search parameters
	 * route: resource.index (beers.index or beers/index)
	 * 
	 * @return Response
	 */
	public function index()
	{

		$error_message = Session::get('message');
		$base = URL::current();

		$result = [];
		// Error check and return message
		if (empty($_GET['search'])) {
			return ['success' => FALSE, 'message' => 'Invalid search'];
		}

		// Request parameters
		$params = $_GET;
		$basic_keys = ['id', 'name', 'abv', 'description', 'ibu', 'isOrganic'];
		$max_results = 3;

		// Validate our parameters
		if (empty($params['type'])) {
			$params['type'] = "beer";
		}

		// Instance of breweryDB class
		$brew = new Pintlabs_Service_Brewerydb(Config::get('brewerydb.api_key'));
		$brew->setformat("json");

		// Build parameters
		$params = [
			'q' => $params['search'],
			'type' => $params['type'],
			'withBreweries' => "Y"
		];

		$response = $brew->request("search", $params, "GET");
		// On a no result return, its still success, account for this error
		if (!array_key_exists('data', $response)) {
			return ['success' => FALSE, 'message' => 'No results available'];
		}

		// Pagination data
		$pagination = [
			'currentPage' => $response['currentPage'],
			'numberOfPages' => $response['numberOfPages'],
			'totalResults' => $response['totalResults']
		];

		// Type = beer *maybe this method only handles beer*
		if ($params['type'] == 'beer') {
			$result = $response['data'];
		}

		// Attach pagination and success message if we got this far
		$result['pagination'] = $pagination;
		$result['success'] = TRUE;
		$result['message'] = "result success";
		
		return (json_encode($result));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * form action /beer
	 * @return Response
	 */
	public function store()
	{	
		// Our post data
		$post = $_POST;

		return View::make('beer',[
			'post' => $post,
		]);
	}

	/**
	 * Display one item in the collection /beers/12345
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// Validate the id (check for empty right now)
		if (empty($id) OR $id == 99) {
			return Redirect::to('/beers')->with('message', 'We can\'t find that beer!  Try again.');
		}
		print_r($id);

	}

	/**
	 * Edit an item /beers/12345/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}