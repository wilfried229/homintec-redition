<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Redition;
use App\Models\Rediton2 ;
use App\Models\ReditonUemoi;

use Illuminate\Http\Request;

class ReditionWebController extends Controller
{

    /***
     * Redition by site
     */

    public function redition($site){

        $reditions = Redition::where('site',$site)->get();
        return view('dashboard.redition',compact('reditions','site'));
     }

     public function redition2($site){

        $reditions2 = Rediton2::where('site',$site)->get();
        return view('dashboard.redition2',compact('reditions2','site'));
     }

     public function reditionuemoi($site){

        $reditionsUemoi =  ReditonUemoi::where('site',$site)->get();
        return view('dashboard.redition-uemoi',compact('reditionsUemoi','site'));
     }

    //
}
