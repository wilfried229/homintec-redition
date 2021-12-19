<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurchagesManuelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surchages_manuels', function (Blueprint $table) {
            $table->id();
            $table->string('immatriculation');
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
            $table->text('observation');
            $table->unsignedInteger('recettes_id');
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
        Schema::dropIfExists('surchages_manuels');
    }
}
