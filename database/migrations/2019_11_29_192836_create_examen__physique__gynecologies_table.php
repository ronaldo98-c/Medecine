<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamenPhysiqueGynecologiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examen__physique__gynecologies', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('Poids');
            $table->decimal('Taille');
            $table->decimal('Imc');
            $table->decimal('Pression_Artérielle');
            $table->decimal('Frequence_Cardiaque');
            $table->decimal('Frequence_Respiratoire');
            $table->double('Température');
            $table->double('Saturation_En_Oxygiène');
            $table->double('Glycémie');
            $table->double('Score_Coma_Glasgow');
            $table->string('Etat_Général');
            $table->string('Asthénie');
            $table->string('Anorexie');
            $table->string('Amaigrissement');
            $table->decimal('Kilo_Perdu');
            $table->string('Temps');
            $table->string('Conjonctives');
            $table->string('Scières');
            $table->string('Adénopathies_Cervicaux_Auxilliaires');
            $table->string('Caractéristiques_Adénopathies');
            $table->string('Volume_Thyroide');
            $table->string('Aspect_Thyroide');
            $table->text('Dissymétries_Seins');
            $table->text('Sein_Droit_Inspecter');
            $table->text('Sein_Gauche_Inspecte');
            $table->text('Sein_Droit_Palper');
            $table->text('Sein_Gauche_Palper');
            $table->text('Position');
            $table->text('Aspect');
            $table->text('Douleur_Palpation_Thoracique');
            $table->text('B1_B2');
            $table->text('Rythme_B1_B2');
            $table->string('Bruits_Sur_Ajouté');
            $table->string('Ampilation_Thoracique');
            $table->string('Vibrations_Vocales');
            $table->string('Typographie_Anomalie');
            $table->string('Localisation_Anomalie');
            $table->string('Sonorité_Pulmonaire');
            $table->string('Bruit_Pulmonaire');
            $table->string('Typographie_Anomalie_Matité');
            $table->string('Typographie_Bruit_Pulmonaire');
            $table->string('Aspect_Abdomen');
            $table->string('Mobilité');
            $table->string('Signes_Supplémentaires');
            $table->string('Autres_Signes');
            $table->string('Palpation_Superficiel');
            $table->string('Localisation_Palpation_Superficiel');
            $table->string('Palpation_Profonde');
            $table->string('Flèche_Hépatite');
            $table->string('Hakectt');
            $table->string('Perscussion');
            $table->string('Auscultation');
            $table->string('Autre_Palpation_Profonde');
            $table->string('Aspect_Col_Ultérin');
            $table->string('Autre_Aspect_Col_Ultérin');
            $table->string('Couleur_Col_Ultérin');
            $table->string('Autre_Couleur_Col_Ultérin');
            $table->string('Lésion_Du_Col');
            $table->string('Autre_Lésion_Du_Col');
            $table->string('Ecoulement_Endométrial');
            $table->string('Lésion_Vaginale');
            $table->string('Caractéristique_Ecoulement_Endométrial');
            $table->string('Autre_Lésion_Vaginale');
            $table->string('Manoeuvre_Spécialisé');
            $table->string('Couleur_Glaire_Cervicale');
            $table->string('Autre_Couleur_Glaire_Cervicale');
            $table->string('Aspect_Glaire_Cervicale');
            $table->string('Grandes_Lèvres');
            $table->string('Autre_Grandes_Lèvres');
            $table->string('Petites_Lèvres');
            $table->string('Autre_Petites_Lèvres');
            $table->string('Position_Col_Ultérin');
            $table->string('Longueur');
            $table->string('Circonstance');
            $table->string('Signe_De_Chandelier');
            $table->string('Doigtier');
            $table->string('Autre_Doigtier');
            $table->string('Autre_Toucher_Vaginal');
            $table->string('Information_Supplémentaire_Examen_Physique');
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
        Schema::dropIfExists('examen__physique__gynecologies');
    }
}
