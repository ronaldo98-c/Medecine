<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Mode_Vie;
use App\Model\Patient;
use MercurySeries\Flashy\Flashy;
class Mode_VieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mode_vies = Mode_Vie::idDescending()
                               ->get()
                               ->take(50);
        $patients = Patient::all();
        return view('Affichages/mode_vie',compact('patients','mode_vies'));
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
        $quantite_paquet =  Mode_Vie::Quantité_Paquet($request->Nombre_Cigarette,$request->Nombre_Année);
        $quantite_alcool = Mode_Vie::Quantité_Alcool($request->Pourcentage_Alcool,$request->Volume_Quotidien);
        Mode_Vie::create(['patient_id'=>$request->patient_id,'patient_name'=>$patient->Nom,'Café'=>$request->Café,'Tabac'=>$request->Tabac,'Nombre_Cigarette'=>$request->Nombre_Cigarette,'Nombre_Année'=>$request->Nombre_Année,'Quantité_Paquet'=>$quantite_paquet,'Alcool'=>$request->Alcool,'Pourcentage_Alcool'=>$request->Pourcentage_Alcool,'Volume_Quotidien'=>$request->Volume_Quotidien,'Quantité_Alcool'=>$quantite_alcool]);
        Flashy::primary('Enregistrement avec succes');
       return redirect()->route('mode_vies');
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
        $mode_vie =  Mode_Vie::FindOrFail($id);
        $patients = Patient::all();
        return view('Editions/Mode_Vie_Edit',compact('patients','mode_vie'));
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
        $mode_vie =  Mode_Vie::FindOrFail($id);
        $patient = Patient::where('id',$request->patient_id)->first();
        $quantite_paquet =  Mode_Vie::Quantité_Paquet($request->Nombre_Cigarette,$request->Nombre_Année);
        $quantite_alcool = Mode_Vie::Quantité_Alcool($request->Pourcentage_Alcool,$request->Volume_Quotidien);
        $mode_vie->update(['patient_id'=>$request->patient_id,'patient_name'=>$patient->Nom,'Café'=>$request->Café,'Tabac'=>$request->Tabac,'Nombre_Cigarette'=>$request->Nombre_Cigarette,'Nombre_Année'=>$request->Nombre_Année,'Quantité_Paquet'=>$quantite_paquet,'Alcool'=>$request->Alcool,'Pourcentage_Alcool'=>$request->Pourcentage_Alcool,'Volume_Quotidien'=>$request->Volume_Quotidien,'Quantité_Alcool'=>$quantite_alcool]);
        Flashy::message(sprintf('Mode_vie %s modifier avec succes',$id));
        return redirect()->route('mode_vies');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mode_Vie::destroy($id);
        Flashy::danger(sprintf('Mode_vie %s supprimer avec succes',$id));
        return redirect()->route('mode_vies');
    }
}
