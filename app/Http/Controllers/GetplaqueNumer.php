<?php

namespace App\Http\Controllers;

use App\SavePlaque;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class GetplaqueNumer extends Controller
{
    //
    public function saveplqueNumber(Request $request){

        $savePlaque  = SavePlaque::create([
            'plaque' =>$request->plaque,
            'ip' =>$request->ipCamera,
        ]);
      return response()->json($savePlaque, 200);
    }

    public function getplaqueNumber(Request $request){



    }

}
