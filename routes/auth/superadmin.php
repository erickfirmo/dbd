<?php

Route::prefix('superadmin')->name('superadmin.')->namespace('Superadmin')->group(function () {
    Auth::routes();
    Route::middleware('auth:superadmin')->group(function () {
        Route::get('/', 'HomeController@index')->name('/');
        Route::get('home', 'HomeController@index')->name('home');
    });
});