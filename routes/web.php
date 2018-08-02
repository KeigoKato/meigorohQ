<?php
use App\Http\Middleware\setSortStatementsMiddleware;


/**
 * Statementモデルに関するのルーティング
 */
Route::get('statements/index', 'StatementsController@index')->middleware(setSortStatementsMiddleware::class);
Route::get('statements/search', 'StatementsController@search')->middleware(setSortStatementsMiddleware::class);
Route::get('statements/show', 'StatementsController@show');
Route::get('statements/add', 'StatementsController@add');
Route::post('statements/add', 'StatementsController@create');

/**
 * Reviewモデルに関するルーティング
 */
Route::post('/reviews/add', 'ReviewsController@create');
Route::post('/reviews/update', 'ReviewsController@update');
Route::post('/reviews/delete', 'ReviewsController@delete');