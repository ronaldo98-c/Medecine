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
                                    <a href="#"><img src="{{ URL::asset('img/logo/log.png')}}" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-1 col-sm-1 col-xs-12">
                                <div class="header-top-menu tabl-d-n">
                                   <ul class="nav navbar-nav mai-top-nav">
                                      <li class="nav-item"><a href="{{url('/information_supplementaire')}}" class="nav-link" >Informations Supplementaires</a>
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
 <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Header top area start-->
        <!--Modals -->

        <!-- End Modals-->
        <!-- Header top area start-->
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
                                            <li><a href="#">Home</a> <span class="bread-slash"></span>
                                            </li>
                                            <li><span class="bread-blod">Trouvaille</span>
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
                                        <h1>Liste des trouvailles</h1>
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
                                        <a href="Creation_Trouvaille"><input type="submit" value="" class="btn-ajouter" title="Ajouter"></a>
                                        <a href="compte_rendu"><input type="submit" value="" class="btn-retour"  title="Retour"></a>
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <th data-field="id">Id</th>
                                                    <th data-field="Patient" data-editable="false">Présentation</th>
                                                    <th data-field="Sexe" data-editable="false">Sexe</th>
                                                    <th data-field="Poids_Naissance" data-editable="false">Poids Naissance</th>
                                                    <th data-field="Apgar" data-editable="false">Apgar</th>
                                                    <th data-field="Mensurations" data-editable="false">Mensurations</th>
                                                    <th data-field="Liquide_Amniotique" data-editable="false">Liquide Amniotique </th>
                                                    <th data-field="Cordon" data-editable="false">Cordon </th>
                                                    <th data-field="Nombre_spires_Cordon" data-editable="false">Nombre spires Cordon  </th>
                                                    <th data-field="Nombre_Utérus_myomateux" data-editable="false">Nombre Utérus myomateux</th>
                                                    <th data-field="Taille_Utérus_myomateux" data-editable="false">Taille Utérus myomateux</th>
                                                    <th data-field="Localisation_Utérus_myomateux" data-editable="false">Localisation Utérus myomateux </th>
                                                    <th data-field="Myome_Nécrobiose_Utérus_myomateux" data-editable="false">Myome Nécrobiose Utérus myomateux</th>
                                                    <th data-field="Kyste_Ovarien" data-editable="false">Kyste Ovarien  </th>
                                                    <th data-field="Localisation_GEU/GEUR" data-editable="false">Localisation GEU/GEUR </th>
                                                    <th data-field="Adhérences_ovarienne" data-editable="false">Adhérences ovarienne  </th>
                                                    <th data-field="Longueur_Masse_fibrokystique" data-editable="false">Longueur Masse fibrokystique </th>
                                                    <th data-field="Largeur_Masse_fibrokystique" data-editable="false">Largeur Masse fibrokystique  </th>
                                                    <th data-field="Epaisseur_Masse_fibrokystique" data-editable="false">Epaisseur Masse fibrokystique</th>
                                                    <th data-field="Couleur_Liquide_intraabdominal" data-editable="false">Couleur Liquide intraabdominal</th>
                                                    <th data-field="Quantite_Liquide_intraabdominal" data-editable="false">Quantite Liquide intraabdominal</th>
                                                    <th data-field="Nom_Medecin" data-editable="false">Nom Medecin</th>
                                                    <th data-field="Nom_Patient" data-editable="false">Nom Patient</th>
                                                    <th data-field="Nom_Service" data-editable="false">Nom Service</th>
                                                    <th data-field="modifier" data-editable="false">Modifier</th>
                                                    <th data-field="supprimer" data-editable="false">Supprimer</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @if(count($trouvailles) > 0)
                                            @foreach($trouvailles as $trouvaille)
                                            <tr>
                                                    <td>{{$trouvaille->id}}</td>
                                                    <td>{{$trouvaille->Présentation}}</td>
                                                    <td>{{$trouvaille->Sexe}}</td>
                                                    <td>{{$trouvaille->Poids_Naissance}}</td>
                                                    <td>{{$trouvaille->Apgar}}</td>
                                                    <td>{{$trouvaille->Mensurations}}</td>
                                                    <td>{{$trouvaille->Liquide_Amniotique}}</td>
                                                    <td>{{$trouvaille->Cordon}}</td>
                                                    <td>{{$trouvaille->Nombre_spires_Cordon}}</td>
                                                    <td>{{$trouvaille->Nombre_Utérus_myomateux}}</td>
                                                    <td>{{$trouvaille->Taille_Utérus_myomateux}}</td>
                                                    <td>{{$trouvaille->Localisation_Utérus_myomateux}}</td>
                                                    <td>{{$trouvaille->Myome_Nécrobiose_Utérus_myomateux}}</td>
                                                    <td>{{$trouvaille->Kyste_Ovarien}}</td>
                                                    <td>{{$trouvaille->Localisation_GEU}}</td>
                                                    <td>{{$trouvaille->Adhérences_ovarienne}}</td>
                                                    <td>{{$trouvaille->Longueur_Masse_fibrokystique}}</td>
                                                    <td>{{$trouvaille->Largeur_Masse_fibrokystique}}</td>
                                                    <td>{{$trouvaille->Epaisseur_Masse_fibrokystique}}</td>
                                                    <td>{{$trouvaille->Couleur_Liquide_intraabdominal}}</td>
                                                    <td>{{$trouvaille->Quantite_Liquide_intraabdominal}}</td>
                                                    <td>{{$trouvaille->Nom_Medecin}}</td>
                                                    <td>{{$trouvaille->Nom_Patient}}</td>
                                                    <td>{{$trouvaille->Nom_Service}}</td>
                                                    <td><a href="{{route('trouvailles.edit',$trouvaille)}}"><img src="{{ URL::asset('img/logo/edit.png')}}" alt=""></a></td>
                                                    <td><a href="{{route('trouvailles.destroy',$trouvaille)}}" data-method="DELETE" data-confirm="Etes vous sure?"><img src="img/logo/delete.png" alt=""></a></td>
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