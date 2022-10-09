<?php

        use Illuminate\Support\Facades\Route;

        // use Getsupercode\Localizater\Facades\Localizater;

        // Localizater::group(function () {
            Route::localized(function () {

            Route::group(['middleware'=>['web','page-cache'],'name'=>'pages'], function () {
                Route::get('/', 'PageController@home')->name('home');
                Route::get('contact-us', 'PageController@contact')->name('contact');
                Route::get('refer-and-earn', 'PageController@fullWidth')->name('refer_earn');
                Route::get('share-and-earn', 'PageController@fullWidth')->name('share_earn');
                Route::get('how-it-works', 'PageController@fullWidth')->name('hiw');
                Route::get('faq', 'PageController@faqs')->name('faqs');
                Route::get('all-stores', 'PageController@allStores')->name('all_stores');
                Route::get('all-coupon-categories', 'PageController@allCouponCategories')->name('all_coupon_categories');
                Route::get('all-store-categories', 'PageController@allStoreCategories')->name('all_store_categories');
                Route::get('all-daily-deal-categories', 'PageController@allDealCategories')->name('all_deal_categories');
                Route::get('daily-deals', 'PageController@allDeals')->name('all_deals');
                Route::get('signup', 'PageController@registerPage')->name('register');
                Route::get('login', 'PageController@loginPage')->name('login');
                Route::get('sitemap', 'PageController@sitemap')->name('sitemap');
                Route::get('about-us', 'PageController@fullWidthTitle')->name('about-us');
                Route::get('privacy-policy', 'PageController@fullWidthTitle')->name('privacy');
                Route::get('terms-of-use', 'PageController@fullWidth')->name('terms');
                Route::get('new-year-offers', 'PageController@festivePage')->name('festive');
                Route::get('learn-whitelist-adblocker', 'PageController@fullWidth')->name('unblock-adblock');
                Route::get('whatsapp-subscribe', 'PageController@fullWidth')->name('other-pages');
                Route::get('telegram-subscribe', 'PageController@fullWidth')->name('other-pages');
                Route::get('hero-button-test', 'PageController@fullWidth')->name('other-pages');
                

            });

        });
        