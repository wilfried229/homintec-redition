<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenaliteTracsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penalite_tracs', function (Blueprint $table) {
            $table->id();
            $table->string('supervisieur');
            $table->string('password_resp_client');
            $table->date('date');
            $table->time('heure');
            $table->string('site');
            $table->string('voie');
            $table->string('percepteur');
            $table->integer('somme_actuel');
            $table->integer('somme_ajoute');
            $table->integer('penalite_actuel');
            $table->integer('penalite_ajoute');
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
        Schema::dropIfExists('penalite_tracs');
    }
}
