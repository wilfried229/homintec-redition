<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Hydrocarbure;
use App\Models\RecetteTogo;
use App\Models\Redition;
use App\Models\Validation ;
use App\Models\ReditonUemoi;

use Illuminate\Http\Request;

class ReditionWebController extends Controller
{

    /***
     * Redition by site
     */

    public function redition($site){
        $reditions = Redition::where('site',$site)->orderBy('id','DESC')->get();
        return view('dashboard.redition',compact('reditions','site'));
     }

     public function redition2(Request $request){

        $reditions2 = Validation::whereDate('created_at',$request->date)->orderBy('id','DESC')->get();
        return view('dashboard.redition2',compact('reditions2'));
     }

     public function reditionSearch(){

      return view('dashboard.redition2-search');
   }
     public function reditionByDay(){

      $reditions2 = Validation::whereDate('created_at',now())->orderBy('id','DESC')->get();
      ////dd($reditions2);
      return view('dashboard.redition2',compact('reditions2'));
   }
   public function reditionByMonth(){

      $reditions2 = Validation::whereMonth('created_at',now())->orderBy('id','DESC')->get();
      return view('dashboard.redition2',compact('reditions2'));
   }




     public function reditionuemoaInter(){

      return view('dashboard.redition-uemoi-interf');
   }

   public function reditionuemoaSearch(Request $request){

      $reditionsUemoi =  ReditonUemoi::
      whereBetween('created_at', [$request->date_debut, $request->date_fin])
      ->where('site','!=',null)
      ->get();


      ///dd($reditionsUemoi);



      return view('dashboard.redition-uemoi',compact('reditionsUemoi'));

   }


     public function reditionuemoiByDays(){

      $reditionsUemoi =  ReditonUemoi::whereDate('created_at',now())->orderBy('id','DESC')->get();

      return view('dashboard.redition-uemoi',compact('reditionsUemoi'));
    }


    public function reditionuemoiByMonth(){

      $reditionsUemoi =  ReditonUemoi::
      whereMonth('created_at',now())
      ->orderBy('id','DESC')->get();

      return view('dashboard.redition-uemoi',compact('reditionsUemoi'));
    }



     public function hydrocarbureByDays(){


        $hydros  = Hydrocarbure::whereDate('created_at',now())->orderBy('id','DESC')->get();

        return view('dashboard.hydro',compact('hydros'));

     }


     public function hydrocarbureByMonth(){


      $hydros  = Hydrocarbure::whereMonth('created_at',now())->orderBy('id','DESC')->get();

      return view('dashboard.hydro',compact('hydros'));

   }

   public function hydrocarbureByDate(Request $request){

        $hydros  = Hydrocarbure::
        whereBetween('created_at', [$request->date_debut, $request->date_fin])
        ->orderBy('id','DESC')->get();
        return view('dashboard.hydro',compact('hydros'));
   }

   public function hydrocarbureSearch(){

      return view('dashboard.hydro-search');
   }





     public function recetteTogo($site){

        $recetteTogo  = RecetteTogo::where('site',$site)->orderBy('id','DESC')->get();
        return view('dashboard.recette-togo',compact('recetteTogo'));

     }



    //
}
