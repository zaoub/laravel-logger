<?php

Route::group([
    'prefix' => 'zll',
    'namespace' => 'Zaoub\Laravel\app\Http\Controllers',
    'middleware' => ['web', 'Zaoub\Laravel\app\Http\Middleware\AccessMiddleware']
], function () {
    Route::get('/', 'DashboardController@index')->name('zlogger.dashboard');

    Route::group(['prefix' => 'new'], function(){
        Route::get('/', 'LoggerController@index')->name('zlogger.index');
        Route::get('/show/{id}', 'LoggerController@show')->name('zlogger.show');
        Route::get('/markread/{id}', 'LoggerController@markread')->name('zlogger.markread');
        Route::get('/delete/{id}', 'LoggerController@delete')->name('zlogger.delete');
    });

    Route::group(['prefix' => 'all'], function(){
        Route::get('/', 'LoggerAllController@index')->name('zlogger.all.index');
        Route::get('/show/{id}', 'LoggerAllController@show')->name('zlogger.all.show');
        Route::get('/delete/{id}', 'LoggerAllController@delete')->name('zlogger.all.delete');
    });
});