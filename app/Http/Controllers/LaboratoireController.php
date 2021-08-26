<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Laboratoire;
use MercurySeries\Flashy\Flashy;
class LaboratoireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $laboratoires=Laboratoire::all();
       return view('laboratoire',compact('laboratoires'));
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
       Laboratoire::create(['Nombre_Personnel'=>$request->Nombre_Personnel,'Nombre_Equipement'=>$request->Nombre_Equipement]);
       Flashy::primary('Enregistrement avec succes');
       return redirect()->route('laboratoires');
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
        $laboratoire = Laboratoire::FindOrFail($id);
        return view('LaboratoireEdit',compact('laboratoire'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $laboratoire = Laboratoire::FindOrFail($id);
        $laboratoire->update(['Nombre_Personnel'=>$request->Nombre_Personnel,'Nombre_Equipement'=>$request->Nombre_Equipement]);
        Flashy::message(sprintf('Laboratoire %s modifier avec succes',$id));
        return redirect()->route('laboratoires');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Laboratoire::destroy($id);
        Flashy::primary(sprintf('Laboratoire %s supprimer avec succes',$id));
        return redirect()->route('laboratoires');
    }
}
