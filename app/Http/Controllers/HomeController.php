<?php

namespace App\Http\Controllers;

use App\CashFlow;
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


        $sites = ['EKPE','AHOZON','SIRAROU','DIHO','KEDEKPO','HOUEGBO'];

        $cashFLows = [];
        foreach ($sites as $key => $value) {
            # code...
            $cashFLow = CashFlow::where('site',$value)->whereDate('created_at',now())->sum('recette_informatise');
                $data = [
                    'site' =>$value,
                    'cashFlow' =>$cashFLow
                ];
                array_push($cashFLows,$data);
        }

       /// dd($cashFLows);

        return view('dashboard.index',compact('cashFLows'));

    }
}
