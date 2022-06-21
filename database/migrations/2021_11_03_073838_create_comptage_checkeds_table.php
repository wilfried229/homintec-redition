<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComptageCheckedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comptage_checkeds', function (Blueprint $table) {
            $table->id();
            $table->string('site');
            $table->string('percepteur');
            $table->string('cabine')->nullable();
            $table->dateTime('date');
            $table->time('heure');
            ////$table->string('type_interruption');
            $table->boolean('is_sent')->default(false);
            $table->string('refer')->unique();
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
        Schema::dropIfExists('comptage_checkeds');
    }
}
