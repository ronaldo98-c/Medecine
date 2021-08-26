<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGestesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gestes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nom_Patient');
            $table->string('Nom_Medecin');
            $table->string('Nom_Service');
            $table->string('Incision');
            $table->string('Dissection');
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
        Schema::dropIfExists('gestes');
    }
}
