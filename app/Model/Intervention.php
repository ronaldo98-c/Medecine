<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Intervention extends Model
{
    protected $fillable=[
        'Cesarienne',
        'Myomectomie',
        'Salpingectomie',
        'Salpingotomie',
        'Ligature_Trompe',
        'Hystérectomie',
        'Kystectomie',
        'Laparotomie',
        'Cerclage',
        'Conisation',
        'Mastectomie',
        'Hystéroscopie',
        'Cure_ganglionnaire',
        'Plastie_vaginale',
        'Cure_fistule_obstétricale',
        'Autres',
        'Nom_Medecin',
        'Nom_Patient',
        'Nom_Service'
    ];
}
