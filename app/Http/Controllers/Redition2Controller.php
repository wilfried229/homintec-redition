<?php

namespace App\Http\Controllers;

use App\Models\Redition;
use App\Models\Rediton2;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class Redition2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $redition2 = Rediton2::all();

        return response()->json($redition2, 200);
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

            $redition2 = new Rediton2();
            $redition2->percepteur = $request->percepteur;
            $redition2->site = $request->site;
			$redition2->heure = $request->heure;
            $redition2->date = $request->date;
            $redition2->date_api = $this->dateNow();
            $redition2->cabine  = $request->cabine;
            $redition2->prix = $request->prix;
            $redition2->sens = $request->sens;
            $redition2->type = $request->type;
            $redition2->ptrac = $request->ptrac;
            $redition2->cmaes = $request->cmaes;
            $redition2->es =$request->es;
            $redition2->ptt = $request->ptt;
            $redition2->over =$request->over;
            $redition2->caisse = $request->caisse;
            $redition2->plaque  = $request->plaque;
			 $redition2->visa  = $request->visa;

            $redition2->refer =  Hash::make($this->dateNow());
			//////$redition2->total  = $request->total;
            $redition2->save();

            return response()->json($redition2, 200);

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
