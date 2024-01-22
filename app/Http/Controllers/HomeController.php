<?php

namespace App\Http\Controllers;

use App\CashFlow;
use App\Models\Recette;
use App\Models\Rediton2;
use App\Models\Site;
use Carbon\Carbon;
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

        $dtStarts = [["2022-06-01","2022-06-31"],
        ["2022-07-01","2022-07-11"],
        ["2022-08-01","2022-08-21"],
        ["2022-09-01","2022-09-31"],
        ["2022-10-01","2022-10-31"],
        ["2022-11-01","2022-11-31"],
        ["2022-12-01","2022-12-31"]

        ,["2023-01-01","2023-01-31"]
        ,["2023-02-01","2023-02-31"]
        ,["2023-03-01","2023-03-31"]
        ,["2023-04-01","2023-04-31"]
        ,["2023-05-01","2023-05-31"]
        ,["2023-06-01","2023-06-31"]



    ];

        $dtStart = "2023-08-01";
        $dtEnd = "2023-08-31";
        $dateDebut  = Carbon::create($dtStart);
        $dateFin  = Carbon::create($dtEnd);


        $resultsVL = [];
        $resultsPL = [];

        foreach ($dtStarts as $key => $value) {
            # code...
            ///AHOZON
        /*     $recetteMontantVL = Recette::where('sites_id',"1")
            ->whereIn('voies_id',[19,20,21,22,23])//VL
            ->whereBetween('date_recettes', $value)
            ->sum('nombre_vehicule');

            $recetteMontantPL = Recette::where('sites_id',"1")
            ->whereIn('voies_id',[17,18])//PL
            ->whereBetween('date_recettes', $value)
            ->sum('nombre_vehicule'); */

          /*   $recetteMontantPLekpe = Recette::where('sites_id',"3")
            ->whereIn('voies_id',[12,13,14,15,16,1])//PL
            ->whereBetween('date_recettes',  $value)
            ->sum('nombre_vehicule');
            $recetteMontantVLEKPE = Recette::where('sites_id',"3")
            ->whereIn('voies_id',[2,3,4,5,6,7,8,9,10,11])//PL
            ->whereBetween('date_recettes',  $value)
            ->sum('nombre_vehicule'); */

            $recetteMontantPLSIRA = Recette::where('sites_id',"9")
            ->whereIn('voies_id',[53])//PL
            ->whereBetween('date_recettes',  $value)
            ->sum('nombre_vehicule');


            $recetteMontantVLSIRA = Recette::where('sites_id',"9")
            ->whereIn('voies_id',[52])//VL
            ->whereBetween('date_recettes',  $value)
            ->sum('nombre_vehicule');


            array_push($resultsVL,intval($recetteMontantVLSIRA));
            array_push($resultsPL,intval($recetteMontantPLSIRA));

        }


       // dd($resultsVL,$resultsPL);
       /// dd($resultsPL);


        $recetteMontantPLPREKE = Recette::where('sites_id',"6")
        ->whereIn('voies_id',[46,45])//PL
        ->whereBetween('date_recettes',  $value)
        ->sum('nombre_vehicule');
        $recetteMontantVLPREKE = Recette::where('sites_id',"6")
        ->whereIn('voies_id',[2,3,4,5,6,7,8,9,10,11])//PL
        ->whereBetween('date_recettes',  $value)
        ->sum('nombre_vehicule');

        $recetteMontantPLKPEDEKPO = Recette::where('sites_id',"5")
        ->whereIn('voies_id',[24,25])//PL
        ->whereBetween('date_recettes',  $value)
        ->sum('nombre_vehicule');
        $recetteMontantvLKPEDEKPOpe= Recette::where('sites_id',"5")
        ->whereIn('voies_id',[26,27])//PL
        ->whereBetween('date_recettes',  $value)
        ->sum('nombre_vehicule');


        $recetteMontantPLGP = Recette::where('sites_id',"4")
        ->whereIn('voies_id',[26,18])//PL
        ->whereBetween('date_recettes',  $value)
        ->sum('nombre_vehicule');


        $recetteMontantVLGP = Recette::where('sites_id',"4")
        ->whereIn('voies_id',[26,18])//PL
        ->whereBetween('date_recettes',  $value)
        ->sum('nombre_vehicule');





        $recetteMontantPLBIRO = Recette::where('sites_id',"8")
        ->whereIn('voies_id',[26,18])//PL
        ->whereBetween('date_recettes',  $value)
        ->sum('nombre_vehicule');


        $recetteMontantVLBIRO = Recette::where('sites_id',"8")
        ->whereIn('voies_id',[26,18])//PL
        ->whereBetween('date_recettes',  $value)
        ->sum('nombre_vehicule');



        $recetteMontantPLLIB = Recette::where('sites_id',"9")
        ->whereIn('voies_id',[26,18])//PL
        ->whereBetween('date_recettes',  $value)
        ->sum('nombre_vehicule');


        $recetteMontantVLLIB = Recette::where('sites_id',"9")
        ->whereIn('voies_id',[26,18])//PL
        ->whereBetween('date_recettes',  $value)
        ->sum('nombre_vehicule');



        $recetteMontantPLHOUGBO = Recette::where('sites_id',"10")
        ->whereIn('voies_id',[26,18])//PL
        ->whereBetween('date_recettes',  $value)
        ->sum('nombre_vehicule');


        $recetteMontantVLHOUEGBO = Recette::where('sites_id',"10")
        ->whereIn('voies_id',[26,18])//PL
        ->whereBetween('date_recettes',  $value)
        ->sum('nombre_vehicule');

       /// dd($recetteMontantPL,$recetteMontantVL);


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
