<?php

namespace App\Http\Controllers;

use App\Models\Redition;
use App\Models\Rediton2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ReditionController extends Controller
{


    /***
     * Redition by site
     */

     public function redition($site){

        $reditions = Redition::where('site',$site)->get();
        return view('dashboard.redition',compact('reditions','site'));
     }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function index()
    {
        $reditions  = Rediton2::get()->take(10);


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
            $redition->temps_presence = $request->temps_presence;
            $redition->debut_de_vacation = $request->debut_de_vacation;
            $redition->fin_de_vacation  = $request->fin_de_vacation;
            $redition->superviseur = $request->superviseur;
            $redition->controleur = $request->controleur;
            $redition->administateur = $request->administateur;

            $redition->nbre_vehiciule  = $request->nbre_vehiciule;
            $redition->declaration_billetaire = $request->declaration_billetaire;
            $redition->declaration_ticket_manuel = $request->declaration_ticket_manuel;
            $redition->penalite_rejetter = $request->penalite_rejetter;
            $redition->penalite_valider_local = $request->penalite_valider_local;
            $redition->penalite_valider_ext = $request->penalite_valider_ext;

            $redition->resultat_compte = $request->resultat_compte;
            $redition->somme_gate = $request->somme_gate;
            $redition->somme_declarer_caisse = $request->somme_declarer_caisse;
            $redition->passage_gate_24 = $request->passage_gate_24;
            $redition->gate_24 = $request->gate_24;
            $redition->remarque = $request->remarque;
            $redition->manquant = $request->manquant;
            $redition->suplus  = $request->suplus;
            $redition->nbre_violation = $request->nbre_violation;
            $redition->nbre_exempte = $request->nbre_exempte;
            $redition->nbre_passage = $request->nbre_passage;
            $redition->montant_coupant = $request->montant_coupant;
            $redition->somme_totale_informatise = $request->somme_totale_informatise;
            $redition->somme_informatise_sans_gate_24 = $request->somme_informatise_sans_gate_24;

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
