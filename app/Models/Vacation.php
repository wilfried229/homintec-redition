<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vacation extends Model
{
    //

    protected $table = "vacations";

    protected $fillable =  [
        'id','type'
    ];

}
