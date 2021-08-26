<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class A_Obstetricau extends Model
{
    protected $fillable = ['patient_id','patient_name','Gravidité','Parité','Date','CPN','Accouchement','Pathologies'];

    public function scopeIdDescending($query)
    {
        return $query->orderBy('id','DESC');
    }
}
