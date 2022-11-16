<?php

namespace App\Services;

use App\ComptageChecked;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class ComptageServices {

    public function __construct() {
        //self::initBinance();
    }


    public static function compatgeByDateByPercepeteur(array $data)
    {

       /// dd(Carbon::createFromFormat('Y-m-d', $data['date_debut'])->startOfDay());
        $comptageCheckedSum = ComptageChecked::query()
            ->where('percepteur', $data['percepteur'])
            ->where('date',$data['date_fin'])
          //  ->where('heure', $data['heure'])
            ->latest()
            ->first();

        return $comptageCheckedSum;
    }




}
