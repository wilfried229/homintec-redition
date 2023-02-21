<?php

namespace App;

use App\Models\Percepteur;
use App\Models\Vacation;
use Illuminate\Database\Eloquent\Model;

class PassageManuel extends Model
{
    //
    protected $table = "dysfonctionnemts";

    protected $fillable = [
        "date",
        "voie_id",
        "site_id",
        "vacation_id",
        "percepteur_id",
        "trafic_mode_avant_manuel",
        "recette_mode_avant_manuel",
        "trafic_compte_nanuel",
        "equip_recette",
        "trafic_mode_apres_manuel",
        "recette_mode_apres_manuel",
        "heure_fin",
        "heure_debut",
        "observation",
        "annexes"
    ];



    public function site()
    {
        return $this->belongsTo(Site::class,'site_id','id');
        # code...
    }

    public function voie()
    {
        return $this->belongsTo(Voie::class,'voie_id','id');
        # code...
    }

    public function vacation()
    {
        return $this->belongsTo(Vacation::class,'vacation_id','id');
        # code...
    }

    public function percepteur()
    {
        return $this->belongsTo(Percepteur::class,'percepteur_id','id');
        # code...
    }



}
