<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAMedicausTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('a__medicaus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id')
                  ->foreign('patient_id')
                  ->references('id')
                  ->on('patient')
                  ->onUpdate('restrict')
                  ->onDelete('restrict');
            $table->string('patient_name');
            $table->string('Nom_Patologie_Chronique')->nullable();
            $table->date('Date_Decouverte_Patologie_Chronique')->nullable();
            $table->string('Autre_Patologie_Chronique')->nullable();
            $table->string('Circonstance_Decouverte_Patologie_Chronique')->nullable();
            $table->string('Reponse_Traitement_Initial_Patologie_Chronique')->nullable();
            $table->string('Reponse_Traitement_Actuel_Patologie_Chronique')->nullable();
            $table->string('Complication_Patologie_Chronique')->nullable();
            $table->string('Autre_Detail_Patologie_Chronique')->nullable();
            $table->string('Nom_Patologie_Infectieuse')->nullable();
            $table->date('Date_Decouverte_Patologie_Infectieuse')->nullable();
            $table->string('Autre_Patologie_Infectieuse')->nullable();
            $table->string('Circonstance_Decouverte_Patologie_Infectieuse')->nullable();
            $table->string('Reponse_Traitement_Initial_Patologie_Infectieuse')->nullable();
            $table->string('Reponse_Traitement_Actuel_Patologie_Infectieuse')->nullable();
            $table->string('Complication_Patologie_Infectieuse')->nullable();
            $table->string('Autre_Detail_Patologie_Infectieuse')->nullable();
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
        Schema::dropIfExists('a__medicaus');
    }
}
