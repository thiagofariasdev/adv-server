<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atuations extends Model
{
    protected $table = 'atuations';
    public $timestamps = false;
    public function demand()
    {
        return $this->belongsToMany('App\ReqAtuation');
    }
}
