<?php

use Illuminate\Support\Facades\Route;

//Authentication Routes...

Route::group(['namespace' => '\App\Http\Controllers\Auth'], function () {


    // Login/Signin
    Route::post('do-signin', 'LoginController@signIn')->name('signin.submit');

    //Registration/ Singup Routes...
    Route::post('do-signup', 'RegisterController@register')->name('signup.submit');

    // Logout
    Route::any('logout', 'LoginController@logout')->name('logout');

    //Login & callback route for Google & Facebook
    Route::get('social-auth/{type}', 'SocialMediaLoginController@redirect')->name('social-login.redirect');
    Route::get('social-auth/{type}/callback', 'SocialMediaLoginController@callback')->name('socia-login.callback');


    //Password Reset Routes...
    Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.form');
    Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.send');
    Route::localized(function () {
        Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
    });
    Route::post('password/reset', 'ResetPasswordController@reset')->name('password.update');

    //Email Verification Routes...
    // Route::get('email/verify', 'VerificationController@show')->name('verification.form');
    
    Route::localized(function () {
        Route::get('email/verify/{id}', 'VerificationController@verify')->name('verification.verify');
    });
    Route::post('email/resend', 'VerificationController@resend')->name('verification.resend');


    // PhoneVerification
    Route::view('verify-phone', 'pages.user.verify-phone.index')->name('phone.form');
    Route::post('send-otp', 'PhoneVerificationController@sendOtp')->name('phone.send-otp');
    Route::post('verification-otp', 'PhoneVerificationController@verificationOtp')->name('phone.verify');

    /*
    // Route::get('access-full-view', 'HomeController@accessFullView')->name('access-full-view');
    Route::get('change-password', 'ChangePasswordController@index')->name('change-password.index');
    Route::post('change-password', 'ChangePasswordController@store')->name('change-password.submit');
    */
});
