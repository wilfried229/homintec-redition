<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transfert extends Model
{
    //
    protected $table = "transferts";

    protected $fillable = [
        'percepteur',
        'date',
        'heure',
        'prix',
        'site',
        'cabine',
        'sens',
        'ptrac',
        'plaque',
        'refer',
    ];
}
