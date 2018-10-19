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

Route::get('podcasts/index', 'PodcastController@index');
Route::get('podcasts/create', 'PodcastController@create');
Route::post('podcasts/create', 'PodcastController@store');
Route::get('podcasts/edit/{podcast}', 'PodcastController@edit');
Route::post('podcasts/edit/{podcast}', 'PodcastController@update');
Route::get('podcasts/delete/{podcast}', 'PodcastController@destroy');
Route::get('podcasts/show/{podcast}', 'PodcastController@show');
