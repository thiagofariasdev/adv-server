<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demand extends Model
{
    protected $table = 'demands';
    public function user_owner()
    {
        return $this->belongsTo('App\User', 'owner', 'id');
    }
    public function atuations()
    {
        return $this->hasMany('App\ReqAtuation')->atuation;
    }
}
