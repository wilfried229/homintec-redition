<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenalitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penalites', function (Blueprint $table) {
            $table->id();
            /////$table->string('immatricule');
            $table->string('rouland');
            $table->string('excedant');
            $table->string('penalite');
            $table->string('type');
            $table->date('date');
            $table->time('heure');
            $table->string('es');
            $table->string('autorise');
            $table->string('facteur');
            $table->string('percepteur');
            $table->string('site');
            $table->string('cabine');
            $table->string('sens');

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
        Schema::dropIfExists('penalites');
    }
}
