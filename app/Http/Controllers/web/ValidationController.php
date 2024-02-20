<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Percepteur;
use Illuminate\Http\Request;
use App\Models\Validation ;
use App\Models\Site;
use App\Voie;
use Carbon\Carbon;
use Illuminate\Support\Facades\Artisan;

class ValidationController extends Controller
{
    //



    public function index(){

    $sites  = Site::all();
    $voies  = Voie::all();
    $prix = Validation::whereDate('created_at',now())->sum('prix');
    return view('dashboard.validation.index',compact('sites','voies','prix'));

    }


    /***
     *
     *
     *
     * @return view
     */

    public function getValidationByDateIndex(){

        $percepteurs =  Percepteur::all();
        $sites  = Site::all();
        $voies  = Voie::all();
        return view('dashboard.validation.get-search',compact('percepteurs','sites','voies'));

    }

    /**
     *
     * @return view
     */
    public function getValidationByDateSite(){

        $sites  = Site::all();
        $voies  = Voie::all();
        return view('dashboard.validation.get-site',compact('sites','voies'));


    }



    /**
     *
     *
     * @return validation par perceteur
     */

    public function validationRecettesByDateByPecepteur(Request $request){
        $dtStart = $request->date_debut;
        $dtEnd = $request->date_fin;
        $dateDebut  = Carbon::create($dtStart);
        $dateFin  = Carbon::create($dtEnd);
  /// dd($dateDebut->toDateString());
       $reditions = Validation::
        whereBetween('date', [$dateDebut->toDateString(),$dateFin->toDateString()])
       ->whereTime('heure', '>=', $dateDebut->toTimeString())
       ->whereTime('heure', '<=', $dateFin->toTimeString())
        ->where('cabine',$request->cabine)
        ///->whereSite($request->site)
         ->where('percepteur',$request->percepteur)
        ->orderBy('id','DESC');
        $reditions2 =$reditions->get();
        $sum = $reditions->sum('prix');

   // dd($reditions2);
   $percepteurs = Percepteur::all();
   $voies  = Voie::all();
      return view('dashboard.redition2',compact('reditions2','sum','percepteurs','voies'));
    }



    /**
     *
     *
     * @return validation par perceteur
     */

    public function validationRecettesByDateBySite(Request $request){
        $dtStart = $request->date_debut;
        $dtEnd = $request->date_fin;
        $dateDebut  = Carbon::create($dtStart);
        $dateFin  = Carbon::create($dtEnd);

       // dd($request->all());
        $reditions = Validation::
        whereBetween('date', [$dateDebut->toDateString(),$dateFin->toDateString()])
        ->where('site',$request->site)
        ->where('cabine',$request->cabine)
        ->orderBy('id','DESC');
        $reditions2 =$reditions->get();
        $sum = $reditions->sum('prix');
        $percepteurs = Percepteur::all();
         $voies  = Voie::all();
      return view('dashboard.redition2',compact('reditions2','sum','percepteurs','voies'));
    }


    /**
     *
     *
     * @return validation par perceteur
     */

    public function validationRecettesBycabine($voie){
  /// dd($dateDebut->toDateString());
       $reditions = Validation::
        where('cabine',$voie)
        ->whereDate('date',now())
        ->orderBy('id','DESC');
        $reditions2 =$reditions->get();
        $sum = $reditions2->last()->prix;
      return view('dashboard.redition2',compact('reditions2','sum'));
    }


}
