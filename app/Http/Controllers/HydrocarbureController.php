<?php

namespace App\Http\Controllers;

use App\Models\Hydrocarbure;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class HydrocarbureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $hydros =  Hydrocarbure::where('is_sent','=',false)->take(10)->get();
        foreach ($hydros  as $key => $value) {
            $value->is_sent = true;
            $value->save();
        }

        return response()->json($hydros, 200);
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

            $hydro = new Hydrocarbure();
            $hydro->percepteur = $request->percepteur;
            $hydro->site = $request->site;
            $hydro->date = $this->dateNow();
            $hydro->cabine  = $request->cabine;
            $hydro->prix = $request->prix;
            $hydro->sens = $request->sens;
            $hydro->type = $request->type;
            $hydro->ptrac = $request->ptrac;
            $hydro->destination = $request->destination;
            $hydro->es =$request->es;
            $hydro->ptt = $request->ptt;
            $hydro->conducteur =$request->conducteur;
            $hydro->provenance = $request->provenance;
            $hydro->plaque  = $request->plaque;
            $hydro->refer =  Hash::make($this->dateNow());
            $hydro->save();

            return response()->json($hydro, 200);

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
        $now=  Carbon::now('Africa/Lagos');
        return $now;
    }
}
