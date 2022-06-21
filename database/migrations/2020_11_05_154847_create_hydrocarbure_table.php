<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHydrocarbureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hydrocarbure', function (Blueprint $table) {
            $table->id();
            $table->string('percepteur');
            $table->dateTime('date');
            $table->string('prix');
            $table->string('site')->nullable();
            $table->string('cabine');
            $table->string('sens');
            $table->string('type');
            $table->string('ptrac')->nullable();
            $table->string('destination')->nullable();
            $table->string('es')->nullable();
            $table->string('ptt')->nullable();
            $table->string('conducteur')->nullable();
            $table->string('provenance');
            $table->string('plaque')->nullable();
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
        Schema::dropIfExists('hydrocarbure');
    }
}
