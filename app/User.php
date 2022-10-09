<?php

namespace App;

use EnactOn\ProCashBee\Core\Traits\BeeUserTrait;
use EnactOn\ProCashBee\Mail\Mail\ForgotPassword;
use EnactOn\ProCashBee\Mail\Mail\WelcomeUser;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use stdClass;
use Illuminate\Contracts\Translation\HasLocalePreference;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use EnactOn\ProCashBee\Cashback\Models\User as CashbackUser;
use Illuminate\Support\Facades\Cache;

class User extends Authenticatable implements HasLocalePreference, MustVerifyEmail
{

    use Notifiable;
    use VerifiesEmails;
    use BeeUserTrait;



    protected $primaryKey = 'user_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'name', 'email', 'password', 'referrer_code', 'lang', 'secondary_email ', 'email_verified_at', 'phone', 'phone_verified_at', 'provider_type', 'provider_id', 'referral_code',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public $favs = [
        'store' => [],
        'coupon' => [],
        'deal' => [],
    ];

    // public function setFavs()
    // {

    //     $favs =  Cache::driver('array')->rememberForever('user_favs_'. ($this->user_id) , function () {
    //        return  DB::table('user_favs')->where('user_id', $this->user_id)->pluck('fav_ids', 'fav_type')->map(function ($ids) {
    //             return json_decode($ids);
    //         })->toArray();
    
    //     });

    //     $this->favs =   array_merge($this->favs, $favs);

    //     //$this->sendEmailVerificationNotification();

    // }


    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {

        Mail::to($this)->locale($this->lang)->send((new ForgotPassword($this, $token))->onQueue('web'));
    }

    public function verifyPhoneAndEmail($phone_number)
    {
        $this->phone_number = $phone_number;
        $this->phone_verified_at = Carbon::now()->format('Y-m-d H:i:s');
        $this->email_verified_at = Carbon::now()->format('Y-m-d H:i:s');
        $this->save();

        Mail::to($this)->locale($this->lang)->send((new WelcomeUser($this))->onQueue('web'));
    }


    /*
    public function setEarning()
    {

        $earning = CashbackUser::find($this->user_id)->getBalances();
        session()->put('user_earning', $earning['total']);
        return $earning['total'];
    }

    public function getEarning()
    {

        return session()->get('user_earning') ?? $this->setEarning();
    }
    */
}
