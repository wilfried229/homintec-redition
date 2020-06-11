<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReditonUemoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rediton_uemo', function (Blueprint $table) {
            $table->id();
            $table->string('site')->nullable();
            $table->dateTime('date');
            $table->string('immatricule');
            $table->string('produit');
            $table->string('provenance');
            $table->string('destination');
            $table->string('societe');
            $table->string('classe');
            $table->string('es1');
            $table->string('es2');
            $table->string('es3');
            $table->string('es4');
            $table->string('es5');
            $table->string('es6');
            $table->string('es7');
            $table->string('es8');
            $table->string('es9');

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
        Schema::dropIfExists('rediton_uemo');
    }
}
