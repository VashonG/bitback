<?php

        use Illuminate\Support\Facades\Route;

        // use Getsupercode\Localizater\Facades\Localizater;

        // Localizater::group(function () {
            Route::localized(function () {

            Route::group(['prefix' => 'user','middleware'=>['auth','check-banned'],'name'=>'user'], function () {
                Route::view('overview', 'pcb-ui::pages.spa')->name('user_overview')->middleware('lock-modules');
            Route::view('payment/{action?}', 'pcb-ui::pages.spa')->name('user_payment')->middleware('lock-modules');
            Route::view('activities/{type?}', 'pcb-ui::pages.spa')->name('user_cashback_activities');
            Route::view('missing-cashback-claim', 'pcb-ui::pages.spa')->name('user_missing_claim')->middleware('lock-modules');
            Route::view('refer-and-earn', 'pcb-ui::pages.spa')->name('user_refer_earn')->middleware('lock-modules');
            Route::view('share-and-earn', 'pcb-ui::pages.spa')->name('user_share_earn')->middleware('lock-modules');
            Route::view('favorites', 'pcb-ui::pages.spa')->name('user_favorites')->middleware('lock-modules');
            Route::view('account-settings', 'pcb-ui::pages.spa')->name('user_account_settings');
            
                include 'user_addons.php';

            });

        });
        