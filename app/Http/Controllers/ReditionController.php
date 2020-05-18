<?php

namespace App\Http\Controllers;

use App\Models\Redition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ReditionController extends Controller
{


    /***
     * Redition by site
     */

     public function redition(){




        return view('dashboard.redition');
     }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reditions  = Redition::all();

        return response()->json($reditions, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $redition = new Redition();
            $redition->site = $request->site;
            $redition->voie = $request->voie;
            $redition->percepteur = $request->percepteur;
            $redition->temps_services = $request->temps_services;
            $redition->date_debut = $request->date_debut;
            $redition->date_fin  = $request->date_fin;
            $redition->superviseur = $request->superviseur;
            $redition->controleur = $request->controleur;
            $redition->administateur = $request->administateur;
            $redition->nbre_10000 = $request->nbre_10000;
            $redition->nbre_5000 = $request->nbre_5000;
            $redition->nbre_2000 = $request->nbre_2000;
            $redition->nbre_1000 = $request->nbre_1000;
            $redition->nbre_500 = $request->nbre_500;
            $redition->nbre_250 = $request->nbre_250;
            $redition->nbre_100 = $request->nbre_100;
            $redition->nbre_50 = $request->nbre_50;
            $redition->nbre_25 = $request->nbre_25;
            $redition->declaration_billetaire = $request->declaration_billetaire;
            $redition->declaration_ticket_manuel = $request->declaration_ticket_manuel;
            $redition->penalites = $request->penalites;
            $redition->resultat_compte = $request->resultat_compte;
            $redition->somme_gate = $request->somme_gate;
            $redition->somme_declarer_caisse = $request->somme_declarer_caisse;
            $redition->passage_gate = $request->passage_gate;
            $redition->save();
            return response()->json($redition, 200);
            } catch (\Exception $ex) {
                //throw $th;

                Log::error($ex->getMessage());

                abort(400,$ex->getMessage());
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
