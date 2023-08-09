<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class   Validation extends Model
{
    //

    public const TABLE_NAME = "validation";
    protected $table = self::TABLE_NAME;

    public const PERCEPTEUR = "percepteur";
    public const PERCEPTEUR_ID = "percepteur_id";
    public const SITE_ID = "site_id";


    public const SITE = "site";
    public const HEURE = "heure";
    public const DATE = "date";
    public const DATE_API = "date_api";
    public const CABINE = "cabine";
    public const SENS = "sens";
    public const PRIX = "prix";
    public const TYPE = "type";
    public const PTRAC = "ptrac";
    public const CMAES = "cmaes";
    public const ES = "es";
    public const ESSIEU_CAPTER = "essieu_capter";
    public const ESSIEU_CORRIGER = "essieu_corriger";
    public const PTT = "ptt";
    public const OVER = "over";
    public const CAISSE = "caisse";
    public const PLAQUE = "plaque";
    public const VISA = "visa";
    public const REFER = "refer";
    public const IS_SENT = "is_sent";
    public const IsVALID = "isValid";
    public const IsLOOP = "isLoop";
    public const IsVIOLATION = "isViloation";
    public const CLASSE = "classe";
    public const NOMENCLATURE = "nomenclature";
    public const PLAQUE_PERCPETEUR = "plaque_percepteur";




    protected $fillable = [
        self::PERCEPTEUR,
        self::SITE,
        self::HEURE,
        self::DATE,
        self::DATE_API,
        self::CABINE,
        self::SENS,
        self::PRIX,
        self::TYPE,
        self::PTRAC,
        self::CMAES,
        self::ES,
        self::ESSIEU_CAPTER,
        self::ESSIEU_CORRIGER,
        self::PTT,
        self::OVER,
        self::CAISSE,
        self::PLAQUE,
        self::VISA,
        self::REFER,
        self::IS_SENT,
        self::IsVALID,
        self::IsLOOP,
        self::IsVIOLATION,
    ];




}
