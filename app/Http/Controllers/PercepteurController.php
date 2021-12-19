<?php

namespace App\Http\Controllers;

use App\Models\Percepteur as ModelsPercepteur;
use App\percepteur;
use Illuminate\Http\Request;

class PercepteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $percepteurs = ModelsPercepteur::all();
        return view("dashboard.percepteurs.index",compact('percepteurs'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view("dashboard.percepteurs.create");

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

        ModelsPercepteur::create($request->all());

        return  redirect()->route('percepteur.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\percepteur  $percepteur
     * @return \Illuminate\Http\Response
     */
    public function show(percepteur $percepteur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\percepteur  $percepteur
     * @return \Illuminate\Http\Response
     */
    public function edit(percepteur $percepteur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\percepteur  $percepteur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, percepteur $percepteur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\percepteur  $percepteur
     * @return \Illuminate\Http\Response
     */
    public function destroy(percepteur $percepteur)
    {
        //
    }
}
