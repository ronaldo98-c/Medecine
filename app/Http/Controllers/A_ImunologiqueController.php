<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Model\A_Imunologique;
use  App\Model\Patient;
use MercurySeries\Flashy\Flashy;
class A_ImunologiqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $a_imunologiques = A_Imunologique::idDescending()
                                          ->get()
                                          ->take(50);
       $patients = Patient::all();
       return view('creations/a_imunologique', compact('patients','a_imunologiques'));
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
        A_Imunologique::create(['patient_id'=>$request->patient_id,'patient_name'=>$patient->Nom,'Groupe_Sanguin'=>$request->Groupe_Sanguin,'Rhésus'=>$request->Rhésus,'Electrophorèse'=>$request->Electrophorèse,'Electrophorèse_A'=>$request->Electrophorèse_A,'Electrophorèse_B'=>$request->Electrophorèse_B]);
        Flashy::primary('Enregistrement avec succes');
        return redirect()->route('a_imunologiques');
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
        $patients = Patient::all();
        $a_imunologique = A_Imunologique::FindOrFail($id);
        return view('Editions/A_ImunologiqueEdit',compact('patients','a_imunologique'));
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
        $a_imunologique = A_Imunologique::FindOrFail($id);
        $patient = Patient::where('id',$request->patient_id)->first();
        $a_imunologique->update(['patient_id'=>$request->patient_id,'patient_name'=>$patient->Nom,'Groupe_Sanguin'=>$request->Groupe_Sanguin,'Rhésus'=>$request->Rhésus,'Electrophorèse'=>$request->Electrophorèse,'Electrophorèse_A'=>$request->Electrophorèse_A,'Electrophorèse_B'=>$request->Electrophorèse_B]);
        Flashy::message(sprintf('Antecedent %s modifier avec succes',$id));
        return redirect()->route('a_imunologiques');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        A_Imunologique::destroy($id);
        Flashy::danger(sprintf('Antecedent %s supprimer avec succes',$id));
        return redirect()->route('a_imunologiques');
    }
}
