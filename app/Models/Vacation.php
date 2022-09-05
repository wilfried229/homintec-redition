<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vacation extends Model
{
    //

    protected $table = "vacations";

    protected $fillable =  [
        'id','type','sites_id'
    ];



    public function sites(){
        return $this->belongsTo(Site::class,'sites_id','id');
    }
}
