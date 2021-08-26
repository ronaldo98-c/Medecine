<?php

namespace App\Http\Controllers;

use App\Model\Patient;
use App\Model\Assurance;
use App\Http\Requests\PatientRequest;
use MercurySeries\Flashy\Flashy;
class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::idDescending()
                             ->get()
                             ->take(20);
        $assurances = Assurance::all();
        return view('patient',compact('patients','assurances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patient');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PatientRequest $request)
    {
        Patient::create(['Nom'=>$request->Nom,'Prenom'=>$request->Prenom,'Date_Naissance'=>$request->Date_Naissance,
        'Lieu_Naissance'=>$request->Lieu_Naissance,'Groupe_Ethnique'=>$request->Groupe_Ethnique,'Profession'=>$request->Profession,'Etat_Civil'=>$request->Etat_Civil,
        'Nationalite'=>$request->Nationalite,'Lieu_Residence'=>$request->Lieu_Residence,'Contact_Telephonique'=>$request->Contact_Telephonique,
        'Email'=>$request->Email,'Assurance'=>$request->Assurance,'Nom_Personne_A_Prévenir'=>$request->Nom_Personne_A_Prévenir,'Prenom_Personne_A_Prévenir'=>$request->Prenom_Personne_A_Prévenir,
        'Contact_Personne_A_Prévenir'=>$request->Contact_Personne_A_Prévenir,'Residence_Personne_A_Prévenir'=>$request->Residence_Personne_A_Prévenir,'Compte_E_Care'=>$request->Compte_E_Care]);
        Flashy::primary('Patient enregistrer avec succes');
        return redirect()->route('patient');
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
        $patient = Patient::FindOrFail($id);
        $assurances = Assurance::all();
        return view('Editions/PatientEdit',compact('patient','assurances'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PatientRequest $request, $id)
    {
        $patient = Patient::FindOrFail($id);
        $patient->update(['Nom'=>$request->Nom,'Prenom'=>$request->Prenom,'Date_Naissance'=>$request->Date_Naissance,
        'Lieu_Naissance'=>$request->Lieu_Naissance,'Groupe_Ethnique'=>$request->Groupe_Ethnique,'Profession'=>$request->Profession,'Etat_Civil'=>$request->Etat_Civil,
        'Nationalite'=>$request->Nationalite,'Lieu_Residence'=>$request->Lieu_Residence,'Contact_Telephonique'=>$request->Contact_Telephonique,
        'Email'=>$request->Email,'Assurance'=>$request->Assurance,'Nom_Personne_A_Prévenir'=>$request->Nom_Personne_A_Prévenir,'Prenom_Personne_A_Prévenir'=>$request->Prenom_Personne_A_Prévenir,
        'Contact_Personne_A_Prévenir'=>$request->Contact_Personne_A_Prévenir,'Residence_Personne_A_Prévenir'=>$request->Residence_Personne_A_Prévenir,'Compte_E_Care'=>$request->Compte_E_Care]);
        Flashy::message(sprintf('Patient %s modifier avec succes',$id));
        return redirect()->route('patient');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Patient::destroy($id);
       Flashy::danger(sprintf('Patient %s supprimer avec succes',$id));
       return redirect()->route('patient');
    }
}
