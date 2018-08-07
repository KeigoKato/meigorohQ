<?php
/**
 * Statementモデルに関するのルーティング
 */
Route::get('statements/index', 'StatementsController@index')->middleware('sort');
Route::get('statements/search', 'StatementsController@search')->middleware('sort');
Route::get('statements/show', 'StatementsController@show');
Route::get('statements/add', 'StatementsController@add');
Route::post('statements/add', 'StatementsController@create');

/**
 * Reviewモデルに関するルーティング
 */
Route::post('/reviews/add', 'ReviewsController@create');
Route::post('/reviews/update', 'ReviewsController@update');
Route::post('/reviews/delete', 'ReviewsController@delete');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
