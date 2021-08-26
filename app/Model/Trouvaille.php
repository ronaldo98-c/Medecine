<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Trouvaille extends Model
{
    protected $fillable=[
            'Présentation',
            'Sexe',
            'Poids_Naissance',
            'Apgar',
            'Mensurations',
            'Liquide_Amniotique',
            'Cordon',
            'Nombre_spires_Cordon',
            'Nombre_Utérus_myomateux',
            'Taille_Utérus_myomateux',
            'Localisation_Utérus_myomateux',
            'Myome_Nécrobiose_Utérus_myomateux',
            'Kyste_Ovarien',
            'Localisation_GEU',
            'Adhérences_ovarienne',
            'Longueur_Masse_fibrokystique',
            'Largeur_Masse_fibrokystique',
            'Epaisseur_Masse_fibrokystique',
            'Couleur_Liquide_intraabdominal',
            'Quantite_Liquide_intraabdominal',
            'Nom_Medecin',
            'Nom_Patient',
            'Nom_Service'
    ];
}
