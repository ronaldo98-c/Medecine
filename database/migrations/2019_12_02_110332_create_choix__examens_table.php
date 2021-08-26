<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChoixExamensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('choix__examens', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id')
                  ->foreign('patient_id')
                  ->references('id')
                  ->on('patients')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');
            $table->string('service_nom');
            $table->string('medecin_numero_ordre')
                  ->foreign('medecin_numero_ordre')
                  ->references('Numero_Ordre')
                  ->on('medecins')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');
            $table->integer('examen_complementaire_id')
                  ->foreign('examen_complementaire_id')
                  ->references('id')
                  ->on('examen_complementaires')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');
            $table->integer('examen_physique_gynecologie_id')->nullable()
                  ->foreign('examen_physique_gynecologie_id')
                  ->references('id')
                  ->on('examen_physique_gynecologies')
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
        Schema::dropIfExists('choix__examens');
    }
}
