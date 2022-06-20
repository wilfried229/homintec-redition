<?php

namespace App\Http\Controllers;

///use App\Models\Sens as ModelsSens;

use App\Models\Sens as ModelsSens;
use App\Sens;
use Illuminate\Http\Request;


class SensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sens = ModelsSens::all();

        return view('dashboard.sens.index',compact('sens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dashboard.sens.create");

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

        Sens::create($request->all());

        return  redirect()->route('sens.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sens  $sens
     * @return \Illuminate\Http\Response
     */
    public function show(Sens $sens)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sens  $sens
     * @return \Illuminate\Http\Response
     */
    public function edit(Sens $sens)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sens  $sens
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sens $sens)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sens  $sens
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sens $sens)
    {
        //
    }
}
