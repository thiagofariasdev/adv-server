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
        $pointSelect = Position::distance('pt', new Point(56.00999, -21.52345), 60000)->get();
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
}
