<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::resource('/create_cr', 'CompteRenduController');
// create_cr/create

Route::get('/create_projet', 'ProjetController@create');

Route::get('/home', 'HomeController@index');

// Route::resource('/single_cr', 'CompteRenduController@index');

Route::get('/single_projet', 'ProjetController@index');
