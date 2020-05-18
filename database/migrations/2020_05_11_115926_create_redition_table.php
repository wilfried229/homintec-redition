<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReditionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('redition', function (Blueprint $table) {
            $table->id();
            $table->string('site');
            $table->string('percepteur');
            $table->string('voie');
            $table->string('temps_services');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->string('superviseur');
            $table->string('controleur');
            $table->string('administateur');
            $table->string('nbre_10000');
            $table->string('nbre_5000');
            $table->string('nbre_2000');
            $table->string('nbre_1000');
            $table->string('nbre_500');
            $table->string('nbre_250');
            $table->string('nbre_100');
            $table->string('nbre_50');
            $table->string('nbre_25');
            $table->string('declaration_billetaire');
            $table->string('declaration_ticket_manuel');
            $table->string('penalites')->nullable();
            $table->string('somme_declarer_caisse');
            $table->string('resultat_compte')->nullable();
            $table->string('somme_gate')->nullable();
            $table->string('passage_gate')->nullable();
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
        Schema::dropIfExists('redition');
    }
}
