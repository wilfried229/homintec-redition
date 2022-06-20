<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sens extends Model
{
    
    protected $table = "sens";

    protected $fillabble =  ['id','nom','site_id'];

}
