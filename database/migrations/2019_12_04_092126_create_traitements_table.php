<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTraitementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traitements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('diagnostic_id')
                  ->foreign('diagnostic_id')
                  ->references('id')
                  ->on('diagnostics')
                  ->onUpdate('restrict')
                  ->onDelete('restrict');
            $table->string('Traitement_Medicamenteux');
            $table->string('Traitement_Non_Medicamenteux');
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
        Schema::dropIfExists('traitements');
    }
}
