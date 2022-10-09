<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use EnactOn\ProCashBee\Core\Models\UserLoginLog;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\View\View
     */
    // NOTE : This will be via Page
    /*
    public function showLoginForm()
    {
        Cookie::queue(Cookie::forget('email'));
        Cookie::queue(Cookie::forget('name'));
        Cookie::queue(Cookie::forget('provider_type'));
        Cookie::queue(Cookie::forget('provider_id'));

        return view('pages.signin.index');
    }
    */

    public function grecaptchaValidation(Request $request)
    {
        $response = Http::asForm()->post(config('grecaptcha.url'), [
            'secret' => config('grecaptcha.secret_key'),
            'response' => $request['g-recaptcha-response'],
        ]);
        return $response;
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function signIn(Request $request)
    {
        // dd($request->all());
        $this->grecaptchaValidation($request);


        // TODO : AJAX Login
        if ($request->ajax()) {

            $validator = Validator::make($request->all(), $this->commonValidation());
            if (!$validator->passes())
                return Response::error('validation error', $validator->errors()->all());

            // $validator = Validator::make($request->all(), $this->recaptchaValidation());

            if (!$validator->passes())
                return Response::error('validation error', $validator->errors()->all());
        } else {
            $this->validateLogin($request);
        }





        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if (
            method_exists($this, 'hasTooManyLoginAttempts') &&
            $this->hasTooManyLoginAttempts($request)
        ) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {

            $this->insertLog($request,1);

            toast(__('auth.toast.login_success'),'success');

            if ($request->ajax()) {
                return Response::success(__('auth.ajax.login_success'));
            }
            return $this->sendLoginResponse($request);


        }

        $this->insertLog($request,0);


        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);


        if ($request->ajax()) {
            // TODO: Translate
            return Response::error(__('auth.ajax.login_error'));
        } else {
            throw ValidationException::withMessages(['email' => __('auth.ajax.login_error')]);
        }

        // return $this->sendFailedLoginResponse($request);
    }
    /**
     * Validate the user login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function validateLogin(Request $request)
    {
        return $request->validate($this->commonValidation());
    }

    public function redirectTo()
    {
        // Dynamically decide where to redirect the user
        if (redirect()->back()->getTargetUrl()  == route('login'))
            return (route('home'));
        else
            return (redirect()->back()->getTargetUrl());
    }

    private function commonValidation()
    {
        return [
            'email' => ['required','exists:App\User,email',
            function ($attribute, $value, $fail) {
                if ( \App\User::where('email',$value)->where('banned',1)->exists()) {
                    $fail('Your Account is banned.');
                }
            },
            ],
            'password' => 'required|string',

        ];
    }

    private function recaptchaValidation()
    {
        return ['g-recaptcha-response' => 'required|captcha'];
    }

    public function insertLog($request,$success=0)
    {

        UserLoginLog::create([
            'email' => $request->input('email'),
            'user_id' => $request->user() ? $request->user()->user_id : null,
            'referred_by' => $request->user() ? $request->user()->referred_by : null,
            'success' => $success,
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'device' => 'web',
            'session_id' => $request->session()->getId(),
        ]);


    }

    public function loggedOut($request)
    {

        return redirect($this->redirectTo())->with('toast_success', __('auth.toast.logout_success'));
    }

}
