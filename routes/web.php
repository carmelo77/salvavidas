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

Route::get('/', ['uses' => 'HomeController@root']);

Route::get('/login', ['as' => 'login', 'uses' => 'HomeController@showLogin']);
Route::post('/sign-in', ['uses' => 'HomeController@signIn']);

Route::group(['middleware' => ['auth', 'web']], function (){

	Route::group(['prefix' => '/dashboard'], function (){

		Route::get('/', ['uses' => 'HomeController@dashboard']);

		Route::resource('/courses', 'CoursesController');
		Route::resource('/blog', 'BlogsController');
		Route::resource('/videos', 'VideosController');
		Route::resource('/beach', 'BeachsController');
		Route::resource('/questions', 'QuestionsController');
		Route::resource('/desfibrillation', 'DesfibrillationController');
		Route::resource('/infographic', 'InfographicController');

		Route::get('/proyects/{type}', ['uses' => 'ProyectsController@dashboardIndex']);
		Route::get('/proyects/create/{type}', ['uses' => 'ProyectsController@create']);

		Route::post('/proyects/{type}', ['uses' => 'ProyectsController@store']);
		Route::get('/proyects/{type}/{id}/edit', ['uses' => 'ProyectsController@edit']);
		Route::put('/proyects/{type}/{id}', ['uses' => 'ProyectsController@update']);
		Route::get('/proyects/{type}/{id}/delete', 'ProyectsController@destroy');

		Route::get('/formations/{type}', 'FormationsController@index');
		Route::get('/formations/create/{type}', 'FormationsController@create');

		Route::post('/formations/{type}', 'FormationsController@store');
		Route::get('/formations/{id}/edit/{type}', 'FormationsController@edit');
		Route::put('/formations/{type}/{id}', 'FormationsController@update');
		Route::get('/formations/{type}/{id}/delete', 'FormationsController@destroy');
	});
});

Route::get('/salvavidastv', 'VideosController@show');
