<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAAllergiquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('a__allergiques', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id')
                  ->foreign('patient_id')
                  ->references('id')
                  ->on('patient')
                  ->onUpdate('restrict')
                  ->onDelete('restrict');
            $table->string('patient_name');
            $table->string('Allergie');
            $table->string('Molécule');
            $table->string('Symptomes',300);
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
        Schema::dropIfExists('a__allergiques');
    }
}
