<?php

namespace App\Http\Livewire;

use App\Models\Site;
use App\Models\SurchagesManuel;
use Carbon\Carbon;
use Livewire\Component;

class Sucharge extends Component
{

    public $date;
    public $date_debut;
    public $date_fin;
    public $site_id;
    public $type;


    public function render()
    {

        $dateDebut  = Carbon::create($this->date);
        $dateDebut->startOfMonth();
        $dateFin  = Carbon::create($this->date);
        $dateFin->endOfMonth();

     /////  dd($this->date_debut );
        $debut = Carbon::parse($this->date_debut)->format('y-m-d');
        $fin = Carbon::parse($this->date_fin)->format('y-m-d');

        $site = Site::find($this->site_id);

        $date = $this->date;

       $type = $this->type;

        $surcharges = SurchagesManuel::Where('sites_id',$this->site_id)
        ->whereBetween('date_passage', [$debut, $fin])
        ->orderBy('date_passage','ASC')
      ->where('type',$type? "ANNULE": "NORMAL")
        ->get();

        $montantMensuels = $surcharges->sum('recette_informatise');

       // dd($debut,$surcharges,$site);

        return view('livewire.sucharge',compact('date','surcharges','montantMensuels','site'));
    }



    public function save(){

        $dateDebut  = Carbon::create($this->date);
        $dateDebut->startOfMonth();
        $dateFin  = Carbon::create($this->date);
        $dateFin->endOfMonth();

     /////  dd($this->date_debut );
        $debut = Carbon::parse($this->date_debut)->format('y-m-d');
        $fin = Carbon::parse($this->date_fin)->format('y-m-d');

        dd($this->date_fin);
    }
}
