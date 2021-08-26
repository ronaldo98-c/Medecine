<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Dystocie');
            $table->string('Utérus_cicatriciel');
            $table->string('Utérus_myomateux');
            $table->string('GEU');
            $table->string('Multiparité');
            $table->string('Cancer_Endomètre');
            $table->string('Cancer_col_utérus');
            $table->string('Lésions_précancéreuses');
            $table->string('Kyste_Ovarien');
            $table->string('Abcès_Tuboovarien');
            $table->string('Béance_cervicale');
            $table->string('Cancer_sein');
            $table->string('Hysteroscopie');
            $table->string('Nom_Medecin');
            $table->string('Nom_Patient');
            $table->string('Nom_Service');
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
        Schema::dropIfExists('indications');
    }
}
