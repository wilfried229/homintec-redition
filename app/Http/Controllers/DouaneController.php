<?php

namespace App\Http\Controllers;

use App\Douane;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class DouaneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    $douanes =  Douane::where('is_sent','=',false)->take(10)->get();

    foreach ($douanes  as $key => $value) {
        $value->is_sent = true;
        $value->save();
    }

    return response()->json($douanes, 200);

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
        try {

            $douane = new Douane();
            $douane->percepteur = $request->percepteur;
            $douane->site = $request->site;
			$douane->heure = $request->heure;
            $douane->date = $request->date;
            $douane->date_api = $this->dateNow();
            $douane->cabine  = $request->cabine;
            $douane->prix = $request->prix;
            $douane->sens = $request->sens;
            $douane->type = $request->type;
            $douane->ptrac = $request->ptrac;
            $douane->cmaes = $request->cmaes;
            $douane->es =$request->es;
            $douane->ptt = $request->ptt;
            $douane->over =$request->over;
            $douane->caisse = $request->caisse;
            $douane->plaque  = $request->plaque;
			$douane->visa  = $request->visa;
            $douane->refer =  Hash::make($this->dateNow());
            $douane->save();

            return response()->json($douane, 200);

            } catch (\Exception $ex) {
                //throw $th;

                Log::error($ex->getMessage());

                abort(400,$ex->getMessage());
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Douane  $douane
     * @return \Illuminate\Http\Response
     */
    public function show(Douane $douane)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Douane  $douane
     * @return \Illuminate\Http\Response
     */
    public function edit(Douane $douane)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Douane  $douane
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Douane $douane)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Douane  $douane
     * @return \Illuminate\Http\Response
     */
    public function destroy(Douane $douane)
    {
        //
    }

    private function dateNow (){
        $now=  Carbon::now('Africa/Lagos');
        return $now;
    }
}
