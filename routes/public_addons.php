<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'promo'], function () {
    Route::get('{slug}', 'Addons\PromoController@show' )->name('promo.single');
    Route::post('goPromo/{slug}', 'Addons\PromoController@click' )->name('promo.click');

});

