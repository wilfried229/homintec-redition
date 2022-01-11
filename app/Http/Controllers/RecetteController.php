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


        $debut = Carbon::parse($request->date_debut)->format('y-m-d');
        $fin = Carbon::parse($request->dateèfin)->format('y-m-d');


        $site = Site::find($request->site_id);
        $recettes = Recette::Where('sites_id',$request->site_id)
        ->whereBetween('date_recettes', [$debut, $fin])

        ->orderBy('date_recettes')
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


/*

        $recettes = Recette::select(

            'montant_coupant',
            'montant_percepteur'
            ,'date_recettes'
            ,'heure_debut'
            ,'heure_fin'
            ,'nombre_vehicule'
            ,'nombre_violation',
            'nombre_exemptes',
            'montant_ecart',
            'montant_informatise',
            'observation',
            'sites_id',
            'percepteurs_id',
            'vacations_id',
            'voies_id',
            'user_id',
            DB::raw('count(id) as nbreCoupons')
                        )
                        ->orderBy(DB::raw('Date(date_recettes)'))
                        ->get()
                          ->groupBy(function($date){
                              return Carbon::parse($date->date_recettes)->format('d');
                          })

                        ;
                     */


                if (Auth::user()->role =="SUPERVISEUR") {
                    # code...
                $recettes = Recette::where('user_id','=',Auth::user()->id)->orderBy('id','DESC')->get();

                } else {
                    # code...
                    $recettes = Recette::orderBy('date_recettes')->get();;
                }


            return view('dashboard.recettes.index',compact('recettes'));
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createIndex()
    {

        $voies = Voie::where('site_id','=',Auth::user()->site_id)
        ->orderBy('id','DESC')
        ->get();



    return view('dashboard.recettes.create-index',compact('voies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($voie =null)
    {
        //

       /// $vacations = Vacation::all();

        $percepteurs = Percepteur::all();

        $site = Site::find(Auth::user()->site_id);

       ///// dd($site);
        $vacations = Vacation::where('sites_id','=',$site->id)->get();

        $voies = Voie::where('id','=',$voie)->first();
            // dd($voies);

            $os = array("GRAND-POPO", "PREKETE");
        if (in_array($site->nom, $os)) {
             return view('dashboard.recettes.create-except',compact('site','voies','vacations','percepteurs'));

        }

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
        try {

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


              return  redirect()->route('recette.index')
              ->with([
                'message' => 'Recette enregistrée avec succès',
                'alert-type' => 'success'
            ]);
        } catch (\Exception $th) {
            //throw $th;
            return  back()
            ->with([
              'message' =>"Erreur interne. Verifiez si toutes les champs sont bien remplir",
              'alert-type' => 'error'
          ]);
        }

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

        $percepteurs = Percepteur::all();


        $site = Site::find(Auth::user()->site_id);
        $recette = Recette::find($id);

        $vacations = Vacation::where('sites_id','=',$site->id)->get();

        $voies = Voie::where('site_id','=',$site->id)->get();

        return view("dashboard.recettes.update",compact('recette','site','voies','vacations','percepteurs'));
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




          return  redirect()->route('recette.index')
          ->with([
            'message' => 'Recette modifiée avec succès',
            'alert-type' => 'success'
        ]);
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
                return  redirect()->route('recette.index')
                ->with([
                    'message' => 'Recette suprimée avec succès',
                    'alert-type' => 'success'
                ]);
            } catch (\Exception $ex) {
                //throw $th;
                Log::info($ex->getMessage());
                abort(500);

            }

    }
}
