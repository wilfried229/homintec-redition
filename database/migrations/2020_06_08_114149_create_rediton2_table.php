<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRediton2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rediton2', function (Blueprint $table) {
            $table->id();
            $table->string('percepteur');
            $table->dateTime('date');
            $table->string('prix');
            $table->string('site')->nullable();
            $table->string('cabine');
            $table->string('sens');
            $table->string('type');
            $table->string('ptrac')->nullable();
            $table->string('cmaes')->nullable();
            $table->string('es')->nullable();
            $table->string('ptt')->nullable();
            $table->string('over')->nullable();
            $table->string('caisse');
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
        Schema::dropIfExists('rediton2');
    }
}
