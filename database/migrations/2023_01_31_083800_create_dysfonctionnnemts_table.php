<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDysfonctionnnemtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dysfonctionnemts', function (Blueprint $table) {
            $table->id();
            $table->date("date");
            $table->string("localisation");
            $table->text("panne_sirat");
            $table->text("panne_homintec");
            $table->text("cause");
            $table->text("travaux_realiser");
            $table->time("heure_constat");
            $table->time("heure_debut_inter");
            $table->time("heure_fin_inter");
            $table->time("duree_panne");
            $table->text("resultat_obtenu");
            $table->text("besoin");
            $table->string("preuvre");
            $table->text("observation");
            $table->unsignedInteger('categorie_dysfonctionnemt_id');
            $table->unsignedInteger('site_id');
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
        Schema::dropIfExists('dysfonctionnnemts');
    }
}
