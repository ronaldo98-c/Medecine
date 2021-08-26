<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Medecin;
use App\Model\Pronostic;
use App\Model\Diagnostic;
use MercurySeries\Flashy\Flashy;
class PronosticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $diagnostics = Diagnostic::all();
        $medecins = Medecin::all();
        $pronostics = Pronostic::all();
        return view('Affichages/pronostic',compact('pronostics','medecins','diagnostics'));
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
        Pronostic::create(['Nature'=>$request->Nature,'Date'=>$request->Date,'medecin_id'=>$request->medecin_id,'diagnostic_id'=>$request->diagnostic_id]);
        Flashy::primary('Pronostic enregistrer avec succes');
        return redirect()->route('pronostics');
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
       $pronostic =   Pronostic::FindOrFail($id);
       $medecins = Medecin::all();
       $diagnostics = Diagnostic::all();
       return view('Editions/PronosticEdit',compact('pronostic','medecins','diagnostics'));
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
        $pronostic = Pronostic::FindOrFail($id);
        $pronostic->update(['Nature'=>$request->Nature,'Date'=>$request->Date,'medecin_id'=>$request->medecin_id,'diagnostic_id'=>$request->diagnostic_id]);
        Flashy::message(sprintf('Pronostic %s modifier avec succes',$id));
        return redirect()->route('pronostics');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pronostic::destroy($id);
        Flashy::danger(sprintf('Pronostic %s supprimer avec succes',$id));
        return redirect()->route('pronostics');
    }
}
