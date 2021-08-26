<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Mode_Vie extends Model
{
    protected $fillable =['patient_id','patient_name','Café','Tabac','Nombre_Cigarette','Nombre_Année','Quantité_Paquet','Alcool','Pourcentage_Alcool','Volume_Quotidien','Quantité_Alcool'];
    public static function Quantité_Paquet($a,$b){

        return ($a * $b)/20;
    }
    public static function Quantité_Alcool($a,$b)
    {
          return 0.8*$a*$b;
    }
    public function scopeIdDescending($query)
   {
      return $query->orderBy('id','DESC');
   }
}
