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
    return view('welcome','WelcomeController@index');
});

Route::auth();


Route::get('/products', 'HomeController@products');
Route::get('/product/{id}', 'HomeController@productDetail');

Route::group(['middleware' => 'auth'], function () {
	Route::post('config/product/new','ConfigController@NewProduct');
	Route::get('config/product/remove/{id}','ConfigController@RemoveProduct');
	Route::get('config/products/{categoria?}','ConfigController@ListProducts');
});
