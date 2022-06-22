<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAjustementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ajustements', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date');
            $table->time('heure');
            $table->string('essieu_capte');
            $table->string('site')->nullable();
            $table->string('cabine');
            $table->string('sens');
            $table->string('type');
            $table->string('admin')->nullable();
            $table->string('essieu')->nullable();
            $table->string('facteur')->nullable();
            $table->string('refer')->unique();
            $table->boolean('is_sent')->default(false);
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
        Schema::dropIfExists('ajustements');
    }
}
