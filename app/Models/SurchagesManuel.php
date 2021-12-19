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
      //  "montant_surcharge",
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
        'recettes_id'


    ];
}
