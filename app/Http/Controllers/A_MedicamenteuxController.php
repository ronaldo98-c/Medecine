<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\A_Medicamenteu;
use App\Model\Patient;
use MercurySeries\Flashy\Flashy;
class A_MedicamenteuxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a_medicamenteus = A_Medicamenteu::IdDescending()
                                           ->get()
                                           ->take(20);
        $patients = Patient::all();
        return view('creations/a_medicamenteux',compact('patients','a_medicamenteus'));
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
        A_Medicamenteu::create(['patient_id'=>$request->patient_id,'patient_name'=>$patient->Nom,'Antiépileptiques'=>$request->Antiépileptiques,'Antihypertenseurs'=>$request->Antihypertenseurs,'Hypocholestérolemiants'=>$request->Hypocholestérolemiants,'Antidépresseurs'=>$request->Antidépresseurs,'Antibiotiques'=>$request->Antibiotiques,'Antituberculeux'=>$request->Antituberculeux]);
        Flashy::primary('Enregistrement avec succes');
        return redirect()->route('a_medicamenteus');
        
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
        $a_medicamenteux = A_Medicamenteu::FindOrFail($id);
        $patients = Patient::all();
        return view('Editions/A_MedicamenteuxEdit',compact('patients','a_medicamenteux'));
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
        $a_medicamenteux = A_Medicamenteu::FindOrFail($id);
        $patient = Patient::where('id',$request->patient_id)->first();
        $a_medicamenteux->update(['patient_id'=>$request->patient_id,'patient_name'=>$patient->Nom,'Antiépileptiques'=>$request->Antiépileptiques,'Antihypertenseurs'=>$request->Antihypertenseurs,'Hypocholestérolemiants'=>$request->Hypocholestérolemiants,'Antidépresseurs'=>$request->Antidépresseurs,'Antibiotiques'=>$request->Antibiotiques,'Antituberculeux'=>$request->Antituberculeux]);
        Flashy::message(sprintf('Antecedent %s modifier avec succes',$id));
        return redirect()->route('a_medicamenteus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        A_Medicamenteu::destroy($id);
        Flashy::danger(sprintf('Antecedent %s supprimer avec succes',$id));
        return redirect()->route('a_medicamenteus');
    }
}
