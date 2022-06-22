<?php

namespace App\Http\Controllers;

use App\Ajustement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class AjustementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $ajustements =  Ajustement::where('is_sent','=',false)->take(10)->get();
        foreach ($ajustements  as $key => $value) {
            $value->is_sent = true;
            $value->save();
        }

        return response()->json($ajustements, 200);

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

            $ajustement = new Ajustement();
            $ajustement->site = $request->site;
			$ajustement->heure = $request->heure;
            $ajustement->date = $request->date;
            $ajustement->cabine  = $request->cabine;
            $ajustement->sens = $request->sens;
            $ajustement->type = $request->type;
            $ajustement->essieu =$request->essieu;
            $ajustement->admin = $request->admin;
            $ajustement->essieu_capte =$request->essieu_capte;
            $ajustement->plaque = $request->plaque;

            $ajustement->refer =  Hash::make($this->dateNow());
            $ajustement->save();

            return response()->json($ajustement, 200);

            } catch (\Exception $ex) {
                //throw $th;

                Log::error($ex->getMessage());

                abort(400,$ex->getMessage());
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ajustement  $ajustement
     * @return \Illuminate\Http\Response
     */
    public function show(Ajustement $ajustement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ajustement  $ajustement
     * @return \Illuminate\Http\Response
     */
    public function edit(Ajustement $ajustement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ajustement  $ajustement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ajustement $ajustement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ajustement  $ajustement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ajustement $ajustement)
    {
        //
    }
	private function dateNow (){
        $now=  Carbon::now('Africa/Lagos');
        return $now;
    }
}
