<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Auth\Access\AuthorizationException;
use App\SEOToolsTrait;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;
    use SEOToolsTrait;


    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }



    /**
     * Mark the authenticated user's email address as verified.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function verify(Request $request)
    {

        $this->seo()->setTitle(trans('public.seo.verify_account'));

        // dd((string) $request->route('hash'));
        // dd($request->user()->getEmailForVerification());
        // dd($request->all(),$request->user(),$request->user()->getKey(),(string) $request->route('id'));

        if (!hash_equals((string) $request->route('id'), (string) $request->user()->getKey())) {
            throw new AuthorizationException;
        }

        // dd(!hash_equals((string) $request->query('hash'), sha1($request->user()->getEmailForVerification())));
        if (! hash_equals((string) $request->query('hash'), sha1($request->user()->getEmailForVerification()))) {
            throw new AuthorizationException;
        }

        // if (!hash_equals((string) $request->route('hash'), sha1($request->user()->getEmailForVerification()))) {
        //     throw new AuthorizationException;
        // }

        if (!empty($request->user()->phone_verified_at) && !empty($request->user()->email_verified_at)) {
            return redirect($this->redirectPath())->with('verified', true)->with('toast_info', __('auth.toast.verify_info'));
        }

        if (! config('pcb.cashback.should_verify_phone', true)) {
            $request->user()->verifyPhoneAndEmail(null);
            return redirect($this->redirectPath())->with('verified', true)->with('toast_success', __('auth.toast.verify_success'));
        }

        $user = $request->user();
        return view('pages.user.verify-phone.index', compact('user'));
        // if($request->user()->phone_verified_at==NULL)
        // {

        // }

        // if ($request->user()->hasVerifiedEmail()) {

        //     return $request->wantsJson()
        //                 ? new Response('', 204)
        //                 : redirect($this->redirectPath());
        // }
        // if ($request->user()->markEmailAsVerified()) {
        //     event(new Verified($request->user()));
        //     if($request->user()->phone_verified_at==NULL)
        //     {
        //         return view('auth.phoneVerify');
        //     }

        //     return view('auth.phoneVerify');
        // }

        // if ($response = $this->verified($request)) {
        //     return $response;
        // }

        // return $request->wantsJson()
        //             ? new Response('', 204)
        //             : redirect($this->redirectPath())->with('verified', true);
    }

    public function redirectPath()
    {
        return route('home');
    }
}
