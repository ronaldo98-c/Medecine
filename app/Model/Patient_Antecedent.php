<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Patient_Antecedent extends Model
{
   protected $fillable = ['patient_id','a_allergique_id','a_chirugicau_id','a_familiau_id','a_gynecologique_id','a_imunologique_id','a_medicamenteu_id','a_medicau_id','a_obstetricau_id','a_vaccinau_id','mode_vie_id'];
  
}
