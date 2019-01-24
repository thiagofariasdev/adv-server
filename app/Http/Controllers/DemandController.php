<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Demand;
use DB;
use App\ReqAtuation;
use App\ReqFormation;
use App\User;
use Auth;

class DemandController extends Controller
{
    public function index()
    {
        $demands =  Demand::where('owner', '!=', Auth::user()->id)->get();
        foreach($demands as $dem){
            $dem->att();
            $dem->forms();
        }
        return $demands;
    }
    public function create(Request $req)
    {
        $demand = new Demand();
        $demand->owner = Auth::user()->id;
        $demand->title = $req->data['title'];
        $demand->description = $req->data['description'];
        $demand->save();
        foreach($req->data['atuations'] as $att)
        {
            $req_att = new ReqAtuation();
            $req_att->atuation_id = $att;
            $req_att->demand_id = $demand->id;
            $req_att->save();
        }
        foreach($req->data['formations'] as $formation){
            $req_form = new ReqFormation();
            $req_form->formation_id = $formation;
            $req_form->demand_id = $demand->id;
            $req_form->save();
        }
        return ['success'=>true];
    }
}
