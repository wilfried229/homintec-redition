<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePercepteursTable extends Migration
{
    /**
     * Run the migrations.      
     *
     * @return void
     */
    public function up()
    {
        Schema::create('percepteurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');

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
        Schema::dropIfExists('percepteurs');
    }
}
