<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/mongo', function () {
    $videoList = Youtube::search('reactjs');
    for ($x = 0; $x <= 9; $x++) {
        return $videoList;
        //echo $videoList[$x]->snippet->title;
        //echo $videoList[$x]->snippet->description;
        //echo $videoList[$x]->id->videoID;
  }
});

Route::get('/express', function () {
    $videoList = Youtube::search('expressjs');
    for ($x = 0; $x <= 9; $x++) {
        echo $videoList[$x]->id->videoId;
        echo $videoList[$x]->snippet->title;
        //echo $videoList[$x]->snippet->description;
  }
});

Route::get('/react', function () {
    $videoList = Youtube::search('reactjs');
    for ($x = 0; $x <= 9; $x++) {
        echo $videoList[$x]->id->videoId;
        echo $videoList[$x]->snippet->title;
        //echo $videoList[$x]->snippet->description;
  }
});

Route::get('/node', function () {
    $videoList = Youtube::search('nodejs');
    for ($x = 0; $x <= 9; $x++) {
        return $videoList;
        // return $videoList[$x]->id->videoId;
        // return $videoList[$x]->snippet->title;
        // return $videoList[$x]->snippet->description;
  }
});


Route::resource('profile', 'YoutubeController');

// Route::apiResources([
//     'home' => 'HomeController',
//     'home' => 'YoutubeController',
//     'profile' => 'YoutubeController'
// ]);