<?php

namespace App\Http\Controllers;

use App\Models\FicheTechniques;
use Illuminate\Http\Request;

class TechniquesController extends Controller
{
    //
    public function saveFiches(Request $request ){


        $fiche = new FicheTechniques();
        $fiche->nbre_de_panne = $request->nbre_de_panne;
        $fiche->nbre_coupure_electrique = $request->nbre_coupure_electrique;
        $fiche->disfonctionement = $request->disfonctionement;

        $fiche->save();

        return response()->json($fiche, 200);
    }

    public function getficheTechniques(){
        $fiches = FicheTechniques::all();
        return response()->json($fiches, 200);
    }


    public function checkedConnexion(){

        try {
            $ip = "www.homintec-peage.com";
            $port = 80;
            
            $num = 2;
            $test_connexion = fsockopen($ip,$port,$num,$error,5);

            return response()->json(1,200);
        } catch (\Throwable $th) {
            return response()->json(0,500);

        }

    }


    public function vacationClassic(){


    }
}
