<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CashFlow extends Model
{
    //
    protected $table ="cash_flows";

    protected $fillable = ['percepteur','som_comptage',
    'voie','site','fin','superviseur','controleur',
    'ticket','vehicule','gate24','somegate','penalite',
    'somedeclaree','sominformatique','date'];
}
