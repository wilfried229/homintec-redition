<?php

namespace App;

use App\Models\Site;
use CategorieDysfonctionnemtsSeeder;
use Illuminate\Database\Eloquent\Model;

class Dysfonctionnnemt extends Model
{
    //

    protected $table = "dysfonctionnemts";

    protected $fillable = [
        "date",
        "site_id",
        "localisation",
        "panne_sirat",
        "panne_homintec",
        "cause",
        "travaux_realiser",
        "heure_constat",
        "heure_debut_inter",
        "heure_fin_inter",
        "duree_panne",
        "resultat_obtenu",
        "besoin",
        "preuvre",
        "observation",
        'categorie_dysfonctionnemt_id'
    ];


    public function site()
    {
        return $this->belongsTo(Site::class,'site_id','id');
        # code...
    }

    public function categoriesDysfonctionnement()
    {
        return $this->belongsTo(CategorieDysfonctionnemtsSeeder::class,'categorie_dysfonctionnemt_id','id');
        # code...
    }
}
