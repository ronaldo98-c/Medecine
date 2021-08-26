<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAFamiliausTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('a__familiaus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id')
                  ->foreign('patient_id')
                  ->references('id')
                  ->on('patient')
                  ->onUpdate('restrict')
                  ->onDelete('restrict');
            $table->string('patient_name');
            $table->string('Antécédent_Père');
            $table->string('Antécédent_Mère');
            $table->string('Antécédent_Autre_Menbre');
            $table->string('Autre_Antécédent_Père',300)->nullable();
            $table->string('Autre_Antécédent_Mère',300)->nullable();
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
        Schema::dropIfExists('a__familiaus');
    }
}
