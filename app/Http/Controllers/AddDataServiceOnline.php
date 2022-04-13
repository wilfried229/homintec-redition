<?php
namespace App\Http\Controllers;

use App\Models\logs;
use App\Models\Rediton2;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;


class AddDataServiceOnline
{


    public $urls = ['homintec-peage.com'];




    public function sendLog(){

        try {
         $logs  = logs::where('is_sent',0)->get();
        //// $urls = 'gate24-ekpe.ngrok.io/gate24/public';
         foreach ($logs as $key => $log) {
             # code...\\
            $param = [
                "percepteur" =>$log->percepteur,
                "cabine" => $log->cabine,
                "site" => $log->site,
                "date" => $log->date,
                "heure" => $log->heure,
                "old_percepteur"=>$log->old_percepteur,
                "agent_homintec"=>$log->agent_homintec,
                "statut"=>$log->statut,
            ];

            $url = "https://reddition.gate24-benin.com/api/homintec/logs-save";
            $resp = $this->hitCurl($url,$param,'POST');
            $apiData = "Getting header code {$resp['statusCode']}";

            if($resp['statusCode'] == 200){
                $apiData = json_decode($resp['resp']);
                $logsOld = logs::find($log->id);
                $logsOld->is_sent =1;
                $logsOld->save();

            }
            ///$abonnes->update(['solde' =>$recharge->montant]);


         }

         Log::info("SEND dat log");

         return true;
        } catch (\Exception $ex) {
            //throw $th;
            Log::info($ex->getMessage());

         return false;

        }
    }



    public function sendvalidation(){

        try {
         $validations  = Rediton2::where('is_sent',0)->get();
        //// $urls = 'gate24-ekpe.ngrok.io/gate24/public';
         foreach ($validations as $key => $validation) {
             # code...\\
            $param = [
              "percepteur" => $validation->percepteur,
              "site" => $validation->site,
              "date" => $validation->date,
              "date_api" => $validation->date_api,
              "heure" => $validation->heure,
              "cabine"  => $validation->cabine,
              "prix" => $validation->prix,
              "sens" => $validation->sens,
              "type" => $validation->type,
              "ptrac" => $validation->ptrac,
              "cmaes" => $validation->cmaes,
              "es" =>$validation->es,
              "ptt" => $validation->ptt,
              "over" =>$validation->over,
              "caisse" => $validation->caisse,
              "plaque"  => $validation->plaque,
              "visa" =>$validation->visa,
            ];

            $url = "https://reddition.gate24-benin.com/api/homintec/validation";
            $resp = $this->hitCurl($url,$param,'POST');
            if($resp['statusCode'] == 200){
                $apiData = json_decode($resp['resp']);
                $valida = Rediton2::find($validation->id);
                $valida->is_sent =1;
                $valida->save();
            }
            ///$abonnes->update(['solde' =>$recharge->montant]);

         }

         Log::info("SEND dat log");

         return true;
        } catch (\Exception $ex) {
            //throw $th;
            Log::info($ex->getMessage());

         return false;

        }
    }



    function hitCurl($url,$param = [],$type = 'POST'){
        $ch = curl_init();
        if(strtoupper($type) == 'GET'){
            $param = http_build_query((array)$param);
            $url = "{$url}?{$param}";
        }else{
            curl_setopt_array($ch,[
                CURLOPT_POST => (strtoupper($type) == 'POST'),
                CURLOPT_POSTFIELDS => (array)$param,
            ]);
        }
        curl_setopt_array($ch,[
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
        ]);
        $resp = curl_exec($ch);
        $statusCode = curl_getinfo($ch,CURLINFO_HTTP_CODE);
        curl_close($ch);
        return [
            'statusCode' => $statusCode,
            'resp' => $resp
        ];
    }


}
