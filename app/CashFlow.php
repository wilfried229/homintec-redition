<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class CashFlow extends Model
{
    //
    protected $table ="cash_flows";

    //protected $fillable = ['percepteur','som_comptage',
    //'voie','site','fin','superviseur','controleur',
    //'ticket','vehicule','gate24','somegate','penalite',
    ///'somedeclaree','sominformatique','date'];

    protected $fillable = ['percepteur','recette_gate',
    'voie','site','debut','fin','superviseur','controleur',
    'nbre_ticket','nbre_passage','nbre_gate','somme_penalite','nbre_penalite',
    'recette_declaree','recette_informatise','date','violation','nbre_exempte','observation','recette_ticket',
    'poids_penalite','surplus','manquant','penalite_annulee','date_debut'
];


}
