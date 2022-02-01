<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penaliteTrac extends Model
{
    //

    protected $table ='penalite_trac';

    protected $fillable = [
        'supervisieur',
        'password_resp_sirat',
        'date',
        'heure',
        'site',
        'voie',
        'percepteur',
        'somme_actuel',
        'somme_ajout',
        'penalite_actuel',
        'penalite_ajouter',
    ];


}
