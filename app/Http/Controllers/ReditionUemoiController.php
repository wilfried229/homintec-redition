<?php

namespace App\Http\Controllers;

use App\Models\ReditonUemoi;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ReditionUemoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reditionUemoi = ReditonUemoi::all();
    return response()->json($reditionUemoi, 200);
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

            $reditionUemoi = new ReditonUemoi();
            $reditionUemoi->site = $request->site;
            $reditionUemoi->date = $request->date;
            $reditionUemoi->immatricule  = $request->immatricule;
            $reditionUemoi->heure  = $request->heure;
            $reditionUemoi->produit = $request->produit;
            $reditionUemoi->provenance = $request->provenance;
           /// $reditionUemoi->destination = $request->destination;
            $reditionUemoi->conducteur  = $request->conducteur;
            $reditionUemoi->client = $request->client;
            $reditionUemoi->classe =$request->classe;
            $reditionUemoi->ess1 = $request->ess1;
            $reditionUemoi->ess2 = $request->ess2;
            $reditionUemoi->ess3 = $request->ess3;
            $reditionUemoi->ess4 = $request->ess4;
            $reditionUemoi->ess5 = $request->ess5;
            $reditionUemoi->ess6 = $request->ess6;
            $reditionUemoi->ess7 = $request->ess7;
            $reditionUemoi->ess8 = $request->ess8;
            $reditionUemoi->ess9 = $request->ess9;

            $reditionUemoi->Gpe1 = $request->Gpe1;
            $reditionUemoi->Gpe2 = $request->Gpe2;
            $reditionUemoi->Gpe3 = $request->Gpe3;
            $reditionUemoi->Gpe4 = $request->Gpe4;

            $reditionUemoi->surchGpe1 = $request->surchGpe1;
            $reditionUemoi->surchGpe2 = $request->surchGpe2;
            $reditionUemoi->surchGpe3 = $request->surchGpe3;
            $reditionUemoi->surchGpe4 = $request->surchGpe4;

            $reditionUemoi->PdsTotal = $request->PdsTotal;
            $reditionUemoi->surchtotal = $request->surchtotal;

            $reditionUemoi->save();

            return response()->json($reditionUemoi, 200);

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

    private function dateNow (){
        $now=  Carbon::now();
        return $now;
    }
}
