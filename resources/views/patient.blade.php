@extends('layouts/masters')
@section('content')
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
                                    <a href="#"><img src="img/logo/log.png" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-1 col-sm-1 col-xs-12">
                                <div class="header-top-menu tabl-d-n">
                                    <ul class="nav navbar-nav mai-top-nav">
                                        <li class="nav-item"><a href="CreationPatient" class="nav-link">Identification</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">Antécédents<span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span></a>
                                             <div role="menu" class="dropdown-menu animated flipInX">
                                                <!-- <a href="#" class="dropdown-item" data-toggle="modal"  data-target="#WarningModalalert">Ajouter</a> -->
                                                <a href="a_gynecologique" class="dropdown-item">Gynécologiques</a>
                                                <a href="a_obstetricaux" class="dropdown-item">Obstétricaux</a>
                                                <a href="a_chirugicaux" class="dropdown-item">Chirurgicaux</a>
                                                <a href="a_medicaux" class="dropdown-item">Médicaux</a>
                                                <a href="a_medicamenteux" class="dropdown-item">Médicamenteux</a>
                                                <a href="a_imunologique" class="dropdown-item">Immulogiques</a>
                                                <a href="a_vaccinaux" class="dropdown-item">Vaccinaux</a>
                                                <a href="a_allergique" class="dropdown-item">Allergie</a>
                                                <a href="mode_vie" class="dropdown-item">Mode de Vie</a>
                                                <a href="a_familiaux" class="dropdown-item">Familiaux</a>
                                            </div> 
                                        </li>
                                        <li class="nav-item"><a href="patient_antecedent" class="nav-link">Patient-Antécédents</a>
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
                                                <li><a href="{{route('logins.index')}}"><span class="adminpro-icon adminpro-locked author-log-ic"></span>Deconnexion</a>
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
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Header top area start-->
        <!--Modals -->
        <!-- <div id="WarningModalalert" class="modal modal-adminpro-general Customwidth-popup-WarningModal fade" role="dialog">
                   <div class="modal-dialog">
                      <div class="modal-content">
                            <div class="modal-close-area modal-close-df">
                                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                            </div>
                            <div class="modal-body">
                                <form action="" method="POST">
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                  <input type="text" class="form-control" placeholder="Nom"/>
                                            </div>
                                            <div class="col-lg-6">
                                                  <input type="text" class="form-control" placeholder="PreNom"/>
                                            </div>
                                            <div class="col-lg-6">
                                                  <input type="date" class="form-control" placeholder="Date De Naissance"/>
                                            </div>
                                            <div class="col-lg-6">
                                                  <input type="text" class="form-control" placeholder="Lieu De Naissance"/>
                                            </div>
                                            <div class="col-lg-6">
                                                  <input type="text" class="form-control" placeholder="Ethnie"/>
                                            </div>
                                            <div class="col-lg-6">
                                                  <input type="text" class="form-control" placeholder="Profession"/>
                                            </div>
                                            <div class="col-lg-6">
                                                  <select class="form-control">
                                                  <option>Célibataire</option>
                                                  <option>Marié</option>
                                                  <option>Veuve</option>
                                                  </select>
                                            </div>
                                            <div class="col-lg-6">
                                                  <input type="text" class="form-control" placeholder="Nationalité"/>
                                            </div>
                                            <div class="col-lg-6">
                                                  <input type="text" class="form-control" placeholder="Résidence"/>
                                            </div>
                                            <div class="col-lg-6">
                                                  <input type="text" class="form-control" placeholder="Télephone"/>
                                            </div>
                                            <div class="col-lg-6">
                                                  <input type="text" class="form-control" placeholder="Email"/>
                                            </div>
                                            <div class="col-lg-6">
                                                  <input type="text" class="form-control" placeholder="Assurance"/>
                                            </div>
                                            <div class="col-lg-6">
                                                  <input type="text" class="form-control" placeholder="Tuteur"/>
                                            </div>
                                            <div class="col-lg-6">
                                                  <input type="text" class="form-control" placeholder="Contact Tuteur"/>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                    <center>
                                     <a data-dismiss="modal" href="#">Cancel</a>
                                      <a href="#">Save</a>
                                    </center>         
                             </div>
                        </div>
                    </div>
         </div> -->
        <!-- End Modals-->
            <!-- Header top area end-->
            <!-- Breadcome start-->
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
                                            <li><span class="bread-blod">Patient</span>
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
                                        <h1>Liste <span class="table-project-n">des</span> patients</h1>
                                        <div class="sparkline13-outline-icon">
                                            <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline13-graph">
                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                        <div id="toolbar">
                                            <select class="form-control">
                                                <option value="">Exporter Basic</option>
                                                <option value="all">Exporter Tout</option>
                                                <option value="selected">Exporter une Selection</option>
                                            </select>
                                        </div>
                                        <!-- <input type="submit" value="" class="btn-ajouter" data-toggle="modal"  data-target="#WarningModalalert"> -->
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <th data-field="id">Id</th>
                                                    <th data-field="name" data-editable="false">Nom</th>
                                                    <th data-field="email" data-editable="false">Prenom</th>
                                                    <th data-field="phone" data-editable="false">Naissance</th>
                                                    <th data-field="company" data-editable="false">Lieu De Naissance</th>
                                                    <th data-field="complete">Ethnie</th>
                                                    <th data-field="task" data-editable="false">Profession</th>
                                                    <th data-field="date" data-editable="false">Status Matrimonial</th>
                                                    <th data-field="nationalite" data-editable="false">Nationalité</th>
                                                    <th data-field="lieu" data-editable="false">Résidence</th>
                                                    <th data-field="price" data-editable="false">Contact</th>
                                                    <th data-field="">Email</th>
                                                    <th data-field="assurance" data-editable="false">Assurance</th>
                                                    <th data-field="tuteur" data-editable="false">Nom Tuteur</th>
                                                    <th data-field="nom " data-editable="false">Prenom Tuteur</th>
                                                    <th data-field="contact" data-editable="false">Contact</th>
                                                    <th data-field="residence" data-editable="false">Residence</th>
                                                    <th data-field="compte" data-editable="false">Compte E_Care</th>
                                                    <th data-field="modifier" data-editable="false">Modifier</th>
                                                    <th data-field="supprimer" data-editable="false">Supprimer</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(count($patients) > 0)
                                                 @foreach($patients as $patient)
                                                <tr>
                                                    <td>{{$patient->id}}</td>
                                                    <td>{{$patient->Nom}}</td>
                                                    <td>{{$patient->Prenom}}</td>
                                                    <td>{{$patient->Date_Naissance}}</td>
                                                    <td>{{$patient->Lieu_Naissance}}</td>
                                                    <td>{{$patient->Groupe_Ethnique}}</td>
                                                    <td>{{$patient->Profession}}</td>
                                                    <td>{{$patient->Etat_Civil}}</td>
                                                    <td>{{$patient->Nationalite}}</td>
                                                    <td>{{$patient->Lieu_Residence}}</td>
                                                    <td>{{$patient->Contact_Telephonique}}</td>
                                                    <td>{{$patient->Email}}</td>
                                                    <td>{{$patient->Assurance}}</td>
                                                    <td>{{$patient->Nom_Personne_A_Prévenir}}</td>
                                                    <td>{{$patient->Prenom_Personne_A_Prévenir}}</td>
                                                    <td>{{$patient->Contact_Personne_A_Prévenir}}</td>
                                                    <td>{{$patient->Residence_Personne_A_Prévenir}}</td>
                                                    <td>{{$patient->Compte_E_Care}}</td>
                                                    <td><a href="{{route('patients.edit',$patient)}}"><img src="img/logo/edit.png" alt=""></a></td>
                                                    <td><a href="{{route('patients.destroy',$patient)}}" data-method="DELETE" data-confirm="Etes vous sure?"><img src="img/logo/delete.png" alt=""></a></td>
                                                </tr>
                                                @endforeach
                                                  @else
                                                  <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Static Table End -->

@endsection

