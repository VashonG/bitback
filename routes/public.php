<?php
use Illuminate\Support\Facades\Route;
use Getsupercode\Localizater\Facades\Localizater;

        // Localizater::group(function () {
            Route::localized(function () {
            Route::group(['middleware' => ['web','page-cache'],'name'=>'public-dynamic'], function () {
                $locale = (app()->getLocale());
                
                // TODO : Make these slugs dynamic
                Route::get( (config('pcb.permalinks.search.'.$locale,'search') ?? 'search') . '','PublicController@search')->name('search');
                Route::get( (config('pcb.permalinks.store_single.'.$locale,'store') ?? 'store') .  '/{slug}','StoreController@single')->name('store.single');
                Route::get( (config('pcb.permalinks.store_category.'.$locale,'store-category') ?? 'store-category' ).  '/{slug}','StoreController@category')->name('store.category');
                Route::get( (config('pcb.permalinks.coupon_category.'.$locale,'coupon-category') ?? 'coupon-category' ).  '/{slug}','CouponController@category')->name('coupon.category');
                Route::get( (config('pcb.permalinks.deal_category.'.$locale,'deal-category') ?? 'deal-category' ).  '/{slug}','DealController@category')->name('deal.category');
                Route::get( (config('pcb.permalinks.deal_single.'.$locale,'deal') ?? 'deal' ).  '/{slug}','DealController@single')->name('deal.single');
                Route::get('out/{type}/{type_id}','ClickController@goWeb')->name('out');
                Route::get('eout/{type}/{type_id}','ClickController@goExtn')->name('extension.out');
                
                
                    include 'public_addons.php';
            });
            
    });

    Route::group(['prefix' => 'user','middleware'=>['auth','check-banned'],'name'=>'user'], function () {
        Route::get('verify-payment/{code}/{id}','UserController@verifyPayment')->name('user.payment.verify');
    });

    Route::post('subscribe/mailchimp','PublicController@subscribeMailChimp')->name('subscribe.mailchimp');
	Route::get('l/{code}','ClickController@userLink')->name('out.user.link');