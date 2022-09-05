<?php

namespace App\Http\Controllers;

use App\Models\Site;
use App\Models\Vacation as ModelsVacation;
use App\vacation;
use Illuminate\Http\Request;



class VacationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vacations =    ModelsVacation::all();


        return view('dashboard.vacations.index',compact('vacations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $sites = Site::all();

        return view("dashboard.vacations.create",compact('sites'));

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

        $vacations =    ModelsVacation::create([
            'type'=>$request->type,
            'sites_id'=>$request->site_id
        ]);

        return  redirect()->route('vacation.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\vacation  $vacation
     * @return \Illuminate\Http\Response
     */
    public function show(vacation $vacation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\vacation  $vacation
     * @return \Illuminate\Http\Response
     */
    public function edit(vacation $vacation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\vacation  $vacation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, vacation $vacation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\vacation  $vacation
     * @return \Illuminate\Http\Response
     */
    public function destroy(vacation $vacation)
    {
        //
    }
}
