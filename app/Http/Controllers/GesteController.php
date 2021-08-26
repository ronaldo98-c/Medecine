<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Medecin;
use App\Model\Patient;
use App\Model\Service;
use App\Model\Geste;
use MercurySeries\Flashy\Flashy;
class GesteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gestes = Geste::all();
        return view('Affichages/geste',compact('gestes'));
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
        Geste::create(['Nom_Patient'=>$request->Nom_Patient,'Nom_Medecin'=>$request->Nom_Medecin,'Nom_Service'=>$request->Nom_Service,'Incision'=>$request->Incision,'Dissection'=>$request->Dissection]);
        Flashy::primary('Enregistrement avec succes');
        return redirect()->route('gestes');
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
        $geste = Geste::FindOrFail($id);
        $services = Service::all();
        $medecins = Medecin::all();
        $patients = Patient::all();
        return view('Editions/GesteEdit',compact('geste','medecins','services','patients'));
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
        $geste = Geste::FindOrFail($id);
        $geste->update(['Nom_Patient'=>$request->Nom_Patient,'Nom_Medecin'=>$request->Nom_Medecin,'Nom_Service'=>$request->Nom_Service,'Incision'=>$request->Incision,'Dissection'=>$request->Dissection]);
        Flashy::message(sprintf('Geste %s modifier avec succes',$id));
        return redirect()->route('gestes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Geste::destroy($id);
        Flashy::danger(sprintf('Geste %s supprimer avec succes',$id));
        return redirect()->route('gestes');
    }
}
