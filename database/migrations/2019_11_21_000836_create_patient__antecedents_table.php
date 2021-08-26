<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientAntecedentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient__antecedents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('patient_id')
                   ->foreign('patient_id')
                   ->references('id')
                   ->on('patient')
                   ->onDelete('restrict')
                   ->onUpdate('restrict');
           $table->integer('a_allergique_id')->nullable()
                   ->foreign('a_allergique_id')
                   ->references('id')
                   ->on('a_allergique')
                   ->onDelete('restrict')
                   ->onUpdate('restrict');
            $table->integer('a_chirugicau_id')->nullable()
                   ->foreign('a_chirugicau_id')
                   ->references('id')
                   ->on('a_chirugicau')
                   ->onDelete('restrict')
                   ->onUpdate('restrict');
             $table->integer('a_familiau_id')->nullable()
                   ->foreign('a_familiau_id')
                   ->references('id')
                   ->on('a_familiau')
                   ->onDelete('restrict')
                   ->onUpdate('restrict');
             $table->integer('a_gynecologique_id')->nullable()
                   ->foreign('a_gynecologique_id')
                   ->references('id')
                   ->on('a_gynecologique')
                   ->onDelete('restrict')
                   ->onUpdate('restrict');
            $table->integer('a_imunologique_id')->nullable()
                   ->foreign('a_imunologique_id')
                   ->references('id')
                   ->on('a_imunologique')
                   ->onDelete('restrict')
                   ->onUpdate('restrict');
            $table->integer('a_medicamenteu_id')->nullable()
                   ->foreign('a_medicamenteu_id')
                   ->references('id')
                   ->on('a_medicamenteu')
                   ->onDelete('restrict')
                   ->onUpdate('restrict');
            $table->integer('a_medicau_id')->nullable()
                   ->foreign('a_medicau_id')
                   ->references('id')
                   ->on('a_medicau')
                   ->onDelete('restrict')
                   ->onUpdate('restrict');
             $table->integer('a_obstetricau_id')->nullable()
                   ->foreign('a_obstetricau_id')
                   ->references('id')
                   ->on('a_obstetricau')
                   ->onDelete('restrict')
                   ->onUpdate('restrict');
             $table->integer('a_vaccinau_id')->nullable()
                   ->foreign('a_vaccinau_id')
                   ->references('id')
                   ->on('a_vaccinau')
                   ->onDelete('restrict')
                   ->onUpdate('restrict');
            $table->integer('mode_vie_id')->nullable()
                   ->foreign('mode_vie_id')
                   ->references('id')
                   ->on('mode_vie')
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
        Schema::dropIfExists('patient__antecedents');
    }
}
