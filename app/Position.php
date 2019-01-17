<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Grimzy\LaravelMysqlSpatial\Eloquent\SpatialTrait;

class Position extends Model
{
    use SpatialTrait;
    protected $table = 'user_location';
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'pt'
    ];
    protected $spatialFields = [
        'pt'
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
