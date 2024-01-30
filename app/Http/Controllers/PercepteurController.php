<?php

namespace App\Http\Controllers;

use App\Models\Percepteur;
use App\Services\PercepteurService;
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

        $percepteurs = Percepteur::all();
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
        PercepteurService::saveLoginPercepteur($request);
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
    public function edit( $id)
    {
        //
        $percepteur  = Percepteur::find($id);

        return view('dashboard.percepteurs.update',compact('percepteur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\percepteur  $percepteur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {

        $percepteur  = Percepteur::find($id);

        $percepteur->update($request->all());

        return  redirect()->route('percepteur.index')->with([
            'message' => 'Percepteur modifié avec succès',
            'alert-type' => 'success'
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\percepteur  $percepteur
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function savePercepteurForApi(Request  $request){

        try {
           $percepteur =   PercepteurService::saveLoginPercepteur($request);
            return response()->json($percepteur, 200);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json($th->getMessage(), 400);

        }
    }
}
