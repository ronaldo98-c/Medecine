<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\A_Allergique;
use App\Model\Patient;
use MercurySeries\Flashy\Flashy;
class A_AllergiqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a_allergiques = A_Allergique::idDescending()
                                       ->get()
                                       ->take(50);
        $patients = Patient::all();
        return view('creations/a_allergique',compact('patients','a_allergiques'));
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
        A_Allergique::create(['patient_id'=>$request->patient_id,'patient_name'=>$patient->Nom,'Allergie'=>$request->Allergie,'Molécule'=>$request->Molécule,'Symptomes'=>$request->Symptomes]);
        Flashy::primary('Enregistrement avec succes');
        return redirect()->route('a_allergiques');
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
        $a_allergique = A_Allergique::FindOrFail($id);
        $patients = Patient::all();
        return view('Editions/A_AllergiqueEdit',compact('patients','a_allergique'));
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
        $a_allergique = A_Allergique::FindOrFail($id);
        $patient = Patient::where('id',$request->patient_id)->first();
        $a_allergique->update(['patient_id'=>$request->patient_id,'patient_name'=>$patient->Nom,'Allergie'=>$request->Allergie,'Molécule'=>$request->Molécule,'Symptomes'=>$request->Symptomes]);
        Flashy::message(sprintf('Antecedent %s modifier avec succes',$id));
        return redirect()->route('a_allergiques');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        A_Allergique::destroy($id);
        Flashy::danger(sprintf('Antecedent %s supprimer avec succes',$id));
        return redirect()->route('a_allergiques');
    }
}
