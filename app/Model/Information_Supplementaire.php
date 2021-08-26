<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Information_Supplementaire extends Model
{
   protected $fillable=[
       'Protocole_Securite',
       'Pansement',
       'Saignement',
       'Diurèse',
       'Conclusion',
       'Nom_Medecin',
       'Nom_Patient',
       'Nom_Service'
   ];
}
