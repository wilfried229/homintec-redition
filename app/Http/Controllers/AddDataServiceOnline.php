<?php
namespace App\Http\Controllers;

use App\Ajustement;
use App\ComptageChecked;
use App\Comptages;
use App\Console\Commands\LogAdmin;
use App\Douane;
use App\Models\logs;
use App\Models\Recette;
use App\Models\Rediton2;
use App\Penalites;
use App\Ptac;
use App\Transfert;
use App\Violation;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AddDataServiceOnline
{


    const CODE_SUPLU = 'GEN-FUBARGS';
    const CODE_MANQUANT = 'GEN-LIKETHEWIND';


    ////ALTER TABLE `recettes` ADD `suplus` INT(11) NULL AFTER `updated_at`, ADD `manquant` INT(11) NULL AFTER `suplus`;


    public function suplusManquant(){

        $recettes = Recette::whereBetween('date_recettes', ["2022-02-01", " 2022-07-18"])->get();


        foreach ($recettes as $key => $value) {
            # code...

            if($value->montant_ecart >= 0){
                $value->update([
                    'suplus'=>$value->montant_ecart,
                    'manquant'=>0
                  ]);
            }else{
                $value->update([
                    'manquant'=>$value->montant_ecart,
                    'suplus'=>0,

                  ]);
            }


        }
        return "OKK";
    }




    public function getTransfer($url){

        try {
            //code...
                   //
        $url = "$url/validation/public/api/homintec/transfert";
        $resp = $this->hitCurl($url,[],'GET');
        if($resp['statusCode'] == 200){
            $apiData = json_decode($resp['resp']);
            foreach ($apiData as $key => $value) {
            if(Douane::where('refer','=',$value->refer)->count()!=0){
                return response()->json(3, 200);
            }
            $transferts = Transfert::create([
                'percepteur'=>$value->percepteur,
                'date'=>$value->date,
                'heure'=>$value->heure,
                'prix'=>$value->prix,
                'site'=>$value->site,
                'cabine'=>$value->cabine,
                'sens'=>$value->sens,
                'ptrac'=>$value->ptrac,
                'plaque'=>$value->plaque,
                'refer'=>$value->refer
            ]);


        }

        Log::info("succes");
        return response()->json($apiData, 200);

        }

        } catch (\Exception $th) {
            //throw $th;
            Log::error($th->getMessage());

            return response()->json($th->getMessage(), 400);

        }


    }




    public function getDouanes($url){

        try {
            //code...
                   //
        $url = "$url/validation/public/api/homintec/douanes";
        $resp = $this->hitCurl($url,[],'GET');
        if($resp['statusCode'] == 200){
            $apiData = json_decode($resp['resp']);
            foreach ($apiData as $key => $value) {
            if(Douane::where('refer','=',$value->refer)->count()!=0){
                return response()->json(3, 200);
            }

            $douane = new Douane();
            $douane->percepteur = $value->percepteur;
            $douane->site = $value->site;
			$douane->heure = $value->heure;
            $douane->date = $value->date;
            $douane->date_api =$value->date_api;
            $douane->cabine  = $value->cabine;
            $douane->prix = $value->prix;
            $douane->sens = $value->sens;
            $douane->type = $value->type;
            $douane->ptrac = $value->ptrac;
            $douane->cmaes = $value->cmaes;
            $douane->es =$value->es;
            $douane->ptt = $value->ptt;
            $douane->over =$value->over;
            $douane->caisse = $value->caisse;
            $douane->plaque  = $value->plaque;
			$douane->visa  = $value->visa;
            $douane->refer = $value->refer;
            $douane->save();


        }

        Log::info("succes");
        return response()->json($apiData, 200);

        }

        } catch (\Exception $th) {
            //throw $th;
            Log::error($th->getMessage());

            return response()->json($th->getMessage(), 400);

        }


    }



    public function getAjustement($url){

        try {
            //code...
                   //
        $url = "$url/validation/public/api/homintec/ajustement";
        $resp = $this->hitCurl($url,[],'GET');
        if($resp['statusCode'] == 200){
            $apiData = json_decode($resp['resp']);
            foreach ($apiData as $key => $value) {
            if(Ajustement::where('refer','=',$value->refer)->count()!=0){
                return response()->json(3, 200);
            }

            Ajustement::create([
               'site'=>$value->site,
               'heure'=>$value->heure,
               'date'=>$value->date,
               'cabine '=>$value->cabine,
               'sens'=>$value->sens,
               'type'=>$value->type,
               'essieu'=>$value->essieu,
               'admin' =>$value->admin,
               'essieu_capte' =>$value->essieu_capte,
               'plaque' =>$value->plaque
            ]);

        }

        Log::info("succes");
        return response()->json($apiData, 200);

        }

        } catch (\Exception $th) {
            //throw $th;
            Log::error($th->getMessage());

            return response()->json($th->getMessage(), 400);

        }


    }



    public function getLoging($url){

        try {
            //code...
                   //
        $url = "$url/validation/public/api/homintec/logs-save";
        $resp = $this->hitCurl($url,[],'GET');
        if($resp['statusCode'] == 200){
            $apiData = json_decode($resp['resp']);
            foreach ($apiData as $key => $value) {
            if(logs::where('refer','=',$value->refer)->count()!=0){
                return response()->json(3, 200);
            }

            logs::create([
             "percepteur" =>$value->percepteur,
                "cabine" => $value->cabine,
                "site" => $value->site,
                "date" => $value->date,
                "heure" => $value->heure,
                "old_percepteur"=>$value->old_percepteur,
                "agent_homintec"=>$value->agent_homintec,
                "statut"=>$value->statut,
                "refer"=>$value->refer,
            ]);
        }

        Log::info("succes");
        return response()->json($apiData, 200);

        }

        } catch (\Exception $th) {
            //throw $th;
            Log::error($th->getMessage());

            return response()->json($th->getMessage(), 400);

        }


    }



    public function getViolation($url){

        try {
            //code...
                   //
        $url = "$url/validation/public/api/homintec/violation";
        $resp = $this->hitCurl($url,[],'GET');
        if($resp['statusCode'] == 200){
            $apiData = json_decode($resp['resp']);
            foreach ($apiData as $key => $value) {
            if(Violation::where('refer','=',$value->refer)->count()!=0){
                return response()->json(3, 200);
            }

            Violation::create([
                'date' => $value->date,
                'heure' => $value->heure,
                'site' =>$value->site,
                'cabine' =>$value->cabine,
                'percepteur'=>$value->percepteur,
                'sens' => $value->sens,
                'refer' =>$value->refer
            ]);

        }

        Log::info("succes");
        return response()->json($apiData, 200);

        }

        } catch (\Exception $th) {
            //throw $th;
            Log::error($th->getMessage());

            return response()->json($th->getMessage(), 400);

        }


    }


    public function getPenalite($url){

        try {
            //code...

                          //
        $url = "$url/validation/public/api/homintec/penalite";
        $resp = $this->hitCurl($url,[],'GET');
        if($resp['statusCode'] == 200){
            $apiData = json_decode($resp['resp']);
            foreach ($apiData as $key => $value) {
            if(Penalites::where('refer','=',$value->refer)->count()!=0){
                return response()->json(3, 200);
            }

            Penalites::create([
                'rouland' =>$value->rouland,
                'plaque' =>$value->plaque,
                'penalite' =>$value->penalite,
                'excedent' =>$value->excedent,
                'autorise' =>$value->autorise,
                'type' =>$value->type,
                'date' =>$value->date,
                'heure' =>$value->heure,
                'es' =>$value->es,
                'percepteur' =>$value->percepteur,
                'site' =>$value->site,
                'cabine' =>$value->cabine,
                'sens' =>$value->sens
            ]);

        }

        Log::info("succes");
        return response()->json($apiData, 200);

        }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }



    public function getComptageChecked($url){

        try {
            //code...
                     //
        $url = "$url/validation/public/api/homintec/comptageChecked";
        $resp = $this->hitCurl($url,[],'GET');
        if($resp['statusCode'] == 200){
            $apiData = json_decode($resp['resp']);
            foreach ($apiData as $key => $value) {
            if(Comptages::where('refer','=',$value->refer)->count()!=0){
                return response()->json(3, 200);
            }

            ComptageChecked::create([
                'site' =>$value->site,
                'cabine' =>$value->cabine,
                'percepteur'=>$value->percepteur,
                'date_interruption' => $value->date_interruption,
                'heure'=>$value->heure,
                'type_interruption'=>$value->type_interruption,
                'refer' => Hash::make(Carbon::now('Africa/Lagos'))
            ]);

        }

        Log::info("succes");
        return response()->json($apiData, 200);

        }

        } catch (\Exception $th) {
            //throw $th;
            Log::error($th->getMessage());

            return response()->json($th->getMessage(), 400);

        }


    }


    public function getValidation($url){

        try {
            //code...
                     //
        $url = "$url/validation/public/api/homintec/validation";
        $resp = $this->hitCurl($url,[],'GET');
        if($resp['statusCode'] == 200){
            $apiData = json_decode($resp['resp']);
            foreach ($apiData as $key => $value) {
            if(Rediton2::where('refer','=',$value->refer)->count()!=0){
                return response()->json(3, 200);
            }

            $redition2 = new Rediton2();
            $redition2->percepteur = $value->percepteur;
            $redition2->site = $value->site;
			$redition2->heure = $value->heure;
            $redition2->date = $value->date;
            $redition2->date_api = $value->date_api;
            $redition2->cabine  = $value->cabine;
            $redition2->prix = $value->prix;
            $redition2->sens = $value->sens;
            $redition2->type = $value->type;
            $redition2->ptrac = $value->ptrac;
            $redition2->cmaes = $value->cmaes;
            $redition2->es =$value->es;
            $redition2->essieu_capter =$value->essieu_capter;
            $redition2->essieu_corriger =$value->essieu_corriger;
            $redition2->ptt = $value->ptt;
            $redition2->over =$value->over;
            $redition2->caisse = $value->caisse;
            $redition2->plaque  = $value->plaque;
			$redition2->visa  = $value->visa;
            $redition2->refer =  $value->refer;
            $redition2->save();

        }

        Log::info("succes");
        return response()->json($apiData, 200);

        }

        } catch (\Exception $th) {
            //throw $th;
        Log::error($th->getMessage());

        return response()->json($th->getMessage(), 400);

        }


    }



    public function sendLogAdmin(){

        try {
         $logs  = LogAdmin::where('is_sent',0)->get();
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
                 "refer"=>$log->refer,

            ];

            $url = "https://reddition.gate24-benin.com/api/homintec/logsAdmin";
            $resp = $this->hitCurl($url,$param,'POST');
            $apiData = "Getting header code {$resp['statusCode']}";

            if($resp['statusCode'] == 200){
                $apiData = json_decode($resp['resp']);
                $logsOld = LogAdmin::find($log->id);
                $logsOld->is_sent =1;
                $logsOld->save();

            }
            ///$abonnes->update(['solde' =>$recharge->montant]);


         }

         Log::info("SEND dat login Admin");

         return true;
        } catch (\Exception $ex) {
            //throw $th;
            Log::info($ex->getMessage());

         return false;

        }
    }
    public function sendptqc(){

        try {
         $ptacs  = Ptac::where('is_sent',0)->get();
        //// $urls = 'gate24-ekpe.ngrok.io/gate24/public';
         foreach ($ptacs as $key => $p) {
             # code...\\
            $param = [
            'site'=>$p->site,
            'date'=>$p->date,
            'admin'=>$p->admin,
            'heure_sortie'=>$p->heure_sortie,
            'heure_entree'=>$p->heure_entree,
            "refer"=>$p->refer,
            ];

            $url = "https://reddition.gate24-benin.com/api/homintec/ptac";
            $resp = $this->hitCurl($url,$param,'POST');
            $apiData = "Getting header code {$resp['statusCode']}";

            if($resp['statusCode'] == 200){
                $apiData = json_decode($resp['resp']);
                $ptac = Ptac::find($p->id);
                $ptac->is_sent =1;
                $ptac->save();

            }
            ///$abonnes->update(['solde' =>$recharge->montant]);


         }

         Log::info("SEND dat ptac");

         return true;
        } catch (\Exception $ex) {
            //throw $th;
            Log::info($ex->getMessage());

         return false;

        }
    }



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
              "essieu_capter" =>$validation->essieu_capter,
              "essieu_corriger" =>$validation->essieu_corriger,
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
