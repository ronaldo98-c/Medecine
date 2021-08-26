<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformationSupplementairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information__supplementaires', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Protocole_Securite');
            $table->string('Pansement');
            $table->string('Saignement');
            $table->string('Diurèse');
            $table->string('Conclusion');
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
        Schema::dropIfExists('information__supplementaires');
    }
}
