<?php

namespace App\Http\Controllers;

use App\LogsAdmin;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class LogsAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        //


          try {

            $logs = LogsAdmin::create([
                "cabine" => $request->cabine,
                "site" => $request->site,
                "date" => $request->date,
                "heure" => $request->heure,
                "old_caissier"=>$request->old_caissier,
                "new_caissier"=>$request->new_caissier,
                "admin"=>$request->admin,
                "statut"=>$request->statut,
                "refer"=>Hash::make(Carbon::now('Africa/Lagos'))
            ]);

            return response()->json($logs, 200);

            } catch (\Exception $ex) {
                //throw $th;
                Log::error($ex->getMessage());
                abort(400,$ex->getMessage());
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LogsAdmin  $logsAdmin
     * @return \Illuminate\Http\Response
     */
    public function show(LogsAdmin $logsAdmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LogsAdmin  $logsAdmin
     * @return \Illuminate\Http\Response
     */
    public function edit(LogsAdmin $logsAdmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LogsAdmin  $logsAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LogsAdmin $logsAdmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LogsAdmin  $logsAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(LogsAdmin $logsAdmin)
    {
        //
    }
}
