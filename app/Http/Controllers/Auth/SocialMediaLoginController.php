<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;

// TODO: What to do when error ?
class SocialMediaLoginController extends Controller
{
	const COOKIE_NAME = 'social_redirect';
	
    public function redirect(string $type)
    {

		
		Cookie::queue(self::COOKIE_NAME, url()->previous());
		
        if (in_array($type, ['facebook', 'google','apple'])) {
            return Socialite::driver($type)->redirect();
        }
        return redirect()->back();
    }
    public function callback(string $type, Request $request)
    {
        
        


        if (in_array($type, ['facebook', 'google','apple'])) {

            try {

                if($request->session()->has('socialCallback'))
                    $data['socialCallback'] = $request->session()->get('socialCallback');
                else {
                    $getInfo = Socialite::driver($type)->stateless()->user();
                    $data = ['socialCallback'=>['userInfo' => $getInfo, 'provider_type' => $type ,'provider_id' => $getInfo->getId() ,'name' => $getInfo->getName(),'email' => $getInfo->getEmail() ]];
                }

				// Merge social and direct email user
                $user = User::where( function($query) use($type,$getInfo,$data) { return $query->where('provider_type', $type)->where('provider_id', $getInfo->id); } )->orWhere('email', $data['socialCallback']['email'])->first();
                
                if (!$user) {

                    return redirect()->route('register')->with($data);
                }

                if($user->banned)
                return redirect()->route('login'); // TODO : Flash Data


                auth()->login($user);
                
                return $this->successRedirect();
            } catch (Exception $e) {
                
                return redirect()->route('login')->with('status', __('auth.ajax.social_media_login_error'));
            }
        } else {
            
            return redirect()->route('login')->with('status',__('auth.ajax.social_media_login_error'));
        }
    }


    public function successRedirect()
    {
        $redirectTo = Cookie::has(self::COOKIE_NAME)  ? Cookie::get(self::COOKIE_NAME) : route('home');
			
		Cookie::forget(self::COOKIE_NAME);
		Cookie::queue(Cookie::forget(self::COOKIE_NAME));

		
        // Dynamically decide where to redirect the user, it doesn't work as back is always to social-auth
		
        
        if ( ($redirectTo  == route('login') || $redirectTo == route('register')) && ! strpos($redirectTo, route('social-login.redirect',['type'=>'/']))  )
            return redirect()->route('home');
        else
            return redirect($redirectTo);
    }
}
