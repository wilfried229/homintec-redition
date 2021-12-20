<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SurchagesManuel extends Model
{
    //

    protected $table = "surchages_manuels";

    protected $fillable =  [
        'id',
        'immatriculation',
      //"montant_surcharge",
        'type_surcharge',
        'date_passage',
        'heure_passage',
        'essieu',
        'poids_roulant',
        'poid_autorise',
        'excedent',
        'montant_apayer',
        'montant_payer',
        'observation',
        'recettes_id',
        'sites_id'
    ];



    public function site(){


        return $this->belongsTo(Site::class,'sites_id','id');
    }



    public function recette(){

        return $this->belongsTo(Recette::class,'recettes_id','id');
    }
}
