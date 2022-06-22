<?php

namespace App\Http\Controllers;

use App\Penalites;
use App\penaliteTrac;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class PenalitesController extends Controller
{



    public function trakPenalite(Request $request){

            try {
        $trackPenalite = PenaliteTrac::create([
            'supervisieur'=>$request->supervisieur,
            'password_resp_client'=>$request->password_resp_client,
            'date'=>$request->date,
            'heure'=>$request->heure,
            'site'=>$request->site,
            'voie'=>$request->voie,
            'percepteur'=>$request->percepteur,
            'somme_actuel'=>$request->somme_actuel,
            'somme_ajoute'=>$request->somme_ajoute,
            'penalite_actuel'=>$request->penalite_actuel,
            'penalite_ajoute'=>$request->penalite_ajoute,
        ]);

        return response()->json($trackPenalite,200);


            } catch (\Exception $th) {
                //throw $th;
                return response()->json($th->getMessage(), 301,);
            }


    }

     /**
      *     /**
    * @OA\Info(
    *      version="1.0.0",
    *      title="Api covid19 Documentation",
    *      description="Implementation of Swagger with in Laravel",
    *      @OA\Contact(
    *          email="admin@admin.com"
    *      ),
    *      @OA\License(
    *          name="Apache 2.0",
    *          url="http://www.apache.org/licenses/LICENSE-2.0.html"
    *      )
    * ),
     * @OA\Get(
     *      path="/api/homintec/penalite",
     *      operationId="index",
     *      tags={"Penalite"},

     *      summary="Get List Of penlaite",
     *      description="Returns all penlaite",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     * @OA\Response(
     *      response=400,
     *      description="Bad Request"
     *   ),
     * @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *  )
     */
    public function index()
    {
        ///dd($penalites);

        $penalites =  Penalites::where('is_sent','=',false)->take(10)->get();

        foreach ($penalites  as $key => $value) {
            $value->is_sent = true;
            $value->save();
        }

        return response()->json($penalites, 200);

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
     * path="/api/homintec/penalite",
     * summary="save penalite",
     * description="Login by email, password",
     * operationId="store",
     * tags={"store"},
     * @OA\RequestBody(
     *    required=true,
     *    description="pass penalite",
     *    @OA\JsonContent(
     *       required={"rouland","type","facteur","penalite","autorise","excedant"},
     *       @OA\Property(property="rouland", type="string", format="string", example="string"),
     *       @OA\Property(property="type", type="string", format="string", example="string"),
     *       @OA\Property(property="facteur", type="string", example="string"),
     *    ),
     * ),
     * @OA\Response(
     *    response=422,
     *    description="Wrong credentials response",
     *    @OA\JsonContent(
     *       @OA\Property(property="message", type="string", example="Sorry, wrong email address or password. Please try again")
     *        )
     *     )
     * )
     */
    public function store(Request $request)
    {


        try {
        $penalite = new Penalites();
      ////    $penalite->immatricule  = $request->immatricule;
        $penalite->rouland = $request->rouland;
        $penalite->plaque = $request->plaque;
        $penalite->penalite = $request->penalite;
        $penalite->autorise = $request->autorise;
        $penalite->excedant = $request->excedant;
        $penalite->type= $request->type;
        $penalite->date = $request->date;
        $penalite->heure =  $request->heure;
        $penalite->es = $request->es;
        $penalite->percepteur = $request->percepteur;
        $penalite->site = $request->site;
        $penalite->cabine = $request->cabine;
        $penalite->sens = $request->sens;
		$penalite->refer =  Hash::make($this->dateNow());
        $penalite->save();

        return response()->json($penalite, 200);
        } catch (\Exception $ex) {
            //throw $th;
            Log::info($ex->getMessage());
        return response()->json($ex->getMessage(), 400);

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Penalites  $penalites
     * @return \Illuminate\Http\Response
     */
    public function show(Penalites $penalites)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Penalites  $penalites
     * @return \Illuminate\Http\Response
     */
    public function edit(Penalites $penalites)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Penalites  $penalites
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penalites $penalites)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Penalites  $penalites
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penalites $penalites)
    {
        //
    }

	private function dateNow (){
        $now=  Carbon::now('Africa/Lagos');
        return $now;
    }
}
