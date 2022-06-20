<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SavePlaque extends Model
{

    protected $table ="save_plaques";

    protected $fillable =['plaque','ip'];
    //
}
