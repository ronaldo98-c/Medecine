<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Model\Examen_Physique_Gynecologie;
class Examen_Physique_GynecologieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $examen_physique_gynecologies = Examen_Physique_Gynecologie::all();
        return view('Affichages/examen_physique_gynecologie',compact('examen_physique_gynecologies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        Examen_Physique_Gynecologie::create(['Poids'=>$request->Poids,
        'Taille'=>$request->Taille,
         'Imc'=>$request->Imc,
         'Pression_Artérielle'=>$request->Pression_Artérielle,
         'Frequence_Cardiaque'=>$request->Frequence_Cardiaque,
         'Frequence_Respiratoire'=>$request->Frequence_Respiratoire,
         'Température'=>$request->Température,
         'Saturation_En_Oxygiène'=>$request->Saturation_En_Oxygiène,
         'Glycémie'=>$request->Glycémie,
        'Score_Coma_Glasgow'=>$request->Score_Coma_Glasgow,
         'Etat_Général'=>$request->Etat_Général,
         'Asthénie'=>$request->Asthénie,
         'Anorexie'=>$request->Anorexie,
         'Amaigrissement'=>$request->Amaigrissement,
         'Kilo_Perdu'=>$request->Kilo_Perdu,
         'Temps'=>$request->Temps,
         'Conjonctives'=>$request->Conjonctives,
         'Scières'=>$request->Scières,
         'Adénopathies_Cervicaux_Auxilliaires'=>$request->Adénopathies_Cervicaux_Auxilliaires,
        'Caractéristiques_Adénopathies'=>$request->Caractéristiques_Adénopathies,
        'Volume_Thyroide'=>$request->Volume_Thyroide,
         'Aspect_Thyroide'=>$request->Aspect_Thyroide,
         'Dissymétries_Seins'=>$request->Dissymétries_Seins,
         'Sein_Droit_Inspecter'=>$request->Sein_Droit_Inspecter,
        'Sein_Gauche_Inspecte'=>$request->Sein_Gauche_Inspecte,
         'Sein_Droit_Palper'=>$request->Sein_Droit_Palper,
         'Sein_Gauche_Palper'=>$request->Sein_Gauche_Palper,
         'Position'=>$request->Position,
        'Aspect'=>$request->Aspect,
         'Douleur_Palpation_Thoracique'=>$request->Douleur_Palpation_Thoracique,
         'B1_B2'=>$request->B1_B2,
         'Rythme_B1_B2'=>$request->Rythme_B1_B2,
         'Bruits_Sur_Ajouté'=>$request->Bruits_Sur_Ajouté,
         'Ampilation_Thoracique'=>$request->Ampilation_Thoracique,
         'Vibrations_Vocales'=>$request->Vibrations_Vocales,
        'Typographie_Anomalie'=>$request->Typographie_Anomalie,
         'Localisation_Anomalie'=>$request->Localisation_Anomalie,
         'Sonorité_Pulmonaire'=>$request->Sonorité_Pulmonaire,
         'Bruit_Pulmonaire'=>$request->Bruit_Pulmonaire,
         'Typographie_Anomalie_Matité'=>$request->Typographie_Anomalie_Matité,
         'Typographie_Bruit_Pulmonaire'=>$request->Typographie_Bruit_Pulmonaire,
         'Aspect_Abdomen'=>$request->Aspect_Abdomen,
         'Mobilité'=>$request->Mobilité,
         'Signes_Supplémentaires'=>$request->Signes_Supplémentaires,
         'Autres_Signes'=>$request->Autres_Signes,
        'Palpation_Superficiel'=>$request->Palpation_Superficiel,
        'Localisation_Palpation_Superficiel'=>$request->Localisation_Palpation_Superficiel,
         'Palpation_Profonde'=>$request->Palpation_Profonde,
         'Flèche_Hépatite'=>$request->Flèche_Hépatite,
         'Hakectt'=>$request->Hakectt,
         'Perscussion'=>$request->Perscussion,
         'Auscultation'=>$request->Auscultation,
        'Autre_Palpation_Profonde'=>$request->Autre_Palpation_Profonde,
        'Aspect_Col_Ultérin'=>$request->Aspect_Col_Ultérin,
         'Autre_Aspect_Col_Ultérin'=>$request->Autre_Aspect_Col_Ultérin,
         'Couleur_Col_Ultérin'=>$request->Couleur_Col_Ultérin,
         'Autre_Couleur_Col_Ultérin'=>$request->Autre_Couleur_Col_Ultérin,
         'Lésion_Du_Col'=>$request->Lésion_Du_Col,
        'Autre_Lésion_Du_Col'=>$request->Autre_Lésion_Du_Col,
         'Ecoulement_Endométrial'=>$request->Ecoulement_Endométrial,
         'Lésion_Vaginale'=>$request->Lésion_Vaginale,
         'Caractéristique_Ecoulement_Endométrial'=>$request->Caractéristique_Ecoulement_Endométrial,
        'Autre_Lésion_Vaginale'=>$request->Autre_Lésion_Vaginale,
         'Manoeuvre_Spécialisé'=>$request->Manoeuvre_Spécialisé,
         'Couleur_Glaire_Cervicale'=>$request->Couleur_Glaire_Cervicale,
        'Autre_Couleur_Glaire_Cervicale'=>$request->Autre_Couleur_Glaire_Cervicale,
        'Aspect_Glaire_Cervicale'=>$request->Aspect_Glaire_Cervicale,
        'Grandes_Lèvres'=>$request->Grandes_Lèvres,
         'Autre_Grandes_Lèvres'=>$request->Autre_Grandes_Lèvres,
         'Petites_Lèvres'=>$request->Petites_Lèvres,
        'Autre_Petites_Lèvres'=>$request->Autre_Petites_Lèvres,
         'Position_Col_Ultérin'=>$request->Position_Col_Ultérin,
        'Longueur'=>$request->Longueur,
        'Circonstance'=>$request->Circonstance,
         'Signe_De_Chandelier'=>$request->Signe_De_Chandelier,
        'Doigtier'=>$request->Doigtier,
        'Autre_Doigtier'=>$request->Autre_Doigtier,
        'Autre_Toucher_Vaginal'=>$request->Autre_Toucher_Vaginal,
        'Information_Supplémentaire_Examen_Physique'=>$request->Information_Supplémentaire_Examen_Physique]);
        Flashy::primary('Enregistrement avec succes');
        return redirect()->route('examen_physique_gynecologies');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $examen_physique_gynecologie = Examen_Physique_Gynecologie::FindOrFail($id);
        return view('Editions/Examen_Physique_GynecologieEdit',compact('examen_physique_gynecologie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $examen_physique_gynecologie = Examen_Physique_Gynecologie::FindOrFail($id);
        $examen_physique_gynecologie->update(['Poids'=>$request->Poids,
        'Taille'=>$request->Taille,
         'Imc'=>$request->Imc,
         'Pression_Artérielle'=>$request->Pression_Artérielle,
         'Frequence_Cardiaque'=>$request->Frequence_Cardiaque,
         'Frequence_Respiratoire'=>$request->Frequence_Respiratoire,
         'Température'=>$request->Température,
         'Saturation_En_Oxygiène'=>$request->Saturation_En_Oxygiène,
         'Glycémie'=>$request->Glycémie,
        'Score_Coma_Glasgow'=>$request->Score_Coma_Glasgow,
         'Etat_Général'=>$request->Etat_Général,
         'Asthénie'=>$request->Asthénie,
         'Anorexie'=>$request->Anorexie,
         'Amaigrissement'=>$request->Amaigrissement,
         'Kilo_Perdu'=>$request->Kilo_Perdu,
         'Temps'=>$request->Temps,
         'Conjonctives'=>$request->Conjonctives,
         'Scières'=>$request->Scières,
         'Adénopathies_Cervicaux_Auxilliaires'=>$request->Adénopathies_Cervicaux_Auxilliaires,
        'Caractéristiques_Adénopathies'=>$request->Caractéristiques_Adénopathies,
        'Volume_Thyroide'=>$request->Volume_Thyroide,
         'Aspect_Thyroide'=>$request->Aspect_Thyroide,
         'Dissymétries_Seins'=>$request->Dissymétries_Seins,
         'Sein_Droit_Inspecter'=>$request->Sein_Droit_Inspecter,
        'Sein_Gauche_Inspecte'=>$request->Sein_Gauche_Inspecte,
         'Sein_Droit_Palper'=>$request->Sein_Droit_Palper,
         'Sein_Gauche_Palper'=>$request->Sein_Gauche_Palper,
         'Position'=>$request->Position,
        'Aspect'=>$request->Aspect,
         'Douleur_Palpation_Thoracique'=>$request->Douleur_Palpation_Thoracique,
         'B1_B2'=>$request->B1_B2,
         'Rythme_B1_B2'=>$request->Rythme_B1_B2,
         'Bruits_Sur_Ajouté'=>$request->Bruits_Sur_Ajouté,
         'Ampilation_Thoracique'=>$request->Ampilation_Thoracique,
         'Vibrations_Vocales'=>$request->Vibrations_Vocales,
        'Typographie_Anomalie'=>$request->Typographie_Anomalie,
         'Localisation_Anomalie'=>$request->Localisation_Anomalie,
         'Sonorité_Pulmonaire'=>$request->Sonorité_Pulmonaire,
         'Bruit_Pulmonaire'=>$request->Bruit_Pulmonaire,
         'Typographie_Anomalie_Matité'=>$request->Typographie_Anomalie_Matité,
         'Typographie_Bruit_Pulmonaire'=>$request->Typographie_Bruit_Pulmonaire,
         'Aspect_Abdomen'=>$request->Aspect_Abdomen,
         'Mobilité'=>$request->Mobilité,
         'Signes_Supplémentaires'=>$request->Signes_Supplémentaires,
         'Autres_Signes'=>$request->Autres_Signes,
        'Palpation_Superficiel'=>$request->Palpation_Superficiel,
        'Localisation_Palpation_Superficiel'=>$request->Localisation_Palpation_Superficiel,
         'Palpation_Profonde'=>$request->Palpation_Profonde,
         'Flèche_Hépatite'=>$request->Flèche_Hépatite,
         'Hakectt'=>$request->Hakectt,
         'Perscussion'=>$request->Perscussion,
         'Auscultation'=>$request->Auscultation,
        'Autre_Palpation_Profonde'=>$request->Autre_Palpation_Profonde,
        'Aspect_Col_Ultérin'=>$request->Aspect_Col_Ultérin,
         'Autre_Aspect_Col_Ultérin'=>$request->Autre_Aspect_Col_Ultérin,
         'Couleur_Col_Ultérin'=>$request->Couleur_Col_Ultérin,
         'Autre_Couleur_Col_Ultérin'=>$request->Autre_Couleur_Col_Ultérin,
         'Lésion_Du_Col'=>$request->Lésion_Du_Col,
        'Autre_Lésion_Du_Col'=>$request->Autre_Lésion_Du_Col,
         'Ecoulement_Endométrial'=>$request->Ecoulement_Endométrial,
         'Lésion_Vaginale'=>$request->Lésion_Vaginale,
         'Caractéristique_Ecoulement_Endométrial'=>$request->Caractéristique_Ecoulement_Endométrial,
        'Autre_Lésion_Vaginale'=>$request->Autre_Lésion_Vaginale,
         'Manoeuvre_Spécialisé'=>$request->Manoeuvre_Spécialisé,
         'Couleur_Glaire_Cervicale'=>$request->Couleur_Glaire_Cervicale,
        'Autre_Couleur_Glaire_Cervicale'=>$request->Autre_Couleur_Glaire_Cervicale,
        'Aspect_Glaire_Cervicale'=>$request->Aspect_Glaire_Cervicale,
        'Grandes_Lèvres'=>$request->Grandes_Lèvres,
         'Autre_Grandes_Lèvres'=>$request->Autre_Grandes_Lèvres,
         'Petites_Lèvres'=>$request->Petites_Lèvres,
        'Autre_Petites_Lèvres'=>$request->Autre_Petites_Lèvres,
         'Position_Col_Ultérin'=>$request->Position_Col_Ultérin,
        'Longueur'=>$request->Longueur,
        'Circonstance'=>$request->Circonstance,
         'Signe_De_Chandelier'=>$request->Signe_De_Chandelier,
        'Doigtier'=>$request->Doigtier,
        'Autre_Doigtier'=>$request->Autre_Doigtier,
        'Autre_Toucher_Vaginal'=>$request->Autre_Toucher_Vaginal,
        'Information_Supplémentaire_Examen_Physique'=>$request->Information_Supplémentaire_Examen_Physique]);
        Flashy::message(sprintf('Examen %s modifier avec succes',$id));
        return redirect()->route('examen_physique_gynecologies');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Examen_Physique_Gynecologie::destroy($id);
        Flashy::danger(sprintf('Examen %s supprimer avec succes',$id));
        return redirect()->route('examen_physique_gynecologies');
    }
}
