<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Redition extends Model
{
    //
    protected $table = "redition";

    protected $fillable = [
        'id','percepteur','voie','temps_services','date_debut','date_fin','superviseur','controleur',
        'declaration_billetaire',''
    ];
}
