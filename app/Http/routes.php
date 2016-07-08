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

    return view('welcome',['articles'=>App\Articulo::where('destacado',1)->get()]);
});

Route::auth();


Route::get('/articles', 'HomeController@articles');
Route::get('/article/{id}', 'HomeController@articleDetail');

Route::group(['middleware' => 'auth'], function () {
	Route::post('config/article/new','ConfigController@NewArticle');
	Route::get('config/article/remove/{id}','ConfigController@RemoveArticle');
	Route::get('config/articles/{categoria?}','ConfigController@ListArticles');
});
