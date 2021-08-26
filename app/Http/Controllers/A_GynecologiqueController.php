<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\A_Gynecologique;
use App\Model\Patient;
use MercurySeries\Flashy\Flashy;
class A_GynecologiqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a_gynecologiques = A_Gynecologique::idDescending()
                                             ->get()
                                             ->take(50);
        $patients = Patient::all();
        return view('Affichages/a_gynecologique',compact('patients','a_gynecologiques'));
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
        $patient = Patient::where('id',$request->patient_id)->first();
        A_Gynecologique::create(['patient_id'=>$request->patient_id,'patient_name'=>$patient->Nom,'Puberte'=>$request->Puberte,'Ménarche'=>$request->Ménarche,'Type_Cycle'=>$request->Type_Cycle,'Abondance_Cycle'=>$request->Abondance_Cycle,'Syndrome_Prémenstruel'=>$request->Syndrome_Prémenstruel,'Durée_Règle'=>$request->Durée_Règle,'Durée_Cycle'=>$request->Durée_Cycle,'Partenaire_Actuel'=>$request->Partenaire_Actuel,'Partenaire_Cumulé'=>$request->Partenaire_Cumulé,'Premier_Rapport'=>$request->Premier_Rapport,'Abus_Sexuel'=>$request->Abus_Sexuel,'Dyspareunie'=>$request->Dyspareunie,'Intromission_Pénienne'=>$request->Intromission_Pénienne,'Méthode_Contraceptive'=>$request->Méthode_Contraceptive,'Tolérance'=>$request->Tolérance,'Complication'=>$request->Complication,'Infection_Génitale'=>$request->Infection_Génitale,'Germe_En_Cause'=>$request->Germe_En_Cause,'Nom_Malformation'=>$request->Nom_Malformation,'Date_Prise_En_Charge'=>$request->Date_Prise_En_Charge,'Moyens_Utilisés'=>$request->Moyens_Utilisés,'Evolution'=>$request->Evolution,'Préménopause'=>$request->Préménopause,'Age_Ménopause'=>$request->Age_Ménopause,'Médicament'=>$request->Médicament,'Tolérance_Traitement'=>$request->Tolérance_Traitement,'Complication_Traitement'=>$request->Complication_Traitement,'Grossesse_Actuel'=>$request->Grossesse_Actuel]);
        Flashy::primary('Enregistrement avec succes');
        return redirect()->route('a_gynecologiques');
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
        $a_gynecologique = A_Gynecologique::FindOrFail($id);
        $patients = Patient::all();
        return view('Editions/A_GynecologiqueEdit',compact('patients','a_gynecologique'));
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
        $a_gynecologique = A_Gynecologique::FindOrFail($id);
        $patient = Patient::where('id',$request->patient_id)->first();
        $a_gynecologique->update(['patient_id'=>$request->patient_id,'patient_name'=>$patient->Nom,'Puberte'=>$request->Puberte,'Ménarche'=>$request->Ménarche,'Type_Cycle'=>$request->Type_Cycle,'Abondance_Cycle'=>$request->Abondance_Cycle,'Syndrome_Prémenstruel'=>$request->Syndrome_Prémenstruel,'Durée_Règle'=>$request->Durée_Règle,'Durée_Cycle'=>$request->Durée_Cycle,'Partenaire_Actuel'=>$request->Partenaire_Actuel,'Partenaire_Cumulé'=>$request->Partenaire_Cumulé,'Premier_Rapport'=>$request->Premier_Rapport,'Abus_Sexuel'=>$request->Abus_Sexuel,'Dyspareunie'=>$request->Dyspareunie,'Intromission_Pénienne'=>$request->Intromission_Pénienne,'Méthode_Contraceptive'=>$request->Méthode_Contraceptive,'Tolérance'=>$request->Tolérance,'Complication'=>$request->Complication,'Infection_Génitale'=>$request->Infection_Génitale,'Germe_En_Cause'=>$request->Germe_En_Cause,'Nom_Malformation'=>$request->Nom_Malformation,'Date_Prise_En_Charge'=>$request->Date_Prise_En_Charge,'Moyens_Utilisés'=>$request->Moyens_Utilisés,'Evolution'=>$request->Evolution,'Préménopause'=>$request->Préménopause,'Age_Ménopause'=>$request->Age_Ménopause,'Médicament'=>$request->Médicament,'Tolérance_Traitement'=>$request->Tolérance_Traitement,'Complication_Traitement'=>$request->Complication_Traitement,'Grossesse_Actuel'=>$request->Grossesse_Actuel]);
        Flashy::message(sprintf('Antecedent %s modifier avec succes',$id));
        return redirect()->route('a_gynecologiques');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        A_Gynecologique::destroy($id);
        Flashy::danger(sprintf('Antecedent %s supprimer avec succes',$id));
        return redirect()->route('a_gynecologiques');
    }
}
