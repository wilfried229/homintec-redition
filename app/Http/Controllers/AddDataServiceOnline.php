<?php
namespace App\Http\Controllers\Services;

use App\Http\Controllers\UtilServices;
use App\Models\Abonnes;
use App\Models\logs;
use App\Models\Site;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;


class AddDataServiceOnline
{


    public $urls = ['homintec-peage.com'];




    public function sendRechargeLocalBy($is_sent,$url){

        try {
         $recharges  = logs::where('site','=','EKPE')->where("refer","!=",null)->where($is_sent,false)->get();

        //// $urls = 'gate24-ekpe.ngrok.io/gate24/public';
         $rechargesAllAbonnes = [];
         foreach ($recharges as $key => $recharge) {
             # code...
             $abonnes = Abonnes::find($recharge->abonner_id);
             if ($abonnes  !=null) {
                 $updateAbonnes = Http::post("http://$url/api/homintec/add/solde", [
                     "idBadge" =>$abonnes->idBadge,
                     "addnewSolde" => $recharge->montant,
                     "site" => $recharge->site,
                     "percepteur" => $recharge->percepteur,
                     "refer" => $recharge->refer
                 ]);
                 ///$abonnes->update(['solde' =>$recharge->montant]);
                 $recharge->update([$is_sent =>true]);
                array_push($rechargesAllAbonnes,$updateAbonnes->json());
             }

         }

         Log::info("SEND RECHARGE LOCAL $url");

         return true;
        } catch (\Exception $ex) {
            //throw $th;
            Log::info($ex->getMessage());

         return false;

        }
     }


    /**
     * @param Type var $abonnes
     */

    public function updateSoldeAbonnersBySiteSent($url,$is_sent)
    {

        try {

            $dernierSoldes = Site::where('created_at','>','2021-08-17')->where("$is_sent","=",false)->where("refer","!=",null)->where("site","=",'EKPE')->get()->take(50);

            if ($dernierSoldes !=null) {
                # code...
                foreach ($dernierSoldes as $request) {
                    ///$this->updateAbonnersCompte($request['idBadge'],$request['solde']);
                    if ($this->substratcAbonnersOnLigneSynchro($is_sent,$request['id'],$request['idBadge'], $request['montant'], $request['site'], $request['voie'], $request['passage_verified_at'],$url,$request['type_passage'],$request['percepteur'],$request['statut'],$request['refer'])== true) {

                        Log::info("Operation d'envoi de passage reussi avec succes");
                    }

                }
                return true;
            }

        } catch (\Exception $ex) {

            Log::info($ex->getMessage());
            //throw $th;
            return false;
        }


    }


    private function updateTraficLocal($idSite,$is_sent)
    {

        try {

            $updateTraficLocal = Site::where('id', $idSite)->first();
            $updateTraficLocal->$is_sent = true;
            $updateTraficLocal->update();
            Log::info("update done trafic $is_sent");

			DB::commit();
            return true;

        } catch (\Exception $ex) {
            //throw $th;
			DB::rollBack();
            Log::info($ex->getMessage());
            return false;
        }

    }


    public function substratcAbonnersOnLigneSynchro($is_sent,$id,$idBadge, $Passage_prix, $site, $voie, $passage_verified_at,$url,$type_passage,$percepteur,$statut,$refer)
    {
        try {
               //// $urlHttp = $url =="gate24-benin.com" ? "https":"http";
                $param = [
                    'idBadge' => $idBadge,
                    'Passage_prix' => $Passage_prix,
                    'site' => $site,
                    'voie' => $voie,
                    'passage_verified_at' => $passage_verified_at,
                    'type_passage' => $type_passage,
                    'percepteur'=>$percepteur,
                    'statut'=>$statut,
                    'refer' =>$refer
                ];

                $url = "$url/api/homintec/substract/solde/checked/notConnexion/save";
                $resp = $this->hitCurl($url,$param,'POST');
                $apiData = "Getting header code {$resp['statusCode']}";

                if($resp['statusCode'] == 200){
                    $apiData = json_decode($resp['resp']);
                    $this->updateTraficLocal($id,$is_sent);
                }

                Log::info("passage historique send success to $url  $apiData");

                return true;

        } catch (\Exception $th) {
            //throw $th;
           Log::error($th->getMessage());
            //throw $th;
            return false;
        }


    }


    /**
     * Enroulment d'une carte abonners
     */
    public function sychnroStoreAbonnesBySite($url,$is_sent)
    {

        try {

            $abonneSynchron = Abonnes::where($is_sent, '=',0)->get();

            if ($abonneSynchron == null || empty($abonneSynchron)) {
                Log::info('Pas de ENROULEMET à envoyer vodougbe');
                return true;
            }

            foreach ($abonneSynchron as $value) {

                    if ($this->addnewAbonneOnlineTogo($value['idBadge'], $value['nom'], $value['prenom'], $value['tel'], $value['adresse'], $value['nip'], $value['type'], $value['solde'], $url,$value['iduhf'],$value['codeuhf'],$value['plaque'],$value['essieu']) == true) {

                    $this->updateStoreServeur($value['id'],$is_sent);

                    Log::info('ENROULEMET envoyé avec success');
                }
            }


            return true;
        } catch (\Exception $ex) {
           /// Log::info($ex->getMessage());
            return false;
        }


    }



    private  function updateStoreServeur($idAbonner,$is_sent){

        try {
            $storeUpdate = Abonnes::where('id', $idAbonner)->first();
            $storeUpdate->$is_sent = true;
            $storeUpdate->update();

            return true;

        }catch (\Exception $ex){

            return false;

        }

    }


    public function addnewAbonneOnlineTogo($idBadge, $nom, $prenom, $tel, $adresse, $nip, $type, $solde, $url,$iduhf,$codeuhf,$plaque,$essieu)
    {

        try {

            if (UtilServices::getTestConnexionApiTogo($url) == true) {

                $addAbonnes = Http::post("http://$url/api/homintec/abonnes", [
                  "idBadge" => $idBadge,
                    "nom" => $nom,
                    "prenom" => $prenom,
                    "tel" => $tel,
                    "adresse" => $adresse,
                    "nip" => $nip,
                    "type" => $type,
                    "solde" => $solde,
                    "iduhf" =>$iduhf,
                    "codeuhf"=>$codeuhf,
                    "plaque"=>$plaque,
                    "essieu"=>$essieu
                ]);

                if ($addAbonnes->status() == 201) {
                    Log::info("donnés nouvelle carte envoyer avec succes sur les sites");
                    return true;
                } else {
                    Log::info("echec d'envoi de données sur  $url");
                    return false;
                }
            } else {
                Log::info("adresse $url a perdu la liaison ");
                return false;
            }


        } catch (\Throwable $th) {

            Log::error($th->getMessage());
            //throw $th;

            return false;
        }
    }


    /**
     *
     * Synchro Recharge local
     */
    public function rechargeBySite($idBadge, $addAbonnes, $site, $percepteur, $url,$refer)
    {

        try {



            if (UtilServices::getTestConnexionApiTogo($url) == true) {

                $response = Http::post("http://$url/api/homintec/add/solde", [
                    "idBadge" => $idBadge,
                    "addnewSolde" => $addAbonnes,
                    "site" => $site,
                    "percepteur" => $percepteur,
                    "refer" =>$refer
                ]);

                if ($response->status() == 200) {
                    Log::info("$url effectuer des rechargements avec sucess");
                    return true;
                } else {
                    Log::info("echec d'envoi de données sur  $url");
                    return false;
                }

            } else {
                Log::info("adresse $url a perdu la liaison ");
                return false;
            }


        } catch (\Exception  $ex) {
            //throw $th;
            Log::info($ex->getMessage());

            return false;

        }
    }


    // envoie des données de recharge sur les differents site
    public function sychnroSoldeRecharges($url,$is_sent)
    {

        try {

            $recharges = Recharge::where($is_sent, false)->get();
            if ($recharges == null || $recharges == "") {
                Log::error('Pas de recharge à envoyer');
                return false;
            }

            foreach ($recharges as $request) {

                $idBagdeAbonners = Abonnes::where('id', $request['abonner_id'])->first();

                if ($this->rechargeBySite($idBagdeAbonners['idBadge'], $request['montant'], $request['site'], $request['percepteur'], $url,$request['refer']) == true) {
                    $rechargesUpadate = Recharge::where('id', $request['id'])->first();
                    $rechargesUpadate->$is_sent = true;
                    $rechargesUpadate->update();
                    Log::info('Recharge envoyé avec success Vodougbe');

                }

            }

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
