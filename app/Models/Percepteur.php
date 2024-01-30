<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Percepteur extends Model
{
    //

    public const TABLE_NAME = "percepteurs";
    protected $table = self::TABLE_NAME;

    public const NOM = "nom";
    public const USER_ID = "user_id";
    public const CODE_PERCEPTEUR = "codePercepteur";

    public const PRENOM = "prenom";

    public const ID = "id";
    protected $fillable =  [
        self::ID,
        self::NOM,
        self::PRENOM,
        self::CODE_PERCEPTEUR,
        self::USER_ID
    ];


    public function user(){
        return $this->belongsTo(Percepteur::class,'user_id','id')->first();
    }
}
