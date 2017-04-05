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
Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', 'HomeController@index');

	Route::get('/customer', 'CustomerController@index');
	Route::get('/customer/create', 'CustomerController@create');
	Route::post('/customer/store', 'CustomerController@store');
	Route::get('/customer/detail/{id}', 'CustomerController@detail');
});

