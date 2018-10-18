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

Route::get('Podcasts/index', 'PodcastController@index');
Route::get('Podcasts/create', 'PodcastController@create');
Route::post('Podcasts/create', 'PodcastController@store');
Route::get('Podcasts/edit/{podcast}', 'PodcastController@edit');
Route::post('Podcasts/edit/{podcast}', 'PodcastController@update');
Route::get('Podcasts/delete/{podcast}', 'PodcastController@destroy');
Route::get('Podcasts/show/{podcast}', 'PodcastController@show');
