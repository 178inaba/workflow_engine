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

Route::get('/', 'IndexController@index');

Route::get('/company_register', 'CompanyController@showRegistrationForm');
Route::post('/company_register', 'CompanyController@register');
//Route::post('/task', 'TaskController@store');
//Route::delete('/task/{task}', 'TaskController@destroy');

Route::auth();
