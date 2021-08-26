<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class A_Imunologique extends Model
{
   protected $fillable = ['patient_id','patient_name','Groupe_Sanguin','Rhésus','Electrophorèse','Electrophorèse_A','Electrophorèse_B'];
   public function scopeIdDescending($query)
   {
      return $query->orderBy('id','DESC');
   }
}
