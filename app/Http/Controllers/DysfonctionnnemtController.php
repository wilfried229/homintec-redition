<?php

namespace App\Http\Controllers;

use App\categorieDysfonctionnemts;
use App\Dysfonctionnnemt;
use App\Models\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DysfonctionnnemtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $dysfonctionnnemts = Dysfonctionnnemt::all();
        $sites = Site::all();
        return view("dashboard.dysfonctionnements.search",compact("dysfonctionnnemts","sites"));

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list(Request $request)
    {

        $dysfonctionnemts = Dysfonctionnnemt::where("site_id",$request->site_id)
        ->whereBetween('date', [$request->date_debut, $request->date_fin])
        ->get();


        //dd($dysfonctionnemts);
        $site = Site::find($request->site_id);
        $categorieDysfonctionnemts = categorieDysfonctionnemts::all();


        return view("dashboard.dysfonctionnements.index",compact("dysfonctionnemts","site",'categorieDysfonctionnemts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $dysfonctionnnemt  = new Dysfonctionnnemt();
        $categorieDysfonctionnemts = categorieDysfonctionnemts::all();
        return view("dashboard.dysfonctionnements.create",compact('dysfonctionnnemt','categorieDysfonctionnemts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dysfonctionnnemt = Dysfonctionnnemt::create([
            "date"=>$request->date,
            "site_id" =>Auth::user()->id,
            "localisation"=>$request->localisation,
            "panne_sirat"=>$request->panne_sirat,
            "panne_homintec"=>$request->panne_homintec,
            "cause"=>$request->cause,
            "travaux_realiser"=>$request->travaux_realiser,
            "heure_constat"=>$request->heure_constat,
            "heure_debut_inter"=>$request->heure_debut_inter,
            "heure_fin_inter"=>$request->heure_fin_inter,
            "duree_panne"=>$request->duree_panne,
            "resultat_obtenu"=>$request->resultat_obtenu,
            "besoin"=>$request->besoin,
            "preuvre"=>$request->preuvre,
            "observation"=>$request->observation,
            'categorie_dysfonctionnemt_id'=>$request->categorie_dysfonctionnemt_id
        ]);


        if($request->dysfonctionnement_id){

            $dysfonctionnnemt  = Dysfonctionnnemt::findOrfail($request->dysfonctionnement_id);
            $dysfonctionnnemt->update([
                "date"=>$request->date ?? $dysfonctionnnemt->date,
                "localisation"=>$request->localisation ?? $dysfonctionnnemt->localisation,
                "panne_sirat"=>$request->panne_sirat?? $dysfonctionnnemt->panne_sirat,
                "panne_homintec"=>$request->panne_homintec?? $dysfonctionnnemt->panne_homintec,
                "cause"=>$request->cause?? $dysfonctionnnemt->cause,
                "travaux_realiser"=>$request->travaux_realiser?? $dysfonctionnnemt->travaux_realiser,
                "heure_constat"=>$request->heure_constat?? $dysfonctionnnemt->heure_constat,
                "heure_debut_inter"=>$request->heure_debut_inter?? $dysfonctionnnemt->heure_debut_inter,
                "heure_fin_inter"=>$request->heure_fin_inter?? $dysfonctionnnemt->heure_fin_inter,
                "duree_panne"=>$request->duree_panne?? $dysfonctionnnemt->duree_panne,
                "resultat_obtenu"=>$request->resultat_obtenu?? $dysfonctionnnemt->resultat_obtenu,
                "besoin"=>$request->besoin?? $dysfonctionnnemt->besoin,
                "preuvre"=>$request->preuvre?? $dysfonctionnnemt->preuvre,
                "observation"=>$request->observation?? $dysfonctionnnemt->observation,
                'categorie_dysfonctionnemt_id'=>$request->categorie_dysfonctionnemt_id ?? $dysfonctionnnemt->categorie_dysfonctionnemt_id,
            ]);
            return  back() ->with([
                'message' => 'Modification effectuée avec succès ',
                'alert-type' => 'success']);
        }


        return  back() ->with([
            'message' => 'Dysfonctionnement effectuée avec succès ',
            'alert-type' => 'success']);

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dysfonctionnnemt  $dysfonctionnnemt
     * @return \Illuminate\Http\Response
     */
    public function show(Dysfonctionnnemt $dysfonctionnnemt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dysfonctionnnemt  $dysfonctionnnemt
     * @return \Illuminate\Http\Response
     */
    public function edit(Dysfonctionnnemt $dysfonctionnnemt)
    {
        $categorieDysfonctionnemts = categorieDysfonctionnemts::all();

    return view("dashboard.dysfonctionnements.create",compact('dysfonctionnnemt','categorieDysfonctionnemts'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dysfonctionnnemt  $dysfonctionnnemt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dysfonctionnnemt $dysfonctionnnemt)
    {
        //
         $dysfonctionnnemt->update([
            "date"=>$request->date ?? $dysfonctionnnemt->date,
            "localisation"=>$request->localisation ?? $dysfonctionnnemt->localisation,
            "panne_sirat"=>$request->panne_sirat?? $dysfonctionnnemt->panne_sirat,
            "panne_homintec"=>$request->panne_homintec?? $dysfonctionnnemt->panne_homintec,
            "cause"=>$request->cause?? $dysfonctionnnemt->cause,
            "travaux_realiser"=>$request->travaux_realiser?? $dysfonctionnnemt->travaux_realiser,
            "heure_constat"=>$request->heure_constat?? $dysfonctionnnemt->heure_constat,
            "heure_debut_inter"=>$request->heure_debut_inter?? $dysfonctionnnemt->heure_debut_inter,
            "heure_fin_inter"=>$request->heure_fin_inter?? $dysfonctionnnemt->heure_fin_inter,
            "duree_panne"=>$request->duree_panne?? $dysfonctionnnemt->duree_panne,
            "resultat_obtenu"=>$request->resultat_obtenu?? $dysfonctionnnemt->resultat_obtenu,
            "besoin"=>$request->besoin?? $dysfonctionnnemt->besoin,
            "preuvre"=>$request->preuvre?? $dysfonctionnnemt->preuvre,
            "observation"=>$request->observation?? $dysfonctionnnemt->observation,
            'categorie_dysfonctionnemt_id'=>$request->categorie_dysfonctionnemt_id ?? $dysfonctionnnemt->categorie_dysfonctionnemt_id,
        ]);
        return  back() ->with([
            'message' => 'Modification effectuée avec succès ',
            'alert-type' => 'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dysfonctionnnemt  $dysfonctionnnemt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dysfonctionnnemt $dysfonctionnnemt)
    {
        //
    }
}
