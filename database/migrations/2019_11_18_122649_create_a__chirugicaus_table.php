<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAChirugicausTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('a__chirugicaus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id')
                  ->foreign('patient_id')
                  ->references('id')
                  ->on('patient')
                  ->onUpdate('restrict')
                  ->onDelete('restrict');
            $table->string('patient_name');
            $table->string('Nom_Chirurgie');
            $table->date('date')->nullable();
            $table->string('Type')->nullable();
            $table->string('Autre_Type',300)->nullable();
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
        Schema::dropIfExists('a__chirugicaus');
    }
}
