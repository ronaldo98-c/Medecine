@extends('layouts/masters')
@section('content')
@if(Session::has('email') && Session::has('password') )

  <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Header top area start-->
            <!-- Header top area end-->
            <!-- Breadcome start-->
            <div class="content-inner-all">
            <div class="header-top-area">
                <div class="fixed-header-top">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12">
                                <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <div class="admin-logo logo-wrap-pro">
                                    <a href="#"><img src="{{ URL::asset('img/logo/log.png')}}" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-1 col-sm-1 col-xs-12">
                                <div class="header-top-menu tabl-d-n">
                                <ul class="nav navbar-nav mai-top-nav">
                                    <li class="nav-item dropdown">
                                            <a href="#" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span class="angle-down-topmenu"></span></a>
                                             <div role="menu" class="dropdown-menu animated flipInX">
                                               
                                            </div> 
                                        </li> 
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                                <div class="header-right-info">
                                    <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                        <li class="nav-item">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                <span class="adminpro-icon adminpro-user-rounded header-riht-inf"></span>
                                                <span class="admin-name">Utilisateurs</span>
                                                <span class="author-project-icon adminpro-icon adminpro-down-arrow"></span>
                                            </a>
                                            <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated flipInX">
                                                <li><a href="#"><span class="adminpro-icon adminpro-user-rounded author-log-ic"></span>Mon Profil</a>
                                                </li>
                                                </li>
                                                <li><a href="{{url('/login')}}"><span class="adminpro-icon adminpro-locked author-log-ic"></span>Deconnexion</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                                    <div class="col-lg-6">
                                        
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Examens</span>
                                            </li>
                                        </ul>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->
            <!-- Mobile Menu start -->
            <!-- Mobile Menu end -->
            <!-- Breadcome start-->
      
            <!-- Breadcome End-->
            <!-- Static Table Start -->
            <div class="data-table-area mg-b-15">
          <div class="container-fluid">
             <div class="row">
            <div class="col-lg-12">
                <div class="sparkline13-list shadow-reset">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                             <div class="row">
                                <div class="col-lg-9">
                                     <div class="all-form-element-inner">
                                         <form action="{{route('examen_physique_senologies.store')}}" method="POST">
                                             {{csrf_field()}}
                                             <div class="form-group-inner">
                                                 <h5><strong>Param??tres</strong></h5>
                                                <div class="row">
                                                   <div class="col-lg-4">
                                                    <input type="number" class="form-control" name="Poids" id="poids" placeholder="Poids" title="Poids" required>
                                                   </div>                                                
                                                   <div class="col-lg-4">
                                                    <input type="number" class="form-control" name="Taille" id="taille" placeholder="Taille"title="Taille" required>
                                                   </div>
                                                   <div class="col-lg-4">
                                                    <input type="text" class="form-control" name="Imc" id="imc" placeholder="IMC" title="IMC" required><i class="err"></i>
                                                   </div>
                                                  
                                                </div>
                                                <div class="row">
                                                   <div class="col-lg-4">
                                                    <input type="number" class="form-control" name="Pression_Art??rielle" id="Pression_Art??rielle" placeholder="Pression Art??rielle" title="Pression Art??rielle" required>
                                                   </div>                                                
                                                   <div class="col-lg-4">
                                                    <input type="number" class="form-control" name="Frequence_Cardiaque" id="Frequence_Cardiaque" placeholder="Frequence Cardiaque" title="Frequence Cardiaque" required>
                                                   </div>
                                                   <div class="col-lg-4">
                                                    <input type="number" class="form-control" name="Frequence_Respiratoire" id="Frequence_Respiratoire" placeholder="Frequence Respiratoire" title="Frequence Respiratoire" required> 
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col-lg-4">
                                                    <input type="number" class="form-control" name="Temp??rature" id="Temperature" placeholder="Temp??rature" title="Temp??rature" required><div id="element"></div>
                                                   </div>                                                
                                                   <div class="col-lg-4">
                                                    <input type="number" class="form-control" name="Saturation_En_Oxygi??ne" id="Saturation_En_Oxygi??ne" placeholder="Saturation En Oxygi??ne" title="Saturation En Oxygi??ne" required>
                                                   </div>
                                                   <div class="col-lg-4">
                                                    <input type="number" class="form-control" name="Glyc??mie" id="Glyc??mie" placeholder="Glyc??mie A Jeun" title="Glyc??mie A Jeun" required> 
                                                   </div>
                                                   <div class="col-lg-4">
                                                    <input type="number" class="form-control" name="Score_Coma_Glasgow" id="Score_Coma_Glasgow" placeholder="Score De Coma De Glasgow" title="Score De Coma De Glasgow" required> 
                                                   </div>
                                                </div>
                                                <br>
                                                <h5><strong>Aspects G??n??raux</strong></h5>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                       <select name="Etat_G??n??ral" id="Etat_G??n??ral" class="form-control" title="Etat G??n??ral">
                                                         <option>Etat G??n??ral</option>
                                                         <option>conserv??</option>
                                                         <option>Alt??rer??</option>
                                                       </select> 
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <select name="Asth??nie" id="Asth??nie" class="form-control" title="Asth??nie">
                                                         <option>Asth??nie</option>
                                                         <option>Oui</option>
                                                         <option>Non</option>
                                                       </select> 
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <select name="Anorexie" id="Anorexie" class="form-control" title="Anorexie">
                                                         <option>Anorexie</option>
                                                         <option>Oui</option>
                                                         <option>Non</option>
                                                       </select> 
                                                    </div>
                                                </div>
                                                <div class="row">
                                                  <div class="col-lg-4">
                                                       <select name="Amaigrissement" id="Amaigrissement" class="form-control" title="Amaigrissement">
                                                          <option>Amaigrissement</option>
                                                          <option>Oui</option>
                                                          <option>Non</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <input type="number"required id="Kilo_Perdu" name="Kilo_Perdu" class="form-control" placeholder="Si Amaigrissement Nombre de kilo perdu" title="Si Amaigrissement Entrer le Nombre de kilo perdu">
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <input type="text" required id="Temps" name="Temps" class="form-control" placeholder="Si Amaigrissement Temps  " title="Si Amaigrissement Entrer le Temps Mis">
                                                  </div>
                                                </div>
                                                <br>
                                                 <h5 class="color">Tete Et Cou</h5>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                       <select name="Conjonctives" id="Conjonctives" class="form-control" title="Conjonctives">
                                                         <option>Conjonctives</option>
                                                         <option>Ros??es</option>
                                                         <option>Pales</option>
                                                         <option>Interm??diaire</option>
                                                       </select> 
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <select name="Sci??res" id="Sci??res" class="form-control" title="Sci??res">
                                                         <option>Sci??res</option>
                                                         <option>Anict??rique</option>
                                                         <option>Sub-Ict??riques</option>
                                                         <option>Ict??riques</option>
                                                       </select> 
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <select name="Ad??nopathies_Cervicaux_Auxilliaires" id="Ad??nopathies_Cervicaux_Auxilliaires" class="form-control" title="Ad??nopathies Cervicaux Auxilliaires">
                                                         <option>Ad??nopathies_Cervicaux_Auxilliaires</option>
                                                         <option>Absente</option>
                                                         <option>Presente</option>
                                                       </select> 
                                                    </div>
                                                </div>
                                                <div class="row">
                                                  <div class="col-lg-4">
                                                        <textarea required name="Caract??ristiques_Ad??nopathies" class="form-control" id="Caract??ristiques_Ad??nopathies" cols="30" rows="10" placeholder="Caract??ristiques Ad??nopathies" title="Caract??ristiques Ad??nopathies"></textarea> 
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="Volume_Thyroide" id="Volume_Thyroide" class="form-control" title="Volume Thyroide">
                                                          <option>Volume Thyroide</option>
                                                          <option>Normal</option>
                                                          <option>Augment??e</option>
                                                          <option>Absente</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="Aspect_Thyroide" id="Aspect_Thyroide" class="form-control" title="Aspect Thyroide">
                                                          <option>Aspect Thyroide</option>
                                                          <option>Contour R??gulier</option>
                                                          <option>Contour Irr??gulier</option>
                                                          <option>Presence de Nodules</option>
                                                       </select>
                                                  </div>
                                                </div>
                                                <br>
                                                <!-- <h5 class="color">Seins</h5>
                                                <h6>Inspection</h6>
                                                <div class="row">
                                                  <div class="col-lg-4">
                                                       <select name="Dissym??tries_Seins" id="Dissym??tries_Seins" class="form-control" title="Dissym??tries Seins">
                                                          <option>Dissym??tries Seins</option>
                                                          <option>Oui</option>
                                                          <option>Non</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="Sein_Droit_Inspecter" id="Sein_Droit" class="form-control" title="Sein Droit">
                                                          <option>Sein Droit</option>
                                                          <option>Aucune Anomalie</option>
                                                          <option>Cicatrice</option>
                                                          <option>R??traction de la peau</option>
                                                          <option>Anomalie Du Mamelon</option>
                                                          <option>Peau D'Orange</option>
                                                          <option>Oed??me</option>
                                                          <option>Rougeur</option>
                                                          <option>Voussure</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="Sein_Gauche_Inspecte" id="Sein_Gauche" class="form-control" title="Sein Gauche">
                                                       <option>Sein Gauche</option>
                                                          <option>Aucune Anomalie</option>
                                                          <option>Cicatrice</option>
                                                          <option>R??traction de la peau</option>
                                                          <option>Anomalie Du Mamelon</option>
                                                          <option>Peau D'Orange</option>
                                                          <option>Oed??me</option>
                                                          <option>Rougeur</option>
                                                          <option>Voussure</option>
                                                       </select>
                                                  </div>
                                                </div>
                                                <h6>Palpatation</h6>
                                                <div class="row">
                                                  <div class="col-lg-4">
                                                       <select name="Sein_Droit_Palper" id="Sein_Droit" class="form-control" title="Sein Droit">
                                                          <option>Sein Droit</option>
                                                          <option>Aucune Anomalie</option>
                                                          <option>Masse</option>
                                                          <option>Ecoulement Mamelonnaire</option>
                                                          <option>Ad??nopathies</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="Sein_Gauche_Palper" id="Sein_Gauche" class="form-control" title="Sein Gauche">
                                                          <option>Sein Gauche</option>
                                                          <option>Aucune Anomalie</option>
                                                          <option>Masse</option>
                                                          <option>Ecoulement Mamelonnaire</option>
                                                          <option>Ad??nopathies</option>
                                                       </select>
                                                  </div>
                                                </div> -->
                                                <br>
                                                <h5 class="color">Coeur</h5>
                                                <h6>Choc De Pointe</h6>
                                                <div class="row">
                                                  <div class="col-lg-4">
                                                       <select name="Position" id="Position" class="form-control" title="Position">
                                                          <option>Position</option>
                                                          <option>5i??me EIG</option>
                                                          <option>D??viation A Droite</option>
                                                          <option>D??viation A Gauche</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="Aspect" id="Aspect" class="form-control" title="Aspect">
                                                          <option>Aspect</option>
                                                          <option>Normale</option>
                                                          <option>Etal??</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="Douleur_Palpation_Thoracique" id="Douleur_Palpation_Thoracique" class="form-control" title="Douleur Palpation Thoracique">
                                                          <option>Douleur Palpation Thoracique</option>
                                                          <option>Oui</option>
                                                          <option>Non</option>
                                                       </select>
                                                  </div>
                                                </div>
                                                <h6>Auscultation Coeur</h6>
                                                <div class="row">
                                                  <div class="col-lg-4">
                                                       <select name="B1_B2" id="B1_B2" class="form-control"title="B1 et B2">
                                                          <option>B1 et B2</option>
                                                          <option>Normalement Audible</option>
                                                          <option>Assourdis</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="Rythme_B1_B2" id="Rythme_B1_B2" class="form-control" title="Rythme B1 et B2">
                                                          <option>Rythme B1 et B2</option>
                                                          <option>R??gulier</option>
                                                          <option>Irr??gulier</option>
                                                          <option>R??guli??rement r??gulier</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="Bruits_Sur_Ajout??" id="Bruits_Sur_Ajout??" class="form-control" title="Bruits Sur Ajout??">
                                                          <option>Bruits Sur Ajout??</option>
                                                          <option>Aucun</option>
                                                          <option>B3</option>
                                                          <option>Soufle</option>
                                                       </select>
                                                  </div>
                                                </div>
                                                <br>
                                                <h5 class="color">Poumons</h5>
                                                <div class="row">
                                                  <div class="col-lg-4">
                                                       <select name="Ampilation_Thoracique" id="Ampilation_Thoracique" class="form-control" title="Ampilation Thoracique">
                                                          <option>Ampilation Thoracique</option>
                                                          <option>Bonne</option>
                                                          <option>Diminuer</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="Vibrations_Vocales" id="Vibration_Vocale" class="form-control" title="Vibrations Vocales">
                                                          <option>Vibrations Vocales</option>
                                                          <option>Bien Transmises</option>
                                                          <option>Augment??</option>
                                                          <option>Absente</option>
                                                       </select>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                <div class="col-lg-4">
                                                       <textarea required name="Typographie_Anomalie" id="Typographie_Anomalie" class="form-control" cols="30" rows="10" placeholder="Typographie Anomalie si Ampilation Thoracique Diminuer" title="Typographie Anomalie si Ampilation Thoracique Diminuer"></textarea>
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <textarea required name="Localisation_Anomalie" id="Localisation_Anomalie" class="form-control" cols="30" rows="10" placeholder="Localisation Anomalie si Vibrations Vocales Augment?? ou Absente" title="Localisation Anomalie si Vibrations Vocales Augment?? ou Absente"></textarea>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="col-lg-4">
                                                       <select name="Sonorit??_Pulmonaire" id="Sonorit??_Pulmonaire" class="form-control" title="Sonorit?? Pulmonaire">
                                                          <option>Sonorit?? Pulmonaire</option>
                                                          <option>Normale</option>
                                                          <option>Matit??</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="Bruit_Pulmonaire" id="Bruit_Pulmonaire" class="form-control" title="Bruit Pulmonaire<">
                                                          <option>Bruit Pulmonaire</option>
                                                          <option>Mumures V??siculaire</option>
                                                          <option>Rales Cr??pitant</option>
                                                          <option>Rales Sous-Cr??pitant</option>
                                                          <option>Ronchis</option>
                                                          <option>Sibilants</option>
                                                          <option>Autres</option>
                                                          <option>Ronchis</option>
                                                       </select>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="col-lg-4">
                                                       <textarea required name="Typographie_Anomalie_Matit??" id="Typographie_Anomalie_Matit??" class="form-control" cols="30" rows="10" placeholder="Typographie Anomalie si Sonorit?? Pulmonaire Matit??" title="Typographie Anomalie si Sonorit?? Pulmonaire Matit??"></textarea>
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <textarea required name="Typographie_Bruit_Pulmonaire" id="Typographie_Bruit_Pulmonaire" class="form-control" cols="30" rows="10" placeholder="Typographie Bruit Pulmonaire si Autre Bruit Pulmonaire" title="Typographie Bruit Pulmonaire si Autre Bruit Pulmonaire"></textarea>
                                                  </div>
                                                </div>
                                                <h5 class="color">Abdomen</h5>
                                                <h6>Inspection</h6>
                                                <div class="row">
                                                  <div class="col-lg-4">
                                                       <select name="Aspect_Abdomen" id="Aspect_Abdomen" class="form-control" title="Aspect Abdomen">
                                                          <option>Aspect Abdomen</option>
                                                          <option>Non Distendu</option>
                                                          <option>Distendu</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="Mobilit??" id="Mobilit??" class="form-control"title="Mobilit??">
                                                          <option>Mobilit??</option>
                                                          <option>Immobile</option>
                                                          <option>Mobile</option>
                                                          <option>Mobile Avec Respiration</option>
                                                       </select>
                                                  </div>
                                                 </div>
                                                <div class="row">
                                                 <div class="col-lg-4">
                                                       <select name="Signes_Suppl??mentaires" id="Signes_Suppl??mentaires" class="form-control" title="Signes Suppl??mentaires">
                                                          <option>Signes Suppl??mentaires</option>
                                                          <option>Aucun</option>
                                                          <option>Circulation Veineuse Superficiel </option>
                                                          <option>Scarifications</option>
                                                          <option>Autres</option>
                                                       </select>
                                                  </div>
                                                 <div class="col-lg-4">
                                                       <textarea required name="Autres_Signes" id="Autres_Signes" class="form-control" cols="30" rows="10" placeholder="Autres Signes" title="Autres Signes"></textarea>
                                                  </div>
                                                  
                                                </div>
                                                <br>
                                                <h6>Palpattion</h6>
                                                <div class="row">
                                                  <div class="col-lg-4">
                                                       <select name="Palpation_Superficiel" id="Palpation_Superficiel" class="form-control" title="Palpation Superficiel">
                                                          <option>Palpation Superficiel</option>
                                                          <option>Souplesse Musculaire</option>
                                                          <option>D??fense</option>
                                                          <option>Contracture</option>
                                                          <option>Sensibilit??</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="Localisation_Palpation_Superficiel" id="Localisation_Palpation_Superficiel" class="form-control" title="Localisation Palpation Superficiel">
                                                          <option>Localisation Palpation Superficiel</option>
                                                          <option>Difus</option>
                                                          <option>HCD</option>
                                                          <option>Epigastre</option>
                                                          <option>HDG</option>
                                                          <option>Flanc Droit</option>
                                                          <option>Zone P??ri-ombilicale</option>
                                                          <option>Flanc Gauche</option>
                                                          <option>Fosse Iliaque Droite</option>
                                                          <option>Hypogastrique</option>
                                                          <option>Fosse Iliaque Gauche</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="Palpation_Profonde" id="Palpation_Profonde" class="form-control" title="Palpation Profonde">
                                                          <option>Palpation Profonde</option>
                                                          <option>Normale</option>
                                                          <option>H??patorm??galie</option>
                                                          <option>Spl??nom??galite</option>
                                                          <option>Autres</option>
                                                       </select>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="col-lg-4">
                                                      <input  required type="text" name="Fl??che_H??patite" title="Nombre de Cm Du Foie" placeholder="si H??patorm??galie" class="form-control" title="Aspect"> 
                                                  </div>
                                                  <div class="col-lg-4">
                                                      <input required type="text" name="Hakectt" title="D??gr?? Clinique" placeholder="si Spl??nom??galite" class="form-control" title="Aspect"> 
                                                  </div>
                                                  
                                                  <div class="col-lg-4">
                                                     <select name="Perscussion" id="" class="form-control" title="Perscussion">
                                                       <option>Douleur A L'??branlement Lombaire</option>
                                                       <option>Oui</option>
                                                       <option>Non</option>
                                                     </select>
                                                  </div>
                                                 </div>
                                                <div class="row">
                                                  <div class="col-lg-4">
                                                     <select name="Auscultation" id="" class="form-control" title="Bruit Hydro-Aeriques">
                                                       <option>Bruit Hydro-Aeriques</option>
                                                       <option>Absent</option>
                                                       <option>Pr??sent</option>
                                                       <option>Acc??l??r??s</option>
                                                     </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                    <textarea required name="Autre_Palpation_Profonde" id="" cols="30" rows="10" placeholder="Autre_Palpation_Profonde" class="form-control" title="Autre Palpation Profonde"></textarea>
                                                  </div>
                                                </div>
                                                <br>
                                                <h5 class="color">Speculum</h5>
                                                <div class="row">                                            
                                                  <div class="col-lg-4">
                                                       <select name="Aspect_Col_Ult??rin" id="Aspect_Col_Ult??rin" class="form-control" title="Aspect Col Ult??rin">
                                                          <option>Aspect Col Ult??rin</option>
                                                          <option>Conique</option>
                                                          <option>Autre</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                      <input type="text" name="Autre_Aspect_Col_Ult??rin" title="Autre Aspect Col Ult??rin" placeholder="Autre Aspect Col Ult??rin" class="form-control"> 
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="Couleur_Col_Ult??rin" id="Couleur_Col_Ult??rin" class="form-control" title="Couleur Col Ult??rin">
                                                          <option>Couleur Col Ult??rin</option>
                                                          <option>Ros??e</option>
                                                          <option>Violac??e</option>
                                                          <option>Autre</option>
                                                       </select>
                                                  </div>                                          
                                                </div>
                                                <div class="row">
                                                  <div class="col-lg-4">
                                                      <input required type="text" name="Autre_Couleur_Col_Ult??rin" title="Autre Couleur Col Ult??rin" placeholder="Autre Couleur Col Ult??rin" class="form-control"> 
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="L??sion_Du_Col" id="L??sion_Du_Col" class="form-control" title="L??sion Du Col">
                                                          <option>L??sion Du Col</option>
                                                          <option>Aucune</option>
                                                          <option>Ectropion</option>
                                                          <option>Plaie</option>
                                                          <option>Cicatrice</option>
                                                          <option>Autre</option>
                                                       </select>
                                                  </div>
                                                  
                                                  <div class="col-lg-4">
                                                      <input required type="text" name="Autre_L??sion_Du_Col" title="Autre L??sion Du Col" placeholder="Autre L??sion Du Col" class="form-control"> 
                                                  </div>
                                                 </div>
                                                 <div class="row">
                                                 <div class="col-lg-4">
                                                       <select name="Ecoulement_Endom??trial" id="Ecoulement_Endom??trial" class="form-control" title="Ecoulement Endom??trial">
                                                          <option>Ecoulement Endom??trial</option>
                                                          <option>Oui</option>
                                                          <option>Non</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="L??sion_Vaginale" id="L??sion_Vaginale" class="form-control" title="??sion Vaginale">
                                                          <option>L??sion Vaginale</option>
                                                          <option>Aucune</option>
                                                          <option>Plaie</option>
                                                          <option>Cicatrice</option>
                                                          <option>Autre</option>
                                                       </select>
                                                  </div>                                           
                                                </div>
                                                <div class="row">
                                                  <div class="col-lg-4">
                                                      <textarea required name="Caract??ristique_Ecoulement_Endom??trial" id="" cols="30" rows="10" class="form-control" placeholder="Caract??ristique Ecoulement Endom??trial" title="Caract??ristique Ecoulement Endom??trial"></textarea>
                                                  </div>
                                                  <div class="col-lg-4">
                                                      <input required type="text" name="Autre_L??sion_Vaginale" title="Autre L??sion Vaginale" placeholder="Autre L??sion Vaginale" class="form-control" > 
                                                  </div>
                                                  <div class="col-lg-4">
                                                      <textarea required name="Manoeuvre_Sp??cialis??" id="" cols="30" rows="10" class="form-control" placeholder="Manoeuvre Sp??cialis??" title="Manoeuvre Sp??cialis??"></textarea>
                                                  </div>                                              
                                                </div>
                                                <br>
                                                <h5 class="color">Examen De La Glaire Cervicale</h5>
                                                <div class="row">                                            
                                                  <div class="col-lg-4">
                                                       <select name="Couleur_Glaire_Cervicale" id="Couleur_Glaire_Cervicale" class="form-control" title="Couleur Glaire Cervicale">
                                                          <option>Couleur Glaire Cervicale</option>
                                                          <option>Transparente</option>
                                                          <option>Blanchatre ou Jaunatre</option>
                                                          <option>Marron</option>
                                                          <option>Stries Rougeatre</option>
                                                          <option>Autre</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                      <input type="text" name="Autre_Couleur_Glaire_Cervicale" title="Autre Couleur Glaire Cervicale" placeholder="Autre Couleur Glaire Cervicale" class="form-control" title="Aspect"> 
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="Aspect_Glaire_Cervicale" id="Aspect_Glaire_Cervicale" class="form-control" title="Aspect Glaire Cervicale">
                                                          <option>Aspect Glaire Cervicale</option>
                                                          <option>Filant</option>
                                                          <option>Collante</option>
                                                          <option>Acqueuse</option>
                                                       </select>
                                                  </div>                                                
                                                </div>
                                                <br>
                                                <h5 class="color">Touch?? Vaginale</h5>
                                                <h6>Inspection</h6> 
                                                <div class="row">                                  
                                                  <div class="col-lg-4">
                                                       <select name="Grandes_L??vres" id="Grandes_L??vres" class="form-control" title="Grandes L??vres">
                                                          <option>Grandes L??vres</option>
                                                          <option>Normales</option>
                                                          <option>Ne recouvrant pas les petites L??vres</option>
                                                          <option>Autre</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                      <input type="text" name="Autre_Grandes_L??vres" title="Autre Grandes L??vres" placeholder="Autre Grandes L??vres" class="form-control"> 
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="Petites_L??vres" id="Petites_L??vres" class="form-control" title="Petites L??vres">
                                                          <option>Petites L??vres</option>
                                                          <option>Normale</option>
                                                          <option>Plates</option>
                                                          <option>Autre</option>
                                                       </select>
                                                  </div>                                            
                                                </div>
                                                <div class="row">
                                                  <div class="col-lg-4">
                                                      <input required type="text" name="Autre_Petites_L??vres" title="Autre Petites L??vres" placeholder="Autre Petites L??vres" class="form-control" title="Autre Petites L??vres"> 
                                                  </div>
                                                </div>
                                                <br>
                                                <h6>Col Ult??rin</h6>  
                                                <div class="row">                                     
                                                  <div class="col-lg-4">
                                                       <select name="Position_Col_Ult??rin" id="Position_Col_Ult??rin" class="form-control" title="Position Col Ult??rin">
                                                          <option>Position Col Ult??rin</option>
                                                          <option>M??diane</option>
                                                          <option>Ant??rieure</option>
                                                          <option>Post??rieure</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="Longueur" id="Longueur" class="form-control" title="Longueur Col Ult??rin">
                                                          <option>Longueur Col Ult??rin</option>
                                                          <option>Long</option>
                                                          <option>Mi-Long</option>
                                                          <option>Court</option>
                                                          <option>Effac??</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="Circonstance" id="Circonstance" class="form-control" title="Circonstance">
                                                          <option>Circonstance</option>
                                                          <option>Souple</option>
                                                          <option>Moyenne</option>
                                                          <option>Ferme</option>
                                                       </select>
                                                  </div>                                           
                                                </div>
                                                <div class="row">
                                                  <div class="col-lg-4">
                                                       <select name="Signe_De_Chandelier" id="Signe_De_Chandelier" class="form-control" title="Signe De Chandelier">
                                                          <option>Signe De Chandelier</option>
                                                          <option>Pr??sent</option>
                                                          <option>Absent</option>
                                                       </select>
                                                  </div>                                       
                                                  <div class="col-lg-4">
                                                       <select name="Doigtier" id="Doigtier" class="form-control" title="Doigtier">
                                                          <option>Doigtier</option>
                                                          <option>Propre</option>
                                                          <option>S??cr??tions Malodorante</option>
                                                          <option>S??cr??tion+stries de sang</option>
                                                          <option>Autre</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                      <input required type="text" name="Autre_Doigtier" title="Autre Doigtier" placeholder="Autre Doigtier" class="form-control"> 
                                                  </div>                                 
                                                </div>
                                                <div class="row">
                                                  <div class="col-lg-4">
                                                    <textarea required name="Autre_Toucher_Vaginal" id="Autre_Toucher_Vaginal" cols="30" rows="10" placeholder="Autre Toucher Vaginal" class="form-control" title="Autre Toucher Vaginal"></textarea>
                                                  </div> 
                                                  <div class="col-lg-4">
                                                    <textarea required name="Information_Suppl??mentaire_Examen_Physique" id="Information_Suppl??mentaire_Examen_Physique" cols="30" rows="10" placeholder="Information Suppl??mentaire Examen Physique" class="form-control" title="Information Suppl??mentaire Examen Physique"></textarea>
                                                  </div> 
                                                </div>
                                             </div>
                                             <div class="form-group-inner">
                                                <div class="login-btn-inner">
                                                   <div class="row">
                                                      <div class="col-lg-2"></div>
                                                         <div class="col-lg-7">
                                                           <div class="login-horizental cancel-wp pull-left">
                                                              <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Save</button>
                                                            </div>
                                                          </div>
                                                       </div>
                                                    </div>
                                                 </div>
                                                </div>
                                          </form>
                                           <a href="examen_physique_senologies"><button class="btn btn-white cancel" >Cancel</button></a>
                                          </div>
                                        </div>
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <!-- Static Table End -->
@endif
@endsection

