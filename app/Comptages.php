<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comptages extends Model
{
    protected   $table = "comptages";

    protected $fillable = [
        'site',
        'cabine',
        'percepteur',
        'date',
        'heure',
        'type_interruption'
    ];

    //
}
