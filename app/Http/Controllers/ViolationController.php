<?php

namespace App\Http\Controllers;

use App\Services\NotificationService;
use App\Violation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class ViolationController extends Controller
{


    public const VIOL  = [1,2,3,4,5,6];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $violations =  Violation::where('is_sent','=',false)->take(10)->get();
        foreach ($violations  as $key => $value) {
            $value->is_sent = true;
            $value->save();
        }
        return response()->json($violations, 200);
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
           $violation = Violation::create([
                'site'=>$request->site,
                'date'=>$request->date,
                'heure'=>$request->heure,
                'percepteur'=>$request->percepteur,
                'sens'=>$request->sens,
                'viol'=>$request->viol,
                'refer'=>Hash::make(Carbon::now('Africa/Lagos'))
            ]);

            $this->alertViloation($violation);

            return response()->json($violation, 200);
            //code...
        } catch (\Exception $ex) {
            //throw $th;
            Log::error($ex->getMessage());
            return response()->json($ex->getMessage(), 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Violation  $violation
     * @return \Illuminate\Http\Response
     */
    public function show(Violation $violation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Violation  $violation
     * @return \Illuminate\Http\Response
     */
    public function edit(Violation $violation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Violation  $violation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Violation $violation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Violation  $violation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Violation $violation)
    {
        //
    }


    public static function  alertViloation($violation){


        switch ($violation->viole) {

                case '1':

                    NotificationService::sendSms('91538546',"$violation->site / $violation->voie : Relais retiré");
                    # code...
                    break;

                    case '2':
                    NotificationService::sendSms('91538546',"$violation->site / $violation->voie : Siréne retiré");

                        # code...
                        break;

                        case '3':
                    NotificationService::sendSms('91538546',"$violation->site / $violation->voie : Courant retiré");

                            # code...
                            break;

                            case '4':
                                # code...
                    NotificationService::sendSms('91538546',"$violation->site / $violation->voie : Arrete pc");

                                break;

                                case '5':
                                    # code...

                    NotificationService::sendSms('91538546',"$violation->site / $violation->voie : Boucle Comptage arreter");

                                    break;

                                    case '6':
                                        # code...
                    NotificationService::sendSms('91538546',"$violation->site / $violation->voie : Barrier lever");

                                        break;

        }
    }
}
