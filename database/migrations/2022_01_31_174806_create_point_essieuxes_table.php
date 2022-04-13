<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePointEssieuxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('point_essieuxes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sites_id');
            $table->unsignedBigInteger('voies_id');
            $table->date('date');
            $table->integer('essieu');
            $table->integer('nombre');
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
        Schema::dropIfExists('point_essieuxes');
    }
}
