<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Examen_Complementaire;
use MercurySeries\Flashy\Flashy;
class Examen_ComplementaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $examen_complementaires = Examen_Complementaire::all();
        return view('Affichages/examen_complementaire',compact('examen_complementaires'));
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
        Examen_Complementaire::create(['Biologie'=>$request->Biologie,'Imagerie'=>$request->Imagerie]);
        Flashy::primary('Enregistrement avec succes');
        return redirect()->route('examen_complementaires');
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
        $examen_complementaire = Examen_Complementaire::FindOrFail($id);
        return view('Editions/Examen_ComplementaireEdit',compact('examen_complementaire'));

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
        $examen_complementaire = Examen_Complementaire::FindOrFail($id);
        $examen_complementaire->update(['Biologie'=>$request->Biologie,'Imagerie'=>$request->Imagerie]);
        Flashy::message(sprintf('Examen %s modifier avec succes',$id));
        return redirect()->route('examen_complementaires');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Examen_Complementaire::destroy($id);
        Flashy::danger(sprintf('Examen %s supprimer avec succes',$id));
        return redirect()->route('examen_complementaires');
    }
}
