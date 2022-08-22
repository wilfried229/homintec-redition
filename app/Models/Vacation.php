<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vacation extends Model
{
    //

    protected $table = "vacations";

    protected $fillable =  [
        'id','type','site_id'
    ];



    public function sites(){
        return $this->belongsTo(Site::class,'site_id','id');
    }
}
