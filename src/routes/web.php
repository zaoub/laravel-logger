<?php

Route::group([
    'prefix' => 'zlogger',
    'namespace' => 'Zaoub\Laravel\app\Http\Controllers',
    'middleware' => 'web'
], function () {
    Route::get('/', 'LoggerController@index')->name('zlogger.index');
    Route::get('/read', 'LoggerController@indexRead')->name('zlogger.index.read');
    Route::get('/show/{id}', 'LoggerController@show')->name('zlogger.show');
    Route::get('/markread/{id}', 'LoggerController@markread')->name('zlogger.markread');
    Route::get('/delete/{id}', 'LoggerController@delete')->name('zlogger.delete');
});