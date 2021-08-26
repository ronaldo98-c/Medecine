<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrouvaillesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trouvailles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Présentation');
            $table->string('Sexe');
            $table->integer('Poids_Naissance');
            $table->string('Apgar');
            $table->string('Mensurations');
            $table->string('Liquide_Amniotique');
            $table->string('Cordon');
            $table->string('Nombre_spires_Cordon');
            $table->integer('Nombre_Utérus_myomateux');
            $table->integer('Taille_Utérus_myomateux');
            $table->string('Localisation_Utérus_myomateux');
            $table->string('Myome_Nécrobiose_Utérus_myomateux');
            $table->string('Kyste_Ovarien');
            $table->string('Localisation_GEU');
            $table->string('Adhérences_ovarienne');
            $table->integer('Longueur_Masse_fibrokystique');
            $table->integer('Largeur_Masse_fibrokystique');
            $table->integer('Epaisseur_Masse_fibrokystique');
            $table->string('Couleur_Liquide_intraabdominal');
            $table->integer('Quantite_Liquide_intraabdominal');
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
        Schema::dropIfExists('trouvailles');
    }
}
