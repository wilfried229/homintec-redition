<?php

namespace App\Http\Controllers;

use App\Models\Site;
use App\Voie;
use Faker\Provider\de_DE\Company;
use Illuminate\Http\Request;

class VoieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $voies  = Voie::all();

        return view("dashboard.voies.index",compact("voies"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sites  = Site::all();

        return view("dashboard.voies.create",compact('sites'));

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

        Voie::create($request->all());

        return  redirect()->route('voie.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Voie  $voie
     * @return \Illuminate\Http\Response
     */
    public function show(Voie $voie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Voie  $voie
     * @return \Illuminate\Http\Response
     */
    public function edit(Voie $voie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Voie  $voie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Voie $voie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Voie  $voie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Voie $voie)
    {
        //
    }
}
