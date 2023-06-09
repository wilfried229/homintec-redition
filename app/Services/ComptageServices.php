<?php

namespace App\Services;

use App\ComptageChecked;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ComptageServices {

    public function __construct() {
        //self::initBinance();
    }


    public static function compatgeByDateByPercepeteur(array $data)
    {

       /// dd(Carbon::createFromFormat('Y-m-d', $data['date_debut'])->startOfDay());
        $comptageCheckedSum = ComptageChecked::query()
            ->where('percepteur', $data['percepteur'])
            ->where('date',$data['date_fin'])
          //  ->where('heure', $data['heure'])
            ->latest()
            ->first();

        return $comptageCheckedSum;
    }




    public function alertViolation(){

      $viloationComptable = ComptageChecked::where(ComptageChecked::IsVIOLATION,true)->get();
        $phone = "";
        $email = "";
      foreach ($viloationComptable as $key => $value) {
        $message = "Violation Site"." de ".$value->site."  de la voie".$value->cabine;
        self::sendSms($phone,$message);
      }
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
