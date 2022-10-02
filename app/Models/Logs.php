<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Logs extends Model
{
    //
    protected $table = "logs";

    protected $fillable =  [
        'id','percepteur',
        'site','cabine','date','heure','old_percepteur','agent_homintec','statut','refer'
    ];




}
