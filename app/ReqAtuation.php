<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReqAtuation extends Model
{
    protected $table= 'demand_req_atuation';
    public $timestamps = false;
    protected $hidden = ['demand_id', 'atuation_id'];
    public function atuation()
    {
        return $this->hasOne('App\Atuations', 'id', 'atuation_id');
    }
    public function demand()
    {
        return $this->belongsTo('App\Demand');
    }
}
