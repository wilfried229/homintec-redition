<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Percepteur extends Model
{
    //

    public const TABLE_NAME = "percepteur";
    protected $table = self::TABLE_NAME;

    public const NOM = "nom";
    public const PRENOM = "prenom";
    public const ID = "id";
    protected $fillable =  [
        self::ID,
        self::NOM,
        self::PRENOM
    ];
}
