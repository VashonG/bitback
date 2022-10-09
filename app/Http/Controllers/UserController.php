<?php

namespace App\Http\Controllers;

use EnactOn\ProCashBee\Front\Http\Controllers\UserController as Controller;
use Illuminate\Http\Request;
use EnactOn\ProCashBee\Cashback\Models\User;
use EnactOn\ProCashBee\Mail\Notifications\PayoutNew;

class UserController extends Controller
{
    //

    public function verifyPayment(Request $request, $code, $id)
    {

        if (!$request->hasValidSignature()) {
            return redirect('/')->with('toast_error', trans('auth.invalid_signature'));
        }

        $message = 'Verified';
        $message_type = 'toast_success';

        $cbUser = User::find($request->user()->user_id);

        $payment = $cbUser->payments()->where('payment_id', $id)->first();
        // dd($request,$code,$id,$request->user(),$payment);
        if (!$payment) {

            $message = trans('user_dashboard.payment.not_found');
            $message_type = 'toast_error';
        } else
        if ($code != md5($payment->verify_code)) {

            $message = trans('auth.invalid_signature');
            $message_type = 'toast_error';
        } else
        if ($payment->verified_at) {
            $message = trans('user_dashboard.payment.already_verified');
            $message_type = 'toast_error';
        } else {

            $cbUser->notify(new PayoutNew($payment));
            $message =  trans('user_dashboard.payment.success_verified');
            $message_type = 'toast_success';


            $payment->verified_at = date('Y-m-d H:i:s');
            $payment->verify_code = null;
            $payment->save();
        }


        return redirect()->route('user_payment',['action'=>'history'])->with($message_type, $message);

    }
}
