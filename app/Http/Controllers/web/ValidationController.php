<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Percepteur;
use Illuminate\Http\Request;
use App\Models\Rediton2;
use App\Models\Site;
use App\Voie;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;

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




        $categories = ['TRYCICLE','VEHICULE LEGER','POIDS LOURD 2','POIDS LOURD 3','POIDS LOURD 4','POIDS LOURD 5','POIDS LOURD 6','POIDS LOURD 7','POIDS LOURD 8','POIDS LOURD 9','POIDS LOURD 10'];

         $dtStart = $request->date_debut;
         $dtEnd = $request->date_fin;
         $dateDebut  = Carbon::create($dtStart);
         $dateFin  = Carbon::create($dtEnd);
         /// dd($dateDebut->toDateString());
         $reditions2 = $this->searchValidationStatistque($dateDebut,$dateFin,$request->percepteur)->get();
         $sum = $this->searchValidationStatistque($dateDebut,$dateFin,$request->percepteur)->sum('prix');

         $dataStatistiques = [];


        // $dataStatistiques['TRYCICLE'] =$this->searchValidationStatistque($dateDebut,$dateFin,$request->percepteur)->where('ptrac','=','TRYCICLE')->count();


         $dataStatistiques['TRICYCLE'] =$this->searchValidationStatistque($dateDebut,$dateFin,$request->percepteur)->where('ptrac','=','TRICYCLE')->count();

         $dataStatistiques['VEHICULE LEGER'] =$this->searchValidationStatistque($dateDebut,$dateFin,$request->percepteur)->where('ptrac','=','VEHICULE LEGER')->count();
         $dataStatistiques['MINIBUS'] =$this->searchValidationStatistque($dateDebut,$dateFin,$request->percepteur)->where('ptrac','=','MINIBUS')->count();
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
         $dataStatistiques['MOTO'] =$this->searchValidationStatistque($dateDebut,$dateFin,$request->percepteur)->where('ptrac','=','MOTO')->count();
         $dataStatistiques['NOMBREVEHICULE'] =$this->searchValidationStatistque($dateDebut,$dateFin,$request->percepteur)->count();


        // dd($dataStatistiques);



         $percepteurs = $request->percepteur;
         $cabines  = $this->searchValidationStatistque($dateDebut,$dateFin,$request->percepteur)->first();

        // dd($cabines);
         return view('dashboard.validation.get-search-statistique', compact('dataStatistiques', 'sum', 'percepteurs', 'cabines','dateDebut','dateFin',"categories"));
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
    //  ->whereTime('heure', '>=', $dateDebut->toTimeString())
      ///  ->whereTime('heure', '<=', $dateFin->toTimeString())
        ->where('percepteur', $percepteur);
        return $reditions;
    }



       /**
     * @param PointJournalier $point
     * @return string
     */
    private function generatePointVacationDocument($dataStatistiques,$percepteurs,$cabines,$dateDebut,$dateFin): string {
        $path = public_path().'/points-vacations';
        File::makeDirectory($path, $mode = 0777, true, true);
        $filename = time() . '_'. 'point-vacation.pdf';
        $pdf = \App::make('dompdf.wrapper');
        $pdf->getDomPDF()->set_option("enable_php", true);
        $pdf->loadView('pdf.statistique', array(
            "dataStatistiques" => $dataStatistiques,
            'percepteurs'=>$percepteurs,
            'cabines'=>$cabines,
            'dateDebut'=>$dateDebut,
            'dateFin'=>$dateFin

        ));
       return $pdf->stream(env('APP_NAME', 'SUPERVISION WEB  APP').'-pointVaction.pdf')
       ->header('Content-Type','application/pdf');
    }



    public function printStatistique($dateDebut,$dateFin,$cabines,$percepteur){

        $dtStart = $dateDebut;
        $dtEnd = $dateFin;
        $dateDebut  = Carbon::create($dtStart);
        $dateFin  = Carbon::create($dtEnd);

        $cabines  = $this->searchValidationStatistque($dateDebut,$dateFin,$percepteur)->first();

        $dataStatistiques = $this->dataSatitsiques($dateDebut,$dateFin,$percepteur);
        $path = public_path().'/points-vacations';
       //// $customPaper = array(0,0,567.00,283.80);
        File::makeDirectory($path, $mode = 0777, true, true);
        $filename = time() . '_'. 'point-vacation.pdf';
        $pdf = \App::make('dompdf.wrapper');
        $pdf->getDomPDF()->set_option("enable_php", true);
        $pdf->loadView('pdf.statistique', array(
            "dataStatistiques" => $dataStatistiques,
            'percepteurs'=>$percepteur,
            'cabines'=>$cabines,
            'dateDebut'=>$dateDebut,
            'dateFin'=>$dateFin

        ))
        ;
        //->setPaper($customPaper,'landscape')
       return $pdf->stream(env('APP_NAME', 'SUPERVISION WEB  APP').'-pointVaction.pdf')
       ->header('Content-Type','application/pdf');
    }

    private function dataSatitsiques($dateDebut,$dateFin,$percepteur){
        $dataStatistiques = [];
        $dataStatistiques['TRICYCLE'] =$this->searchValidationStatistque($dateDebut,$dateFin,$percepteur)->where('ptrac','=','TRICYCLE')->count();
        $dataStatistiques['VEHICULE LEGER'] =$this->searchValidationStatistque($dateDebut,$dateFin,$percepteur)->where('ptrac','=','VEHICULE LEGER')->count();
        $dataStatistiques['MINIBUS'] =$this->searchValidationStatistque($dateDebut,$dateFin,$percepteur)->where('ptrac','=','MINIBUS')->count();
        $dataStatistiques['POIDS LOURD 2'] =$this->searchValidationStatistque($dateDebut,$dateFin,$percepteur)->where('ptrac','POIDS LOURD')->where('es',2)->count();
        $dataStatistiques['POIDS LOURD 3'] =$this->searchValidationStatistque($dateDebut,$dateFin,$percepteur)->where('ptrac','POIDS LOURD')->where('es',3)->count();
        $dataStatistiques['POIDS LOURD 4'] =$this->searchValidationStatistque($dateDebut,$dateFin,$percepteur)->where('ptrac','POIDS LOURD')->where('es','=',4)->count();
        $dataStatistiques['POIDS LOURD 5'] =$this->searchValidationStatistque($dateDebut,$dateFin,$percepteur)->where('ptrac','=','POIDS LOURD')->where('es','=',5)->count();
        $dataStatistiques['POIDS LOURD 6'] =$this->searchValidationStatistque($dateDebut,$dateFin,$percepteur)->where('ptrac','=','POIDS LOURD')->where('es','=',6)->count();
        $dataStatistiques['POIDS LOURD 7'] =$this->searchValidationStatistque($dateDebut,$dateFin,$percepteur)->where('ptrac','=','POIDS LOURD')->where('es','=',7)->count();
        $dataStatistiques['POIDS LOURD 8'] =$this->searchValidationStatistque($dateDebut,$dateFin,$percepteur)->where('ptrac','=','POIDS LOURD')->where('es','=',8)->count();
        $dataStatistiques['POIDS LOURD 9'] =$this->searchValidationStatistque($dateDebut,$dateFin,$percepteur)->where('ptrac','=','POIDS LOURD')->where('es','=',9)->count();
        $dataStatistiques['POIDS LOURD 10'] =$this->searchValidationStatistque($dateDebut,$dateFin,$percepteur)->where('ptrac','=','POIDS LOURD')->where('es','=',10)->count();
        $dataStatistiques['AUTOBUS'] =$this->searchValidationStatistque($dateDebut,$dateFin,$percepteur)->where('ptrac','=','AUTOBUS')->count();
        $dataStatistiques['MOTO'] =$this->searchValidationStatistque($dateDebut,$dateFin,$percepteur)->where('ptrac','=','MOTO')->count();
        $dataStatistiques['NOMBREVEHICULE'] =$this->searchValidationStatistque($dateDebut,$dateFin,$percepteur)->count();

       // dd($dataStatistiques);
       return $dataStatistiques;
    }

}
