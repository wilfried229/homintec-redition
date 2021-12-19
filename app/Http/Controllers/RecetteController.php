<?php

namespace App\Http\Controllers;

use App\Models\Percepteur;
use App\Models\Recette;
use App\Models\Site;
use App\Models\Surchage;
use App\Models\SurchagesManuel;
use App\Models\Vacation;
use App\Voie;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class RecetteController extends Controller
{


      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getByMonth()
    {
        //

            $sites = Site::all();
            return  view('dashboard.recettes.modal-month',compact('sites'));

    }


    public function rapportMensuelsChoice(Request  $request){

        $date = $request->date;
        $dateDebut  = Carbon::create($date);
        $dateDebut->startOfMonth();
        $dateFin  = Carbon::create($date);
        $dateFin->endOfMonth();
        $site = Site::find($request->site_id);
        $recettes = Recette::Where('sites_id',$request->site_id)
        ->whereBetween('date_recettes', [$dateDebut, $dateFin])
        ->get();
        $montantMensuels = $recettes->sum('recette_informatise');
        return  view('dashboard.recettes.get-month',compact('date','recettes','montantMensuels','site'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

            $recettes = Recette::all();


        return view('dashboard.recettes.index',compact('recettes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $voies = Voie::all();

        $vacations = Vacation::all();

        $percepteurs = Percepteur::all();

        $site = Site::find(Auth::user()->site_id);

        return view("dashboard.recettes.create",compact('site','voies','vacations','percepteurs'));
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


    ///dd($request->all());
      $recette =  Recette::create([
        'montant_coupant' =>$request->montant_coupant,
        'montant_percepteur'=>$request->montant_percepteur,
        'date_recettes'=>$request->date_recettes,
        'heure_debut'=>$request->heure_debut,
        'heure_fin'=>$request->heure_fin,
        'nombre_vehicule'=>$request->nombre_vehicule,
        'nombre_violation'=>$request->nombre_violation,
        'nombre_exemptes'=>$request->nombre_exemptes,
        'montant_percepteur'=>$request->montant_percepteur,
        'montant_ecart'=>$request->montant_ecart,
        'montant_informatise'=>$request->montant_informatise,
        'observation'=>$request->observation,
        'sites_id'=>Auth::user()->site_id,
        'percepteurs_id'=>$request->percepteur_id,
        'vacations_id'=>$request->vacation_id,
        'voies_id'=>$request->voies_id,
        'is_surchages'=>false,
        'user_id'=>Auth::user()->id,

      ]);

        if ($request->is_surchages) {
            # code...
                SurchagesManuel::create([
                    'immatriculation' =>$request->immatriculation,
                    'poids_rouland'=>$request->poid_rouland,
                   /// "montant_surcharge"=>$request->montant_surcharge,
                    'type_surcharge'=>$request->type_surcharge,
                    'date_passage'=>$request->date_passage,
                    'heure_passage'=>$request->heure_passage,
                    'essieu'=>$request->essieu,
                    'poids_roulant'=>$request->poids_roulant,
                    'poid_autorise'=>$request->poid_autorise,
                    'excedent'=>$request->excedent,
                    'montant_apayer'=>$request->montant_apayer,
                    'montant_payer'=>$request->montant_payer,
                    'observation'=>$request->observation_surchages,
                    'recettes_id'=>$recette->id
                ]);
        }


          return  redirect()->route('recette.index');

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
        $vacations = Vacation::all();

        $percepteurs = Percepteur::all();

        $voies = Voie::all();

        $site = Site::find(Auth::user()->site_id);
        $recette = Recette::find($id);

        $surchage = SurchagesManuel::where('recettes_id','=',$recette->id)->first();

        return view("dashboard.recettes.update",compact('surchage','recette','site','voies','vacations','percepteurs'));
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

     $site = Site::find(Auth::user()->site_id);
    $recette = Recette::find($id);
           ///dd($request->all());
      $recette->update([
        'montant_coupant' =>$request->montant_coupant,
        'montant_percepteur'=>$request->montant_percepteur,
        'date_recettes'=>$request->date_recettes,
        'heure_debut'=>$request->heure_debut,
        'heure_fin'=>$request->heure_fin,
        'nombre_vehicule'=>$request->nombre_vehicule,
        'nombre_violation'=>$request->nombre_violation,
        'nombre_exemptes'=>$request->nombre_exemptes,
        'montant_percepteur'=>$request->montant_percepteur,
        'montant_ecart'=>$request->montant_ecart,
        'montant_informatise'=>$request->montant_informatise,
        'observation'=>$request->observation,
        'sites_id'=>Auth::user()->site_id,
        'percepteurs_id'=>$request->percepteur_id,
        'vacations_id'=>$request->vacation_id,
        'voies_id'=>$request->voies_id,
        'is_surchages'=>false,
        'user_id'=>Auth::user()->id,

      ]);

      $surchage = SurchagesManuel::where('recettes_id','=',$recette->id)->first();

        if ($request->is_surchages) {
            # code...
                $surchage->update([
                    'immatriculation' =>$request->immatriculation,
                    'poids_rouland'=>$request->poid_rouland,
                   /// "montant_surcharge"=>$request->montant_surcharge,
                    'type_surcharge'=>$request->type_surcharge,
                    'date_passage'=>$request->date_passage,
                    'heure_passage'=>$request->heure_passage,
                    'essieu'=>$request->essieu,
                    'poids_roulant'=>$request->poids_roulant,
                    'poid_autorise'=>$request->poid_autorise,
                    'excedent'=>$request->excedent,
                    'montant_apayer'=>$request->montant_apayer,
                    'montant_payer'=>$request->montant_payer,
                    'observation'=>$request->observation_surchages,
                    'recettes_id'=>$recette->id
                ]);
        }


          return  redirect()->route('recette.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

            try {

                $recette = Recette::find($id);
                $recette->delete();
                return  redirect()->route('recette.index');
            } catch (\Exception $ex) {
                //throw $th;
                Log::info($ex->getMessage());
                abort(500);

            }

    }
}
