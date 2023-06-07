<?php

use App\ComptageChecked;
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
        Schema::create(ComptageChecked::TABLE_NAME, function (Blueprint $table) {
            $table->id();
            $table->string(ComptageChecked::SITE);
            $table->string(ComptageChecked::PERCEPTEUR);
            $table->string(ComptageChecked::CABINE)->nullable();
            $table->dateTime(ComptageChecked::DATE);
            $table->time(ComptageChecked::HERURE);
            $table->string(ComptageChecked::PRIX)->default(400);
            $table->integer(ComptageChecked::NBR_VEHICULE);
            $table->integer(ComptageChecked::NBRE_GATE)->default(0);
            $table->boolean(ComptageChecked::IS_CLOSE)->default(false);
            $table->boolean(ComptageChecked::IsVIOLATION)->default(false);
            $table->boolean(ComptageChecked::INlOOP)->default(false);
            $table->boolean(ComptageChecked::OUTPUTlOOP)->default(false);
            $table->boolean(ComptageChecked::IS_SENT)->default(false);
            $table->string(ComptageChecked::REFER)->unique();
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
