<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Violation extends Model
{
    //
    protected $table ="violations";
    protected $fillable =[
        'site',
        'date',
        'heure',
        'percepteur',
        'site',
        'sens',
        'refer',
        'viole'
    ];

}
