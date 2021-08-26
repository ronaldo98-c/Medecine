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
                                             <h5><strong>Paramètres</strong></h5>
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
                                                    <input type="number" class="form-control" name="Pression_Artérielle" id="Pression_Artérielle" value="{{$examen_physique_gynecologie->Pression_Artérielle}}"  title="Pression Artérielle">
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
                                                    <input type="number" class="form-control" name="Température" id="Température" value="{{$examen_physique_gynecologie->Température}}"  title="Température">
                                                   </div>                                                
                                                   <div class="col-lg-4">
                                                    <input type="number" class="form-control" name="Saturation_En_Oxygiène" id="Saturation_En_Oxygiène" value="{{$examen_physique_gynecologie->Saturation_En_Oxygiène}}" title="Saturation En Oxygiène">
                                                   </div>
                                                   <div class="col-lg-4">
                                                    <input type="number" class="form-control" name="Glycémie" id="Glycémie" value="{{$examen_physique_gynecologie->Glycémie}}"  title="Glycémie A Jeun"> 
                                                   </div>
                                                   <div class="col-lg-4">
                                                    <input type="number" class="form-control" name="Score_Coma_Glasgow" id="Score_Coma_Glasgow" value="{{$examen_physique_gynecologie->Score_Coma_Glasgow}}"  title="Score De Coma De Glasgow"> 
                                                   </div>
                                                </div>
                                                <br>
                                                <h5><strong>Aspects Généraux</strong></h5>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                       <select name="Etat_Général" id="Etat_Général" class="form-control" title="Etat Général">
                                                         <option>{{$examen_physique_gynecologie->Etat_Général}} </option>
                                                         <option>conservé</option>
                                                         <option>Altéreré</option>
                                                       </select> 
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <select name="Asthénie" id="Asthénie" class="form-control" title="Asthénie">
                                                         <option>{{$examen_physique_gynecologie->Asthénie}}</option>
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
                                                         <option>Rosées</option>
                                                         <option>Pales</option>
                                                         <option>Intermédiaire</option>
                                                       </select> 
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <select name="Scières" id="Scières" class="form-control" title="Scières">
                                                         <option>{{$examen_physique_gynecologie->Scières}}</option>
                                                         <option>Anictérique</option>
                                                         <option>Sub-Ictériques</option>
                                                         <option>Ictériques</option>
                                                       </select> 
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <select name="Adénopathies_Cervicaux_Auxilliaires" id="Adénopathies_Cervicaux_Auxilliaires" class="form-control" title="Adénopathies Cervicaux Auxilliaires">
                                                         <option>{{$examen_physique_gynecologie->Adénopathies_Cervicaux_Auxilliaires}}</option>
                                                         <option>Absente</option>
                                                         <option>Presente</option>
                                                       </select> 
                                                    </div>
                                                </div>
                                                <div class="row">
                                                  <div class="col-lg-4">
                                                        <textarea name="Caractéristiques_Adénopathies" class="form-control" id="Caractéristiques_Adénopathies" cols="30" rows="10" title="Caractéristiques Adénopathies">{{$examen_physique_gynecologie->Caractéristiques_Adénopathies}}</textarea> 
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="Volume_Thyroide" id="Volume_Thyroide" class="form-control" title="Volume Thyroide">
                                                          <option>{{$examen_physique_gynecologie->Volume_Thyroide}}</option>
                                                          <option>Normal</option>
                                                          <option>Augmentée</option>
                                                          <option>Absente</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="Aspect_Thyroide" id="Aspect_Thyroide" class="form-control" title="Aspect Thyroide">
                                                          <option>{{$examen_physique_gynecologie->Aspect_Thyroide}}</option>
                                                          <option>Contour Régulier</option>
                                                          <option>Contour Irrégulier</option>
                                                          <option>Presence de Nodules</option>
                                                       </select>
                                                  </div>
                                                </div>
                                                <br>
                                                <h5 class="color">Seins</h5>
                                                <h6>Inspection</h6>
                                                <div class="row">
                                                  <div class="col-lg-4">
                                                       <select name="Dissymétries_Seins" id="Dissymétries_Seins" class="form-control" title="Dissymétries Seins">
                                                          <option>{{$examen_physique_gynecologie->Dissymétries_Seins}}</option>
                                                          <option>Oui</option>
                                                          <option>Non</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="Sein_Droit_Inspecter" id="Sein_Droit" class="form-control" title="Sein Droit">
                                                          <option>{{$examen_physique_gynecologie->Sein_Droit_Inspecter}}</option>
                                                          <option>Aucune Anomalie</option>
                                                          <option>Cicatrice</option>
                                                          <option>Rétraction de la peau</option>
                                                          <option>Anomalie Du Mamelon</option>
                                                          <option>Peau D'Orange</option>
                                                          <option>Oedème</option>
                                                          <option>Rougeur</option>
                                                          <option>Voussure</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="Sein_Gauche_Inspecte" id="Sein_Gauche" class="form-control" title="Sein Gauche">
                                                       <option>{{$examen_physique_gynecologie->Sein_Gauche_Inspecte}}</option>
                                                          <option>Aucune Anomalie</option>
                                                          <option>Cicatrice</option>
                                                          <option>Rétraction de la peau</option>
                                                          <option>Anomalie Du Mamelon</option>
                                                          <option>Peau D'Orange</option>
                                                          <option>Oedème</option>
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
                                                          <option>Adénopathies</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="Sein_Gauche_Palper" id="Sein_Gauche" class="form-control" title="Sein Gauche">
                                                          <option>{{$examen_physique_gynecologie->Sein_Gauche_Palper}}</option>
                                                          <option>Aucune Anomalie</option>
                                                          <option>Masse</option>
                                                          <option>Ecoulement Mamelonnaire</option>
                                                          <option>Adénopathies</option>
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
                                                          <option>5ième EIG</option>
                                                          <option>Déviation A Droite</option>
                                                          <option>Déviation A Gauche</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="Aspect" id="Aspect" class="form-control" title="Aspect">
                                                          <option>{{$examen_physique_gynecologie->Aspect}}</option>
                                                          <option>Normale</option>
                                                          <option>Etalé</option>
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
                                                          <option>Régulier</option>
                                                          <option>Irrégulier</option>
                                                          <option>Régulièrement régulier</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="Bruits_Sur_Ajouté" id="Bruits_Sur_Ajouté" class="form-control" title="Bruits Sur Ajouté">
                                                          <option>{{$examen_physique_gynecologie->Bruits_Sur_Ajouté}}</option>
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
                                                          <option>Augmenté</option>
                                                          <option>Absente</option>
                                                       </select>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                <div class="col-lg-4">
                                                       <textarea name="Typographie_Anomalie" id="Typographie_Anomalie" class="form-control" cols="30" rows="10" title="Typographie Anomalie si Ampilation Thoracique Diminuer">{{$examen_physique_gynecologie->Typographie_Anomalie}}  </textarea>
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <textarea name="Localisation_Anomalie" id="Localisation_Anomalie" class="form-control" cols="30" rows="10"  title="Localisation Anomalie si Vibrations Vocales Augmenté ou Absente">{{$examen_physique_gynecologie->Imc}}</textarea>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="col-lg-4">
                                                       <select name="Sonorité_Pulmonaire" id="Sonorité_Pulmonaire" class="form-control" title="Sonorité Pulmonaire">
                                                          <option>{{$examen_physique_gynecologie->Sonorité_Pulmonaire}}</option>
                                                          <option>Normale</option>
                                                          <option>Matité</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="Bruit_Pulmonaire" id="Bruit_Pulmonaire" class="form-control" title="Bruit Pulmonaire<">
                                                          <option>{{$examen_physique_gynecologie->Bruit_Pulmonaire}}</option>
                                                          <option>Mumures Vésiculaire</option>
                                                          <option>Rales Crépitant</option>
                                                          <option>Rales Sous-Crépitant</option>
                                                          <option>Ronchis</option>
                                                          <option>Sibilants</option>
                                                          <option>Autres</option>
                                                          <option>Ronchis</option>
                                                       </select>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="col-lg-4">
                                                       <textarea name="Typographie_Anomalie_Matité" id="Typographie_Anomalie_Matité" class="form-control" cols="30" rows="10" title="Typographie Anomalie si Sonorité Pulmonaire Matité">{{$examen_physique_gynecologie->Typographie_Anomalie_Matité}}</textarea>
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
                                                       <select name="Mobilité" id="Mobilité" class="form-control"title="Mobilité">
                                                          <option>{{$examen_physique_gynecologie->Mobilité}}</option>
                                                          <option>Immobile</option>
                                                          <option>Mobile</option>
                                                          <option>Mobile Avec Respiration</option>
                                                       </select>
                                                  </div>
                                                 </div>
                                                <div class="row">
                                                 <div class="col-lg-4">
                                                       <select name="Signes_Supplémentaires" id="Signes_Supplémentaires" class="form-control" title="Signes Supplémentaires">
                                                          <option>{{$examen_physique_gynecologie->Signes_Supplémentaires}}</option>
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
                                                          <option>Défense</option>
                                                          <option>Contracture</option>
                                                          <option>Sensibilité</option>
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
                                                          <option>Zone Péri-ombilicale</option>
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
                                                          <option>Hépatormégalie</option>
                                                          <option>Splénomégalite</option>
                                                          <option>Autres</option>
                                                       </select>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="col-lg-4">
                                                      <input type="text" name="Flèche_Hépatite" title="Nombre de Cm Du Foie" value="{{$examen_physique_gynecologie->Flèche_Hépatite}}" class="form-control" title="Aspect"> 
                                                  </div>
                                                  <div class="col-lg-4">
                                                      <input type="text" name="Hakectt" title="Dégré Clinique" value="{{$examen_physique_gynecologie->Hakectt}}" class="form-control" title="Aspect"> 
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
                                                       <option>Présent</option>
                                                       <option>Accélérés</option>
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
                                                       <select name="Aspect_Col_Ultérin" id="Aspect_Col_Ultérin" class="form-control" title="Aspect Col Ultérin">
                                                          <option>{{$examen_physique_gynecologie->Aspect_Col_Ultérin}}</option>
                                                          <option>Conique</option>
                                                          <option>Autre</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                      <input type="text" name="Autre_Aspect_Col_Ultérin" title="Autre Aspect Col Ultérin" value="{{$examen_physique_gynecologie->Autre_Aspect_Col_Ultérin}}" class="form-control"> 
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="Couleur_Col_Ultérin" id="Couleur_Col_Ultérin" class="form-control" title="Couleur Col Ultérin">
                                                          <option>{{$examen_physique_gynecologie->Couleur_Col_Ultérin}}</option>
                                                          <option>Rosée</option>
                                                          <option>Violacée</option>
                                                          <option>Autre</option>
                                                       </select>
                                                  </div>                                          
                                                </div>
                                                <div class="row">
                                                  <div class="col-lg-4">
                                                      <input type="text" name="Autre_Couleur_Col_Ultérin" title="Autre Couleur Col Ultérin" value="{{$examen_physique_gynecologie->Autre_Couleur_Col_Ultérin}}"  class="form-control"> 
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="Lésion_Du_Col" id="Lésion_Du_Col" class="form-control" title="Lésion Du Col">
                                                          <option>{{$examen_physique_gynecologie->Lésion_Du_Col}}</option>
                                                          <option>Aucune</option>
                                                          <option>Ectropion</option>
                                                          <option>Plaie</option>
                                                          <option>Cicatrice</option>
                                                          <option>Autre</option>
                                                       </select>
                                                  </div>
                                                  
                                                  <div class="col-lg-4">
                                                      <input type="text" name="Autre_Lésion_Du_Col" title="Autre Lésion Du Col" value="{{$examen_physique_gynecologie->Autre_Lésion_Du_Col}}"  class="form-control"> 
                                                  </div>
                                                 </div>
                                                 <div class="row">
                                                 <div class="col-lg-4">
                                                       <select name="Ecoulement_Endométrial" id="Ecoulement_Endométrial" class="form-control" title="Ecoulement Endométrial">
                                                          <option>{{$examen_physique_gynecologie->Ecoulement_Endométrial}}</option>
                                                          <option>Oui</option>
                                                          <option>Non</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="Lésion_Vaginale" id="Lésion_Vaginale" class="form-control" title="ésion Vaginale">
                                                          <option>{{$examen_physique_gynecologie->Lésion_Vaginale}}</option>
                                                          <option>Aucune</option>
                                                          <option>Plaie</option>
                                                          <option>Cicatrice</option>
                                                          <option>Autre</option>
                                                       </select>
                                                  </div>                                           
                                                </div>
                                                <div class="row">
                                                  <div class="col-lg-4">
                                                      <textarea name="Caractéristique_Ecoulement_Endométrial" id="" cols="30" rows="10" class="form-control"  title="Caractéristique Ecoulement Endométrial">{{$examen_physique_gynecologie->Caractéristique_Ecoulement_Endométrial}}</textarea>
                                                  </div>
                                                  <div class="col-lg-4">
                                                      <input type="text" name="Autre_Lésion_Vaginale" title="Autre Lésion Vaginale"value="{{$examen_physique_gynecologie->Autre_Lésion_Vaginale}}"  class="form-control" > 
                                                  </div>
                                                  <div class="col-lg-4">
                                                      <textarea name="Manoeuvre_Spécialisé" id="" cols="30" rows="10" class="form-control"  title="Manoeuvre Spécialisé">{{$examen_physique_gynecologie->Manoeuvre_Spécialisé}} </textarea>
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
                                                <h5 class="color">Touché Vaginale</h5>
                                                <h6>Inspection</h6> 
                                                <div class="row">                                  
                                                  <div class="col-lg-4">
                                                       <select name="Grandes_Lèvres" id="Grandes_Lèvres" class="form-control" title="Grandes Lèvres">
                                                          <option>{{$examen_physique_gynecologie->Grandes_Lèvres}}</option>
                                                          <option>Normales</option>
                                                          <option>Ne recouvrant pas les petites Lèvres</option>
                                                          <option>Autre</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                      <input type="text" name="Autre_Grandes_Lèvres" title="Autre Grandes Lèvres" value="{{$examen_physique_gynecologie->Autre_Grandes_Lèvres}}" class="form-control"> 
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="Petites_Lèvres" id="Petites_Lèvres" class="form-control" title="Petites Lèvres">
                                                          <option>{{$examen_physique_gynecologie->Petites_Lèvres}}</option>
                                                          <option>Normale</option>
                                                          <option>Plates</option>
                                                          <option>Autre</option>
                                                       </select>
                                                  </div>                                            
                                                </div>
                                                <div class="row">
                                                  <div class="col-lg-4">
                                                      <input type="text" name="Autre_Petites_Lèvres" title="Autre Petites Lèvres" value="{{$examen_physique_gynecologie->Autre_Petites_Lèvres}}"  class="form-control" title="Autre Petites Lèvres"> 
                                                  </div>
                                                </div>
                                                <br>
                                                <h6>Col Ultérin</h6>  
                                                <div class="row">                                     
                                                  <div class="col-lg-4">
                                                       <select name="Position_Col_Ultérin" id="Position_Col_Ultérin" class="form-control" title="Position Col Ultérin">
                                                          <option>{{$examen_physique_gynecologie->Position_Col_Ultérin}}</option>
                                                          <option>Médiane</option>
                                                          <option>Antérieure</option>
                                                          <option>Postérieure</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-lg-4">
                                                       <select name="Longueur" id="Longueur" class="form-control" title="Longueur Col Ultérin">
                                                          <option>{{$examen_physique_gynecologie->Longueur}}</option>
                                                          <option>Long</option>
                                                          <option>Mi-Long</option>
                                                          <option>Court</option>
                                                          <option>Effacé</option>
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
                                                          <option>Présent</option>
                                                          <option>Absent</option>
                                                       </select>
                                                  </div>                                       
                                                  <div class="col-lg-4">
                                                       <select name="Doigtier" id="Doigtier" class="form-control" title="Doigtier">
                                                          <option>{{$examen_physique_gynecologie->Doigtier}}</option>
                                                          <option>Propre</option>
                                                          <option>Sécrétions Malodorante</option>
                                                          <option>Sécrétion+stries de sang</option>
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
                                                    <textarea name="Information_Supplémentaire_Examen_Physique" id="Information_Supplémentaire_Examen_Physique" cols="30" rows="10"   class="form-control" title="Information Supplémentaire Examen Physique">{{$examen_physique_gynecologie->Information_Supplémentaire_Examen_Physique}}</textarea>
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

