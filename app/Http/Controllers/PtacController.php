<?php

namespace App\Http\Controllers;

use App\Ptac;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class PtacController extends Controller
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

        $ptac = Ptac::create([
            'site'=>$request->site,
            'date'=>$request->date,
            'admin'=>$request->admin,
            'heure_sortie'=>$request->heure_sortie,
            'heure_entree'=>$request->heure_entree,
            "refer"=>Hash::make(Carbon::now('Africa/Lagos'))
        ]);

        return response()->json($ptac, 200);

        } catch (\Exception $ex) {
            //throw $th;
            Log::info($ex->getMessage());

        return response()->json($ex->getMessage(), 400);

        }
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ptac  $ptac
     * @return \Illuminate\Http\Response
     */
    public function show(Ptac $ptac)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ptac  $ptac
     * @return \Illuminate\Http\Response
     */
    public function edit(Ptac $ptac)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ptac  $ptac
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ptac $ptac)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ptac  $ptac
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ptac $ptac)
    {
        //
    }
}
