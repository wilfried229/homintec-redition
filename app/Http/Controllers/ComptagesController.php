<?php

namespace App\Http\Controllers;

use App\ComptageChecked;
use App\Comptages;
use App\Models\Rediton2;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ComptagesController extends Controller
{


    public function  checkedComptage(Request $request){

       /// 'date_interruption' => Carbon::now('Africa/Lagos'),

    }

    public function store(Request $request)
    {

       /*  $comptage  = new Comptages();
        $comptage->percepteur = $request->percepteur;
        $comptage->site  = $request->site;
        $comptage->voie = $request->voie;
        $comptage->montant_passage = $request->montant_passage;
        $comptage->montant  = $request->montant;
        $comptage->nbres_camion = $request->nbres_camion;
        $comptage->heure_debut = $request->heure_debut;
        $comptage->heure_fin  = $request->heure_fin;
        $comptage->save(); */


         return response()->json(2, 200);

    }

    public function index()
    {
        $comptages = Comptages::where('is_sent')->take(10)->get();
    foreach ($comptages  as $key => $value) {
        $value->is_sent = true;
        $value->save();
    }

    return response()->json($comptages, 200);
    }



    public function comptageSms(Request $request){
        $this->sendSms($request->phone,$request->messages);
         return response()->json('success', 200);
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
