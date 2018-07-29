<?php

/**
 * Statementモデルに関するのルーティング
 */
Route::get('statements/index', 'StatementsController@index');
Route::get('statements/search', 'StatementsController@search')->name('search');
Route::get('statements/show', 'StatementsController@show');
Route::get('statements/add', 'StatementsController@add');
Route::post('statements/add', 'StatementsController@create');

/**
 * Reviewモデルに関するルーティング
 */
Route::post('/reviews/add', 'ReviewsController@create');
Route::post('/reviews/delete', 'ReviewsController@delete');