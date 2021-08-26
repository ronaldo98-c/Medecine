<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class A_Allergique extends Model
{
    protected $fillable = ['patient_id','patient_name','Allergie','Molécule','Symptomes'];
    public function scopeIdDescending($query)
   {
      return $query->orderBy('id','DESC');
   }
}
