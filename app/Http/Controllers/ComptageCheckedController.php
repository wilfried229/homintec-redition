<?php

namespace App\Http\Controllers;

use App\ComptageChecked;
use Carbon\Carbon;
use Illuminate\Http\Request;
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
        foreach ($checkedComptagePannes  as $key => $value) {
            $value->is_sent = true;
            $value->save();
        }

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
                'site' =>$request->site,
                'cabine' =>$request->cabine,
                'percepteur'=>$request->percepteur,
                'date' => $request->date,
                'heure'=>$request->heure,
                'type_interruption'=>$request->type_interruption,
                'refer' => Hash::make(Carbon::now('Africa/Lagos'))
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
}
