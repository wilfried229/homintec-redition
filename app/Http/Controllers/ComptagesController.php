<?php

namespace App\Http\Controllers;

use App\Comptages;
use App\Models\Rediton2;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ComptagesController extends Controller
{

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

        $redition2 = new Rediton2();
        $redition2->percepteur = $request->percepteur;
        $redition2->site = $request->site;
        $redition2->date = Carbon::now('Africa/Lagos');
        $redition2->cabine  = $request->cabine;
        $redition2->prix = $request->prix;
        $redition2->sens = $request->sens;
        $redition2->type = $request->type;
        $redition2->ptrac = $request->ptrac;
        $redition2->cmaes = $request->cmaes;
        $redition2->es =$request->es;
        $redition2->ptt = $request->ptt;
        $redition2->over =$request->over;
        $redition2->caisse = $request->caisse;
        $redition2->plaque  = $request->plaque;
        $redition2->save();




         return response()->json($redition2, 200);

    }

    public function index()
    {

        $comptage = Comptages::all();
        return response()->json($comptage, 200);
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
