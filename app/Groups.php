<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    protected $table = 'adv_group';
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
