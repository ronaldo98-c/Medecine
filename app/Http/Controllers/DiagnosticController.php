<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Choix_Examen;
use App\Model\Diagnostic;
use MercurySeries\Flashy\Flashy;
class DiagnosticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diagnostics = Diagnostic::all();
        return view('Affichages/acces_medecin',compact('diagnostics'));
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
        Diagnostic::create(['choix_examen_id'=>$request->choix_examen_id,'medecin_numero_ordre'=>$request->medecin_numero_ordre,'Diagnostic_Principale'=>$request->Diagnostic_Principale,'Diagnostic_Différentiel'=>$request->Diagnostic_Différentiel,'Diagnostic_Travail'=>$request->Diagnostic_Travail]);
        Flashy::primary('Enregistrement avec succes');
        return redirect()->route('diagnostics');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $diagnostics = Diagnostic::all();
        $choix_examen = Choix_Examen::FindOrFail($id);
        return view('Affichages/acces_medecin',compact('choix_examen','diagnostics'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $diagnostic = Diagnostic::FindOrFail($id);
        return view('Editions/DiagnosticEdit',compact('diagnostic'));
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
        $diagnostic = Diagnostic::FindOrFail($id);
        $diagnostic->update(['Diagnostic_Principale'=>$request->Diagnostic_Principale,'Diagnostic_Différentiel'=>$request->Diagnostic_Différentiel,'Diagnostic_Travail'=>$request->Diagnostic_Travail]);
        Flashy::message(sprintf('Diagnostic %s modifier avec succes',$id));
        return redirect()->route('diagnostics');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Diagnostic::destroy($id);
        Flashy::danger(sprintf('Diagnostic %s supprimer avec succes',$id));
        return redirect()->route('diagnostics');
    }
}
