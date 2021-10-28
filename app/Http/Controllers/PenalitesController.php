<?php

namespace App\Http\Controllers;

use App\Penalites;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PenalitesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $penalite = new Penalites();
      ////    $penalite->immatricule  = $request->immatricule;
        $penalite->rouland = $request->rouland;
        $penalite->facteur = $request->facteur;
        $penalite->penalite = $request->penalite;
        $penalite->autorise = $request->autorise;
        $penalite->excedant = $request->excedant;
        $penalite->type= $request->type;
        $penalite->date = $request->date;
        $penalite->heure =  $request->heure;
        $penalite->es = $request->es;
        $penalite->percepteur = $request->percepteur;
        $penalite->site = $request->site;
        $penalite->cabine = $request->cabine;
        $penalite->sens = $request->sens;
        $penalite->save();

        return response()->json($penalite, 200);
        } catch (\Exception $ex) {
            //throw $th;
            Log::info($ex->getMessage());
        return response()->json($ex->getMessage(), 400);



        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Penalites  $penalites
     * @return \Illuminate\Http\Response
     */
    public function show(Penalites $penalites)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Penalites  $penalites
     * @return \Illuminate\Http\Response
     */
    public function edit(Penalites $penalites)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Penalites  $penalites
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penalites $penalites)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Penalites  $penalites
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penalites $penalites)
    {
        //
    }
}
