<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'NewsItemsController@index')->name('root');
Route::get('/news-items', 'NewsItemsController@index');
Route::get('/news-items/{id}', 'NewsItemsController@show');

Route::prefix('admin')->group(function () {
    Route::namespace('Admin')->group(function() {
        Route::get('/', 'NewsItemsController@index')->name('admin-root');
        Route::get('/news-items', 'NewsItemsController@index');

        Route::get('/news-items/create', 'NewsItemsController@create');
        Route::post('/news-items', 'NewsItemsController@store');
        Route::get('/news-items/{newsItem}/edit', 'NewsItemsController@edit');
        Route::patch('/news-items/{newsItem}', 'NewsItemsController@store');
        Route::delete('/news-items/{newsItem}', 'NewsItemsController@destroy');
    });
});
