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
            $reditionUemoi->date = $this->dateNow();
            $reditionUemoi->immatricule  = $request->immatricule;
            $reditionUemoi->produit = $request->produit;
            $reditionUemoi->provenance = $request->provenance;
            $reditionUemoi->destination = $request->destination;
            $reditionUemoi->societe = $request->societe;
            $reditionUemoi->classe =$request->classe;
            $reditionUemoi->es1 = $request->es1;
            $reditionUemoi->es2 = $request->es2;
            $reditionUemoi->es3 = $request->es3;
            $reditionUemoi->es4 = $request->es4;
            $reditionUemoi->es5 = $request->es5;
            $reditionUemoi->es6 = $request->es6;
            $reditionUemoi->es7 = $request->es7;
            $reditionUemoi->es8 = $request->es8;
            $reditionUemoi->es9 = $request->es9;

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
