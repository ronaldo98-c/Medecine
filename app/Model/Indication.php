<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Indication extends Model
{
    protected $fillable=[
        'Dystocie',
        'Utérus_cicatriciel',
        'Utérus_myomateux',
        'GEU',
        'Multiparité',
        'Cancer_Endomètre',
        'Cancer_col_utérus',
        'Lésions_précancéreuses',
        'Kyste_Ovarien',
        'Abcès_Tuboovarien',
        'Béance_cervicale',
        'Cancer_sein',
        'Hysteroscopie',
        'Nom_Medecin',
        'Nom_Patient',
        'Nom_Service'
    ];
}
