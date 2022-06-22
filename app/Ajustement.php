<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ajustement extends Model
{
    //
    protected $table = "ajustements";


    protected $fillable  = [
        'date',
        'heure',
        'essieu_capte',
        'site',
        'cabine',
        'sens',
        'type',
        'admin',
        'essieu',
        'plaque',
    ];
}
