<?php

class TestController extends BaseController
{

    public function index()
    {
        // Here are two arrays
        $arr1 = [1,4,7,12,31,56,82,99];
        $arr2 = [3,5,11,16,21,45,50,108];

        // Threw in a third one
        $array = $this->combine($arr1, $arr2, [1,23,445,66]);
        $result = $this->doSort($array);
        var_dump($result);
    }

    public function googlemap()
    {
        return View::make('googlemap');
    }

    public function eventfeed()
    {

        // $session = new FacebookSession('859037420777832','4d9b21f5108eb7e021d9e0bdfc06723c');
        $facebook = new Facebook(Config::get('facebook'));

        $params = [
            'lat' => 37.335825,
            'long' => -121.886061,
            'location' => 'San Jose, CA',
            'zip' => 95112
        ];
        $params['q'] = $_GET['q'];

        echo Debug::vars($params, $facebook);
        return View::make('eventfeed');
    }

    /**
     * bubble sort - one of the basics.  we loop thru twice and compare two
     * integers that are side by side.  This is acending, so we want to push
     * the lower value to the top ($j > $j+1).
     */
    protected function doSort($array) {
        // Get the number of indexes in the array
        $count = count($array);

        for ($i=0; $i < $count; $i++) {
            for ($j=0; $j < $count - 1; $j++) {
                // If the current index is larger than the next index swap values
                if ($array[$j] > $array[$j + 1]) {
                    $temp = $array[$j];
                    $array[$j] = $array[$j + 1];
                    // Swap with the temp value
                    $array[$j + 1] = $temp;
                }
            }
        }
        return $array;

    }

    protected function combine()
    {
        $args = func_get_args();
        $result = [];
        for ($i=0; $i < func_num_args() ; $i++) { 
            foreach($args[$i] AS $row) {
                $result[] = $row;
            }
        }
        return $result;
    }

    public function slideshow()
    {
        return View::make('slideshow');
    }
}