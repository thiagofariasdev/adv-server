<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Demand;
use App\ReqAtuation;
use App\ReqFormation;
use App\User;
use Auth;

class DemandController extends Controller
{
    public function index()
    {
        $demand = Demand::find(1);
        $demand->user_owner = $demand->user_owner;
        $demand->req_atuations = $demand->atuations;
        return $demand;
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
