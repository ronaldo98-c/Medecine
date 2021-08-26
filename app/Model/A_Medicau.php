<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class A_Medicau extends Model
{
   protected $fillable = ['patient_id','patient_name','Nom_Patologie_Chronique','Date_Decouverte_Patologie_Chronique','Autre_Patologie_Chronique','Circonstance_Decouverte_Patologie_Chronique','Reponse_Traitement_Initial_Patologie_Chronique','Reponse_Traitement_Actuel_Patologie_Chronique','Complication_Patologie_Chronique','Autre_Detail_Patologie_Chronique','Nom_Patologie_Infectieuse','Date_Decouverte_Patologie_Infectieuse','Autre_Patologie_Infectieuse','Circonstance_Decouverte_Patologie_Infectieuse','Reponse_Traitement_Initial_Patologie_Infectieuse','Reponse_Traitement_Actuel_Patologie_Infectieuse','Complication_Patologie_Infectieuse','Autre_Detail_Patologie_Infectieuse'];
   public function scopeIdDescending($query)
   {
      return $query->orderBy('id','DESC');
   }
}
