<?php
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('statements/index', 'StatementsController@index')->middleware('sort');
Route::get('statements/search', 'StatementsController@search')->middleware('sort');

Route::middleware(['auth'])->group(function() {
    Route::get('statements/show', 'StatementsController@show');
    Route::get('statements/add', 'StatementsController@add');
    Route::post('statements/add', 'StatementsController@create');
    Route::post('/reviews/add', 'ReviewsController@create');
    Route::post('/reviews/update', 'ReviewsController@update');
    Route::post('/reviews/delete', 'ReviewsController@delete');
});