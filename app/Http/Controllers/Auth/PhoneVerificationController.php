<?php

namespace App\Http\Controllers\Auth;

// use App\Rules\PhoneNumber;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;


// ! TODO - send both county code and number in $request->phone
class PhoneVerificationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
    }


    /*
    public function show(Request $request)
    {
        # code...

        return view('pages.user.verify-phone.index', ['user' => $request->user()]);
    }
    */
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sendOtp(Request $request)
    {
        // IMPROVE : Add Throttle - no of OTPs user can request in certain time
        // TODO : All messages to be translated

        $key = 'otp_' . $request->phone;
        $max_len = config('pcb.cashback.max_phone_length',20);
        $validator = Validator::make($request->all(), [
            // 'phone' => new PhoneNumber($request->phone)
            'phone' => ['required','unique:users,phone_number','max:'.$max_len]
        ]);

        if (!$validator->passes()) {

            return response()->error( $validator->errors()->all() );
        }

        // Requesting NEW OTP
        if (isset($request->phone) && empty($request->otp)) {


            if( Session::has($key) )
            $otp = Session::get($key);
            else
            {
                $otp  = rand(1111,9999);
                Session::put($key,$otp);
            }


            $result =  procash_send_otp($request->phone,$otp);

            if ($result) {

                // 'otp'=>$otp,
                return response()->success(__('auth.ajax.otp_sent'),['result'=>$result]);
            } else {
                return response()->error(__('auth.ajax.otp_send_error'));
            }
        } else {

            return response()->error(__('auth.ajax.otp_error'));
        }
    }


    public function verificationOtp(Request $request)
    {

        $key = 'otp_' . $request->phone;

        if (! $request->phone || ! $request->otp ) {
            return response()->error(__('auth.ajax.otp_validation'));
        }

        if( Session::get($key) == $request->otp )
        {
            Session::forget($key);
            $request->user()->verifyPhoneAndEmail( $request->phone);
            if($request->cookie('lbp_referrer'))
            {
                Cookie::queue(Cookie::forget('lbp_referrer'));

            }
            return response()->success(__('auth.ajax.otp_verify_success'));
        }
        else
        return response()->error(__('auth.ajax.otp_verify_error'));


    }

}
