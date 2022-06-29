<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Percepteur;
use Illuminate\Http\Request;
use App\Models\Rediton2 ;
use App\Models\Site;
use App\Voie;
use Carbon\Carbon;

class ValidationController extends Controller
{
    //



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
     *
     * @return validation par perceteur
     */

    public function validationRecettesByDateByPecepteur(Request $request){
        $dtStart = $request->date_debut;
        $dtEnd = $request->date_fin;
        $dateDebut  = Carbon::create($dtStart);
        $dateFin  = Carbon::create($dtEnd);
  /// dd($dateDebut->toDateString());
       $reditions = Rediton2::
        whereBetween('date', [$dateDebut->toDateString(),$dateFin->toDateString()])
        ->whereTime('heure', '>=', $dateDebut->toTimeString())
       ->whereTime('heure', '<=', $dateFin->toTimeString())
        ->where('cabine',$request->cabine)
        ->where('percepteur',$request->percepteur)
        ->orderBy('id','DESC');
        $reditions2 =$reditions->get();
        $sum = $reditions->sum('prix');

   // dd($reditions2);
      return view('dashboard.redition2',compact('reditions2','sum'));
    }
}