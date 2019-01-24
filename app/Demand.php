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
    public function req_att()
    {
        return $this->hasMany('App\ReqAtuation');
    }
    public function form()
    {
        return $this->hasMany('App\ReqFormation');
    }
    public function att()
    {
        $atrib = array();
        foreach($this->req_att as $att){
            $att->atuation;
        }
        return $atrib;
    }
    public function forms()
    {
        $forms = array();
        foreach($this->form as $form){
            $form->formation;
        }
        return $forms;
    }
}
