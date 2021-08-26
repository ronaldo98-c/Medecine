<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\A_Vaccinau;
use App\Model\Patient;
use MercurySeries\Flashy\Flashy;
class A_VaccinauxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a_vaccinaus = A_Vaccinau::idDescending()
                                   ->get()
                                   ->take(50);
        $patients = Patient::all();
        return view('creations/a_vaccinaux',compact('patients','a_vaccinaus'));
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
        $patient = Patient::where('id',$request->patient_id)->first();
        A_Vaccinau::create(['patient_id'=>$request->patient_id,'patient_name'=>$patient->Nom,'PEV'=>$request->PEV,'Vaccin_HPV'=>$request->Vaccin_HPV,'Vaccin_Antitétanique'=>$request->Vaccin_Antitétanique,'Vaccins_Recommandés'=>$request->Vaccins_Recommandés,'Vaccins_Faits'=>$request->Vaccins_Faits]);
        Flashy::primary('Enregistrement avec succes');
        return redirect()->route('a_vaccinaus');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $a_vaccinaux = A_Vaccinau::FindOrFail($id);
        $patients = Patient::all();
        return view('Editions/A_VaccinauxEdit',compact('patients','a_vaccinaux'));
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
        $a_vaccinaux = A_Vaccinau::FindOrFail($id);
        $patient = Patient::where('id',$request->patient_id)->first();
        $a_vaccinaux->update(['patient_id'=>$request->patient_id,'patient_name'=>$patient->Nom,'PEV'=>$request->PEV,'Vaccin_HPV'=>$request->Vaccin_HPV,'Vaccin_Antitétanique'=>$request->Vaccin_Antitétanique,'Vaccins_Recommandés'=>$request->Vaccins_Recommandés,'Vaccins_Faits'=>$request->Vaccins_Faits]);
        Flashy::message(sprintf('Antecedent %s modifier avec succes',$id));
        return redirect()->route('a_vaccinaus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        A_Vaccinau::destroy($id);
        Flashy::danger(sprintf('Antecedent %s supprimer avec succes',$id));
        return redirect()->route('a_vaccinaus');
    }
}
