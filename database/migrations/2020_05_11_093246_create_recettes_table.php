<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecettesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recettes', function (Blueprint $table) {
            $table->id();
            $table->string('date_recettes');
            $table->string('heure_debut');
            $table->string('heure_fin');
            $table->string('nombre_vehicule');
            $table->string('nombre_violation');
            $table->string('nombre_exemptes');
            $table->string('montant_coupant');
            $table->string('montant_percepteur');
            $table->string('montant_ecart');
            $table->string('montant_informatise');
            $table->text('observation');
            $table->unsignedInteger('sites_id');
            $table->unsignedInteger('voies_id');
            $table->unsignedInteger('percepteurs_id');
            $table->unsignedInteger('vacations_id');
            $table->boolean('is_surchages')->default(false);
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
        Schema::dropIfExists('recettes');
    }
}
