<?php

namespace App\Http\Controllers;

use App\CashFlow;
use App\Models\Rediton2;
use App\Models\Site;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


        $sites = Site::all();

        $recettes = [];
        foreach ($sites as $key => $value) {
            # code...
            $recette = Rediton2::where('site',$value)->whereDate('created_at',now())->sum('prix');
                $data = [
                    'site' =>$value->nom,
                    'recette' =>$recette
                ];
                array_push($recettes,$data);
        }

      // dd($recettes);

        return view('dashboard.index',compact('recettes'));

    }
}
