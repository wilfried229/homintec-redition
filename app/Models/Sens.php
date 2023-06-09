<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sens extends Model
{

    protected $table = "sens";
    public const TABLE_NAME= "sens";
    public const NOM  = 'nom';
    public const SITE_ID= "site_id";
    protected $fillabble =  [
        'id','nom','site_id'
    ];

}
