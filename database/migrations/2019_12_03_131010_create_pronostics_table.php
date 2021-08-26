<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePronosticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pronostics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nature');
            $table->date('Date');
            $table->integer('medecin_id')
                   ->foreign('medecin_id')
                   ->references('id')
                   ->on('medecins')
                   ->onDelete('restrict')
                   ->onUpdate('restrict');
            $table->integer('diagnostic_id')
                  ->foreign('diagnostic_id')
                  ->references('id')
                  ->on('diagnostics')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');
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
        Schema::dropIfExists('pronostics');
    }
}
