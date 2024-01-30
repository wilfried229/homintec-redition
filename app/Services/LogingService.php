<?php

namespace App\Services;

use App\Models\Logs;
use App\Models\Percepteur;
use App\Models\Validation;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LogingService {

    public function __construct() {
        //self::initBinance();
    }


    public static function getLogin(Request $request) {


    }


    public static function getPercepteurVoie($voie) {

            $logPercepteur   = Logs::where('cabine',$voie)->latest()->first();

            if($logPercepteur!=null){
                $logPercepteur->start_at =  Carbon::parse($logPercepteur->start_at)->format('d/m/Y H:i:s');

            }else{

                $logPercepteur->start_at = (string)$logPercepteur?->start_at;
            }

            return $logPercepteur;

    }

    public static function  saveLoginPercepteur(Request $request){

        $logs = Logs::create([
            "percepteur_id" =>$request->percepteur_id,
            "cabine" => $request->cabine,
            "site" => $request->site,
            "date" => Carbon::now('Africa/Lagos'),
            "heure" => Carbon::now('Africa/Lagos')->format('H:i'),
            "old_percepteur"=>$request->old_percepteur,
            "agent_homintec"=>$request->agent_homintec,
            "statut"=>$request->statut,
            "refer"=>Hash::make(Carbon::now('Africa/Lagos')),
            "isCabin" => 1,
            "cabin_at" =>Carbon::now('Africa/Lagos'),
        ]);

        return $logs;
    }



    public static function  startVacationPercepteur(Request $request){

        $logs = Logs::create([
            "percepteur_id" =>$request->percepteur_id,
            "cabine" => $request->cabine,
            "site" => $request->site,
            "date" => Carbon::now('Africa/Lagos'),
            "heure" => Carbon::now('Africa/Lagos')->format('H:i'),
            "old_percepteur"=>$request->old_percepteur,
            "agent_homintec"=>$request->agent_homintec,
            "statut"=>$request->statut,
            "refer"=>Hash::make(Carbon::now('Africa/Lagos')),
            "isCabin" => 1,
            "isStart" =>1,
            "start_at" => Carbon::now('Africa/Lagos')
        ]);

        return $logs;
    }



    public static function getLastIsCabinForPercepteurAndSave($percepteur_id,$voie) {
      try {

        $logPercepteur   = Logs::where('percepteur_id',$percepteur_id)->where("cabine",$voie)->where('isCabin','=',true)->latest()->first();

        if($logPercepteur ==null){
            return null;
        }
        $logPercepteur->update([
            "isStart" =>1,
            "start_at" => Carbon::now('Africa/Lagos'),
        ]);

        $logPercepteur->start_at = (string)$logPercepteur->start_at;
        return $logPercepteur;


      } catch (\Throwable $th) {
        //throw $th;

        return null;
      }

}

}
