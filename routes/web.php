<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Model\Service;
use App\Model\Medecin;
use App\Model\Patient;
use App\Model\Patient_Antecedent;
use App\Model\Choix_Examen;
use App\Model\Examen_Physique_Gynecologie;
use App\Model\Examen_Complementaire;
use App\Model\Diagnostic;
use App\Model\Assurance;
use App\Model\Intervention;
use App\Model\Geste;
use App\Model\Consultation;
use App\Model\Traitement;

Route::middleware('auth')->group(function () {

    
    Route::get('',function(){
        $patients = Patient::count();
        $consultations = Consultation::count();
        $traitements = Traitement::count();
        $diagnostics = Diagnostic::count();
        $examen_physiques = Examen_Physique_Gynecologie::count();
        $examen_complementaires = Examen_Complementaire::count();
        return view('accueil',compact('patients','consultations','traitements','diagnostics','examen_physiques','examen_complementaires'));
    })->name('accueil');
    
    Route::get('CreationPatient',function(){
        $assurances = Assurance::all();
        return view('creations/CreationPatient',compact('assurances'));
    });
    Route::get('Creation_Mode_Vie',function(){
        $patients = Patient::all();
        return view('creations/Creation_Mode_Vie',compact('patients'));
    });
    Route::get('Creation_A_Medicaux',function(){
        $patients = Patient::all();
        return view('creations/Creation_A_Medicaux',compact('patients'));
    });
    Route::get('mode_vie',function(){
        return view('Affichages/mode_vie');
    });
    Route::get('procedure',function(){
        return view('Affichages/procedure');
    });
    Route::get('a_medicamenteux',function(){
        $patients = Patient::all();
        return view('creations/a_medicamenteux',compact('patients'));
    });
    Route::get('Creation_A_Gynecologique',function(){
        $patients = Patient::all();
        return view('creations/Creation_A_Gynecologique',compact('patients'));
    });
    Route::get('Creation_Examen_Physique_Gynecologie',function(){
        return view('creations/Creation_Examen_Physique_Gynecologie');
    });
    Route::get('acces_medecin',function(){
        $choix_examens = Choix_Examen::all();
        $medecins = Medecin::all();
        $diagnostics = Diagnostic::all();
        return view('Affichages/acces_medecin',compact('choix_examens','medecins','diagnostics'));
    });
    Route::get('compte_rendu',function(){
        $interventions=Intervention::all();
        return view('Affichages/compte_rendu',compact('interventions'));
    });
    Route::get('geste',function(){
        $gestes=Geste::all();
        return view('Affichages/geste',compact('gestes'));
    });

    Route::get('Creation_Intervention',function(){
        $services = Service::all();
        $medecins = Medecin::all();
        $patients = Patient::all();
        return view('creations/Creation_Intervention',compact('services','medecins','patients'));
    });
    Route::get('Creation_Trouvaille',function(){
        $services = Service::all();
        $medecins = Medecin::all();
        $patients = Patient::all();
        return view('creations/Creation_Trouvaille',compact('services','medecins','patients'));
    });
    Route::get('Creation_Geste',function(){
        $services = Service::all();
        $medecins = Medecin::all();
        $patients = Patient::all();
        return view('creations/Creation_Geste',compact('services','medecins','patients'));
    });
    Route::get('Creation_Indication',function(){
        $services = Service::all();
        $medecins = Medecin::all();
        $patients = Patient::all();
        return view('creations/Creation_Indication',compact('services','medecins','patients'));
    });
    Route::get('Creation_Information_Supplementaire',function(){
        $services = Service::all();
        $medecins = Medecin::all();
        $patients = Patient::all();
        return view('creations/Creation_Information_Supplementaire',compact('services','medecins','patients'));
    });
    Route::get('Creation_Procedure',function(){
        $services = Service::all();
        $medecins = Medecin::all();
        $patients = Patient::all();
        return view('creations/Creation_Procedure',compact('services','medecins','patients'));
    });
    Route::get('acces_laboratoire',function(){
        $services = Service::all();
        $medecins = Medecin::all();
        $patient_antecedents = Patient_Antecedent::all();
        $choix_examens = Choix_Examen::all();
        $examen_complementaires = Examen_Complementaire::all();
        $examen_physique_gynecologies = Examen_Physique_Gynecologie::all();
        return view('Affichages/acces_laboratoire',compact('medecins','services','patient_antecedents','choix_examens','examen_complementaires','examen_physique_gynecologies'));
    });

    Route::resource('patients','PatientController');

    Route::resource('medecins','MedecinController');

    Route::resource('consultations','ConsultationController');

    Route::resource('laboratoires','LaboratoireController');

    Route::resource('services','ServiceController');

    Route::resource('a_medicamenteus','A_MedicamenteuxController') ;

    Route::resource('a_imunologiques','A_ImunologiqueController') ;

    Route::resource('a_vaccinaus','A_VaccinauxController') ;

    Route::resource('a_allergiques','A_AllergiqueController') ;

    Route::resource('a_chirugicaus','A_ChirugicauxController') ;

    Route::resource('a_obstetricaus','A_ObstetricauxController') ;

    Route::resource('a_familiaus','A_FamiliauxController');

    Route::resource('mode_vies','Mode_VieController');

    Route::resource('a_medicaus','A_MedicauxController');

    Route::resource('a_gynecologiques','A_GynecologiqueController');

    Route::resource('patient_antecedents','Patient_AntecedentController');

    Route::resource('examen_complementaires','Examen_ComplementaireController');

    Route::resource('examen_physique_gynecologies','Examen_Physique_GynecologieController');

    Route::resource('diagnostics','DiagnosticController');

    Route::resource('choix_examens','Choix_ExamenController');

    Route::resource('pronostics','PronosticController');

    Route::resource('surveillances','SurveillanceController');

    Route::resource('traitements','TraitementController');

    Route::resource('assurances','AssuranceController');

    Route::resource('interventions','InterventionController');

    Route::resource('procedures','ProcedureController');

    Route::resource('gestes','GesteController');

    Route::resource('trouvailles','TrouvailleController');

    Route::resource('indications','IndicationController');

    Route::resource('information_supplementaires','Information_SupplementaireController');


    Route::get('patient','PatientController@index')->name('patient')->middleware('auth'); 

    Route::get('medecin','MedecinController@index')->name('medecin'); 

    Route::get('laboratoire','LaboratoireController@index')->name('laboratoires'); 

    Route::get('consultation','ConsultationController@index')->name('consultations'); 

    Route::get('service','ServiceController@index')->name('services'); 

    

    Route::get('register','Auth\RegisterController@index')->name('registers');

   

    Route::get('a_medicamenteux','A_MedicamenteuxController@index')->name('a_medicamenteus'); 

    Route::get('a_imunologique','A_ImunologiqueController@index')->name('a_imunologiques');

    Route::get('a_vaccinaux','A_VaccinauxController@index')->name('a_vaccinaus');

    Route::get('a_allergique','A_AllergiqueController@index')->name('a_allergiques');

    Route::get('a_chirugicaux','A_ChirugicauxController@index')->name('a_chirugicaus');

    Route::get('a_obstetricaux','A_ObstetricauxController@index')->name('a_obstetricaus');

    Route::get('a_familiaux','A_FamiliauxController@index')->name('a_familiaus');

    Route::get('mode_vie','Mode_VieController@index')->name('mode_vies');

    Route::get('a_medicaux','A_MedicauxController@index')->name('a_medicaus');

    Route::get('a_gynecologique','A_GynecologiqueController@index')->name('a_gynecologiques');

    Route::get('patient_antecedent','Patient_AntecedentController@index')->name('patient_antecedents');

    Route::get('examen_complementaire','Examen_ComplementaireController@index')->name('examen_complementaires');

    Route::get('examen_physique_gynecologie','Examen_Physique_GynecologieController@index')->name('examen_physique_gynecologies');

    Route::get('choix_examen','Choix_ExamenController@index')->name('choix_examens');

    Route::get('diagnostic','DiagnosticController@index')->name('diagnostics');

    Route::get('pronostic','PronosticController@index')->name('pronostics');

    Route::get('surveillance','SurveillanceController@index')->name('surveillances');

    Route::get('traitement','TraitementController@index')->name('traitements');

    Route::get('assurance','AssuranceController@index')->name('assurances');

    Route::get('intervention','InterventionController@index')->name('interventions');

    Route::get('procedure','ProcedureController@index')->name('procedures');

    Route::get('geste','GesteController@index')->name('gestes');

    Route::get('trouvaille','TrouvailleController@index')->name('trouvailles');

    Route::get('indication','IndicationController@index')->name('indications');

    Route::get('information_supplementaire','Information_SupplementaireController@index')->name('information_supplementaires');

});



Route::get('login',function(){
    return view('login');
})->name('login');

Route::post('login', 'Auth\LoginController@store')->name('login-user');

Route::get('logout', 'Auth\LoginController@logout')->name('logins.index');

Route::get('register',function(){
    return view('register');
});

Route::post('register', 'Auth\RegisterController@store')->name('store-user');