<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Response;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //

        Blade::if('isUserProviderTypeEmail', function () {
            return auth()->check() && auth()->user()->provider_type == "email";
        });

        Blade::if('isUserEmailAndPhoneNotVerify', function () {
            return auth()->check() && auth()->user()->email_verified_at == NULL || auth()->user()->phone_verified_at == NULL;
        });

        Blade::if('isUserVerify', function () {
            return auth()->check() && auth()->user()->email_verified_at != NULL && auth()->user()->phone_verified_at != NULL;
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
        config(['localized-routes.supported-locales' =>  array_values(config('pcb.lang.keys',[]))]);


        Response::macro('success', function ($msg = null, array $data = []) {

            return  Response::json(
                [
                    'success' => 1,
                    'data' => $data,
                    'error' => 0,
                    'msg' => $msg, // How to pass message key?
                ],
                200
            );
        });

        Response::macro('error', function ($msg = null, array $data = []) {
            return  Response::json(
                [
                    'success' => 0,
                    'data' => $data,
                    'error' => 1,
                    'msg' => $msg
                ],
                200
            );
        });
    }
}
