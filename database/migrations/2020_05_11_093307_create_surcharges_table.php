<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurchargesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surcharges', function (Blueprint $table) {
            $table->id();
            $table->string('immatriculation');
            $table->string('poid_rouland');
            $table->string('surcharge');
            $table->string('montant_surcharge');
            $table->string('type_surcharge');
            $table->string('date_recette');
            $table->string('heure_recette');
            $table->string('essieu');
            $table->string('poids_roulant');
            $table->string('poid_autorise');
            $table->string('excedent');
            $table->string('montant_apayer');
            $table->string('montant_payer');
            $table->string('percepteur');
            $table->date('type_vacation');
           /// $table->integer('redition_id');
            $table->string('site');
            $table->string('voie');
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
        Schema::dropIfExists('surcharges');
    }
}
