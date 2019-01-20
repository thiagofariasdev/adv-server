<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReqAtuation extends Model
{
    protected $table= 'demand_req_atuation';
    public $timestamps = false;
    public function atuation()
    {
        return $this->hasMany('App\Atuations');
    }
}
