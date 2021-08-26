<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Consultation;
use  App\Model\Medecin;
use App\Model\Patient;
use MercurySeries\Flashy\Flashy;
class ConsultationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultations = Consultation::all();
        $medecins = Medecin::all();
        return view('consultation',compact('consultations','medecins'));
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
        Consultation::create(['Date_Consultation'=>$request->Date_Consultation,'patient_id'=>$request->patient_id,'medecin_numero_ordre'=>$request->medecin_numero_ordre,'motif_consulation'=>$request->motif_consulation,'histoire_mal'=>$request->histoire_mal]);
        Flashy::primary('Enregistrement avec succes');
        return redirect()->route('consultations');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consultations = Consultation::all();
        $medecins = Medecin::all();
        $patient = Patient::FindOrFail($id);
        return view('consultation',compact('consultations','medecins','patient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medecins = Medecin::all();
        $consultation = Consultation::FindOrFail($id);
        return view('Editions/ConsultationEdit',compact('consultation','medecins'));
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
        $consultation = Consultation::FindOrFail($id);
        $consultation->update(['Date_Consultation'=>$request->Date_Consultation,'medecin_numero_ordre'=>$request->medecin_numero_ordre,'motif_consulation'=>$request->motif_consulation,'histoire_mal'=>$request->histoire_mal]);
        Flashy::message(sprintf('Consultation %s modifier avec succes',$id));
        return redirect()->route('consultations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Consultation::destroy($id);
        Flashy::danger(sprintf('Consultation %s supprimer avec succes',$id));
        return redirect()->route('consultations');
    }
}
