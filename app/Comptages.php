<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comptages extends Model
{
    protected   $table = "comptages";

    protected $fillable = [
     'percepteur',
     'voie',
     'site',
     'montant_passage',
     'montant',
     'nbres_camion',
     'heure_debut',
     'heure_fin',
    ];

    //
}
