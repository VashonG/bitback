<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Rules\CheckUserProviderTypeEmail;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Password;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;

class ForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
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
     * Send a reset link to the given user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function sendResetLinkEmail(Request $request)
    {
        $this->grecaptchaValidation($request);

        //dd($request->all());
        // if ($request->ajax()) {

            $validator = Validator::make(
                $request->all(),
                [
                    'email' => 'required|email', 'email' => new CheckUserProviderTypeEmail(),
                    // 'g-recaptcha-response' => 'required|captcha',
                ]
            );
            if ($validator->passes()) {




                $response = $this->broker()->sendResetLink(
                    $this->credentials($request)
                );

                // return response()->json(['success' => true, 'msg' => 'forget password link send on email.']);
                return Response::success('success', [__('auth.ajax.forgot_password_success')]);
            }
            // return response()->json(['success' => false, 'error' => $validator->errors()->all()]);
            return response()->error( $validator->errors()->all() );
        // }


        // ! FIXME : Does the control even come here?
        // $this->validateEmail($request);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        /*
        $response = $this->broker()->sendResetLink(
            $this->credentials($request)
        );
        */

        /*
        return $response == Password::RESET_LINK_SENT
            ? $this->sendResetLinkResponse($request, $response)
            : $this->sendResetLinkFailedResponse($request, $response);

            */
    }

    /**
     * Validate the email for the given request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    protected function validateEmail(Request $request)
    {
        // dd($request->all());
        $request->validate(['email' => 'required|email', 'email' => new CheckUserProviderTypeEmail()]);
    }
}
