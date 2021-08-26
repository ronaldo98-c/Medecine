<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nom');
            $table->string('Prenom');
            $table->date('Date_Naissance');
            $table->string('Lieu_Naissance');
            $table->string('Groupe_Ethnique');
            $table->string('Profession');
            $table->string('Etat_Civil');
            $table->string('Nationalite');
            $table->string('Lieu_Residence');
            $table->integer('Contact_Telephonique')->unsigned();
            $table->string('Email');
            $table->string('Assurance');
            $table->string('Nom_Personne_A_Prévenir');
            $table->string('Prenom_Personne_A_Prévenir');
            $table->string('Contact_Personne_A_Prévenir');
            $table->string('Residence_Personne_A_Prévenir');
            $table->boolean('Compte_E_Care')->default(false);
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
        Schema::dropIfExists('patients');
    }
}
