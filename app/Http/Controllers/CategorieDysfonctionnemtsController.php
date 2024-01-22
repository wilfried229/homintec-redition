<?php

namespace App\Http\Controllers;

use App\categorieDysfonctionnemts;
use Illuminate\Http\Request;

class CategorieDysfonctionnemtsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categorieDysfonctionnemts = categorieDysfonctionnemts::all();
        return view('dashboard.categorieDysfonctionnements.index', compact("categorieDysfonctionnemts"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorieDysfonctionnemts = new categorieDysfonctionnemts();
        return view('dashboard.categorieDysfonctionnements.create', compact("categorieDysfonctionnemts"));
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
        categorieDysfonctionnemts::create([
            "libelle" => $request->libelle
        ]);

        if ($request->categorieDysfonctionnemts_id) {
            $categorieDysfonctionnemt = categorieDysfonctionnemts::findOrFail($request->categorieDysfonctionnemts_id);
            $categorieDysfonctionnemt->update([
                'libelle' => $request->libelle
            ]);
            return  back()->with([
                'message' => 'Modification effectuée avec succès ',
                'alert-type' => 'success'
            ]);
        }


        return  back()->with([
            'message' => 'Categorie enregistrée avec succès ',
            'alert-type' => 'success'
        ]);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\categorieDysfonctionnemts  $categorieDysfonctionnemts
     * @return \Illuminate\Http\Response
     */
    public function show(categorieDysfonctionnemts $categorieDysfonctionnemts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\categorieDysfonctionnemts  $categorieDysfonctionnemts
     * @return \Illuminate\Http\Response
     */
    public function edit(categorieDysfonctionnemts $categorieDysfonctionnemts)
    {
        return view('dashboard.categorieDysfonctionnements.create', compact("categorieDysfonctionnemts"));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\categorieDysfonctionnemts  $categorieDysfonctionnemts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, categorieDysfonctionnemts $categorieDysfonctionnemts)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\categorieDysfonctionnemts  $categorieDysfonctionnemts
     * @return \Illuminate\Http\Response
     */
    public function destroy(categorieDysfonctionnemts $categorieDysfonctionnemts)
    {
        //
    }
}
