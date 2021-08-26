<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class A_Medicamenteu extends Model
{
    protected $fillable = ['patient_id','patient_name','Antiépileptiques','Antihypertenseurs','Hypocholestérolemiants','Antidépresseurs','Antibiotiques','Antituberculeux'];
    public function scopeIdDescending($query)
    {
        return $query->orderBy('id','DESC');
    }
}
