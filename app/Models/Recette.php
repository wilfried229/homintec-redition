<?php

namespace App\Models;

use App\User;
use App\Voie;
use Illuminate\Database\Eloquent\Model;

class Recette extends Model
{
    //

    protected $table = "recettes";

    protected $fillable = [

        /////:montant declarer = montant percepeteur
        'id',
        'montant_coupant',
        'montant_percepteur'
        ,'date_recettes'
        ,'heure_debut'
        ,'heure_fin'
        ,'nombre_vehicule'
        ,'nombre_violation',
        'nombre_exemptes',
        'montant_ecart',
        'montant_informatise',
        'observation',
        'sites_id',
        'percepteurs_id',
        'vacations_id',
        'voies_id',
        'surchages_manuels_id',
        'is_surchages',
        'user_id',

    ];


    public function site(){


        return $this->belongsTo(Site::class,'sites_id','id');
    }

    public function percepteur(){


        return $this->belongsTo(Percepteur::class,'percepteurs_id','id');
    }
    public function voie(){


        return $this->belongsTo(Voie::class,'voies_id','id');
    }


    public function vacation(){


        return $this->belongsTo(Vacation::class,'vacations_id','id');
    }

    public function user(){

        return $this->belongsTo(User::class,'user_id','id');
    }
}
