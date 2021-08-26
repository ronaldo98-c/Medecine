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
                             <div class="row">
                                <div class="col-lg-9">
                                     <div class="all-form-element-inner">
                                         <form action="{{route('trouvailles.update',$trouvaille)}}" method="POST">
                                            {{csrf_field()}}
                                            {{method_field('PUT')}}
                                            <div class="form-group-inner">
                                             <span>Nouveau Nee</span>
                                              <div class="row">
                                                 <div class="col-lg-6">
                                                      <select name="Présentation"title="Présentation" id="" class="form-control">
                                                          <option>{{$trouvaille->Présentation}}</option>
                                                          <option>Céphalique</option>
                                                          <option>Transverse</option>
                                                          <option>Siege</option>
                                                      </select>
                                                 </div>
                                                 <div class="col-lg-6">
                                                      <select name="Sexe"title="Sexe" id="" class="form-control">
                                                          <option>{{$trouvaille->Sexe}}</option>
                                                          <option>Homme</option>
                                                          <option>Femme</option>
                                                      </select>
                                                 </div>
                                               </div>
                                               <div class="row">
                                                 <div class="col-lg-6">
                                                     <input type="number" name="Poids_Naissance" placeholder="{{$trouvaille->Poids_Naissance}}" title="Poids Naissance" class="form-control" required>
                                                 </div>
                                                 <div class="col-lg-6">
                                                       <select name="Apgar" id="" title="Apgar" class="form-control">
                                                          <option>{{$trouvaille->Apgar}}</option>
                                                          <option>1eme Minute</option>
                                                          <option>2eme Minute</option>
                                                          <option>3eme Minute</option>
                                                          <option>4eme Minute</option>
                                                          <option>5eme Minute</option>
                                                          <option>6eme Minute</option>
                                                          <option>7eme Minute</option>
                                                          <option>8eme Minute</option>
                                                          <option>9eme Minute</option>
                                                          <option>10eme Minute</option>
                                                      </select>
                                                 </div>
                                               </div>
                                               <div class="row">
                                                 <div class="col-lg-6">
                                                     <input type="text" name="Mensurations" class="form-control" title="Mensurations" placeholder="{{$trouvaille->Mensurations}}" required>
                                                 </div>
                                                 <div class="col-lg-6">
                                                       <select name="Liquide_Amniotique" title="Liquide Amniotique" id="" class="form-control">
                                                          <option>{{$trouvaille->Liquide_Amniotique}}</option>
                                                          <option>Clair</option>
                                                          <option>Teinté</option>
                                                          <option>Méconial</option>
                                                          <option>Fétide</option>
                                                      </select>
                                                 </div>
                                               </div>
                                               <div class="row">
                                                 <div class="col-lg-6">
                                                      <select name="Cordon" id="" title="Cordon" class="form-control">
                                                          <option>{{$trouvaille->Cordon}}</option>
                                                          <option>Circulaire non serée </option>
                                                          <option>serrée</option>
                                                      </select>
                                                 </div>
                                                 <div class="col-lg-6">
                                                     <input type="number" name="Nombre_spires_Cordon" class="form-control" placeholder="{{$trouvaille->Nombre_spires_Cordon}}" title="Nombre spires Cordon " required>
                                                 </div>
                                               </div>
                                               <div class="row">
                                                 <div class="col-lg-6">
                                                     <input type="number" name="Nombre_Utérus_myomateux" placeholder="{{$trouvaille->Nombre_Utérus_myomateux}}" title="Nombre Utérus myomateux " class="form-control" required>
                                                 </div>
                                                 <div class="col-lg-6">
                                                     <input type="number"tilte="Taille Utérus myomateux" placeholder="{{$trouvaille->Taille_Utérus_myomateux}}" name="Taille_Utérus_myomateux" class="form-control" required>
                                                 </div>
                                               </div>
                                               <div class="row">
                                                 <div class="col-lg-6">
                                                     <input type="text" name="Localisation_Utérus_myomateux" placeholder="{{$trouvaille->Localisation_Utérus_myomateux}}" title="Localisation Utérus myomateux" class="form-control" required>
                                                 </div>
                                                 <div class="col-lg-6">
                                                     <input type="text" name="Myome_Nécrobiose_Utérus_myomateux" placeholder="{{$trouvaille->Myome_Nécrobiose_Utérus_myomateux}}" title="Myome en nécrobiose Utérus myomateux" class="form-control" required>
                                                 </div>
                                               </div>
                                               <div class="row">
                                                 <div class="col-lg-6">
                                                     <input type="text" name="Kyste_Ovarien" placeholder="{{$trouvaille->Kyste_Ovarien}}" title="Kyste  Ovarien" class="form-control" required>
                                                 </div>
                                                 <div class="col-lg-6">
                                                       <select name="Localisation_GEU" title="Localisation GEU/GEUR" id="" class="form-control">
                                                          <option>{{$trouvaille->Localisation_GEU}}</option>
                                                          <option>Isthmique</option>
                                                          <option>Ampullaire</option>
                                                          <option>IntraAbdominal</option>
                                                      </select>
                                                 </div>
                                               </div>
                                               <div class="row">
                                                 <div class="col-lg-6">
                                                     <input type="text" name="Adhérences_ovarienne" placeholder="{{$trouvaille->Adhérences_ovarienne}}" title="Adhérences ovarienne" class="form-control" required>
                                                 </div>
                                                 <div class="col-lg-6">
                                                      <input type="number" name="Longueur_Masse_fibrokystique" placeholder="{{$trouvaille->Longueur_Masse_fibrokystique}}" title="Longueur Masse fibrokystique" class="form-control" required>
                                                 </div>
                                               </div>
                                               <div class="row">
                                                 <div class="col-lg-6">
                                                      <input type="number" name="Largeur_Masse_fibrokystique" placeholder="{{$trouvaille->Largeur_Masse_fibrokystique}}" title="Largeur  Masse fibrokystique" class="form-control" required>
                                                 </div>
                                                 <div class="col-lg-6">
                                                      <input type="number" name="Epaisseur_Masse_fibrokystique" placeholder="{{$trouvaille->Epaisseur_Masse_fibrokystique}}" title="Epaisseur  Masse fibrokystique" class="form-control" required>
                                                 </div>
                                               </div>
                                               <div class="row">
                                                 <div class="col-lg-6">
                                                       <select name="Couleur_Liquide_intraabdominal" title="Couleur Liquide intraabdominal" id="" class="form-control">
                                                           <option>{{$trouvaille->Couleur_Liquide_intraabdominal}}</option>
                                                          <option>Blanc</option>
                                                          <option>Citrin</option>
                                                      </select>
                                                 </div>
                                                 <div class="col-lg-6">
                                                     <input type="number"title="Quantite Liquide intraabdominal" placeholder="{{$trouvaille->Quantite_Liquide_intraabdominal}}" name="Quantite_Liquide_intraabdominal" class="form-control" required>
                                                 </div>
                                               </div>
                                               <div class="row">
                                                 <div class="col-lg-6">
                                                      <select name="Nom_Medecin" title="Nom Medecin" class="form-control">
                                                         <option>{{$trouvaille->Nom_Medecin}}</option>
                                                         @if(count($medecins) > 0)
                                                          @foreach($medecins as $medecin)
                                                          <option>{{$medecin->Nom}}</option>
                                                          @endforeach
                                                          @endif
                                                      </select>
                                                 </div>
                                                 <div class="col-lg-6">
                                                      <select name="Nom_Patient" title="Nom Patient" id="" class="form-control">
                                                      <option>{{$trouvaille->Nom_Patient}}</option>
                                                       @if(count($patients) > 0)
                                                       @foreach($patients as $patient)
                                                      <option>{{$patient->Nom}}</option>
                                                      @endforeach
                                                       @endif
                                                      </select>
                                                 </div>
                                               </div>
                                               <div class="row">
                                                 <div class="col-lg-6">
                                                      <select name="Nom_Service" title="Nom Service" id="" class="form-control">
                                                      <option>{{$trouvaille->Nom_Service}}</option>
                                                       @if(count($services) > 0)
                                                       @foreach($services as $service)
                                                      <option>{{$service->Nom}}</option>
                                                      @endforeach
                                                      @endif
                                                      </select>
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
                                           <a href="{{route('trouvailles.index')}}"><button class="btn btn-white cancel" >Cancel</button></a>
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

