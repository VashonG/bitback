<?php

use Illuminate\Support\Facades\Route;
Route::localized(function () {

    Route::group(['middleware' => ['web', 'guest'], 'name' => 'public-dynamic', 'prefix' => 'ajax'], function () {
        Route::get('login', 'AjaxController@login')->name('ajax.login');
        Route::get('register', 'AjaxController@register')->name('ajax.register');
        Route::get('forgot-password', 'AjaxController@forgot_password')->name('ajax.forgot-password');


        
    });
});

Route::get('ping','AjaxController@ping');