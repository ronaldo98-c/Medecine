<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class A_Chirugicau extends Model
{
    protected $fillable = ['patient_id','patient_name','Nom_Chirurgie','date','Type','Autre_Type'];
    public function scopeIdDescending($query)
    {
        return $query->orderBy('id','DESC');
    }
}
