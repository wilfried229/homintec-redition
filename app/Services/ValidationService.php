<?php

namespace App\Services;

use App\ComptageChecked;
use App\Models\Validation;
use Carbon\Carbon;
use DateServices;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Notifications\Events\NotificationSent;
use Illuminate\Support\Facades\Hash;

class ValidationServices {

    public function __construct() {
        //self::initBinance();
    }


    public static function save(Request $request) {

        $isviolation = false;
        if ($request->isValid == false && $request->isLoop == true) {
            # code...
             $isviolation = true;
        }
        $validation = new Validation();
        $validation->percepteur = $request->percepteur;
        $validation->site = $request->site;
        $validation->heure = $request->heure;
        $validation->date = $request->date;
        $validation->date_api = DateServices::dateNow();
        $validation->cabine  = $request->cabine;
        $validation->prix = (int)$request->prix;
        $validation->sens = $request->sens;
        $validation->type = $request->type;
        $validation->ptrac = $request->ptrac;
        $validation->cmaes = $request->cmaes;
        $validation->es =$request->es;
        $validation->essieu_capter =$request->essieu_capter;
        $validation->essieu_corriger =$request->essieu_corriger;
        $validation->ptt = $request->ptt;
        $validation->over =$request->over;
        $validation->caisse = $request->caisse;
        $validation->plaque  = $request->plaque;
        $validation->plaque_percepteur  = $request->plaque_percepteur;
        $validation->visa  = $request->visa;
        $validation->isValid  = $request->isValid;
        $validation->refer =  DateServices::cryptDate($request->site);
        $validation->isLoop  = $request->isLoop;
        $validation->isViloation  = $isviolation;
        $validation->classe  = $request->isviolation;
        $validation->nomenclature  = $request->nomenclature;


        $validation->save();

        if ($validation->essieu_capter != $validation->essieu_corriger) {
            # code...
            NotificationService::sendSms('91538546',"violation de donnée : Essieu capter par le système : $validation->essieu_capter ; Essieu Ajuster par le percepteur : $validation->essieu_corriger");
        }

        if ($validation->plaque_percepteur != $validation->plaque_percepteur) {
            # code...
            NotificationService::sendSms('91538546',"violation de donnée : Plaque capter par le système : $validation->plaque; Plaque Ajuster par le percepteur : $validation->plaque_percepteur");
        }
        return $validation;
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


}
