<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    //
    protected $table = "sites";

    public const TALE_NAME="sites";
    public const ID = "id";
    public const NOM= "NOM";


    protected $fillable =  [
        'id','nom'
    ];
}
