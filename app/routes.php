<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::group(['before' => 'disabled'], function(){
    // Route to home controller
});

// Home
Route::get('/', 'HomeController@index');

// DNS tool
Route::get('/dnslookup', function(){
    return View::make('dnslookup');  // Return the app/views/dnslookup template
});

Route::group(['prefix' => 'api'], function(){
    Route::resource('dnslookup', 'DnsController');
});

// Test project templates
Route::get('/test', 'TestController@index');

// Zillow form template
Route::get('/test/googlemap', 'TestController@googlemap');

// Event feed
Route::get('/test/eventfeed', 'TestController@eventfeed');

Route::get('/test/slideshow', 'TestController@slideshow');  

// New routes for AngularJS front end
Route::get('beers', function(){
    return View::make('beers'); // Returning app/views/beers.php (no blade)
});

// Prefix beers with api
Route::group(['prefix' => 'api'], function(){

    // Our beers app route
    Route::resource('beers', 'BeerController');
});

// Route to my marked up resume
Route::get('/resume', function(){
    return View::make('resume');
});

// Route to an angular.js page
Route::get('/angular', function(){
    return View::make('angular');
});

// Route to project resume screens
Route::get('/project', function(){

    // An array of photos we need - static for now
    $screens = [
        0 => [
            'url' => '/img/project/uploader1.png',
            'caption' => 'The modal and upload plugin. Submitting launches the fileupload plugin and submits the form data. The fileupload plugin handles progress and error handling within the modal. The endpoint /upload/photo handles validation and image size generation.'
        ],
        1 => [
            'url' => '/img/project/uploader2.png',
            'caption' => 'The details page (/upload/photo_details/<id>). Basic information about the photo, only a title is required.'
        ],
        2 => [
            'url' => '/img/project/uploader3.png',
            'caption' => 'Auto complete - personTagList.js plugin handles attaching/removing person records and bootstrap-typeahead handles the display of possible entries.  Possibe entries are based off person records the user has some connection with (api/user/<id>/people).'
        ],
        3 => [
            'url' => '/img/project/uploader4.png',
            'caption' => 'The finished upload with a bootstrap style alert. Upload takes you back to the beginning of the process.'
        ]
    ];
    return View::make('project')->with("screens", $screens);
});

// AUTH related routes
// This is a named route - can use like $route = URL::route('login');
Route::get('login', ['as' => 'login', function(){
    return View::make('login');
}])->before('guest');

// For posting login info
Route::post('login', function(){});
// Log out route - protect from non-auths (retrieve flash messages with Session::get() method)
Route::get('logout', array('as' => 'logout', function (){ }))->before('auth');
// Profile route
Route::get('profile', array('as' => 'profile', function (){ }))->before('auth');

// 404 and missing things
App::missing(function($exception)
{
    // later
});