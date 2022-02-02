<?php

namespace App\Http\Controllers;

use App\Models\Recette;
use App\Models\Site;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PointsMensulesController extends Controller
{
    //
    public function searchIndex(){
        $sites = Site::all();
        return view('dashboard.points.mesuels-search',compact('sites'));
    }

    public function index(){

        $debut = Carbon::parse(\request()->date_debut)->format('Y-m-d');
        $fin = Carbon::parse(\request()->date_fin)->format('Y-m-d');
        $site = Site::find(\request()->site_id ?? Auth::user()->site_id);

        ///dd(date("H:i", $elapsed));
        $pointMesuels = Recette::
        whereBetween('date_recettes', [$debut, $fin])
        ->where('sites_id',\request()->site_id)
        ->orderBy('date_recettes')
        ->get(['date_recettes'])
        ->unique('date_recettes');


        $mensuels =[];
        foreach ($pointMesuels as $key => $value) {
            # code...
            $esuel = Recette::
            whereDate('date_recettes',$value->date_recettes)
            ->where('sites_id',\request()->site_id)
            ->sum('montant_coupant');
            $arrayMensels = ['date_recettes' =>  Carbon::parse($value->date_recettes)->format('d-m-Y'),'sommeMontantCoupons'=>$esuel];
            array_push($mensuels,$arrayMensels);
        }

        ///dd($mensuels);
        return view('dashboard.points.mesuels',compact('mensuels','site'));
    }
}
