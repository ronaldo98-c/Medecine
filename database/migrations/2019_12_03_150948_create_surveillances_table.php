<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveillancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveillances', function (Blueprint $table) {
            $table->increments('id');
            $table->string('medecin_numero_ordre')
                   ->foreign('medecin_numero_ordre')
                   ->references('Numero_Ordre')
                   ->on('medecins')
                   ->onDelete('restrict')
                   ->onUpdate('restrict');
            $table->string('patient_nom');
            $table->string('patient_prenom');
            $table->string('Element_A_Surveiller');
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
        Schema::dropIfExists('surveillances');
    }
}
