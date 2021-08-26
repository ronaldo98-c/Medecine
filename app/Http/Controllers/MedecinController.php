<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Medecin;
use App\Model\Service;
use MercurySeries\Flashy\Flashy;
class MedecinController extends Controller
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
       return view('medecin',compact('medecins','services'));
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
        $matricule = "E_Care".rand(1,100000);
        Medecin::create(['Nom'=>$request->Nom,'Prenom'=>$request->PreNom,'Matricule'=>$matricule,'Nom_Service'=>$request->Nom_Service,'Numero_Ordre'=>$request->Numero_Ordre]);
        Flashy::primary('Enregistrement avec succes');
        return redirect()->route('medecin');
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
        $medecin = Medecin::FindOrFail($id);
        return view('MedecinEdit',compact('medecin'));
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
        $medecin = Medecin::FindOrFail($id);
        $medecin->update(['Nom'=>$request->Nom,'Prenom'=>$request->PreNom]);
        Flashy::message(sprintf('Medecin %s modifier avec succes',$id));
        return redirect()->route('medecin');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Medecin::destroy($id);
        Flashy::danger(sprintf('Medecin %s supprimer avec succes',$id));
        return redirect()->route('medecin');
    }
}
