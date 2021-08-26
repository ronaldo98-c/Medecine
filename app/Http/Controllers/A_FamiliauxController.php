<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\A_Familiau;
use App\Model\Patient;
use MercurySeries\Flashy\Flashy;
class A_FamiliauxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $a_familiaus = A_Familiau::idDescending()
                                  ->get()
                                  ->take(50);
       $patients = Patient::all();
       return view('creations/a_familiaux',compact('patients','a_familiaus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
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
        A_Familiau::create(['patient_id'=>$request->patient_id,'patient_name'=>$patient->Nom,'Antécédent_Père'=>$request->Antécédent_Père,'Antécédent_Mère'=>$request->Antécédent_Mère,'Antécédent_Autre_Menbre'=>$request->Antécédent_Autre_Menbre,'Autre_Antécédent_Père'=>$request->Autre_Antécédent_Père,'Autre_Antécédent_Mère'=>$request->Autre_Antécédent_Mère]);
        Flashy::primary('Enregistrement avec succes');
        return redirect()->route('a_familiaus');
       
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
        $a_familiaux = A_Familiau::FindOrFail($id);
        return view('Editions/A_FamiliauxEdit',compact('patients','a_familiaux'));
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
        $a_familiaux = A_Familiau::FindOrFail($id);
        $patient = Patient::where('id',$request->patient_id)->first();
        $a_familiaux->update(['patient_id'=>$request->patient_id,'patient_name'=>$patient->Nom,'Antécédent_Père'=>$request->Antécédent_Père,'Antécédent_Mère'=>$request->Antécédent_Mère,'Antécédent_Autre_Menbre'=>$request->Antécédent_Autre_Menbre,'Autre_Antécédent_Père'=>$request->Autre_Antécédent_Père,'Autre_Antécédent_Mère'=>$request->Autre_Antécédent_Mère]);
        Flashy::message(sprintf('Antecedent %s modifier avec succes',$id));
        return redirect()->route('a_familiaus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        A_Familiau::destroy($id);
        Flashy::danger(sprintf('Antecedent %s supprimer avec succes',$id));
        return redirect()->route('a_familiaus');
    }
}
