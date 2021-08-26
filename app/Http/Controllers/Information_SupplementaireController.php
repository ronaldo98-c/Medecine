<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Medecin;
use App\Model\Patient;
use App\Model\Service;
use App\Model\Information_Supplementaire;
use MercurySeries\Flashy\Flashy;
class Information_SupplementaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $information_supplementaires=Information_Supplementaire::all();
        return view('Affichages/information_supplementaire',compact('information_supplementaires'));
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
      Information_Supplementaire::create([ 
       'Protocole_Securite'=>$request->Protocole_Securite,
       'Pansement'=>$request->Pansement,
       'Saignement'=>$request->Saignement,
       'Diurèse'=>$request->Diurèse,
       'Conclusion'=>$request->Conclusion,
       'Nom_Medecin'=>$request->Nom_Medecin,
       'Nom_Patient'=>$request->Nom_Patient,
       'Nom_Service'=>$request->Nom_Service
      ]);
      Flashy::primary('Enregistrement avec succes');
       return redirect()->route('information_supplementaires');
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
       $information_supplementaire= Information_Supplementaire::FindOrFail($id);
       $services = Service::all();
        $medecins = Medecin::all();
        $patients = Patient::all();
       return view('Editions/Information_SupplementaireEdit',compact('information_supplementaire','medecins','services','patients'));
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
        $information_supplementaire= Information_Supplementaire::FindOrFail($id);
        $information_supplementaire->update([ 
            'Protocole_Securite'=>$request->Protocole_Securite,
            'Pansement'=>$request->Pansement,
            'Saignement'=>$request->Saignement,
            'Diurèse'=>$request->Diurèse,
            'Conclusion'=>$request->Conclusion,
            'Nom_Medecin'=>$request->Nom_Medecin,
            'Nom_Patient'=>$request->Nom_Patient,
            'Nom_Service'=>$request->Nom_Service
           ]);
           Flashy::message(sprintf('Information %s modifier avec succes',$id));
            return redirect()->route('information_supplementaires');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Information_Supplementaire::destroy($id);
        Flashy::danger(sprintf('Information %s supprimer avec succes',$id));
        return redirect()->route('information_supplementaires');
    }
}
