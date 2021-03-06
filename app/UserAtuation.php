<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAtuation extends Model
{
    protected $table = 'user_atuations';
    public $timestamps = false;
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
