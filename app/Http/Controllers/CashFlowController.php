<?php

namespace App\Http\Controllers;

use App\CashFlow;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CashFlowController extends Controller
{



    public function testUpdateRequest(){


        $cashFLows = CashFlow::all();

        $alldata8 =[];
        $alldata15 =[];
        $alldata19 =[];
        $alldata22 =[];

        $heures  =['06','07','08','09','10'];
        $heures14  =['14','15','16','17'];
        $heures19  =['18','19','20'];
        $heures22  =['21','22','23','00'];

        foreach ($cashFLows as $key => $cash) {
            # code...
            ////$cash->update(["date_debut"=>$value]);
            $dateFin  = Carbon::create($cash->date);
            if (in_array(date('H', strtotime($cash->date)),$heures)) {
                $date_debut = $dateFin->subDay();
            $cash->update(["date_debut"=>$date_debut]);
           /// array_push($alldata8,$dateFin);
            }
            if (in_array(date('H', strtotime($cash->date)),$heures14)) {
           $cash->update(["date_debut"=>$dateFin]);
                 ///array_push($alldata15,$dateFin);
            }
            if (in_array(date('H', strtotime($cash->date)),$heures19)) {
                $cash->update(["date_debut"=>$dateFin]);
                ////array_push($alldata19,$dateFin);
           }
           if (in_array(date('H', strtotime($cash->date)),$heures22)) {
            $cash->update(["date_debut"=>$dateFin]);
            ///array_push($alldata22,$dateFin);
         }


        }

        return response()->json("sucess", 200,);
    }

    public function indexDay(){

    $sites = ['EKPE','AHOZON','SIRAROU','DIHO','KEDEKPO','HOUEGBO','GRAND-POPO'];
    return  view('dashboard.cashFlow.modal-day',compact('sites'));

    }

    public function indexMonth(){

        $sites = ['EKPE','AHOZON','SIRAROU','DIHO','KEDEKPO','HOUEGBO','GRAND-POPO'];
        return  view('dashboard.cashFlow.modal-month',compact('sites'));

    }

    public function rapportMensuelsChoice(Request  $request){

        $date = $request->date;
        $dateDebut  = Carbon::create($date);
        $dateDebut->startOfMonth();
        $dateFin  = Carbon::create($date);
        $dateFin->endOfMonth();
        $site = $request->site;
        $cashFlows = CashFlow::Where('site',$site)
        ->whereBetween('date_debut', [$dateDebut, $dateFin])
        ->get();
        $montantMensuels = $cashFlows->sum('recette_informatise');
        return  view('dashboard.cashFlow.month',compact('date','cashFlows','montantMensuels','site'));
    }

    public function rapportJoursChoice(Request  $request){

        $date = $request->date;
        $site = $request->site;
        $cashFlows = CashFlow::Where('site',$site)
        ->whereDate('date_debut', $date)
        ->get();
        $montantJournalier = $cashFlows->sum('recette_informatise');

        return  view('dashboard.cashFlow.day',compact('date','cashFlows','montantJournalier','site'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cashFlows = CashFlow::where('site','=',null)->get();
        return view('dashboard.cashFlows',compact('cashFlows'));
        ///return response()->json($cashFlows, 200);
        //
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
        try {
            $data = $request->all();
            unset($data["date"]);


          /*   unset($data["date"]);
            unset($data["date_debut"]);

            $data = array_merge($data, ['date' => Carbon::now('Africa/Lagos'),'date_debut']);
           // dd($data); */
            $data = array_merge($data, ['date' => Carbon::now('Africa/Lagos')]);
           // dd($data);
          $cashFlow =  CashFlow::create($data);
        return response()->json($cashFlow, 200);
            //code...
        } catch (\Exception $ex) {
            //throw $th;
            Log::info($ex->getMessage());
            abort(500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CashFlow  $cashFlow
     * @return \Illuminate\Http\Response
     */
    public function show(CashFlow $cashFlow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CashFlow  $cashFlow
     * @return \Illuminate\Http\Response
     */
    public function edit(CashFlow $cashFlow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CashFlow  $cashFlow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CashFlow $cashFlow)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CashFlow  $cashFlow
     * @return \Illuminate\Http\Response
     */
    public function destroy(CashFlow $cashFlow)
    {
        //
    }
}
