<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCashFlowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cash_flows', function (Blueprint $table) {
            $table->id();
            $table->string('percepteur');
            $table->string('som_comptage');
            $table->string('voie');
            $table->string('site');
            $table->string('fin');
            $table->string('superviseur');
            $table->string('controleur');
            $table->string('somedeclaree');
            $table->string('ticket');
            $table->string('penalite');
            $table->string('gate24');
            $table->string('somegate');
            $table->string('sominformatique');
            $table->string('date');
            $table->string('vehicule');
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
        Schema::dropIfExists('cash_flows');
    }
}
