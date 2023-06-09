<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComptageChecked extends Model
{
    //

    protected $table   ="comptage_checkeds";
    public const TABLE_NAME = "comptage_checkeds";
    public const SITE = "site";
    public const CABINE = "cabine";
    public const PERCEPTEUR = "percepteur";
    public const DATE = "date";
    public const HERURE = "heure";
    public const PRIX = "prix";
    public const REFER = "refer";
    public const NBR_VEHICULE = "nbre_vehicule";
    public const IS_CLOSE = "is_close";
    public const NBRE_GATE = "nbre_gate";
    public const IsVIOLATION = "isViloation";
  //  public const OUTPUTlOOP = "outputLoop";
    ///public const INlOOP = "inputLoop";
    public const IS_SENT = "is_sent";

    protected $fillable = [
        self::SITE,
        self::CABINE,
        self::PERCEPTEUR,
        self::DATE,
        self::HERURE,
        self::PRIX,
        self::REFER,
        self::NBR_VEHICULE,
        self::IS_CLOSE,
        self::NBRE_GATE,
        self::IsVIOLATION,

    ];

}
