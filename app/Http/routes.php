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

// Route::get('/create_cr/{id}', 'CompteRenduController@index');
Route::resource('/CR', 'CompteRenduController');
Route::resource('/CR.single', 'CompteRenduController@single');
Route::resource('/metier', 'MetiersController');
Route::resource('/recettage', 'CahierRecettageController');
Route::resource('/bonlivraison', 'BonLivraisonController');

// create_cr/create

Route::resource('/projets', 'ProjetController');

Route::resource('/home', 'HomeController@index');

// Route::resource('/single_cr', 'CompteRenduController@index');

// Route::get('/single_projet', 'ProjetController@index');
