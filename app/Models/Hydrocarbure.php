<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hydrocarbure extends Model
{
    //
    protected $table  = "hydrocarbure";


    protected $fillable  = [
        'id','percepteur','date','prix','site',
        'cabine','sens','type','ptrac','destination','es','ptt','conducteur','provenance','plaque','refer'
    ];

}
