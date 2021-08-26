<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\A_Chirugicau;
use App\Model\Patient;
use MercurySeries\Flashy\Flashy;
class A_ChirugicauxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a_chirugicaus = A_Chirugicau::idDescending()
                                       ->get()
                                       ->take(20);
        $patients = Patient::all();
        return view('creations/a_chirugicaux',compact('patients','a_chirugicaus'));
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
        A_Chirugicau::create(['patient_id'=>$request->patient_id,'patient_name'=>$patient->Nom,'Nom_Chirurgie'=>$request->Nom_Chirurgie,'date'=>$request->date,'Type'=>$request->Type,'Autre_Type'=>$request->Autre_Type]);
        Flashy::primary('Enregistrement avec succes');
        return redirect()->route('a_chirugicaus');
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
        $a_chirugicaux = A_Chirugicau::FindOrFail($id);
        $patients = Patient::all();
        return view('Editions/A_ChirugicauxEdit',compact('patients','a_chirugicaux'));
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
        $a_chirugicaux = A_Chirugicau::FindOrFail($id);
        $patient = Patient::where('id',$request->patient_id)->first();
        $a_chirugicaux->update(['patient_id'=>$request->patient_id,'patient_name'=>$patient->Nom,'Nom_Chirurgie'=>$request->Nom_Chirurgie,'date'=>$request->date,'Type'=>$request->Type,'Autre_Type'=>$request->Autre_Type]);
        Flashy::message(sprintf('Antecedent %s modifier avec succes',$id));
        return redirect()->route('a_chirugicaus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        A_Chirugicau::destroy($id);
        Flashy::danger(sprintf('Antecedent %s supprimer avec succes',$id));
        return redirect()->route('a_chirugicaus');
    }
}
