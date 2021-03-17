<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'NewsItemsController@index');
Route::get('/news-items', 'NewsItemsController@index');
Route::get('/news-items/{id}', 'NewsItemsController@show');

//Route::get('/news-items', 'NewsItemsController@store');
Route::post('/news-items', 'NewsItemsController@store');

Route::prefix('admin')->group(function () {
    Route::namespace('Admin')->group(function() {
        Route::get('/', 'NewsItemsController@index');
        Route::get('/news-items', 'NewsItemsController@index');

    });
});
