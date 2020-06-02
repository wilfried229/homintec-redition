<?php

namespace App\Http\Controllers;

use App\Models\Surchage;
use Illuminate\Http\Request;

class SurchargesController extends Controller
{


    public function suchargeView($site){

        $surcharges = Surchage::where('site',$site)->get();
        return view('dashboard.surcharge',compact('surcharges','site'));
     }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surchages = Surchage::all();
        return response()->json($surchages, 200);
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
        //

        $surchage = new Surchage();
        $surchage->immatriculation  = $request->immatriculation;
        $surchage->poid_rouland = $request->poid_rouland;
        $surchage->surcharge = $request->surcharge;
        $surchage->montant_surcharge = $request->montant_surcharge;
        $surchage->type_surcharge= $request->type_surcharge;
        $surchage->date_recette = $request->date_recette;
        $surchage->heure_recette = $request->heure_recette;
        $surchage->essieu = $request->essieu;
        $surchage->poids_roulant  = $request->poids_roulant;
        $surchage->poid_autorise = $request->poid_autorise;
        $surchage->excedent = $request->excedent;
        $surchage->montant_apayer  = $request->montant_apayer;
        $surchage->montant_payer = $request->montant_payer;
        $surchage->surcharge  = $request->surcharge ;
        $surchage->percepteur = $request->percepteur;
        $surchage->site = $request->site;
        $surchage->voie = $request->voie;
        $surchage->type_vacation = $request->type_vacation;
        $surchage->redition_id  = $request->redition_id;
        $surchage->save();

        return response()->json($surchage, 200);
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
