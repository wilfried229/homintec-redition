<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{


    public function test(){

        $lines  = file("C:\\RecordDownload\\192.168.8.80_ch1_20200605_184646.ps");

        foreach($lines as $line)
        {
            echo($line);
        }


        die($line);

    }
}
