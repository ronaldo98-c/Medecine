@extends('layouts/masters')
@section('content')
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
                                         <form action="{{route('examen_physique_gynecologies.update',$examen_physique_gynecologie)}}" method="POST">
                                            {{csrf_field()}}
                                            {{method_field('PUT')}}
                                             <div class="form-group-inner">
                                             <h5><strong>Param??tres</strong></h5>
                                                <div class="row">
                                                   <div class="col-lg-4">
                                                    <input type="number" class="form-control" name="Poids" id="poids" value="{{$examen_physique_gynecologie->Poids}}" title="Poids">
                                                   </div>                                                
                                                   <div class="col-lg-4">
                                                    <input type="number" class="form-control" name="Taille" id="taille" value="{{$examen_physique_gynecologie->Taille}}" title="Taille">
                                                   </div>
                                                   <div class="col-lg-4">
                                                    <input type="text" class="form-control" name="Imc" id="imc" value="{{$examen_physique_gynecologie->Imc}}"  title="IMC"> 
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col-lg-4">
                                                    <input type="number" class="form-control" name="Pression_Art??rielle" id="Pression_Art??rielle" value="{{$examen_physique_gynecologie->Pression_Art??rielle}}"  title="Pression Art??rielle">
                                                   </div>                                                
                                                   <div class="col-lg-4">
                                                    <input type="number" class="form-control" name="Frequence_Cardiaque" id="Frequence_Cardiaque" value="{{$examen_physique_gynecologie->Frequence_Cardiaque}}"  title="Frequence Cardiaque">
                                                   </div>
                                                   <div class="col-lg-4">
                                                    <input type="number" class="form-control" name="Frequence_Respiratoire" id="Frequence_Respiratoire"value="{{$examen_physique_gynecologie->Frequence_Respiratoire}}"  title="Frequence Respiratoire"> 
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col-lg-4">
                                                    <input type="number" class="form-control" name="Temp??rature" id="Temp??rature" value="{{$examen_physique_gynecologie->Temp??rature}}"  title="Temp??rature">
                                                   </div>                                                
                                                   <div class="col-lg-4">
                                                    <input type="number" class="form-control" name="Saturation_En_Oxygi??ne" id="Saturation_En_Oxygi??ne" value="{{$examen_physique_gynecologie->Saturation_En_Oxygi??ne}}" title="Saturation En Oxygi??ne">
                                                   </div>
                                                   <div class="col-lg-4">
                                                    <input type="number" class="form-control" name="Glyc??mie" id="Glyc??mie" value="{{$examen_physique_gynecologie->Glyc??mie}}"  title="Glyc??mie A Jeun"> 
                                                   </div>
                                                   <div class="col-lg-4">
                                                    <input type="number" class="form-control" name="Score_Coma_Glasgow" id="Score_Coma_Glasgow" value="{{$examen_physique_gynecologie->Score_Coma_Glasgow}}"  title="Score De Coma De Glasgow"> 
                                                   </div>
                                                </div>
                                                <br>
                                                <h5><strong>Aspects G??n??raux</strong></h5>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                       <select name="Etat_G??n??ral" id="Etat_G??n??ral" class="form-control" title="Etat G??n??ral">
                                                         <option>{{$examen_physique_gynecologie->Etat_G??n??ral}} </option>
                                                         <option>conserv??</option>
                                                         <option>Alt??rer??</option>
                                                       </select> 
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <select name="Asth??nie" id="Asth??nie" class="form-control" title="Asth??nie">
                                                         <option>{{$examen_physique_gynecologie->Asth??nie}}</option>
                                                         <option>Oui</option>
                                                         <option>Non</option>
                                                       </select> 
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <select name="Anorexie" id="Anorexie" class="form-control" title="Anorexie">
                                                         <option>{{$examen_physique_gynecologie->Anorexie}}</option>
                                                         <option>Oui</option>
                                                         <option>Non</option>
                                                       </select> 
                                                    </div>
                                                </div>
                                                <div class="row">
                                                  <div class="col-lg-4">
                                                       <select name="Amaigrissement" id="Amaigrissement" class="form-control" title="Amaigrissement">
                                                          <option>{{$examen_physique_gynecologie->Amaigrissement}}</option>
                                                          <option>Oui</option>
                                                          <option>Non</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <input type="text" id="Kilo_Perdu" name="Kilo_Perdu" class="form-control" value="{{$examen_physique_gynecologie->Kilo_Perdu}}" title="Si Amaigrissement Entrer le Nombre de kilo perdu">
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <input type="text" id="Temps" name="Temps" class="form-control"value="{{$examen_physique_gynecologie->Temps}}" title="Si Amaigrissement Entrer le Temps Mis">
                                                  </div>
                                                </div>
                                                <br>
                                                 <h5 class="color">Tete Et Cou</h5>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                       <select name="Conjonctives" id="Conjonctives" class="form-control" title="Conjonctives">
                                                         <option>{{$examen_physique_gynecologie->Conjonctives}}</option>
                                                         <option>Ros??es</option>
                                                         <option>Pales</option>
                                                         <option>Interm??diaire</option>
                                                       </select> 
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <select name="Sci??res" id="Sci??res" class="form-control" title="Sci??res">
                                                         <option>{{$examen_physique_gynecologie->Sci??res}}</option>
                                                         <option>Anict??rique</option>
                                                         <option>Sub-Ict??riques</option>
                                                         <option>Ict??riques</option>
                                                       </select> 
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <select name="Ad??nopathies_Cervicaux_Auxilliaires" id="Ad??nopathies_Cervicaux_Auxilliaires" class="form-control" title="Ad??nopathies Cervicaux Auxilliaires">
                                                         <option>{{$examen_physique_gynecologie->Ad??nopathies_Cervicaux_Auxilliaires}}</option>
                                                         <option>Absente</option>
                                                         <option>Presente</option>
                                                       </select> 
                                                    </div>
                                                </div>
                                                <div class="row">
                                                  <div class="col-lg-4">
                                                        <textarea name="Caract??ristiques_Ad??nopathies" class="form-control" id="Caract??ristiques_Ad??nopathies" cols="30" rows="10" title="Caract??ristiques Ad??nopathies">{{$examen_physique_gynecologie->Caract??ristiques_Ad??nopathies}}</textarea> 
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="Volume_Thyroide" id="Volume_Thyroide" class="form-control" title="Volume Thyroide">
                                                          <option>{{$examen_physique_gynecologie->Volume_Thyroide}}</option>
                                                          <option>Normal</option>
                                                          <option>Augment??e</option>
                                                          <option>Absente</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="Aspect_Thyroide" id="Aspect_Thyroide" class="form-control" title="Aspect Thyroide">
                                                          <option>{{$examen_physique_gynecologie->Aspect_Thyroide}}</option>
                                                          <option>Contour R??gulier</option>
                                                          <option>Contour Irr??gulier</option>
                                                          <option>Presence de Nodules</option>
                                                       </select>
                                                  </div>
                                                </div>
                                                <br>
                                                <h5 class="color">Seins</h5>
                                                <h6>Inspection</h6>
                                                <div class="row">
                                                  <div class="col-lg-4">
                                                       <select name="Dissym??tries_Seins" id="Dissym??tries_Seins" class="form-control" title="Dissym??tries Seins">
                                                          <option>{{$examen_physique_gynecologie->Dissym??tries_Seins}}</option>
                                                          <option>Oui</option>
                                                          <option>Non</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="Sein_Droit_Inspecter" id="Sein_Droit" class="form-control" title="Sein Droit">
                                                          <option>{{$examen_physique_gynecologie->Sein_Droit_Inspecter}}</option>
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
                                                       <option>{{$examen_physique_gynecologie->Sein_Gauche_Inspecte}}</option>
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
                                                          <option>{{$examen_physique_gynecologie->Sein_Droit_Palper}}</option>
                                                          <option>Aucune Anomalie</option>
                                                          <option>Masse</option>
                                                          <option>Ecoulement Mamelonnaire</option>
                                                          <option>Ad??nopathies</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="Sein_Gauche_Palper" id="Sein_Gauche" class="form-control" title="Sein Gauche">
                                                          <option>{{$examen_physique_gynecologie->Sein_Gauche_Palper}}</option>
                                                          <option>Aucune Anomalie</option>
                                                          <option>Masse</option>
                                                          <option>Ecoulement Mamelonnaire</option>
                                                          <option>Ad??nopathies</option>
                                                       </select>
                                                  </div>
                                                </div>
                                                <br>
                                                <h5 class="color">Coeur</h5>
                                                <h6>Choc De Pointe</h6>
                                                <div class="row">
                                                  <div class="col-lg-4">
                                                       <select name="Position" id="Position" class="form-control" title="Position">
                                                          <option>{{$examen_physique_gynecologie->Position}}</option>
                                                          <option>5i??me EIG</option>
                                                          <option>D??viation A Droite</option>
                                                          <option>D??viation A Gauche</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="Aspect" id="Aspect" class="form-control" title="Aspect">
                                                          <option>{{$examen_physique_gynecologie->Aspect}}</option>
                                                          <option>Normale</option>
                                                          <option>Etal??</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="Douleur_Palpation_Thoracique" id="Douleur_Palpation_Thoracique" class="form-control" title="Douleur Palpation Thoracique">
                                                          <option>{{$examen_physique_gynecologie->Douleur_Palpation_Thoracique}}</option>
                                                          <option>Oui</option>
                                                          <option>Non</option>
                                                       </select>
                                                  </div>
                                                </div>
                                                <h6>Auscultation Coeur</h6>
                                                <div class="row">
                                                  <div class="col-lg-4">
                                                       <select name="B1_B2" id="B1_B2" class="form-control"title="B1 et B2">
                                                          <option>{{$examen_physique_gynecologie->B1_B2}}</option>
                                                          <option>Normalement Audible</option>
                                                          <option>Assourdis</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="Rythme_B1_B2" id="Rythme_B1_B2" class="form-control" title="Rythme B1 et B2">
                                                          <option>{{$examen_physique_gynecologie->Rythme_B1_B2}}</option>
                                                          <option>R??gulier</option>
                                                          <option>Irr??gulier</option>
                                                          <option>R??guli??rement r??gulier</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="Bruits_Sur_Ajout??" id="Bruits_Sur_Ajout??" class="form-control" title="Bruits Sur Ajout??">
                                                          <option>{{$examen_physique_gynecologie->Bruits_Sur_Ajout??}}</option>
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
                                                          <option>{{$examen_physique_gynecologie->Ampilation_Thoracique}}</option>
                                                          <option>Bonne</option>
                                                          <option>Diminuer</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="Vibrations_Vocales" id="Vibration_Vocale" class="form-control" title="Vibrations Vocales">
                                                          <option>{{$examen_physique_gynecologie->Vibrations_Vocales}}</option>
                                                          <option>Bien Transmises</option>
                                                          <option>Augment??</option>
                                                          <option>Absente</option>
                                                       </select>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                <div class="col-lg-4">
                                                       <textarea name="Typographie_Anomalie" id="Typographie_Anomalie" class="form-control" cols="30" rows="10" title="Typographie Anomalie si Ampilation Thoracique Diminuer">{{$examen_physique_gynecologie->Typographie_Anomalie}}  </textarea>
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <textarea name="Localisation_Anomalie" id="Localisation_Anomalie" class="form-control" cols="30" rows="10"  title="Localisation Anomalie si Vibrations Vocales Augment?? ou Absente">{{$examen_physique_gynecologie->Imc}}</textarea>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="col-lg-4">
                                                       <select name="Sonorit??_Pulmonaire" id="Sonorit??_Pulmonaire" class="form-control" title="Sonorit?? Pulmonaire">
                                                          <option>{{$examen_physique_gynecologie->Sonorit??_Pulmonaire}}</option>
                                                          <option>Normale</option>
                                                          <option>Matit??</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="Bruit_Pulmonaire" id="Bruit_Pulmonaire" class="form-control" title="Bruit Pulmonaire<">
                                                          <option>{{$examen_physique_gynecologie->Bruit_Pulmonaire}}</option>
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
                                                       <textarea name="Typographie_Anomalie_Matit??" id="Typographie_Anomalie_Matit??" class="form-control" cols="30" rows="10" title="Typographie Anomalie si Sonorit?? Pulmonaire Matit??">{{$examen_physique_gynecologie->Typographie_Anomalie_Matit??}}</textarea>
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <textarea name="Typographie_Bruit_Pulmonaire" id="Typographie_Bruit_Pulmonaire" class="form-control" cols="30" rows="10" title="Typographie Bruit Pulmonaire si Autre Bruit Pulmonaire">{{$examen_physique_gynecologie->Typographie_Bruit_Pulmonaire}} </textarea>
                                                  </div>
                                                </div>
                                                <h5 class="color">Abdomen</h5>
                                                <h6>Inspection</h6>
                                                <div class="row">
                                                  <div class="col-lg-4">
                                                       <select name="Aspect_Abdomen" id="Aspect_Abdomen" class="form-control" title="Aspect Abdomen">
                                                          <option>{{$examen_physique_gynecologie->Aspect_Abdomen}}</option>
                                                          <option>Non Distendu</option>
                                                          <option>Distendu</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="Mobilit??" id="Mobilit??" class="form-control"title="Mobilit??">
                                                          <option>{{$examen_physique_gynecologie->Mobilit??}}</option>
                                                          <option>Immobile</option>
                                                          <option>Mobile</option>
                                                          <option>Mobile Avec Respiration</option>
                                                       </select>
                                                  </div>
                                                 </div>
                                                <div class="row">
                                                 <div class="col-lg-4">
                                                       <select name="Signes_Suppl??mentaires" id="Signes_Suppl??mentaires" class="form-control" title="Signes Suppl??mentaires">
                                                          <option>{{$examen_physique_gynecologie->Signes_Suppl??mentaires}}</option>
                                                          <option>Aucun</option>
                                                          <option>Circulation Veineuse Superficiel </option>
                                                          <option>Scarifications</option>
                                                          <option>Autres</option>
                                                       </select>
                                                  </div>
                                                 <div class="col-lg-4">
                                                       <textarea name="Autres_Signes" id="Autres_Signes" class="form-control" cols="30" rows="10" title="Autres Signes">{{$examen_physique_gynecologie->Autres_Signes}} </textarea>
                                                  </div>
                                                  
                                                </div>
                                                <br>
                                                <h6>Palpattion</h6>
                                                <div class="row">
                                                  <div class="col-lg-4">
                                                       <select name="Palpation_Superficiel" id="Palpation_Superficiel" class="form-control" title="Palpation Superficiel">
                                                          <option>{{$examen_physique_gynecologie->Palpation_Superficiel}}</option>
                                                          <option>Souplesse Musculaire</option>
                                                          <option>D??fense</option>
                                                          <option>Contracture</option>
                                                          <option>Sensibilit??</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="Localisation_Palpation_Superficiel" id="Localisation_Palpation_Superficiel" class="form-control" title="Localisation Palpation Superficiel">
                                                          <option>{{$examen_physique_gynecologie->Localisation_Palpation_Superficiel}}</option>
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
                                                          <option>{{$examen_physique_gynecologie->Palpation_Profonde}}</option>
                                                          <option>Normale</option>
                                                          <option>H??patorm??galie</option>
                                                          <option>Spl??nom??galite</option>
                                                          <option>Autres</option>
                                                       </select>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="col-lg-4">
                                                      <input type="text" name="Fl??che_H??patite" title="Nombre de Cm Du Foie" value="{{$examen_physique_gynecologie->Fl??che_H??patite}}" class="form-control" title="Aspect"> 
                                                  </div>
                                                  <div class="col-lg-4">
                                                      <input type="text" name="Hakectt" title="D??gr?? Clinique" value="{{$examen_physique_gynecologie->Hakectt}}" class="form-control" title="Aspect"> 
                                                  </div>
                                                  
                                                  <div class="col-lg-4">
                                                     <select name="Perscussion" id="" class="form-control" title="Perscussion">
                                                       <option>{{$examen_physique_gynecologie->Perscussion}}</option>
                                                       <option>Oui</option>
                                                       <option>Non</option>
                                                     </select>
                                                  </div>
                                                 </div>
                                                <div class="row">
                                                  <div class="col-lg-4">
                                                     <select name="Auscultation" id="" class="form-control" title="Bruit Hydro-Aeriques">
                                                       <option>{{$examen_physique_gynecologie->Auscultation}}</option>
                                                       <option>Absent</option>
                                                       <option>Pr??sent</option>
                                                       <option>Acc??l??r??s</option>
                                                     </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                    <textarea name="Autre_Palpation_Profonde" id="" cols="30" rows="10"class="form-control" title="Autre Palpation Profonde"> {{$examen_physique_gynecologie->Autre_Palpation_Profonde}} </textarea>
                                                  </div>
                                                </div>
                                                <br>
                                                <h5 class="color">Speculum</h5>
                                                <div class="row">                                            
                                                  <div class="col-lg-4">
                                                       <select name="Aspect_Col_Ult??rin" id="Aspect_Col_Ult??rin" class="form-control" title="Aspect Col Ult??rin">
                                                          <option>{{$examen_physique_gynecologie->Aspect_Col_Ult??rin}}</option>
                                                          <option>Conique</option>
                                                          <option>Autre</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                      <input type="text" name="Autre_Aspect_Col_Ult??rin" title="Autre Aspect Col Ult??rin" value="{{$examen_physique_gynecologie->Autre_Aspect_Col_Ult??rin}}" class="form-control"> 
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="Couleur_Col_Ult??rin" id="Couleur_Col_Ult??rin" class="form-control" title="Couleur Col Ult??rin">
                                                          <option>{{$examen_physique_gynecologie->Couleur_Col_Ult??rin}}</option>
                                                          <option>Ros??e</option>
                                                          <option>Violac??e</option>
                                                          <option>Autre</option>
                                                       </select>
                                                  </div>                                          
                                                </div>
                                                <div class="row">
                                                  <div class="col-lg-4">
                                                      <input type="text" name="Autre_Couleur_Col_Ult??rin" title="Autre Couleur Col Ult??rin" value="{{$examen_physique_gynecologie->Autre_Couleur_Col_Ult??rin}}"  class="form-control"> 
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="L??sion_Du_Col" id="L??sion_Du_Col" class="form-control" title="L??sion Du Col">
                                                          <option>{{$examen_physique_gynecologie->L??sion_Du_Col}}</option>
                                                          <option>Aucune</option>
                                                          <option>Ectropion</option>
                                                          <option>Plaie</option>
                                                          <option>Cicatrice</option>
                                                          <option>Autre</option>
                                                       </select>
                                                  </div>
                                                  
                                                  <div class="col-lg-4">
                                                      <input type="text" name="Autre_L??sion_Du_Col" title="Autre L??sion Du Col" value="{{$examen_physique_gynecologie->Autre_L??sion_Du_Col}}"  class="form-control"> 
                                                  </div>
                                                 </div>
                                                 <div class="row">
                                                 <div class="col-lg-4">
                                                       <select name="Ecoulement_Endom??trial" id="Ecoulement_Endom??trial" class="form-control" title="Ecoulement Endom??trial">
                                                          <option>{{$examen_physique_gynecologie->Ecoulement_Endom??trial}}</option>
                                                          <option>Oui</option>
                                                          <option>Non</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="L??sion_Vaginale" id="L??sion_Vaginale" class="form-control" title="??sion Vaginale">
                                                          <option>{{$examen_physique_gynecologie->L??sion_Vaginale}}</option>
                                                          <option>Aucune</option>
                                                          <option>Plaie</option>
                                                          <option>Cicatrice</option>
                                                          <option>Autre</option>
                                                       </select>
                                                  </div>                                           
                                                </div>
                                                <div class="row">
                                                  <div class="col-lg-4">
                                                      <textarea name="Caract??ristique_Ecoulement_Endom??trial" id="" cols="30" rows="10" class="form-control"  title="Caract??ristique Ecoulement Endom??trial">{{$examen_physique_gynecologie->Caract??ristique_Ecoulement_Endom??trial}}</textarea>
                                                  </div>
                                                  <div class="col-lg-4">
                                                      <input type="text" name="Autre_L??sion_Vaginale" title="Autre L??sion Vaginale"value="{{$examen_physique_gynecologie->Autre_L??sion_Vaginale}}"  class="form-control" > 
                                                  </div>
                                                  <div class="col-lg-4">
                                                      <textarea name="Manoeuvre_Sp??cialis??" id="" cols="30" rows="10" class="form-control"  title="Manoeuvre Sp??cialis??">{{$examen_physique_gynecologie->Manoeuvre_Sp??cialis??}} </textarea>
                                                  </div>                                              
                                                </div>
                                                <br>
                                                <h5 class="color">Examen De La Glaire Cervicale</h5>
                                                <div class="row">                                            
                                                  <div class="col-lg-4">
                                                       <select name="Couleur_Glaire_Cervicale" id="Couleur_Glaire_Cervicale" class="form-control" title="Couleur Glaire Cervicale">
                                                          <option>{{$examen_physique_gynecologie->Couleur_Glaire_Cervicale}}</option>
                                                          <option>Transparente</option>
                                                          <option>Blanchatre ou Jaunatre</option>
                                                          <option>Marron</option>
                                                          <option>Stries Rougeatre</option>
                                                          <option>Autre</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                      <input type="text" name="Autre_Couleur_Glaire_Cervicale" title="Autre Couleur Glaire Cervicale" value="{{$examen_physique_gynecologie->Autre_Couleur_Glaire_Cervicale}}" class="form-control" title="Aspect"> 
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="Aspect_Glaire_Cervicale" id="Aspect_Glaire_Cervicale" class="form-control" title="Aspect Glaire Cervicale">
                                                          <option>{{$examen_physique_gynecologie->Aspect_Glaire_Cervicale}}</option>
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
                                                          <option>{{$examen_physique_gynecologie->Grandes_L??vres}}</option>
                                                          <option>Normales</option>
                                                          <option>Ne recouvrant pas les petites L??vres</option>
                                                          <option>Autre</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                      <input type="text" name="Autre_Grandes_L??vres" title="Autre Grandes L??vres" value="{{$examen_physique_gynecologie->Autre_Grandes_L??vres}}" class="form-control"> 
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="Petites_L??vres" id="Petites_L??vres" class="form-control" title="Petites L??vres">
                                                          <option>{{$examen_physique_gynecologie->Petites_L??vres}}</option>
                                                          <option>Normale</option>
                                                          <option>Plates</option>
                                                          <option>Autre</option>
                                                       </select>
                                                  </div>                                            
                                                </div>
                                                <div class="row">
                                                  <div class="col-lg-4">
                                                      <input type="text" name="Autre_Petites_L??vres" title="Autre Petites L??vres" value="{{$examen_physique_gynecologie->Autre_Petites_L??vres}}"  class="form-control" title="Autre Petites L??vres"> 
                                                  </div>
                                                </div>
                                                <br>
                                                <h6>Col Ult??rin</h6>  
                                                <div class="row">                                     
                                                  <div class="col-lg-4">
                                                       <select name="Position_Col_Ult??rin" id="Position_Col_Ult??rin" class="form-control" title="Position Col Ult??rin">
                                                          <option>{{$examen_physique_gynecologie->Position_Col_Ult??rin}}</option>
                                                          <option>M??diane</option>
                                                          <option>Ant??rieure</option>
                                                          <option>Post??rieure</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="Longueur" id="Longueur" class="form-control" title="Longueur Col Ult??rin">
                                                          <option>{{$examen_physique_gynecologie->Longueur}}</option>
                                                          <option>Long</option>
                                                          <option>Mi-Long</option>
                                                          <option>Court</option>
                                                          <option>Effac??</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="Circonstance" id="Circonstance" class="form-control" title="Circonstance">
                                                          <option>{{$examen_physique_gynecologie->Circonstance}}</option>
                                                          <option>Souple</option>
                                                          <option>Moyenne</option>
                                                          <option>Ferme</option>
                                                       </select>
                                                  </div>                                           
                                                </div>
                                                <div class="row">
                                                  <div class="col-lg-4">
                                                       <select name="Signe_De_Chandelier" id="Signe_De_Chandelier" class="form-control" title="Signe De Chandelier">
                                                          <option>{{$examen_physique_gynecologie->Signe_De_Chandelier}}</option>
                                                          <option>Pr??sent</option>
                                                          <option>Absent</option>
                                                       </select>
                                                  </div>                                       
                                                  <div class="col-lg-4">
                                                       <select name="Doigtier" id="Doigtier" class="form-control" title="Doigtier">
                                                          <option>{{$examen_physique_gynecologie->Doigtier}}</option>
                                                          <option>Propre</option>
                                                          <option>S??cr??tions Malodorante</option>
                                                          <option>S??cr??tion+stries de sang</option>
                                                          <option>Autre</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                      <input type="text" name="Autre_Doigtier" title="Autre Doigtier" value="{{$examen_physique_gynecologie->Autre_Doigtier}}"  class="form-control"> 
                                                  </div>                                 
                                                </div>
                                                <div class="row">
                                                  <div class="col-lg-4">
                                                    <textarea name="Autre_Toucher_Vaginal" id="Autre_Toucher_Vaginal" cols="30" rows="10"  class="form-control" title="Autre Toucher Vaginal">{{$examen_physique_gynecologie->Autre_Toucher_Vaginal}} </textarea>
                                                  </div> 
                                                  <div class="col-lg-4">
                                                    <textarea name="Information_Suppl??mentaire_Examen_Physique" id="Information_Suppl??mentaire_Examen_Physique" cols="30" rows="10"   class="form-control" title="Information Suppl??mentaire Examen Physique">{{$examen_physique_gynecologie->Information_Suppl??mentaire_Examen_Physique}}</textarea>
                                                  </div> 
                                                </div>
                                             </div>
                                             <div class="form-group-inner">
                                                <div class="login-btn-inner">
                                                   <div class="row">
                                                      <div class="col-lg-2"></div>
                                                         <div class="col-lg-7">
                                                           <div class="login-horizental cancel-wp pull-left">
                                                              <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Edit</button>
                                                            </div>
                                                          </div>
                                                       </div>
                                                    </div>
                                                 </div>
                                                </div>
                                          </form>
                                           <a href="{{route('examen_physique_gynecologies.index')}}"><button class="btn btn-white cancel" >Cancel</button></a>
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

@endsection

