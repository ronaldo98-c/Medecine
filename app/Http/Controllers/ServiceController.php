<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Service;
use MercurySeries\Flashy\Flashy;
class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::paginate(10);
        
        return view('service',compact('services'));
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
        Service::create(['Nom'=>$request->Nom,'Description'=>$request->Description,'Role'=>$request->Role]);
        Flashy::primary('Service enregistrer avec succes');
        return redirect()->route('services');
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
        $service = Service::FindOrFail($id);
        return view('ServiceEdit',compact('service'));
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
        $service = Service::FindOrFail($id);
        $service->update(['Nom'=>$request->Nom,'Description'=>$request->Description,'Role'=>$request->Role]);
        Flashy::message(sprintf('Service %s modifier avec succes',$id));
        return redirect()->route('services');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Service::destroy($id);
        Flashy::primary(sprintf('Service %s supprimer avec succes',$id));
        return redirect()->route('services');
    }
}
