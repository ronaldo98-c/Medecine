<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\A_Medicau;
use App\Model\Patient;
use MercurySeries\Flashy\Flashy;
class A_MedicauxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a_medicaus = A_Medicau::IdDescending()
                                ->get()
                                ->take(50);
        return view('Affichages/a_medicaux',compact('a_medicaus'));
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
        A_Medicau::create(['patient_id'=>$request->patient_id,'patient_name'=>$patient->Nom,'Nom_Patologie_Chronique'=>$request->Nom_Patologie_Chronique,'Date_Decouverte_Patologie_Chronique'=>$request->Date_Decouverte_Patologie_Chronique,'Autre_Patologie_Chronique'=>$request->Autre_Patologie_Chronique,'Circonstance_Decouverte_Patologie_Chronique'=>$request->Circonstance_Decouverte_Patologie_Chronique,'Reponse_Traitement_Initial_Patologie_Chronique'=>$request->Reponse_Traitement_Initial_Patologie_Chronique,'Reponse_Traitement_Actuel_Patologie_Chronique'=>$request->Reponse_Traitement_Actuel_Patologie_Chronique,'Complication_Patologie_Chronique'=>$request->Complication_Patologie_Chronique,'Autre_Detail_Patologie_Chronique'=>$request->Autre_Detail_Patologie_Chronique,'Nom_Patologie_Infectieuse'=>$request->Nom_Patologie_Infectieuse,'Date_Decouverte_Patologie_Infectieuse'=>$request->Date_Decouverte_Patologie_Infectieuse,'Autre_Patologie_Infectieuse'=>$request->Autre_Patologie_Infectieuse,'Circonstance_Decouverte_Patologie_Infectieuse'=>$request->Circonstance_Decouverte_Patologie_Infectieuse,'Reponse_Traitement_Initial_Patologie_Infectieuse'=>$request->Reponse_Traitement_Initial_Patologie_Infectieuse,'Reponse_Traitement_Actuel_Patologie_Infectieuse'=>$request->Reponse_Traitement_Actuel_Patologie_Infectieuse,'Complication_Patologie_Infectieuse'=>$request->Complication_Patologie_Infectieuse,'Autre_Detail_Patologie_Infectieuse'=>$request->Autre_Detail_Patologie_Infectieuse]);
        Flashy::primary('Enregistrement avec succes');
        return redirect()->route('a_medicaus');
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
        $a_medicaux = A_Medicau::FindOrFail($id);
        $patients = Patient::all();
        return view('Editions/A_MedicauxEdit',compact('patients','a_medicaux'));
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
        $a_medicaux = A_Medicau::FindOrFail($id);
        $patient = Patient::where('id',$request->patient_id)->first();
        $a_medicaux->update(['patient_id'=>$request->patient_id,'patient_name'=>$patient->Nom,'Nom_Patologie_Chronique'=>$request->Nom_Patologie_Chronique,'Date_Decouverte_Patologie_Chronique'=>$request->Date_Decouverte_Patologie_Chronique,'Autre_Patologie_Chronique'=>$request->Autre_Patologie_Chronique,'Circonstance_Decouverte_Patologie_Chronique'=>$request->Circonstance_Decouverte_Patologie_Chronique,'Reponse_Traitement_Initial_Patologie_Chronique'=>$request->Reponse_Traitement_Initial_Patologie_Chronique,'Reponse_Traitement_Actuel_Patologie_Chronique'=>$request->Reponse_Traitement_Actuel_Patologie_Chronique,'Complication_Patologie_Chronique'=>$request->Complication_Patologie_Chronique,'Autre_Detail_Patologie_Chronique'=>$request->Autre_Detail_Patologie_Chronique,'Nom_Patologie_Infectieuse'=>$request->Nom_Patologie_Infectieuse,'Date_Decouverte_Patologie_Infectieuse'=>$request->Date_Decouverte_Patologie_Infectieuse,'Autre_Patologie_Infectieuse'=>$request->Autre_Patologie_Infectieuse,'Circonstance_Decouverte_Patologie_Infectieuse'=>$request->Circonstance_Decouverte_Patologie_Infectieuse,'Reponse_Traitement_Initial_Patologie_Infectieuse'=>$request->Reponse_Traitement_Initial_Patologie_Infectieuse,'Reponse_Traitement_Actuel_Patologie_Infectieuse'=>$request->Reponse_Traitement_Actuel_Patologie_Infectieuse,'Complication_Patologie_Infectieuse'=>$request->Complication_Patologie_Infectieuse,'Autre_Detail_Patologie_Infectieuse'=>$request->Autre_Detail_Patologie_Infectieuse]);
        Flashy::message(sprintf('Antecedent %s modifier avec succes',$id));
        return redirect()->route('a_medicaus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        A_Medicau::destroy($id);
        Flashy::danger(sprintf('Antecedent %s supprimer avec succes',$id));
        return redirect()->route('a_medicaus');
    }
}
