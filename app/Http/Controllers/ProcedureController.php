<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Medecin;
use App\Model\Patient;
use App\Model\Service;
use App\Model\Procedure;
use MercurySeries\Flashy\Flashy;
class ProcedureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $procedures = Procedure::all();
        return view('Affichages/procedure',compact('procedures'));
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
        Procedure::create(['Nom_Patient'=>$request->Nom_Patient,'Nom_Medecin'=>$request->Nom_Medecin,'Nom_Service'=>$request->Nom_Service,'Installation'=>$request->Installation,'Lavage'=>$request->Lavage,'Drappage'=>$request->Drappage,'Sondage_vésical'=>$request->Sondage_vésical]);
        Flashy::primary('Procedure enregistrer avec succes');
        return redirect()->route('procedures');
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
        $procedure = Procedure::FindOrFail($id);
        $services = Service::all();
        $medecins = Medecin::all();
        $patients = Patient::all();
        return view('Editions/ProcedureEdit',compact('procedure','services','medecins','patients'));
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
        $procedure = Procedure::FindOrFail($id);
        $procedure->update(['Nom_Patient'=>$request->Nom_Patient,'Nom_Medecin'=>$request->Nom_Medecin,'Nom_Service'=>$request->Nom_Service,'Installation'=>$request->Installation,'Lavage'=>$request->Lavage,'Drappage'=>$request->Drappage,'Sondage_vésical'=>$request->Sondage_vésical]);
        Flashy::message(sprintf('Procedure %s modifier avec succes',$id));
        return redirect()->route('procedures');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Procedure::destroy($id);
        Flashy::danger(sprintf('Procedure %s supprimer avec succes',$id));
        return redirect()->route('procedures');
    }
}
