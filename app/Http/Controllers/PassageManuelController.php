<?php

namespace App\Http\Controllers;

use App\Models\Percepteur;
use App\Models\Site;
use App\Models\Vacation;
use App\PassageManuel;
use App\Voie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PassageManuelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $passageManuel = PassageManuel::all();
        $sites = Site::all();

        return view("dashboard.passage-manuel.search",compact("passageManuel","sites"));
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list(Request $request)
    {

        $passageManuels = PassageManuel::where("site_id",$request->site_id)
        ->whereBetween('date', [$request->date_debut, $request->date_fin])
        ->get();
        $site = Site::find($request->site_id);
        return view("dashboard.passage-manuel.index",compact("passageManuels","site"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $passageManuel = new PassageManuel();
        $voies = Voie::where("site_id",Auth::user()->site_id)->get();
        $vacations = Vacation::all();
        $percepteurs = Percepteur::all();

        return view("dashboard.passage-manuel.create",compact('passageManuel','voies','vacations','percepteurs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $passageManuel = PassageManuel::create([
            "date"=>$request->date,
            "site_id" =>Auth::user()->id,
            "voie_id"=>$request->voie_id,
            "vacation_id"=>$request->vacation_id,
            "percepteur_id"=>$request->percepteur_id,
            "trafic_mode_avant_manuel"=>$request->trafic_mode_avant_manuel,
            "recette_mode_avant_manuel"=>$request->recette_mode_avant_manuel,
            "trafic_compte_manuel"=>$request->trafic_compte_manuel,
            "equip_recette"=>$request->equip_recette,
            "trafic_mode_apres_manuel"=>$request->trafic_mode_apres_manuel,
            "recette_mode_apres_manuel"=>$request->recette_mode_apres_manuel,
            "heure_fin"=>$request->heure_fin,
            "heure_debut"=>$request->heure_debut,
            "observation"=>$request->observation,
            "annexes"=>$request->annexes,

        ]);


        if($request->passageManuel_id){

            $passageManuel  = PassageManuel::findOrfail($request->passageManuel_id);
            $passageManuel->update([
                "date"=>$request->date ?? $passageManuel->date,
                "voie_id"=>$request->voie_id ?? $passageManuel->voie_id,
                "vacation_id"=>$request->vacation_id ??$passageManuel->vacation_id,
                "percepteur_id"=>$request->percepteur_id??$passageManuel->percepteur_id,
                "trafic_mode_avant_manuel"=>$request->trafic_mode_avant_manuel??$passageManuel->trafic_mode_avant_manuel,
                "recette_mode_avant_manuel"=>$request->recette_mode_avant_manuel??$passageManuel->recette_mode_avant_manuel,
                "trafic_compte_manuel"=>$request->trafic_compte_manuel??$passageManuel->trafic_compte_manuel,
                "equip_recette"=>$request->equip_recette??$passageManuel->equip_recette,
                "trafic_mode_apres_manuel"=>$request->trafic_mode_apres_manuel??$passageManuel->trafic_mode_apres_manuel,
                "recette_mode_apres_manuel"=>$request->recette_mode_apres_manuel??$passageManuel->recette_mode_apres_manuel,
                "heure_fin"=>$request->heure_fin??$passageManuel->heure_fin,
                "heure_debut"=>$request->heure_debut??$passageManuel->heure_debut,
                "observation"=>$request->observation??$passageManuel->observation,
                "annexes"=>$request->annexes??$passageManuel->annexes,


            ]);
            return  back() ->with([
                'message' => 'Modification effectuée avec succès ',
                'alert-type' => 'success']);
        }


        return  back() ->with([
            'message' => 'Enregistremenent de Point de passage effectuée avec succès ',
            'alert-type' => 'success']);

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PassageManuel  $passageManuel
     * @return \Illuminate\Http\Response
     */
    public function show(PassageManuel $passageManuel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PassageManuel  $passageManuel
     * @return \Illuminate\Http\Response
     */
    public function edit(PassageManuel $passageManuel)
    {
        //
        $voies = Voie::where("site_id",Auth::user()->site_id)->get();
        $vacations = Vacation::all();
        $percepteurs = Percepteur::all();

        return view("dashboard.passage-manuel.create",compact('passageManuel','voies','vacstions','percepteurs'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PassageManuel  $passageManuel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PassageManuel $passageManuel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PassageManuel  $passageManuel
     * @return \Illuminate\Http\Response
     */
    public function destroy(PassageManuel $passageManuel)
    {
        //
    }
}
