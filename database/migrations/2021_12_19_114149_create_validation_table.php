<?php

use App\Models\Validation;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValidationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Validation::TABLE_NAME, function (Blueprint $table) {
            $table->id();
            $table->dateTime(Validation::DATE);
            $table->time(Validation::HEURE);
            $table->string(Validation::PRIX);
            $table->string(Validation::TYPE);
            $table->string(Validation::PTRAC)->nullable();
            $table->string(Validation::CMAES)->nullable();
            $table->string(Validation::ES)->nullable();
            $table->string(Validation::ESSIEU_CAPTER)->nullable();
            $table->string(Validation::ESSIEU_CORRIGER)->nullable();
            $table->string(Validation::PTT)->nullable();
            $table->string(Validation::OVER)->nullable();
            $table->string(Validation::CAISSE);
            $table->string(Validation::PLAQUE)->nullable();
            $table->string(Validation::VISA)->nullable();
            $table->boolean(Validation::IS_SENT)->default(false);
            $table->dateTime(Validation::DATE_API);
            $table->string(Validation::REFER)->unique();
            $table->boolean(Validation::IsVALID)->default(false);
            $table->boolean(Validation::IsLOOP)->default(false);
            $table->boolean(Validation::IsVIOLATION)->default(false);
            $table->string(Validation::CLASSE)->nullable();
            $table->string(Validation::NOMENCLATURE)->nullable();
            $table->string(Validation::PLAQUE_PERCPETEUR)->nullable();
            $table->unsignedInteger(Validation::VOIE_ID)->nullable();
            $table->unsignedInteger(Validation::PERCEPTEUR_ID)->nullable();

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
        Schema::dropIfExists('Validation');
    }
}