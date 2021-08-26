<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Traitement;
use App\Model\Diagnostic;
use MercurySeries\Flashy\Flashy;
class TraitementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $traitements = Traitement::all();
        return view('Affichages/traitement',compact('traitements'));
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
        Traitement::create(['diagnostic_id'=>$request->diagnostic_id,'Traitement_Medicamenteux'=>$request->Traitement_Medicamenteux,'Traitement_Non_Medicamenteux'=>$request->Traitement_Non_Medicamenteux]);
        Flashy::primary('Traitement enregistrer avec succes');
        return redirect()->route('traitements');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $diagnostic = Diagnostic::FindOrFail($id);
        $traitements = Traitement::all();
        return view('Affichages/traitement',compact('diagnostic','traitements'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $traitement = Traitement::FindOrFail($id);
        return view('Editions/TraitementEdit',compact('traitement'));
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
        $traitement = Traitement::FindOrFail($id);
        $traitement->update(['Traitement_Medicamenteux'=>$request->Traitement_Medicamenteux,'Traitement_Non_Medicamenteux'=>$request->Traitement_Non_Medicamenteux]);
        Flashy::message(sprintf('Traitement %s modifier avec succes',$id));
        return redirect()->route('traitements');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Traitement::destroy($id);
        Flashy::danger(sprintf('Traitement %s supprimer avec succes',$id));
        return redirect()->route('traitements');
    }
}
