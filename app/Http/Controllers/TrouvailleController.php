<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Medecin;
use App\Model\Patient;
use App\Model\Service;
use App\Model\Trouvaille;
use MercurySeries\Flashy\Flashy;
class TrouvailleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $trouvailles = Trouvaille::all();
       return view('Affichages/trouvaille',compact('trouvailles'));
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
        Trouvaille::create(['Présentation'=>$request->Présentation,
            'Sexe'=>$request->Sexe,
            'Poids_Naissance'=>$request->Poids_Naissance,
            'Apgar'=>$request->Apgar,
            'Mensurations'=>$request->Mensurations,
            'Liquide_Amniotique'=>$request->Liquide_Amniotique,
            'Cordon'=>$request->Cordon,
            'Nombre_spires_Cordon'=>$request->Nombre_spires_Cordon,
            'Nombre_Utérus_myomateux'=>$request->Nombre_Utérus_myomateux,
            'Taille_Utérus_myomateux'=>$request->Taille_Utérus_myomateux,
            'Localisation_Utérus_myomateux'=>$request->Localisation_Utérus_myomateux,
            'Myome_Nécrobiose_Utérus_myomateux'=>$request->Myome_Nécrobiose_Utérus_myomateux,
            'Kyste_Ovarien'=>$request->Kyste_Ovarien,
            'Localisation_GEU'=>$request->Localisation_GEU,
            'Adhérences_ovarienne'=>$request->Adhérences_ovarienne,
            'Longueur_Masse_fibrokystique'=>$request->Longueur_Masse_fibrokystique,
            'Largeur_Masse_fibrokystique'=>$request->Largeur_Masse_fibrokystique,
            'Epaisseur_Masse_fibrokystique'=>$request->Epaisseur_Masse_fibrokystique,
            'Couleur_Liquide_intraabdominal'=>$request->Couleur_Liquide_intraabdominal,
            'Quantite_Liquide_intraabdominal'=>$request->Quantite_Liquide_intraabdominal,
            'Nom_Medecin'=>$request->Nom_Medecin,
            'Nom_Patient'=>$request->Nom_Patient,
            'Nom_Service'=>$request->Nom_Service]);
            Flashy::primary('Trouvaille enregistrer avec succes');
            return redirect()->route('trouvailles');
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
        $trouvaille = Trouvaille::FindOrFail($id);
        $services = Service::all();
        $medecins = Medecin::all();
        $patients = Patient::all();
        return view('Editions/TrouvailleEdit',compact('trouvaille','services','medecins','patients'));
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
        $trouvaille = Trouvaille::FindOrFail($id);
        $trouvaille->update(['Présentation'=>$request->Présentation,
            'Sexe'=>$request->Sexe,
            'Poids_Naissance'=>$request->Poids_Naissance,
            'Apgar'=>$request->Apgar,
            'Mensurations'=>$request->Mensurations,
            'Liquide_Amniotique'=>$request->Liquide_Amniotique,
            'Cordon'=>$request->Cordon,
            'Nombre_spires_Cordon'=>$request->Nombre_spires_Cordon,
            'Nombre_Utérus_myomateux'=>$request->Nombre_Utérus_myomateux,
            'Taille_Utérus_myomateux'=>$request->Taille_Utérus_myomateux,
            'Localisation_Utérus_myomateux'=>$request->Localisation_Utérus_myomateux,
            'Myome_Nécrobiose_Utérus_myomateux'=>$request->Myome_Nécrobiose_Utérus_myomateux,
            'Kyste_Ovarien'=>$request->Kyste_Ovarien,
            'Localisation_GEU'=>$request->Localisation_GEU,
            'Adhérences_ovarienne'=>$request->Adhérences_ovarienne,
            'Longueur_Masse_fibrokystique'=>$request->Longueur_Masse_fibrokystique,
            'Largeur_Masse_fibrokystique'=>$request->Largeur_Masse_fibrokystique,
            'Epaisseur_Masse_fibrokystique'=>$request->Epaisseur_Masse_fibrokystique,
            'Couleur_Liquide_intraabdominal'=>$request->Couleur_Liquide_intraabdominal,
            'Quantite_Liquide_intraabdominal'=>$request->Quantite_Liquide_intraabdominal,
            'Nom_Medecin'=>$request->Nom_Medecin,
            'Nom_Patient'=>$request->Nom_Patient,
            'Nom_Service'=>$request->Nom_Service]);
            Flashy::message(sprintf('Trouvaille %s modifier avec succes',$id));
            return redirect()->route('trouvailles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Trouvaille::destroy($id);
        Flashy::danger(sprintf('Trouvaille %s supprimer avec succes',$id));
        return redirect()->route('trouvailles');
    }
}
