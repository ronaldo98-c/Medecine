<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Assurance;
use MercurySeries\Flashy\Flashy;
class AssuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assurances = Assurance::all();
        return view('Affichages/assurance',compact('assurances'));
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
        Assurance::create(['Nom'=>$request->Nom,'Localisation'=>$request->Localisation,'Status_Juridique'=>$request->Status_Juridique,'Capital'=>$request->Capital]);
        Flashy::primary('Enregistrement avec succes');
        return redirect()->route('assurances');
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
        $assurance = Assurance::FindOrFail($id);
        return view('Editions/AssuranceEdit',compact('assurance'));
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
        $assurance = Assurance::FindOrFail($id);
        $assurance->update(['Nom'=>$request->Nom,'Localisation'=>$request->Localisation,'Status_Juridique'=>$request->Status_Juridique,'Capital'=>$request->Capital]);
        Flashy::message(sprintf('Assurance %s modifier avec succes',$id));
        return redirect()->route('assurances');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Assurance::destroy($id);
        Flashy::danger(sprintf('Assurance %s supprimer avec succes',$id));
        return redirect()->route('assurances');
    }
}
