<?php

namespace App\Http\Controllers;

use App\Transfert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TransfertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $transferts =  Transfert::where('is_sent','=',false)->take(10)->get();
        foreach ($transferts  as $key => $value) {
            $value->is_sent = true;
            $value->save();
        }

        return response()->json($transferts, 200);
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
            $transferts = Transfert::create([
                'percepteur'=>$request->percepteur,
                'date'=>$request->date,
                'heure'=>$request->heure,
                'prix'=>$request->prix,
                'site'=>$request->site,
                'cabine'=>$request->cabine,
                'sens'=>$request->sens,
                'ptrac'=>$request->ptrac,
                'plaque'=>$request->plaque,
                'refer'=>$request->refer
            ]);

            return response()->json($transferts, 200);
            //code...
        } catch (\Exception $ex) {
            //throw $th;
            Log::info($ex->getMessage());
            return response()->json($ex->getMessage(), 400);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transfert  $transfert
     * @return \Illuminate\Http\Response
     */
    public function show(Transfert $transfert)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transfert  $transfert
     * @return \Illuminate\Http\Response
     */
    public function edit(Transfert $transfert)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transfert  $transfert
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transfert $transfert)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transfert  $transfert
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transfert $transfert)
    {
        //
    }
}
