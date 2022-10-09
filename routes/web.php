<?php
use Illuminate\Support\Facades\Route;

//include 'test.php';

include 'redirects.php';

include 'auth.php';


include 'public.php';

include 'user.php';


include 'pages.php';    

include 'ajax.php';

include 'others.php';

include 'custom.php';

if(! config('localized-routes.omit_url_prefix_for_locale'))
{
	Route::get('/','PageController@redirectIpHome');
}