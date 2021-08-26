<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class A_Gynecologique extends Model
{
    protected $fillable = ['patient_id','patient_name','Puberte','Ménarche','Type_Cycle','Abondance_Cycle','Syndrome_Prémenstruel','Durée_Règle','Durée_Cycle','Partenaire_Actuel','Partenaire_Cumulé','Premier_Rapport','Abus_Sexuel','Dyspareunie','Intromission_Pénienne','Méthode_Contraceptive','Tolérance','Complication','Infection_Génitale','Germe_En_Cause','Nom_Malformation','Date_Prise_En_Charge','Moyens_Utilisés','Evolution','Préménopause','Age_Ménopause','Médicament','Tolérance_Traitement','Complication_Traitement','Grossesse_Actuel'];
    public function scopeIdDescending($query)
    {
      return $query->orderBy('id','DESC');
    }
}
