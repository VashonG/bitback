<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
// use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Response;
use EnactOn\ProCashBee\Core\Models\PostbackTracking;
use Illuminate\Support\Facades\Http;


class RegisterController extends Controller
{
	const COOKIE_NAME = 'social_redirect';

    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\View\View
     */
    // NOTE : This will be via Page
    /*
    public function showRegistrationForm()
    {

        // \Cookie::queue(\Cookie::forget('email'));
        // \Cookie::queue(\Cookie::forget('name'));
        // \Cookie::queue(\Cookie::forget('provider_type'));
        // \Cookie::queue(\Cookie::forget('provider_id'));

        return view('pages.signup.index');
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
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        // TODO: This is redundent  , merge with AJAX

        if (isset($data['provider_type'])) {
            //Social Media Register
            return Validator::make($data, [
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email', 'unique:users,secondary_email', 'indisposable'],
                // 'g-recaptcha-response' => ['required', 'captcha'],
                'privacy_policy' => 'required',
                'provider_type' => 'required',
                'provider_id' => 'required',
                'referrer_code' => ['nullable','exists:users,referral_code']
            ]);
        } else {

            return Validator::make($data, [
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email', 'unique:users,secondary_email', 'indisposable'],
                'password' => ['required', 'string', 'min:6'],
                // 'g-recaptcha-response' => ['required', 'captcha'],
                'privacy_policy' => 'required',
                'referrer_code' => ['nullable','exists:users,referral_code']
            ]);
        }
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

		if (isset($data['provider_type'])) {
            // $user = User::where('provider_id', $data['provider_id'])->first();
			$user = User::where( function($query) use($data) { return $query->where('provider_type', $data['provider_type'])->where('provider_id', $data['provider_id']); } )->orWhere('email', $data['email'])->first();

            if (!$user) {

                $names = explode(' ',$data['fullname'] ??  trim(strtok(strstr($data['email'], '@', true), ' ')));

                $user = User::create([
                    'first_name' => $names[0] ?? trim(strtok(strstr($data['email'], '@', true), ' ')),
                    'last_name' => $names[1] ?? '',
                    'email' => $data['email'],
                    'provider_type' => $data['provider_type'],
                    'password' =>  Hash::make($data['email'].'-'.$data['provider_id']),
                    'provider_id' => $data['provider_id'],
                    'referrer_code' => $data['referrer_code'],
                    'lang' => app()->getLocale(),
                    // 'email_verified_at' => date('Y-m-d H:i:s'),
                    'notification_settings'=> ['earning_summary' => '0'],
                    // TODO: Discuss
                ]);
            }
        } else {

            $user  = User::create([
                'first_name' => trim(strtok(strstr($data['email'], '@', true), ' ')),
                'last_name' => '',
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'referrer_code' => $data['referrer_code'],
                'lang' => app()->getLocale(),
                'notification_settings'=> ['earning_summary' => '0'],

            ]);
        }
        return $user;
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {

        $this->grecaptchaValidation($request);

        // dd($request->all());
        if ($request->ajax()) {

            $validator = Validator::make($request->all(), $this->commonValidation());
            if (!$validator->passes())
                return Response::error('validation error', $validator->errors()->all());

            // $validator = Validator::make($request->all(), $this->recaptchaValidation());

            if (!$validator->passes())
                return Response::error('validation error', $validator->errors()->all());
        } else {
            $this->validator($request->all())->validate();
        }

		$user = $this->create($request->all());


		if($user->wasRecentlyCreated)
		{
			event(new Registered($user));


			if($request->cookie('pcb_lead'))
			{
				$cookie_data = json_decode($request->cookie('pcb_lead'),true);
				$postback_url = config('postback.networks.'. $cookie_data['network'].'.postback_url');

				$other_replacements = [
					'ip' => $request->ip(),
					'now' => urlencode(date('Y-m-d H:i:s')) , // TODO make it as per format if needed
				];


				dispatch(function () use ($user,$postback_url,$other_replacements,$cookie_data) {
					$pb = new PostbackTracking();
					$pb->firePostback($postback_url,$user,array_merge($cookie_data,$other_replacements),config('postback.networks.'. $cookie_data['network']));

				})->onQueue('web');

				Cookie::forget('pcb_lead');
				Cookie::queue(Cookie::forget('pcb_lead'));
			}
            if($request->cookie('lbp_referrer'))
			{
                Cookie::queue(Cookie::forget('lbp_referrer'));

            }


        $user->sendEmailVerificationNotification();
        $request->session()->forget('ref');
        $this->guard()->login($user);


        $mc = new \EnactOn\ProCashBee\Core\MailChimp;
         $mc->subscribeNewUser($user);

		}
		else
			$this->guard()->login($user);

        alert(__('auth.toast.register_success'));


        if ($request->ajax()) {
            return Response::success(__('auth.ajax.register_success'));
        }

        if ($response = $this->registered($request, $user)) {
            return $response;
        }

        return $request->wantsJson()
            ? new Response('', 201)
            : redirect($this->redirectPath());
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard();
    }

    public function redirectTo()
    {
        // Dynamically decide where to redirect the user

        $redirectTo = Cookie::has(self::COOKIE_NAME)  ? Cookie::get(self::COOKIE_NAME) : route('home');

		Cookie::forget(self::COOKIE_NAME);
		Cookie::queue(Cookie::forget(self::COOKIE_NAME));


        if ( ($redirectTo  == route('login') || $redirectTo == route('register')) && ! strpos($redirectTo, route('social-login.redirect',['type'=>'/']))  )
            return route('home');
        else
            return $redirectTo;
    }

    private function commonValidation()
    {
        return [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email', 'unique:users,secondary_email', 'indisposable'],
            'password' => ['required', 'string', 'min:6'],
            'privacy_policy' => 'required',
            'referrer_code' => ['nullable','exists:users,referral_code']
        ];
    }

    private function recaptchaValidation()
    {
        return ['g-recaptcha-response' => 'required|captcha'];
    }
}
