<?php

namespace App\Http\Controllers;

use App\Models\Site;
use App\Models\SurchagesManuel;
use App\Voie;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PointsEssieuxController extends Controller
{
    //



    public function searchIndex(){

        $sites = Site::all();
        return view('dashboard.points.essieux-search',compact('sites'));
    }

    public function index (){

        $site = Site::find(\request()->site_id ?? Auth::user()->site_id);
        $debut = Carbon::parse(\request()->date_debut)->format('Y-m-d');
        $fin = Carbon::parse(\request()->date_fin)->format('Y-m-d');
        $pointEssieux = SurchagesManuel::
        select('date_passage')->distinct()->
        where('sites_id',\request()->site_id)
        ->whereBetween('date_passage', [$debut, $fin])
        ->get(['date_passage','id']);


        $reauesAll = [];
        foreach ($pointEssieux as $key => $value) {

            array_push($reauesAll,$value->id);
        }


        dd($pointEssieux);

        dd($reauesAll);
        return view('dashboard.points.essieux',compact('pointEssieux','site'));
    }
}
