<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAGynecologiquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('a__gynecologiques', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id')
                  ->foreign('patient_id')
                  ->references('id')
                  ->on('patient')
                  ->onUpdate('restrict')
                  ->onDelete('restrict');
            $table->string('patient_name');
            $table->integer('Puberte');
            $table->integer('Ménarche');
            $table->string('Type_Cycle');
            $table->string('Abondance_Cycle');
            $table->string('Syndrome_Prémenstruel');
            $table->integer('Durée_Règle');
            $table->integer('Durée_Cycle');
            $table->string('Partenaire_Actuel')->nullable();
            $table->integer('Partenaire_Cumulé')->nullable();
            $table->integer('Premier_Rapport')->nullable();
            $table->string('Abus_Sexuel')->nullable();
            $table->string('Dyspareunie')->nullable();
            $table->string('Intromission_Pénienne')->nullable();
            $table->string('Méthode_Contraceptive')->nullable();
            $table->string('Tolérance')->nullable();
            $table->string('Complication')->nullable();
            $table->string('Infection_Génitale')->nullable();
            $table->string('Germe_En_Cause')->nullable();
            $table->string('Nom_Malformation')->nullable();
            $table->date('Date_Prise_En_Charge')->nullable();
            $table->string('Moyens_Utilisés')->nullable();
            $table->string('Evolution')->nullable();
            $table->string('Préménopause')->nullable();
            $table->integer('Age_Ménopause')->nullable();
            $table->string('Médicament')->nullable();
            $table->string('Tolérance_Traitement')->nullable();
            $table->string('Complication_Traitement')->nullable();
            $table->string('Grossesse_Actuel')->nullable();
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
        Schema::dropIfExists('a__gynecologiques');
    }
}
