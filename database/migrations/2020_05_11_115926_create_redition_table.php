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
            $table->string('temps_presence');
            $table->date('debut_de_vacation');
            $table->date('fin_de_vacation');
            $table->string('superviseur');
            $table->string('controleur');
            $table->string('administrateur');
           /*  $table->string('nbre_10000');
            $table->string('nbre_5000');
            $table->string('nbre_2000');
            $table->string('nbre_1000');
            $table->string('nbre_500');
            $table->string('nbre_250');
            $table->string('nbre_200');
            $table->string('nbre_100');
            $table->string('nbre_50');
            $table->string('nbre_25'); */
            $table->string('nbre_vehicule');
            $table->string('manquant');
            $table->string('suplus');
            $table->string('nbre_violation');
            $table->string('nbre_exempte');
            $table->string('declaration_billetaire');
            $table->string('declaration_ticket_manuel');
            $table->string('penalite_rejetter');
            $table->string('penalite_valider_local');
            $table->string('penalite_valider_ext');
            $table->string('somme_declarer_caisse');
            $table->string('resultat_compte')->nullable();
            $table->string('somme_gate')->nullable();
            $table->string('passage_gate_24')->nullable();
            $table->string('remarque')->nullable();
            $table->string('nbre_passage')->nullable();
            $table->string('montant_coupant')->nullable();
            $table->string('somme_totale_informatise')->nullable();
            $table->string('somme_informatise_sans_gate_24')->nullable();
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
