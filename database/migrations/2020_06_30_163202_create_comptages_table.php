<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComptagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comptages', function (Blueprint $table) {
            $table->id();
            $table->string('percepteur');
            $table->string('voie')->nullable();
            $table->string('site');
            $table->string('montant_passage')->nullable();
            $table->string('montant')->nullable();
            $table->string('nbres_camion')->nullable();
            $table->string('heure_debut');
            $table->string('heure_fin');
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
        Schema::dropIfExists('comptages');
    }
}
