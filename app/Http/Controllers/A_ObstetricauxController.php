<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\A_Obstetricau;

use App\Model\Patient;
use MercurySeries\Flashy\Flashy;
class A_ObstetricauxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a_obstetricaus = A_Obstetricau::idDescending()
                                         ->get()
                                         ->take(20);
        $patients = Patient::all();
        return view('creations/a_obstetricaux',compact('patients','a_obstetricaus'));
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
        A_Obstetricau::create(['patient_id'=>$request->patient_id,'patient_name'=>$patient->Nom,'Gravidité'=>$request->Gravidité,'Parité'=>$request->Parité,'Date'=>$request->Date,'CPN'=>$request->CPN,'Accouchement'=>$request->Accouchement,'Pathologies'=>$request->Pathologies]);
        Flashy::primary('Enregistrement avec succes');
        return redirect()->route('a_obstetricaus');
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
        $a_obstetricaux = A_Obstetricau::FindOrFail($id);
        $patients = Patient::all();
       return view('Editions/A_ObstetricauxEdit',compact('patients','a_obstetricaux'));
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
        $a_obstetricaux = A_Obstetricau::FindOrFail($id);
        $patient = Patient::where('id',$request->patient_id)->first();
        $a_obstetricaux->update(['patient_id'=>$request->patient_id,'patient_name'=>$patient->Nom,'Gravidité'=>$request->Gravidité,'Parité'=>$request->Parité,'Date'=>$request->Date,'CPN'=>$request->CPN,'Accouchement'=>$request->Accouchement,'Pathologies'=>$request->Pathologies]);
        Flashy::message(sprintf('Antecedent %s modifier avec succes',$id));
        return redirect()->route('a_obstetricaus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        A_Obstetricau::destroy($id);
        Flashy::danger(sprintf('Antecedent %s supprimer avec succes',$id));
        return redirect()->route('a_obstetricaus');
    }
}
