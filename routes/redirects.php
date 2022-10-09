<?php

        use Illuminate\Support\Facades\Route;
        
        if(! config('localized-routes.omit_url_prefix_for_locale') ) {
        Route::get('/{lang}/store/gearbest', function($lang){
                return redirect( url('/'.$lang.'/store/gearbest-ww' ), 302);
            } );Route::get('/{lang}/store-category/loans', function($lang){
                return redirect( url('/'.$lang.'/store-category/en-loans' ), 301);
            } );
        }
        else {
            Route::get('/store/gearbest', function(){
                return redirect( url('/store/gearbest-ww' ), 302);
            } );Route::get('/store-category/loans', function(){
                return redirect( url('/store-category/en-loans' ), 301);
            } );
        }        
        