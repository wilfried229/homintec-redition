<?php

namespace App\Http\Controllers;

use App\Models\Logs;
use App\Models\Percepteur;
use App\Services\LogingService;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class LogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $logs =  Logs::where('is_sent','=',false)->take(10)->get();
        foreach ($logs  as $key => $value) {
            $value->is_sent = true;
            $value->save();
        }
        return response()->json($logs, 200);
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        try {

              $reponse =   LogingService::saveLoginPercepteur($request);


            return response()->json($reponse, 200);

            } catch (\Exception $ex) {
                //throw $th;

                Log::error($ex->getMessage());

                abort(400,$ex->getMessage());
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Log  $log
     * @return \Illuminate\Http\Response
     */
    public function show(Log $log)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Log  $log
     * @return \Illuminate\Http\Response
     */
    public function edit(Log $log)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Log  $log
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Log $log)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Log  $log
     * @return \Illuminate\Http\Response
     */
    public function destroy(Log $log)
    {
        //
    }

    public function getPercepteurVacationLog(Request $request){
        $percepteurVacation  = LogingService::getPercepteurVoie($request->cabine);
        return response()->json($percepteurVacation, 200);
    }

    public function loginPercepteur(Request $request){

        $percepteurVacation = Percepteur::where('id',$request->percepteur_id)->first();
        try {
            if($percepteurVacation !=null){
                $password = $request->input('password');
                $user = User::query()
                    ->where('id', '=', $percepteurVacation->user_id)
                    ->first();
                if($user == null) { // user not found
                    return response()->json([
                        "message"=> "Cet utilisateur n'existe pas"
                    ], Response::HTTP_UNAUTHORIZED);
                }

                // match password
                $match = Hash::check($password, $user->password);
                if($match) { // login successfully
                  $reponse =   LogingService::getLastIsCabinForPercepteurAndSave($request->percepteur_id,$request->cabine);
                  if($reponse ==null){
                    return response()->json("Ce percepteur n'est pas loger dans cette voie. Veuillez définir la voie", Response::HTTP_NOT_MODIFIED);

                  }
                    return response()->json($reponse, Response::HTTP_OK);
                } else {
                    return response()->json([
                            "message"=> "Mot de passe incorrect"
                        ], Response::HTTP_UNAUTHORIZED);
                }

            }
        }catch (QueryException $exception) {
            Log::error($exception->getMessage());
            return response()->json([
                "message"  => $exception->getMessage(),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

    }

}
