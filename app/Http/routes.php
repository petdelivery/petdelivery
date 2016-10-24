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

Route::get('/', 'WelcomeController@inicio');


Route::auth();


Route::get('/products', 'HomeController@products');
Route::get('/product/{id}', 'HomeController@productDetail');

Route::post('/orden', 'HomeController@orden');
Route::get('/nosotros', 'HomeController@nosotros');



Route::group(['middleware' => 'auth'], function () {
	Route::post('config/product/new','ConfigController@NewProduct');
	Route::get('config/product/remove/{id}','ConfigController@RemoveProduct');
	Route::get('config/products/{categoria?}','ConfigController@ListProducts');
});

Route::get('/sitemap', function()
{
   return Response::view('sitemap')->header('Content-Type', 'application/xml');
});
