<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterventionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interventions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Cesarienne');
            $table->string('Myomectomie');
            $table->string('Salpingectomie');
            $table->string('Salpingotomie');
            $table->string('Ligature_Trompe');
            $table->string('Hystérectomie');
            $table->string('Kystectomie');
            $table->string('Laparotomie');
            $table->string('Cerclage');
            $table->string('Conisation');
            $table->string('Mastectomie');
            $table->string('Hystéroscopie');
            $table->string('Cure_ganglionnaire');
            $table->string('Plastie_vaginale');
            $table->string('Cure_fistule_obstétricale');
            $table->string('Autres');
            $table->string('Nom_Medecin');
            $table->string('Nom_Patient');
            $table->string('Nom_Service');
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
        Schema::dropIfExists('interventions');
    }
}
