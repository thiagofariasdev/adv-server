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
        'name', 'email', 'password', 'api_token', 'avatar', 'gender', 'type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];
    public function location(){
        return $this->hasOne('App\Position');
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
