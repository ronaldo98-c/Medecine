<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Medecin;
use App\Model\Service;
use App\Model\Patient_Antecedent;
use App\Model\Choix_Examen;
use App\Model\Examen_Physique_Gynecologie;
use App\Model\Examen_Complementaire;
use App\Model\Consultation;
use MercurySeries\Flashy\Flashy;
class Choix_ExamenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medecins = Medecin::all();
        $services = Service::all();
        $patient_antecedents = Patient_Antecedent::all();
        $choix_examens = Choix_Examen::all();
        $examen_complementaires = Examen_Complementaire::all();
        $examen_physique_gynecologies = Examen_Physique_Gynecologie::all();
        return view('Affichages/acces_laboratoire',compact('medecins','services','patient_antecedents','choix_examens','examen_complementaires','examen_physique_gynecologies'));
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
        Choix_Examen::create(['patient_id'=>$request->patient_id,'service_nom'=>$request->service_nom,'medecin_numero_ordre'=>$request->medecin_numero_ordre,'examen_complementaire_id'=>$request->examen_complementaire_id,'examen_physique_gynecologie_id'=>$request->examen_physique_gynecologie_id]);
        Flashy::primary('Enregistrement avec succes');
        return redirect()->route('choix_examens');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consultation = Consultation::FindOrFail($id);
        $medecins = Medecin::all();
        $services = Service::all();
        $patient_antecedents = Patient_Antecedent::all();
        $choix_examens = Choix_Examen::all();
        $examen_complementaires = Examen_Complementaire::all();
        $examen_physique_gynecologies = Examen_Physique_Gynecologie::all();
        return view('Affichages/acces_laboratoire',compact('consultation','medecins','services','patient_antecedents','choix_examens','examen_complementaires','examen_physique_gynecologies'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $choix_examen = Choix_Examen::FindOrFail($id);
        $medecins = Medecin::all();
        $services = Service::all();
        $patient_antecedents = Patient_Antecedent::all();
        $examen_complementaires = Examen_Complementaire::all();
        $examen_physique_gynecologies = Examen_Physique_Gynecologie::all();
        return view('Editions/Choix_ExamenEdit',compact('medecins','services','patient_antecedents','choix_examen','examen_complementaires','examen_physique_gynecologies'));
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
        $choix_examen = Choix_Examen::FindOrFail($id);
        $choix_examen->update(['service_nom'=>$request->service_nom,'examen_complementaire_id'=>$request->examen_complementaire_id,'examen_physique_gynecologie_id'=>$request->examen_physique_gynecologie_id]);
        Flashy::message(sprintf('Examen %s modifier avec succes',$id));
        return redirect()->route('choix_examens');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Choix_Examen::destroy($id);
        Flashy::danger(sprintf('Examen %s supprimer avec succes',$id));
        return redirect()->route('choix_examens');
    }
}
