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
Route::redirect('statements/index', '/');
Route::get('/', 'StatementsController@index');
Route::get('statements/search', 'StatementsController@search');
Route::get('statements/show', 'StatementsController@show');
Route::get('statements/add', 'StatementsController@add');
Route::post('statements/add', 'StatementsController@create');