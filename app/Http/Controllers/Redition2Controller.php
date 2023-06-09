<?php

namespace App\Http\Controllers;

use App\Models\Redition;
use App\Models\Validation;
use App\Services\ValidationServices;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class validationController extends Controller
{



    public function getValidationByVoie(){

       /// $validation = Validation::where('voie',)->get();
    }
    public function  getvalidation(){
        $validation = Validation::where('is_sent',0)->get();
        return response()->json($validation, 200);

    }


    public function  updateDataValidatedRecevied(Request $request){

        $validation = Validation::where('id',$request->id)->first();
        $validation->is_sent  = true;
        $validation->save();
        return response()->json('success', 200);
    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $validation =  Validation::where('is_sent','=',false)->take(10)->get();
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

    public function store(Request $request)
    {
        try {
            if (Validation::where('refer','=',$request->refer)->count() !=0) {
                return response()->json('Existe deja', 200);
            }
            $validation = ValidationServices::save($request);
            return response()->json($validation, 200);
            } catch (\Exception $ex) {
                Log::error($ex->getMessage());
                return response()->json($ex->getMessage(),400);
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
       return response()->json(Validation::find($id), 200);
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

            if (Validation::where('refer','=',$request->refer)->count() !=0) {
                return response()->json('Existe deja', 200);
            }

            $validation = Validation::where('id',$request->id)->first();

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
