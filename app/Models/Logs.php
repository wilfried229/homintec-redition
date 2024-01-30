<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Logs extends Model
{
    //
    protected $table = "logs";

    protected $fillable =  [
        'id','percepteur_id',
        'site','cabine','date','heure',
        'old_percepteur',
        'agent_homintec',
        'statut','refer',
        'isCabin','isStart','cabin_at','start_at'
    ];

     /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];


    protected $appends = ['percepteur'];

    public function getPercepteurAttribute()
    {
        $data  = $this->belongsTo(Percepteur::class, 'percepteur_id','id')->first() ?? null;
        return  $data->nom . " " . $data->prenom;
    }


    public function percepteur(){
        return $this->belongsTo(Percepteur::class,'percepteur_id','id')->first();
    }

}
