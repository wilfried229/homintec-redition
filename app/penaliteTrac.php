<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenaliteTrac extends Model
{
    //

    protected $table ='penalite_tracs';

    protected $fillable = [
        'supervisieur',
        'password_resp_client',
        'date',
        'heure',
        'site',
        'voie',
        'percepteur',
        'somme_actuel',
        'somme_ajoute',
        'penalite_actuel',
        'penalite_ajoute',
    ];


}
