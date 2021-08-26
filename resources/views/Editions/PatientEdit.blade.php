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
                             <div class="row">
                                <div class="col-lg-9">
                                     <div class="all-form-element-inner">
                                        <form action="{{route('patients.update',$patient)}}" method="POST">
                                            {{csrf_field()}}
                                            {{method_field('PUT')}}
                                              <div class="form-group-inner">
                                                   <div class="row">
                                                      <div class="col-lg-6">
                                                       <input type="text" class="form-control" value="{{old('Nom')?:$patient->Nom}}" name="Nom" placeholder="Nom" required/>
                                                      </div>
                                                      <div class="col-lg-6">
                                                        <input type="text" class="form-control" value="{{old('Prenom')?:$patient->Prenom}}" name="Prenom" placeholder="Prenom" required/>
                                                       </div>
                                                   </div>
                                                   <div class="row">
                                                      <div class="col-lg-6">
                                                          <input type="date" class="form-control" value="{{old('Date_Naissance')?:$patient->Date_Naissance}}" name="Date_Naissance" required/>
                                                       </div>
                                                       <div class="col-lg-6">
                                                          <input type="text" class="form-control" value="{{old('Lieu_Naissance')?:$patient->Lieu_Naissance}}" name="Lieu_Naissance" placeholder="Lieu de Naissance" required/>
                                                       </div>
                                                   </div>
                                                   <div class="row">
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" value="{{old('Groupe_Ethnique')?:$patient->Groupe_Ethnique}}" name="Groupe_Ethnique" placeholder="Ethnie" required/>
                                                       </div>
                                                       <div class="col-lg-6">
                                                          <input type="text" class="form-control" value="{{old('Profession')?:$patient->Profession}}" name="Profession" placeholder="Profession" required/>
                                                       </div>
                                                   </div>
                                                   <div class="row">
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" value="{{old('Etat_Civil')?:$patient->Etat_Civil}}" name="Etat_Civil" placeholder="Civilité" required/>
                                                       </div>
                                                       <div class="col-lg-6">
                                                          <input type="text" class="form-control" value="{{old('Nationalite')?:$patient->Nationalite}}" name="Nationalite" placeholder="Nationalité" required/>
                                                       </div>
                                                   </div>
                                                   <div class="row">
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" value="{{old('Lieu_Residence')?:$patient->Lieu_Residence}}" name="Lieu_Residence" placeholder="Résidence" required/>
                                                       </div>
                                                       <div class="col-lg-6">
                                                          <input type="text" class="form-control" value="{{old('Contact_Telephonique')?:$patient->Contact_Telephonique}}" name="Contact_Telephonique" placeholder="Contact" required/>
                                                       </div>
                                                   </div>
                                                   <div class="row">
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" value="{{old('Email')?:$patient->Email}}" name="Email" placeholder="Email" required/>
                                                       </div>
                                                       <div class="col-lg-6">
                                                           <select name="Assurance" class="form-control" required>
                                                           <option>{{$patient->Assurance}}</option>
                                                             @if(count($assurances) > 0)   
                                                              @foreach($assurances as $assurance)
                                                               <option>{{$assurance->Nom}}</option>
                                                              @endforeach
                                                              @endif
                                                           </select>
                                                       </div>
                                                   </div>
                                                   <br>
                                                  <div class="row">
                                                     <div class="col-lg-2 col-md-6 col-sm-6 col-lg-12">
                                                        <label class="login2 pull-right pull-right-pro">Compte E-Care</label>
                                                     </div>
                                                     <div class="col-lg-9 col-md-6 col-sm-6 col-lg-12">
                                                        <div class="bt-df-checkbox pull-left">
                                                        <div class="row">
                                                         <div class="col-lg-12">
                                                               <div class="i-checks pull-left">
                                                                  <label>
                                                                  <input type="radio" value="1" name="Compte_E_Care"> <i></i> Oui </label>
                                                              </div>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                          <div class="col-lg-12">
                                                               <div class="i-checks pull-left">
                                                                  <label>
                                                                  <input type="radio" value="0" name="Compte_E_Care"> <i></i> Non</label>
                                                               </div>
                                                          </div>
                                                       </div>
                                                        </div>
                                                    </div>
                                                   </div>  
                                                   <br>
                                                   <h4>Personne A Prévénir</h4>
                                                   <div class="row">
                                                      <div class="col-lg-6">
                                                       <input type="text" class="form-control" value="{{old('Nom_Personne_A_Prévenir')?:$patient->Nom_Personne_A_Prévenir}}" name="Nom_Personne_A_Prévenir" placeholder="Nom" required/>
                                                      </div>
                                                      <div class="col-lg-6">
                                                        <input type="text" class="form-control" value="{{old('Prenom_Personne_A_Prévenir')?:$patient->Prenom_Personne_A_Prévenir}}" name="Prenom_Personne_A_Prévenir" placeholder="Prenom" required/>
                                                       </div>
                                                   </div>
                                                   <div class="row">
                                                      <div class="col-lg-6">
                                                       <input type="text" class="form-control" value="{{old('Contact_Personne_A_Prévenir')?:$patient->Contact_Personne_A_Prévenir}}" name="Contact_Personne_A_Prévenir" placeholder="Contact" required/>
                                                      </div>
                                                      <div class="col-lg-6">
                                                        <input type="text" class="form-control" value="{{old('Residence_Personne_A_Prévenir')?:$patient->Residence_Personne_A_Prévenir}}" name="Residence_Personne_A_Prévenir" placeholder="Résidence" required/>
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
                                           <a href="{{route('patients.index')}}"><button class="btn btn-white cancel" >Cancel</button></a>
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

