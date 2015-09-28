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

Route::get('domains', 'DomainsController@index');
Route::get('domains/create', 'DomainsController@create');
Route::get('domains/{id}', 'DomainsController@show');
Route::post('domains', 'DomainsController@store');

Route::get('aliases', 'AliasesController@index');
Route::get('aliases/create', 'AliasesController@create');
Route::get('aliases/{id}', 'AliasesController@show');
Route::post('aliases', 'AliasesController@store');

Route::get('/', function () {
    return view('welcome');
});

Route::controllers([
  'auth' => 'Auth\AuthController',
  'password' => 'Auth\PasswordController',
]);
