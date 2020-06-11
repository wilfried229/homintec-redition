<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Surchage;
use Illuminate\Http\Request;

class SurchargeWebController extends Controller
{
    public function suchargeView($site){

        $surcharges = Surchage::where('site',$site)->get();
        return view('dashboard.surcharge',compact('surcharges','site'));
     }

     public function suchargeView2($site){

        $surcharges = Surchage::where('site',$site)->get();
        return view('dashboard.surcharge',compact('surcharges','site'));
     }

     public function suchargeVieUemio($site){

        $surcharges = Surchage::where('site',$site)->get();
        return view('dashboard.surcharge',compact('surcharges','site'));
     }
    //
}
