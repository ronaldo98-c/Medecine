<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Medecin;
use App\Model\Patient;
use App\Model\Service;
use App\Model\Indication;
use MercurySeries\Flashy\Flashy;
class IndicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indications = Indication::all();
        return view('Affichages/indication',compact('indications'));
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
        Indication::create([
            'Dystocie'=>$request->Dystocie,
            'Utérus_cicatriciel'=>$request->Utérus_cicatriciel,
            'Utérus_myomateux'=>$request->Utérus_myomateux,
            'GEU'=>$request->GEU,
            'Multiparité'=>$request->Multiparité,
            'Cancer_Endomètre'=>$request->Cancer_Endomètre,
            'Cancer_col_utérus'=>$request->Cancer_col_utérus,
            'Lésions_précancéreuses'=>$request->Lésions_précancéreuses,
            'Kyste_Ovarien'=>$request->Kyste_Ovarien,
            'Abcès_Tuboovarien'=>$request->Abcès_Tuboovarien,
            'Béance_cervicale'=>$request->Béance_cervicale,
            'Cancer_sein'=>$request->Cancer_sein,
            'Hysteroscopie'=>$request->Hysteroscopie,
            'Nom_Medecin'=>$request->Nom_Medecin,
            'Nom_Patient'=>$request->Nom_Patient,
            'Nom_Service'=>$request->Nom_Service
        ]);
        Flashy::primary('Enregistrement avec succes');
        return redirect()->route('indications');
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
        $indication=Indication::FindOrFail($id);
        $services = Service::all();
        $medecins = Medecin::all();
        $patients = Patient::all();
        return view('Editions/IndicationEdit',compact('indication','services','medecins','patients'));
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
        $indication=Indication::FindOrFail($id);
        $indication->update([
            'Dystocie'=>$request->Dystocie,
            'Utérus_cicatriciel'=>$request->Utérus_cicatriciel,
            'Utérus_myomateux'=>$request->Utérus_myomateux,
            'GEU'=>$request->GEU,
            'Multiparité'=>$request->Multiparité,
            'Cancer_Endomètre'=>$request->Cancer_Endomètre,
            'Cancer_col_utérus'=>$request->Cancer_col_utérus,
            'Lésions_précancéreuses'=>$request->Lésions_précancéreuses,
            'Kyste_Ovarien'=>$request->Kyste_Ovarien,
            'Abcès_Tuboovarien'=>$request->Abcès_Tuboovarien,
            'Béance_cervicale'=>$request->Béance_cervicale,
            'Cancer_sein'=>$request->Cancer_sein,
            'Hysteroscopie'=>$request->Hysteroscopie,
            'Nom_Medecin'=>$request->Nom_Medecin,
            'Nom_Patient'=>$request->Nom_Patient,
            'Nom_Service'=>$request->Nom_Service
        ]);
        Flashy::message(sprintf('Indication %s modifier avec succes',$id));
        return redirect()->route('indications');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Indication::destroy($id);
        Flashy::danger(sprintf('Indication %s supprimer avec succes',$id));
        return redirect()->route('indications');
    }
}
