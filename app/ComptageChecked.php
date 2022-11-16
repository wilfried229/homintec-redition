<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComptageChecked extends Model
{
    //

    protected $table   ="comptage_checkeds";
    protected $fillable = [
        'site',
        'cabine',
        'percepteur',
        'date',
        'heure',
        'prix',
        'refer',
        'nbre_vehicule',
        'is_close',
        'nbre_gate'
    ];

}
