<?php

namespace App\Rules;

use App\User;
use Illuminate\Contracts\Validation\Rule;

class CheckUserProviderTypeEmail implements Rule
{
    public $message="";
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        // ! TODO : Translate these
        $user=User::where($attribute, $value)->first();
        // dd($user);
        if (empty($user)) {
            $this->message =__('validation.email_not_exist');
            return false;
        } else {
            if ($user->provider_type=='email') {
                return true;
            } else {
                $this->message = __('validation.not_registerd_using_email');
                return false;
            }
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return $this->message;
    }
}
