<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ptac extends Model
{
     //
     protected $table ="ptacs";

     protected $fillable =[
        //// 'immatricule',
         'site',
         'date',
         'admin',
         'heure_sortie',
         'heure_entree',
         'is_sent',
         'refer'
     ];
    //
}
