<?php

use EnactOn\ProCashBee\Cashback\Models\User;
use EnactOn\ProCashBee\Core\Models\CacheModule;
use Illuminate\Support\Facades\Route;
use EnactOn\ProCashBee\Front\Models\Store;
use EnactOn\ProCashBee\Front\Models\Coupon;
use EnactOn\ProCashBee\Front\Models\CouponCategory;
use EnactOn\ProCashBee\Front\Models\StoreCategory;
use EnactOn\ProCashBee\JobEvents\Jobs\FrontRebuildViews;
use Getsupercode\Localizater\Facades\Localizater;
use EnactOn\ProCashBee\Front\Models\Deal;
use EnactOn\ProCashBee\Front\Models\DealCategory;
use EnactOn\ProCashBee\Front\Models\Footer;
use EnactOn\ProCashBee\Front\Models\FrontMenu;
use EnactOn\ProCashBee\JobEvents\Jobs\GeneratePageRoute;
use EnactOn\ProCashBee\JobEvents\Jobs\GenerateRedirectRoute;
use EnactOn\ProCashBee\JobEvents\Jobs\GenerateSettingsConfig;
use EnactOn\ProCashBee\JobEvents\Jobs\GenerateUserRoute;
use EnactOn\ProCashBee\Mail\Notifications\ResetPassword;
use Illuminate\Http\Request;

Route::group(['prefix' => 'test'], function () {
    
	
	Route::get('req', function () {
        dd(app('request'));
    });
	
	Route::get('events', function () {
		
        dd(app('events'));
    });

    Route::get('notify', function () {
        $user = User::find(127);
    });

    Route::get('/byIds', function () {
        return Store::ByIds([10, 20, 2, 40, 3, 1, 5]);
    });
    Route::get('/helpers', function () {
        $data = [];
        $data['bonus'] = procash_bonuses();
        $data['lang'] = procash_languages();
        $data['lang_link'] = lang_route('lang_welcome', 'ar');
        return $data;
    });

    Route::get('/blockGrid', function () {
        $data = [];
        foreach (['popular', 'featured', 'latest'] as $logic) {
            $data['stores'][$logic]  = Store::byCategory(1)->byLogic($logic)->limit(5)->get();
        }

        foreach (['popular', 'featured', 'latest'] as $logic) {
            $data['coupons'][$logic]  = Coupon::byCategory(1)->byLogic($logic)->limit(5)->get();
        }

        foreach (['popular', 'latest', 'name', 'parent'] as $logic) {
            $data['coupon_cats'][$logic]  = CouponCategory::byCategory(1)->byLogic($logic)->limit(5)->get();
        }

        foreach (['popular', 'latest', 'name', 'parent'] as $logic) {
            $data['store_cats'][$logic]  = StoreCategory::byCategory(1)->byLogic($logic)->limit(5)->get();
        }


        foreach (['popular', 'latest', 'name', 'parent'] as $logic) {
            $data['deal_cats'][$logic]  = DealCategory::byCategory(1)->byLogic($logic)->limit(5)->get();
        }

        foreach (['popular', 'featured', 'latest'] as $logic) {
            $data['deals'][$logic]  = Deal::byCategory(3)->byLogic($logic)->limit(5)->get();
        }

        return $data;
        // return 1;
    });

    Route::get('/filter', function (Request $request) {
        $data = [];

        $data['coupon']['data'] = Coupon::filterData($request);
        $data['coupon']['filter'] =  Coupon::buildFilterArray($request);

        $data['deal']['data'] = Deal::filterData($request);
        $data['deal']['filter'] =  Deal::buildFilterArray($request);
    });

    Route::get('menu', function () {
        $menu = FrontMenu::getPrimary();
        dd($menu);
    });

    Route::get('footer', function () {
        $footer = Footer::getData();
        dd($footer->toArray());
    });

    Route::get('route', function () {
        dispatch_now(new GenerateUserRoute());
        dispatch_now(new GeneratePageRoute());
    });


    Route::get('public', function () {
        $routeCollection = Route::getRoutes();

        foreach ($routeCollection as $value) {
            echo '<a href="' . url($value->uri) . '">' . $value->uri . '</a>';
            echo '<br>';
        }
    });

    Route::get('lang', function () {
        echo route('home');
    });

    Route::get('seo', function () {
        $store = Store::first();

        $store->setSEO();
        var_dump($store->hTags);

        echo(SEO::generate());
    });

    Route::get('redirect', function () {
        dispatch_now(new GenerateRedirectRoute());
    });

    Route::get('settings', function () {
        dispatch_now(new GenerateSettingsConfig());
    });

    Route::get('sms', function () {
        procash_send_otp(222, 222);
    });

    Route::get('bonus', function () {
        dd(procash_bonuses());
    });
    Route::get('mail', function () {
        $user = User::find(3);
        // $user->sendEmailVerificationNotification();
        // $link = 'google.com';
        // $user->sendPasswordResetNotification($link);
        //$user->sendReferralInviteEmail();
        $user->verifyPhoneAndEmail("abc");
    });
    Route::view('empty', 'pages.empty');

    Route::get('cache', function () {
        return CacheModule::pluck('duration', 'cache_key')->toArray();
    });
});
