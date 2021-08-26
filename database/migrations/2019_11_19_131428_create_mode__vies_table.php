<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModeViesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mode__vies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id')
                  ->foreign('patient_id')
                  ->references('id')
                  ->on('patient')
                  ->onUpdate('restrict')
                  ->onDelete('restrict');
            $table->string('patient_name');
            $table->string('Café');
            $table->string('Tabac');
            $table->integer('Nombre_Cigarette')->nullable();
            $table->integer('Nombre_Année')->nullable();
            $table->decimal('Quantité_Paquet')->nullable();
            $table->string('Alcool');
            $table->double('Pourcentage_Alcool')->nullable();
            $table->double('Volume_Quotidien')->nullable();
            $table->double('Quantité_Alcool')->nullable();
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
        Schema::dropIfExists('mode__vies');
    }
}
