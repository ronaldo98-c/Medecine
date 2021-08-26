<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class A_Vaccinau extends Model
{
    protected $fillable = ['patient_id','patient_name','PEV','Vaccin_HPV','Vaccin_Antitétanique','Vaccins_Recommandés','Vaccins_Faits'];
    public function scopeIdDescending($query)
   {
      return $query->orderBy('id','DESC');
   }
}
