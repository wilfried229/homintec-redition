<?php

namespace App\Http\Controllers;

use App\Models\Percepteur;
use App\Models\Site;
use App\Models\Surchage;
use App\Models\SurchagesManuel as ModelsSurchagesManuel;
use App\Models\SurchargeUemoi;
use App\Models\Vacation;
use App\SurchagesManuel;
use App\Voie;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

use function GuzzleHttp\Promise\all;

class SurchagesManuelController extends Controller
{



    public function rapportMensuelsChoice(Request  $request){

        $date = $request->date;
        $dateDebut  = Carbon::create($date);
        $dateDebut->startOfMonth();
        $dateFin  = Carbon::create($date);
        $dateFin->endOfMonth();


        $debut = Carbon::parse($request->date_debut)->format('y-m-d');
        $fin = Carbon::parse($request->dateèfin)->format('y-m-d');


        $site = Site::find($request->site_id);
        $surcharges = ModelsSurchagesManuel::Where('sites_id',$request->site_id)
        ->whereBetween('date_passage', [$debut, $fin])
        ->get();
        $montantMensuels = $surcharges->sum('recette_informatise');
        return  view('dashboard.surcharges.bysite',compact('date','surcharges','montantMensuels','site'));
    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function requests()
    {

        $sites = Site::all();
        //dd($sites);

    return view('dashboard.surcharges.request',compact('sites'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($site =null)
    {

        $surcharges = ModelsSurchagesManuel::Where('sites_id',$site ?? Auth::user()->site_id)
        ->orderBy('id','DESC')->get();

        $site = Site::find($site ?? Auth::user()->site_id);

    return view('dashboard.surcharges.bysite',compact('site',"surcharges"));
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createIndex()
    {


        $voies = Voie::where('site_id','=',Auth::user()->site_id)
        ->where('nom', 'LIKE', '%PL%')

        ->get();

    return view('dashboard.surcharges.create-index',compact('voies'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($voie = null)
    {
        //
        //dd($voie);
                $percepteurs = Percepteur::all();

        $site = Site::find(Auth::user()->site_id);
        $vacations = Vacation::where('sites_id','=',$site->id)->get();

        $voies = Voie::where('site_id','=',$site->id)
        ->where('nom', 'LIKE', '%PL%')
        ->get();
    return view('dashboard.surcharges.create',compact('site','voie','vacations','percepteurs'));

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
       ModelsSurchagesManuel::create($request->all());

        return redirect()->route('surcharge-manuel.create')
        ->with([
            'message' => 'Surcharge enregistrée avec succès',
            'alert-type' => 'success'
        ]);

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
    public function edit(ModelsSurchagesManuel $surcharge_manuel,$site =null)
    {
        //
        $surcharge = $surcharge_manuel;
        return view("dashboard.surcharges.update",compact('surcharge'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SurchagesManuel  $surchagesManuel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ModelsSurchagesManuel $surcharge_manuel)
    {
        //
            try {

                $surcharge_manuel->update([
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
                    'observation'=>$request->observation_surcharges,
                ]);

                    return  back()
                ->with([
                    'message' => 'Modification effectuée avec succès ',
                    'alert-type' => 'danger'
                ]);

            } catch (\Exception $ex) {
                //throw $th;

                Log::info($ex->getMessage());


                return back()
                ->with([
                    'message' => 'Erreur de modification. Veuillez réessayer',
                    'alert-type' => 'danger'
                ]);
                ;

            }
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
        return  redirect()->route('surcharge-manuel.index')
        ->with([
            'message' => 'Surcharge supprimée avec succès',
            'alert-type' => 'success'
        ]);
        ;

       } catch (\Exception $ex) {
           //throw $th;
           Log::info($ex->getMessage());
           abort(500);
       }



    }
}
