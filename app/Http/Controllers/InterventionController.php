<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Intervention;
use App\Model\Medecin;
use App\Model\Patient;
use App\Model\Service;
use MercurySeries\Flashy\Flashy;
class InterventionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $interventions = Intervention::all();
        return view('Affichages/compte_rendu',compact('interventions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Intervention::create([
            'Cesarienne'=>$request->Cesarienne,
            'Myomectomie'=>$request->Myomectomie,
            'Salpingectomie'=>$request->Salpingectomie,
            'Salpingotomie'=>$request->Salpingotomie,
            'Ligature_Trompe'=>$request->Ligature_Trompe,
            'Hystérectomie'=>$request->Hystérectomie,
            'Kystectomie'=>$request->Kystectomie,
            'Laparotomie'=>$request->Laparotomie,
            'Cerclage'=>$request->Cerclage,
            'Conisation'=>$request->Conisation,
            'Mastectomie'=>$request->Mastectomie,
            'Hystéroscopie'=>$request->Hystéroscopie,
            'Cure_ganglionnaire'=>$request->Cure_ganglionnaire,
            'Plastie_vaginale'=>$request->Plastie_vaginale,
            'Cure_fistule_obstétricale'=>$request->Cure_fistule_obstétricale,
            'Autres'=>$request->Autres,
            'Nom_Medecin'=>$request->Nom_Medecin,
            'Nom_Patient'=>$request->Nom_Patient,
            'Nom_Service'=>$request->Nom_Service
        ]);
        Flashy::primary('Enregistrement avec succes');
        return redirect()->route('interventions');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $intervention = Intervention::FindOrFail($id);
        $medecins = Medecin::all();
        $patients = Patient::all();
        $services = Service::all();
        return view('Editions/InterventionEdit',compact('intervention','medecins','patients','services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $intervention = Intervention::FindOrFail($id);
        $intervention->update([
            'Cesarienne'=>$request->Cesarienne,
            'Myomectomie'=>$request->Myomectomie,
            'Salpingectomie'=>$request->Salpingectomie,
            'Salpingotomie'=>$request->Salpingotomie,
            'Ligature_Trompe'=>$request->Ligature_Trompe,
            'Hystérectomie'=>$request->Hystérectomie,
            'Kystectomie'=>$request->Kystectomie,
            'Laparotomie'=>$request->Laparotomie,
            'Cerclage'=>$request->Cerclage,
            'Conisation'=>$request->Conisation,
            'Mastectomie'=>$request->Mastectomie,
            'Hystéroscopie'=>$request->Hystéroscopie,
            'Cure_ganglionnaire'=>$request->Cure_ganglionnaire,
            'Plastie_vaginale'=>$request->Plastie_vaginale,
            'Cure_fistule_obstétricale'=>$request->Cure_fistule_obstétricale,
            'Autres'=>$request->Autres,
            'Nom_Medecin'=>$request->Nom_Medecin,
            'Nom_Patient'=>$request->Nom_Patient,
            'Nom_Service'=>$request->Nom_Service
        ]);
        Flashy::message(sprintf('Intervention %s modifier avec succes',$id));
        return redirect()->route('interventions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $intervention = Intervention::destroy($id);
        Flashy::danger(sprintf('Intervention %s supprimer avec succes',$id));
        return redirect()->route('interventions');
    }
}
