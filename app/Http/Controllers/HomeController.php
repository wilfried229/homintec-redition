<?php

namespace App\Http\Controllers;

use App\CashFlow;
use App\Models\Recette;
use App\Models\Rediton2;
use App\Models\Site;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


        $recetteMontantVL = Recette::where('sites_id',"1")
        ->whereIn('voies_id',[19,20,21,22,23])//VL
        ->whereMonth('created_at',now())
        ->sum('nombre_vehicule');
        $recetteMontantPL = Recette::where('sites_id',"1")
        ->whereIn('voies_id',[17,18])//PL
        ->whereMonth('created_at',now())
        ->sum('nombre_vehicule');
        dd($recetteMontantPL,$recetteMontantVL);
        dd($recetteMontantVL);


        $sites = Site::all();

        $recettes = [];
        foreach ($sites as $key => $value) {
            # code...
            $recette = Rediton2::where('site',$value)->whereDate('created_at',now())->sum('prix');
                $data = [
                    'site' =>$value->nom,
                    'recette' =>$recette
                ];
                array_push($recettes,$data);
        }

      // dd($recettes);

        return view('dashboard.index',compact('recettes'));

    }
}
