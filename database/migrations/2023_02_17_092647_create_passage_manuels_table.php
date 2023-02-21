<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePassageManuelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passage_manuels', function (Blueprint $table) {
            $table->id();
            $table->date("date");
            $table->unsignedInteger("voie_id");
            $table->unsignedInteger('site_id');
            $table->unsignedInteger('vacation_id');
            $table->unsignedInteger('percepteur_id');
            $table->integer("trafic_mode_avant_manuel");
            $table->integer("recette_mode_avant_manuel");
            $table->integer("trafic_compte_nanuel");
            $table->integer("equip_recette");
            $table->integer("trafic_mode_apres_manuel");
            $table->integer("recette_mode_apres_manuel");
            $table->time("heure_fin");
            $table->time("heure_debut");
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
        Schema::dropIfExists('passage_manuels');
    }
}
