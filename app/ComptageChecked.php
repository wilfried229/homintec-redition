<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComptageChecked extends Model
{
    //

    protected $table   ="comptage_checkeds";

    protected $fillable   =['site','voie','percepteur','date_interreption'];


}
