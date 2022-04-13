<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PointEssieux extends Model
{


    protected  $table = 'point_essieuxes';


    protected $fillable =[
        'sites_id',
        'voies_id',
        'date',
        'essieu',
        'nombre'
    ];
    
    //
}
