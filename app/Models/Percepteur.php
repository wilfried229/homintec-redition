<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Percepteur extends Model
{
    //
    protected $table = "percepteurs";

    protected $fillable =  [
        'id','nom',
    ];
}
