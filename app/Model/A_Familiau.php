<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class A_Familiau extends Model
{
    protected $fillable =['patient_id','patient_name','Antécédent_Père','Antécédent_Mère','Antécédent_Autre_Menbre','Autre_Antécédent_Père','Autre_Antécédent_Mère'];
    public function scopeIdDescending($query)
   {
      return $query->orderBy('id','DESC');
   }
}
