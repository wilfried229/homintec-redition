<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDouanesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('douanes', function (Blueprint $table) {
            $table->id();
            $table->string('percepteur');
            $table->dateTime('date');
            $table->time('heure');
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
            $table->string('plaque')->nullable();
            $table->string('visa')->nullable();
            $table->boolean('is_sent')->default(false);
            $table->dateTime('date_api');
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
        Schema::dropIfExists('douanes');
    }
}
