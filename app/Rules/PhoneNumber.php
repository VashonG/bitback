<?php

namespace App\Rules;

use App\User;
use Illuminate\Contracts\Validation\Rule;

class PhoneNumber implements Rule
{
    public $phoneNumber;

    /**
      * Create a new rule instance.
      *
      * @return void
      */
    public function __construct(string $phoneNumber)
    {
        //
        // $this->country_code = $country_code;
        $this->phoneNumber = $phoneNumber;
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
        return !  (bool) User::where('phone_number', $this->phoneNumber)->count();
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __('validation.phone_number_exist');
    }
}
