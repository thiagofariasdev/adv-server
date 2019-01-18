<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Position;
use DB;
use Auth;
use Grimzy\LaravelMysqlSpatial\Types\Point;
use Grimzy\LaravelMysqlSpatial\Types\Polygon;

class PositionController extends Controller
{
    public function index()
    {
        $local = Auth::user()->location;
        $point = $local[0]->pt;
        $distance = 50000; // in meters
        $pointSelect = Position::distanceExcludingSelf('pt', new Point(56.00999, -21.52345), $distance)->get();
        echo $pointSelect;
    }
    public function set(Request $req)
    {
        $lat = $req['lat'];
        $lon = $req['lon'];
        $id  = $req['id'];
        $user = Position::where('user_id', $id)->exists();
        if(!$user){
            $pos = new Position();
            $pos->user_id = $id;
            $pos->pt = new Point($lat, $lon);
            $pos->save();
        }else{
            Position::where('user_id', $id)->update([
                'pt' => new Point($lat, $lon)
            ]);
        }
    }
    public function get()
    {
        $loc = Auth::user()->location[0];
        return ['lat'=> $loc->pt->getLat(),'lng'=>$loc->pt->getLng()];
    }
}
