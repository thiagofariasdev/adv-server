<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'api_token', 'avatar', 'gender'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'api_token', 'email_verified_at'
    ];
    public function location(){
        return $this->hasMany('App\Position');
    }
    public function atuation()
    {
        return $this->hasMany('App\UserAtuation');
    }
    public function formation()
    {
        return $this->hasMany('App\UserFormation');
    }
    public function demand()
    {
        return $this->hasMany('App\Demand');
    }
}
