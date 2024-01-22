<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LogsAdmin extends Model
{
    //

    protected $table = "logs_admins";

    protected $fillable =  [
        'id',
        'site',
        'date',
        'heure',
        'statut',
        'old_caissier',
        'new_caissier',
        'admin',
        'refer'
    ];

}
