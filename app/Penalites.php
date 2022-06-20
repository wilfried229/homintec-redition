<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penalites extends Model
{
    //
    protected $table ="penalites";

    protected $fillable =[
       //// 'immatricule',
        'rouland',
        'facteur',
        'penalite',
        'excedent',
        'autorise',
        'type',
        'date',
        'heure',
        'es',
        'percepteur',
        'site',
        'cabine',
        'sens'

    ];



        //// 'eurimmatricule'

}
