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
    $videoList = Youtube::search('mongodb');
    //print_r(json_decode($videoList));
    $jsonData = json_encode($videoList);
    print_r($jsonData);
});

Route::get('/express', function () {
    $videoList = Youtube::search('expressjs');
    $jsonData = json_encode($videoList);
    print_r($jsonData);
});

Route::get('/react', function () {
    $videoList = Youtube::search('reactjs');
    $jsonData = json_encode($videoList);
    print_r($jsonData);
});

Route::get('/node', function () {
    $videoList = Youtube::search('nodejs');
    $jsonData = json_encode($videoList);
    print_r($jsonData);
});


Route::resource('profile', 'YoutubeController');