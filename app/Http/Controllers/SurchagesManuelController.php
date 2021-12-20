<?php

namespace App\Http\Controllers;

use App\Models\Site;
use App\Models\Surchage;
use App\Models\SurchagesManuel as ModelsSurchagesManuel;
use App\Models\SurchargeUemoi;
use App\SurchagesManuel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class SurchagesManuelController extends Controller
{



    public function rapportMensuelsChoice(Request  $request){

        $date = $request->date;
        $dateDebut  = Carbon::create($date);
        $dateDebut->startOfMonth();
        $dateFin  = Carbon::create($date);
        $dateFin->endOfMonth();
        $site = Site::find($request->site_id);
        $surcharges = ModelsSurchagesManuel::Where('sites_id',$request->site_id)
        ->whereBetween('date_passage', [$dateDebut, $dateFin])
        ->get();
        $montantMensuels = $surcharges->sum('recette_informatise');
        return  view('dashboard.surcharges.bysite',compact('date','surcharges','montantMensuels','site'));
    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $sites = Site::all();

    return view('dashboard.surcharges.request',compact('sites'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SurchagesManuel  $surchagesManuel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SurchagesManuel  $surchagesManuel
     * @return \Illuminate\Http\Response
     */
    public function edit(SurchagesManuel $surchagesManuel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SurchagesManuel  $surchagesManuel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SurchagesManuel $surchagesManuel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SurchagesManuel  $surchagesManuel
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModelsSurchagesManuel $surcharge_manuel)
    {
        //
       try {
        $surchagesManuel = ModelsSurchagesManuel::find($surcharge_manuel->id);
        $surchagesManuel->delete();
        return  redirect()->route('surcharge-manuel.index');

       } catch (\Exception $ex) {
           //throw $th;
           Log::info($ex->getMessage());
           abort(500);
       }



    }
}
