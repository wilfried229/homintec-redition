<?php

namespace App\Services;

use App\Models\Logs;
use App\Models\Percepteur;
use App\Models\Validation;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PercepteurService {


    public static function getLogin(Request $request) {


    }


    public static function getPercepteurVoie($voie) {

            $logPercepteur   = Logs::where('cabine',$voie)->latest()->first();
            return $logPercepteur;

    }

    public static function  saveLoginPercepteur(Request $request){

        $user = User::create([
            "name"  => $request->nom. "  "  .$request->prenom,
            "email"  => $request->email ?? $request->nom.$request->prenom."@sirat.com",
            "tel"  => $request->tel,
            "password"  => Hash::make($request->password),
            "role"  => "PERCEPTEUR",
        ]);
        $logs = Percepteur::create([
            "nom" =>$request->nom,
            "prenom" => $request->prenom,
            "codePercepteur" => self::radomCodePercepteur(),
            "user_id" => $user->id
        ]);
        return $logs;
    }

    public static function  radomCodePercepteur():int{
        $code = random_int(1000000,9999999);
        if(Percepteur::where('codePercepteur','=',$code)->first()){
            $code = random_int(10, 99999);
        }
        return $code;
    }
}
