<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class DateServices{




    public static function dateNow (){
        $now=  Carbon::now('Africa/Lagos');
        return $now;
    }


    public static function cryptDate($site){
        $now=  Carbon::now('Africa/Lagos');
        $crytp =Hash::make($now.$site);
        return $crytp;
    }

}
