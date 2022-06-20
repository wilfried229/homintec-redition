<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReditonUemoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rediton_uemo', function (Blueprint $table) {
            $table->id();
            $table->string('site')->nullable();
            $table->string('date');
            $table->string('heure');
            $table->string('immatricule');
            $table->string('conducteur');
            $table->string('produit');
            $table->string('provenance');
            //$table->string('destination');
            $table->string('client');
            $table->string('classe');
            $table->string('ess1');
            $table->string('ess2');
            $table->string('ess3');
            $table->string('ess4');
            $table->string('ess5');
            $table->string('ess6');
            $table->string('ess7');
            $table->string('ess8');
            $table->string('ess9');

            $table->string('Gpe1');
            $table->string('Gpe2');
            $table->string('Gpe3');
            $table->string('Gpe4');

            $table->string('surchGpe1');
            $table->string('surchGpe2');
            $table->string('surchGpe4');
            $table->string('surchGpe3');

            $table->string('PdsTotal');
            $table->string('surchtotal');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rediton_uemo');
    }
}
