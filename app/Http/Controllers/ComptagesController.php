<?php

namespace App\Http\Controllers;

use App\Comptages;
use Illuminate\Http\Request;

class ComptagesController extends Controller
{

    public function store(Request $request)
    {

        $comptage  = new Comptages();
        $comptage->percepteur = $request->percepteur;
        $comptage->site  = $request->site;
        $comptage->voie = $request->voie;
        $comptage->montant_passage = $request->montant_passage;
        $comptage->montant  = $request->montant;
        $comptage->nbres_camion = $request->nbres_camion;
        $comptage->heure_debut = $request->heure_debut;
        $comptage->heure_fin  = $request->heure_fin;
        $comptage->save();

        return response()->json($comptage, 200);

    }

    public function index()
    {

        $comptage = Comptages::all();
        return response()->json($comptage, 200);
    }
//
}
