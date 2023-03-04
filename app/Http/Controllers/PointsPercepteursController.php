<?php

namespace App\Http\Controllers;

use App\Models\Recette;
use App\Models\Site;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PointsPercepteursController extends Controller
{
    //



    public function searchIndex(){

        $sites = Site::all();

        return view('dashboard.points.percepteur-search',compact('sites'));
    }

    public function index(){

        $debut = Carbon::parse(\request()->date_debut)->format('Y-m-d');
        $fin = Carbon::parse(\request()->date_fin)->format('Y-m-d');
        $site = Site::find(\request()->site_id ?? Auth::user()->site_id);

        ///dd(date("H:i", $elapsed));
        $pointPercepteurs = DB::table('recettes')
        ->select('recettes.id as id', 'date_recettes',
        'percepteurs.nom as percepteur_nom', 'heure_debut', 'heure_fin','percepteurs_id', )
        ->join('percepteurs', 'percepteurs.id', '=', 'recettes.percepteurs_id')
        ->whereBetween('date_recettes', [$debut, $fin])
        ->where('sites_id',\request()->site_id)
        ///->groupBy('percepteurs_id')
        ->groupBy('percepteur_nom','date_recettes', 'heure_debut', 'heure_fin','percepteurs_id',
         'id')
        ->get();


        ///dd($pointPercepteurs);
        return view('dashboard.points.percepteur',compact('pointPercepteurs','site'));
    }
}
