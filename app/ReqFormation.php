<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReqFormation extends Model
{
    protected $table="demand_req_formation";
    public $timestamps = false;
    protected $hidden = ['formation_id', 'demand_id'];
    public function formation()
    {
        return $this->hasOne('App\Formations', 'id', 'formation_id');
    }
}
