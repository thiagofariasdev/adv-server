<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserFormation extends Model
{
    protected $table = 'user_formations';
    public $timestamps = false;
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
