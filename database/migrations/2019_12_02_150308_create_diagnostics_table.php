<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnostics', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('choix_examen_id')
                  ->foreign('choix_examen_id')
                  ->references('id')
                  ->on('choix_examens')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');
            $table->string('medecin_numero_ordre')
                  ->foreign('medecin_numero_ordre')
                  ->references('id')
                  ->on('medecins')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');
            $table->string('Diagnostic_Principale');
            $table->string('Diagnostic_Différentiel');
            $table->string('Diagnostic_Travail');
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
        Schema::dropIfExists('diagnostics');
    }
}
