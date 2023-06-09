<?php

namespace App\Http\Controllers;

use App\ComptageChecked;
use App\Services\ComptageServices;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class ComptageCheckedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $checkedComptagePannes = ComptageChecked::where('is_sent')->take(10)->get();
        /*  foreach ($checkedComptagePannes  as $key => $value) {
            $value->is_sent = true;
            $value->save();
        } */

        return response()->json($checkedComptagePannes, 200);
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
            //code...
            $checkedComptagePanne  = ComptageChecked::create([
                ComptageChecked::SITE => $request->site,
                ComptageChecked::CABINE => $request->cabine,
                ComptageChecked::PERCEPTEUR => $request->percepteur,
                ComptageChecked::DATE => $request->date,
                ComptageChecked::HERURE=> $request->heure,
                ComptageChecked::PRIX => $request->prix,
                ComptageChecked::IS_CLOSE => false,
                ComptageChecked::NBR_VEHICULE=> $request->nbre_vehicule,
                ComptageChecked::REFER => Hash::make(now()),
                ComptageChecked::IsVIOLATION =>$request->isViloation,
            ]);

            return response()->json($checkedComptagePanne, 200);
        } catch (\Exception $ex) {
            //throw $th;
            Log::error($ex->getMessage());
            return response()->json($ex->getMessage(), 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ComptageChecked  $comptageChecked
     * @return \Illuminate\Http\Response
     */
    public function show(ComptageChecked $comptageChecked)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ComptageChecked  $comptageChecked
     * @return \Illuminate\Http\Response
     */
    public function edit(ComptageChecked $comptageChecked)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ComptageChecked  $comptageChecked
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ComptageChecked $comptageChecked)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ComptageChecked  $comptageChecked
     * @return \Illuminate\Http\Response
     */
    public function destroy(ComptageChecked $comptageChecked)
    {
        //
    }


    public function getCompatgeByDateByPercepeteur(Request $request)
    {
        $comptageCheckedSum = ComptageChecked::query()
            ->where('percepteur', $request->percepteur)
            ->latest()
            ->first();

        return response()->json($comptageCheckedSum, 200);
    }



    public function getCompatgeByDateByPercepeteurAll(Request $request)
    {
        $comptageCheckedSum = ComptageChecked::where('date', $request->date)
            ->where('heure', $request->heure)
            ->where('percepteur', $request->percepteur)
            ->where('voie', $request->voie)
            ->sum('prix');
        $Nombrecomptage = ComptageChecked::where('date', $request->date)
            ->where('heure', $request->heure)
            ->where('percepteur', $request->percepteur)
            ->where('voie', $request->voie)
            ->sum('prix');
        $comptages = [
            'sommeComptage' => $comptageCheckedSum,
            'nombreComptage' => $Nombrecomptage
        ];
        return response()->json($comptages, 200);
    }

    public function closeAccountByPercepteur(Request $request)
    {

        try {

            ComptageChecked::query()
                ->where('percepteur', $request->percepteur)
                ->update([
                    'is_close' => true
                ]);

            return response()->json(['status' => 1, "message" => "Compte $request->percepteur clotutrer "], 200);
        } catch (\Exception $th) {
            //throw $th;
            return response()->json($th->getMessage(), 400);
        }
    }

    public function viewComptageByVacation(){
        $percepteurs = ComptageChecked::select('percepteur')->distinct()->get();
        return view('dashboard.comptages.search-by-vacation',compact('percepteurs'));
    }

  /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function searchComptageVacationPercepteur(Request $request){

        $data['date_fin'] = Carbon::parse($request->query('date_fin'))->format('Y-m-d');
        $data['heure'] =Carbon::parse($request->query('date_fin'))->format('H:i:s');;
        $data['percepteur'] =$request->query('percepteur');
        $searchComptagePercepteur = ComptageServices::compatgeByDateByPercepeteur($data);
        return view('dashboard.comptages.getComptagePercepteur',compact('searchComptagePercepteur','data'));
    }
}
