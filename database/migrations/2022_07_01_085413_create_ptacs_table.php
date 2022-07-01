<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePtacsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ptacs', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->time('heure_sortie');
            $table->time('heure_entree');

            $table->string('admin');
            $table->string('site');
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
        Schema::dropIfExists('ptacs');
    }
}
