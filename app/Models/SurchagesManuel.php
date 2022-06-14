<?php

namespace App\Models;

use App\Voie;
use Illuminate\Database\Eloquent\Model;

class SurchagesManuel extends Model
{
    //

    protected $table = "surchages_manuels";

    protected $fillable =  [
        'id',
        'immatriculation',
        'type_surcharge',
        'date_passage',
        'heure_passage',
        'essieu',
        'poids_roulant',
        'poid_autorise',
        'excedent',
        'montant_apayer',
        'montant_payer',
        'observation',
        'voies_id',
        'sites_id',
        'type',
        'is_cloturer'
    ];



    public function site(){


        return $this->belongsTo(Site::class,'sites_id','id');
    }



    public function voie(){

        return $this->belongsTo(Voie::class,'voies_id','id');
    }


}
