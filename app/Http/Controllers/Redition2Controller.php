<?php

namespace App\Http\Controllers;

use App\Models\Redition;
use App\Models\Rediton2;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class Redition2Controller extends Controller
{



    public function getValidationByVoie(){

       /// $validation = Rediton2::where('voie',)->get();
    }
    public function  getvalidation(){
        $redition2 = Rediton2::where('is_sent',0)->get();
        return response()->json($redition2, 200);

    }


    public function  updateDataValidatedRecevied(Request $request){

        $redition2 = Rediton2::where('id',$request->id)->first();
        $redition2->is_sent  = true;
        $redition2->save();
        return response()->json('success', 200);
    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $validation =  Rediton2::where('is_sent','=',false)->take(10)->get();
        foreach ($validation  as $key => $value) {
            $value->is_sent = true;
            $value->save();
        }
        return response()->json($validation, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
 /**
     * @OA\Post(
     * path="/api/homintec/validtion",
     * summary="save validation",
     * description="data array",
     * operationId="store",
     * tags={"store"},
     * @OA\RequestBody(
     *    required=true,
     *    description="pass recette",
     *    @OA\JsonContent(
     *       required={"precepteur","site","cabine","prix","sens","type","ptrac","cmaes","es","ptt","over","caisse","plaque"},
     *       @OA\Property(property="precepteur", type="string", format="string", example="string"),
     *       @OA\Property(property="type", type="string", format="string", example="string"),
     *       @OA\Property(property="cabine", type="string", example="string"),
     *       @OA\Property(property="type", type="string", example="string"),
     *       @OA\Property(property="ptrac", type="string", example="string"),
     *       @OA\Property(property="cmaes", type="string", example="string"),
     *       @OA\Property(property="es", type="string", example="string"),
     *       @OA\Property(property="ptt", type="string", example="string"),
     *       @OA\Property(property="over", type="string", example="string"),
     *       @OA\Property(property="caisse", type="string", example="string"),
     *       @OA\Property(property="plaque", type="string", example="string"),
     *       @OA\Property(property="visa", type="string", example="string"),
     *
     *
     *
     *
     *
     *
     *
     *
     *    ),
     * ),
     * @OA\Response(
     *    response=422,
     *    description="Wrong credentials response",
     *    @OA\JsonContent(
     *       @OA\Property(property="message", type="string", example="Sorry, w")
     *        )
     *     )
     * )
     */
    public function store(Request $request)
    {


        try {


            if (Rediton2::where('refer','=',$request->refer)->count() !=0) {
                # code...
                return response()->json('Existe deja', 200);
            }

            $redition2 = new Rediton2();
            $redition2->percepteur = $request->percepteur;
            $redition2->site = $request->site;
			$redition2->heure = $request->heure;
            $redition2->date = $request->date;
            $redition2->date_api = $this->dateNow();
            $redition2->cabine  = $request->cabine;
            $redition2->prix = (int)$request->prix;
            $redition2->sens = $request->sens;
            $redition2->type = $request->type;
            $redition2->ptrac = $request->ptrac;
            $redition2->cmaes = $request->cmaes;
            $redition2->es =$request->es;
            $redition2->essieu_capter =$request->essieu_capter;
            $redition2->essieu_corriger =$request->essieu_corriger;
            $redition2->ptt = $request->ptt;
            $redition2->over =$request->over;
            $redition2->caisse = $request->caisse;
            $redition2->plaque  = $request->plaque;
			$redition2->visa  = $request->visa;
			///$redition2->comptage  = $request->comptage;
            $redition2->refer =  Hash::make($this->dateNow());
			//////$redition2->total  = $request->total;
            $redition2->save();

            return response()->json($redition2, 200);

            } catch (\Exception $ex) {
                //throw $th;

                Log::error($ex->getMessage());

                abort(400,$ex->getMessage());
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
       return response()->json(Rediton2::find($id), 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    private function dateNow (){
        $now=  Carbon::now('Africa/Lagos');
        return $now;
    }

    function hitCurl($url,$param = [],$type){
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


    public function updateValidation(Request $request)
    {

        try {

            if (Rediton2::where('refer','=',$request->refer)->count() !=0) {
                return response()->json('Existe deja', 200);
            }

            $validation = Rediton2::where('id',$request->id)->first();

            $validation->update(
              [
                "comptage"=>$request->comptage,
                "date_comptage" =>$this->dateNow(),
              ]

              );


            return response()->json($validation, 200);

            } catch (\Exception $ex) {
                //throw $th;

                Log::error($ex->getMessage());

                abort(400,$ex->getMessage());
            }
    }


}
