<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('percepteur_id');
            $table->date('date');
            $table->time('heure');
            $table->string("cabine");
            $table->string("site");
            $table->string("old_percepteur");
            $table->string("agent_homintec");
            $table->boolean("statut")->default(false);
            $table->boolean("isCabin")->default(false);
            $table->boolean("isStart")->default(false);
            $table->dateTime('cabin_at')->nullable();
            $table->dateTime('start_at')->nullable();
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
        Schema::dropIfExists('logs');
    }
}
