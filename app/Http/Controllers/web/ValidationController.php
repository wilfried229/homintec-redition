<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Percepteur;
use Illuminate\Http\Request;
use App\Models\Rediton2;
use App\Models\Site;
use App\Voie;
use Carbon\Carbon;

class ValidationController extends Controller
{
    //



    public function index()
    {

        $sites  = Site::all();
        $voies  = Voie::all();
        $prix = Rediton2::whereDate('created_at', now())->sum('prix');
        return view('dashboard.validation.index', compact('sites', 'voies', 'prix'));
    }


    /***
     *
     *
     *
     * @return view
     */

    public function getValidationByDateIndex()
    {

        $percepteurs =  Percepteur::all();
        $sites  = Site::all();
        $voies  = Voie::all();
        return view('dashboard.validation.get-search', compact('percepteurs', 'sites', 'voies'));
    }

    /**
     *
     * @return view
     */
    public function getValidationByDateSite()
    {

        $sites  = Site::all();
        $voies  = Voie::all();
        return view('dashboard.validation.get-site', compact('sites', 'voies'));
    }





    /**
     *
     *
     * @return validation par perceteur
     */

    public function validationRecettesByDateBySite(Request $request)
    {
        $dtStart = $request->date_debut;
        $dtEnd = $request->date_fin;
        $dateDebut  = Carbon::create($dtStart);
        $dateFin  = Carbon::create($dtEnd);

        // dd($request->all());
        $reditions = Rediton2::whereBetween('date', [$dateDebut->toDateString(), $dateFin->toDateString()])
            ->where('site', $request->site)
            ->where('cabine', $request->cabine)
            ->orderBy('id', 'DESC');
        $reditions2 = $reditions->get();
        $sum = $reditions->sum('prix');
        $percepteurs = Percepteur::all();
        $voies  = Voie::all();
        return view('dashboard.redition2', compact('reditions2', 'sum', 'percepteurs', 'voies'));
    }


    /**
     *
     *
     * @return validation par perceteur
     */

    public function validationRecettesBycabine($voie)
    {
        /// dd($dateDebut->toDateString());
        $reditions = Rediton2::where('cabine', $voie)
            ->whereDate('date', now())
            ->orderBy('id', 'DESC');
        $reditions2 = $reditions->get();
        $sum = $reditions2->last()->prix;
        return view('dashboard.redition2', compact('reditions2', 'sum'));
    }



    public function validationRecettesByDateByPecepteur(Request $request)
    {
        $dtStart = $request->date_debut;
        $dtEnd = $request->date_fin;
        $dateDebut  = Carbon::create($dtStart);
        $dateFin  = Carbon::create($dtEnd);
        /// dd($dateDebut->toDateString());
        $reditions = Rediton2::whereBetween('date', [$dateDebut->toDateString(), $dateFin->toDateString()])
            ->whereTime('heure', '>=', $dateDebut->toTimeString())
            ->whereTime('heure', '<=', $dateFin->toTimeString())
            ->where('cabine', $request->cabine)
            ///->whereSite($request->site)
            ->where('percepteur', $request->percepteur)
            ->orderBy('id', 'DESC');
        $reditions2 = $reditions->get();
        $sum = $reditions->sum('prix');

        // dd($reditions2);
        $percepteurs = Percepteur::all();
        $voies  = Voie::all();
        return view('dashboard.redition2', compact('reditions2', 'sum', 'percepteurs', 'voies'));
    }




    /**
     *
     *
     * @return validation par perceteur
     */

     public function statistiqueVacation(Request $request)
     {
         $dtStart = $request->date_debut;
         $dtEnd = $request->date_fin;
         $dateDebut  = Carbon::create($dtStart);
         $dateFin  = Carbon::create($dtEnd);
         /// dd($dateDebut->toDateString());
         $reditions = Rediton2::whereBetween('date', [$dateDebut->toDateString(), $dateFin->toDateString()])
             ->whereTime('heure', '>=', $dateDebut->toTimeString())
             ->whereTime('heure', '<=', $dateFin->toTimeString())
             ->where('percepteur', $request->percepteur)

             ;
         $reditions2 = $reditions->get();
         $sum = $reditions->sum('prix');
         $dataStatistiques = [];
         $dataStatistiques['VEHICULE LEGER'] =$this->searchValidationStatistque($dateDebut,$dateFin,$request->percepteur)->where('ptrac','VEHICULE LEGER')->count();
         $dataStatistiques['TRYCICLE'] =$this->searchValidationStatistque($dateDebut,$dateFin,$request->percepteur)->where('ptrac','=','TRYCICLE')->count();
         $dataStatistiques['VEHICULE LEGER'] =$this->searchValidationStatistque($dateDebut,$dateFin,$request->percepteur)->where('ptrac','=','VEHICULE LEGER')->count();
         $dataStatistiques['POIDS LOURD 2'] =$this->searchValidationStatistque($dateDebut,$dateFin,$request->percepteur)->where('ptrac','POIDS LOURD')->where('es',2)->count();
         $dataStatistiques['POIDS LOURD 3'] =$this->searchValidationStatistque($dateDebut,$dateFin,$request->percepteur)->where('ptrac','POIDS LOURD')->where('es',3)->count();
         $dataStatistiques['POIDS LOURD 4'] =$this->searchValidationStatistque($dateDebut,$dateFin,$request->percepteur)->where('ptrac','POIDS LOURD')->where('es','=',4)->count();
         $dataStatistiques['POIDS LOURD 5'] =$this->searchValidationStatistque($dateDebut,$dateFin,$request->percepteur)->where('ptrac','=','POIDS LOURD')->where('es','=',5)->count();
         $dataStatistiques['POIDS LOURD 6'] =$this->searchValidationStatistque($dateDebut,$dateFin,$request->percepteur)->where('ptrac','=','POIDS LOURD')->where('es','=',6)->count();
         $dataStatistiques['POIDS LOURD 7'] =$this->searchValidationStatistque($dateDebut,$dateFin,$request->percepteur)->where('ptrac','=','POIDS LOURD')->where('es','=',7)->count();
         $dataStatistiques['POIDS LOURD 8'] =$this->searchValidationStatistque($dateDebut,$dateFin,$request->percepteur)->where('ptrac','=','POIDS LOURD')->where('es','=',8)->count();
         $dataStatistiques['POIDS LOURD 9'] =$this->searchValidationStatistque($dateDebut,$dateFin,$request->percepteur)->where('ptrac','=','POIDS LOURD')->where('es','=',9)->count();
         $dataStatistiques['POIDS LOURD 10'] =$this->searchValidationStatistque($dateDebut,$dateFin,$request->percepteur)->where('ptrac','=','POIDS LOURD')->where('es','=',10)->count();
         $dataStatistiques['AUTOBUS'] =$this->searchValidationStatistque($dateDebut,$dateFin,$request->percepteur)->where('ptrac','=','AUTOBUS')->count();
        // dd($dataStatistiques);


         $percepteurs = $request->percepteur;
         $cabines  = $this->searchValidationStatistque($dateDebut,$dateFin,$request->percepteur)->first()->cabine;
         return view('dashboard.validation.get-search-statistique', compact('dataStatistiques', 'sum', 'percepteurs', 'cabines','dateDebut','dateFin'));
     }




    /**
     *
     *
     * @return validation par perceteur
     */

    public function statistiqueVacationView(Request $request)
    {

        $percepteurs =  Rediton2::distinct()->select('percepteur')->get();

        //dd($percepteurs);
        $sites  = Site::all();
        $voies  = Voie::all();

        return view('dashboard.validation.search-statistique', compact('percepteurs', 'sites', 'voies'));
    }



    public static function searchValidationStatistque($dateDebut,$dateFin,$percepteur){

        $reditions = Rediton2::whereBetween('date', [$dateDebut->toDateString(), $dateFin->toDateString()])
        ->whereTime('heure', '>=', $dateDebut->toTimeString())
        ->whereTime('heure', '<=', $dateFin->toTimeString())
        ->where('percepteur', $percepteur);
        return $reditions;
    }


}
