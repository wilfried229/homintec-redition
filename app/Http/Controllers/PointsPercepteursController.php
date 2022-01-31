<?php

namespace App\Http\Controllers;

use App\Models\Recette;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PointsPercepteursController extends Controller
{
    //



    public function searchIndex(){

        return view('dashboard.points.percepteur-search');
    }

    public function index (){

        $debut = Carbon::parse(\request()->date_debut)->format('Y-m-d');
        $fin = Carbon::parse(\request()->date_fin)->format('Y-m-d');
        $recettes = Recette::whereBetween('date_passage', [$debut, $fin])
        ->get();
        return view('dashboard.points.percpeteur',compact('recettes'));
    }
}
