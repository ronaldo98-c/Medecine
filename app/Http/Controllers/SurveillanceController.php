<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Patient;
use App\Model\Medecin;
use App\Model\Surveillance;
use MercurySeries\Flashy\Flashy;
class SurveillanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $surveillances = Surveillance::all();
       $patients = Patient::all();
       $medecins = Medecin::all();
       return view('Affichages/surveillance',compact('surveillances','patients','medecins'));
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
        Surveillance::create(['medecin_numero_ordre'=>$request->medecin_numero_ordre,'patient_nom'=>$request->patient_nom,'patient_prenom'=>$request->patient_prenom,'Element_A_Surveiller'=>$request->Element_A_Surveiller]);
        Flashy::primary('Surveillance enregistrer avec succes');
        return redirect()->route('surveillances');
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
        $surveillance = Surveillance::FindOrFail($id);
        $patients = Patient::all();
        $medecins = Medecin::all();
        return view('Editions/SurveillanceEdit',compact('surveillance','patients','medecins'));
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
        $surveillance = Surveillance::FindOrFail($id); 
        $surveillance->update(['medecin_numero_ordre'=>$request->medecin_numero_ordre,'patient_nom'=>$request->patient_nom,'patient_prenom'=>$request->patient_prenom,'Element_A_Surveiller'=>$request->Element_A_Surveiller]);
        Flashy::message(sprintf('Surveillance %s modifier avec succes',$id));
        return redirect()->route('surveillances');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Surveillance::destroy($id);
        Flashy::danger(sprintf('Surveillance %s supprimer avec succes',$id));
        return redirect()->route('surveillances');
    }
}
