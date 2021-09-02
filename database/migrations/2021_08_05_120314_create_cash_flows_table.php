<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCashFlowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cash_flows', function (Blueprint $table) {
            $table->id();
            $table->string('percepteur')->nullable();
            $table->string('recette_gate')->nullable();
            $table->string('voie')->nullable();
            $table->string('site')->nullable();
            $table->timestamp('date');

            $table->string('fin')->nullable();
            $table->string('debut')->nullable();

            $table->string('superviseur')->nullable();
            $table->string('controleur')->nullable();
            $table->string('recette_declaree')->nullable();
            $table->string('recette_informatise')->nullable();
            $table->string('nbre_passage')->nullable();
            $table->string('nbre_gate')->nullable();
            $table->string('nbre_penalite')->nullable();
            $table->string('somme_penalite')->nullable();
            $table->string('violation')->nullable();
            $table->string('nbre_exempte')->nullable();
            $table->string('observation')->nullable();
            $table->string('recette_ticket')->nullable();
            $table->string('poids_penalite')->nullable();
            $table->string('penalite_annulee')->nullable();

            $table->string('surplus')->nullable();
            $table->string('manquant')->nullable();

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
        Schema::dropIfExists('cash_flows');
    }
}
