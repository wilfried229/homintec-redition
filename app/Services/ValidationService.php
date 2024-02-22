<?php

namespace App\Services;

use App\Models\Validation;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ValidationService {

    public function __construct() {
        //self::initBinance();
    }


    public static function save(Request $request) {

        $isviolation = false;
        if ($request->isValid == false && $request->isLoop == true) {
            # code...
             $isviolation = true;
        }

        $lastValidationPrix = Validation::where('voie_id','=',$request->voie_id)->latest()->first()->caisse  ?? 0;
        $validation = new Validation();
        $validation->percepteur_id = $request->percepteur_id;
        $validation->voie_id = $request->voie_id;
        $validation->heure = Carbon::now('Africa/Lagos')->format('H:i');
        $validation->date = Carbon::now('Africa/Lagos');
        $validation->date_api =Carbon::now('Africa/Lagos');
        $validation->prix = (int)$request->prix;
        $validation->type = $request->type;
        $validation->ptrac = $request->ptrac;
        $validation->cmaes = $request->cmaes;
        $validation->es =$request->es;
        $validation->essieu_capter =$request->essieu_capter;
        $validation->essieu_corriger =$request->essieu_corriger;
        $validation->ptt = $request->ptt;
        $validation->over =$request->over;
        $validation->caisse = (int)$lastValidationPrix + (int)$request->prix ;
        $validation->plaque  = $request->plaque;
        $validation->plaque_percepteur  = $request->plaque_percepteur;
        $validation->visa  = $request->visa;
        $validation->isValid  = $request->isValid ?? 1;
        $validation->refer = Hash::make(Carbon::now('Africa/Lagos'));
        $validation->isLoop  = $request->isLoop ?? 0;
        $validation->isViloation  = $isviolation ?? 0;
        $validation->classe  = $request->classe ?? "OK" ;
        $validation->nomenclature  = $request->nomenclature  ?? "OKK";
        $validation->save();

       // return  self::reponseReturn($validation);
       return  $validation;

    }







    public static function sendSms($to ,$message){

        try {
         //$sendSms = Http::get('https://sirb-sms.bomboo.io/sms',[r'heade',]);
         $response = Http::withHeaders([
            'x-api-key' => env('SMS_KEY_KKIAPAY'),
        ])->get('https://sirb-sms.bomboo.io/sms', [
            'to'=>$to,'message'=>$message
        ]);
         Log::info($response);
            return true;
        } catch (\Exception $ex) {
            Log::info($ex->getMessage());
            return false;
            //throw $th;
        }

    }


    public static function reponseReturn($reponse)
    {


        $reponse = [
            'id' => $reponse->id,
           "percepteur" => $reponse->percepteur,
           "site" => $reponse->site,
           "heure" => $reponse->heure,
           "date" =>  $reponse->date,
           "date_api" =>  $reponse->date_api,
           "cabine"  => $reponse->cabine,
           "prix" => (int)$reponse->prix,
           "sens" => $reponse->sens,
           "type" => $reponse->type,
           "ptrac" => $reponse->ptrac,
           "cmaes" => $reponse->cmaes,
           "es" =>$reponse->es,
           "essieu_capter" =>$reponse->essieu_capter,
           "essieu_corriger" =>$reponse->essieu_corriger,
           "ptt" => $reponse->ptt,
           "over" =>$reponse->over,
           "caisse" =>(int) $reponse->caisse ,
           "plaque"  => $reponse->plaque,
           "plaque_percepteur"  => $reponse->plaque_percepteur,
           "visa"  => $reponse->visa,
           "isValid"  =>(int) $reponse->isValid ,
           "refer" => $reponse->refer,
           "isLoop"  =>(int) $reponse->isLoop,
           "isViloation"  =>(int) $reponse->isviolation ,
           "classe"  => $reponse->classe ,
           "nomenclature"  => $reponse->nomenclature  ,
            'created_at' => $reponse->created_at->format('d/m/Y'),
            'updated_at' => $reponse->updated_at,
        ];
        return $reponse;
    }



    public function validationRecettesBycabine($voie_id,$dateDebut, $dateFin){
        /// dd($dateDebut->toDateString());
             $validation = Validation::
              where('voie_id',$voie_id)
              ->whereBetween('date', [
                Carbon::create($dateDebut)->toDateString(),
                Carbon::create($dateFin)->toDateString() ])
              ->orderBy('id','DESC');
            return  $validation;
    }



  public static  function generateDigits($length) {
        $add = 1;
        $max = 12 - $add;
        if ($length > $max) {
            return self::generateDigits($max) . self::generateDigits($length - $max);
        }
        $max = pow(10, $length + $add);
        $min = $max / 10;
        $number = mt_rand($min, $max);

        return strval($number);
    }


}