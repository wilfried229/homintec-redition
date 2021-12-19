<?php

namespace App;

use App\Models\Site;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Voie extends Model
{
    //
    protected $table = "voies";

    protected $fillable =  [
        'id','nom','site_id','sens'
    ];


    public function site(){


        return $this->belongsTo(Site::class,'site_id','id');
    }

}
