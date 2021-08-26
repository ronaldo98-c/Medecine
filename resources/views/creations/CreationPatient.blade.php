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
                             <div class="row">
                                <div class="col-lg-9">
                                     <div class="all-form-element-inner">
                                        <form action="{{route('patients.store')}}" method="POST">
                                            {{csrf_field()}}
                                              <div class="form-group-inner">
                                                   <div class="row">
                                                      <div class="col-lg-6">
                                                      <input type="text" class="form-control" value="" name="Nom" placeholder="Nom" />
                                                          <tr>
                                                              <td>
                                                              @if($errors->has('Nom'))
                                                              <span class="invalid-feedback" role="alert">
                                                               {{ $errors->first('Nom') }}
                                                              </span>
                                                              @endif
                                                              </td>
                                                          </tr>
                                                      </div>
                                                      <div class="col-lg-6">
                                                        <input type="text" class="form-control" value="" name="Prenom" placeholder="Prenom" />
                                                        <tr>
                                                              <td>
                                                              @if($errors->has('Prenom'))
                                                              <span class="invalid-feedback" role="alert">
                                                               {{ $errors->first('Prenom') }}
                                                              </span>
                                                              @endif
                                                              </td>
                                                          </tr>
                                                       </div>
                                                   </div>
                                                   <div class="row">
                                                      <div class="col-lg-6">
                                                          <input type="date" class="form-control" value="" name="Date_Naissance" title="Date de Naissance" />
                                                          <tr>
                                                              <td>
                                                              @if($errors->has('Date_Naissance'))
                                                              <span class="invalid-feedback" role="alert">
                                                               {{ $errors->first('Date_Naissance') }}
                                                              </span>
                                                              @endif
                                                              </td>
                                                          </tr>
                                                       </div>
                                                       <div class="col-lg-6">
                                                          <input type="text" class="form-control" value="" name="Lieu_Naissance" placeholder="Lieu de Naissance" />
                                                          <tr>
                                                              <td>
                                                              @if($errors->has('Lieu_Naissance'))
                                                              <span class="invalid-feedback" role="alert">
                                                               {{ $errors->first('Lieu_Naissance') }}
                                                              </span>
                                                              @endif
                                                              </td>
                                                          </tr>
                                                       </div>
                                                   </div>
                                                   <div class="row">
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" value="" name="Groupe_Ethnique" placeholder="Ethnie" />
                                                          <tr>
                                                              <td>
                                                              @if($errors->has('Groupe_Ethnique'))
                                                              <span class="invalid-feedback" role="alert">
                                                               {{ $errors->first('Groupe_Ethnique') }}
                                                              </span>
                                                              @endif
                                                              </td>
                                                          </tr>
                                                       </div>
                                                       <div class="col-lg-6">
                                                          <input type="text" class="form-control" value="" name="Profession" placeholder="Profession" />
                                                          <tr>
                                                              <td>
                                                              @if($errors->has('Profession'))
                                                              <span class="invalid-feedback" role="alert">
                                                               {{ $errors->first('Profession') }}
                                                              </span>
                                                              @endif
                                                              </td>
                                                          </tr>
                                                       </div>
                                                   </div>
                                                   <div class="row">
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" value="" name="Etat_Civil" placeholder="Civilité" />
                                                          <tr>
                                                              <td>
                                                              @if($errors->has('Etat_Civil'))
                                                              <span class="invalid-feedback" role="alert">
                                                               {{ $errors->first('Etat_Civil') }}
                                                              </span>
                                                              @endif
                                                              </td>
                                                          </tr>
                                                       </div>
                                                       <div class="col-lg-6">
                                                          <input type="text" class="form-control" value="" name="Nationalite" placeholder="Nationalité" />
                                                          <tr>
                                                              <td>
                                                              @if($errors->has('Nationalite'))
                                                              <span class="invalid-feedback" role="alert">
                                                               {{ $errors->first('Nationalite') }}
                                                              </span>
                                                              @endif
                                                              </td>
                                                          </tr>
                                                       </div>
                                                   </div>
                                                   <div class="row">
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" value="" name="Lieu_Residence" placeholder="Résidence" />
                                                          <tr>
                                                              <td>
                                                              @if($errors->has('Lieu_Residence'))
                                                              <span class="invalid-feedback" role="alert">
                                                               {{ $errors->first('Lieu_Residence') }}
                                                              </span>
                                                              @endif
                                                              </td>
                                                          </tr>
                                                       </div>
                                                       <div class="col-lg-6">
                                                          <input type="text" class="form-control" value="" name="Contact_Telephonique" placeholder="Contact" />
                                                          <tr>
                                                              <td>
                                                              @if($errors->has('Contact_Telephonique'))
                                                              <span class="invalid-feedback" role="alert">
                                                               {{ $errors->first('Contact_Telephonique') }}
                                                              </span>
                                                              @endif
                                                              </td>
                                                          </tr>
                                                       </div>
                                                   </div>
                                                   <div class="row">
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" value="" name="Email" placeholder="Email" />
                                                          <tr>
                                                              <td>
                                                              @if($errors->has('Email'))
                                                              <span class="invalid-feedback" role="alert">
                                                               {{ $errors->first('Email') }}
                                                              </span>
                                                              @endif
                                                              </td>
                                                          </tr>
                                                       </div>
                                                       <div class="col-lg-6">
                                                           <select name="Assurance" class="form-control" >
                                                              <option>Assurance</option>
                                                              @if(count($assurances) > 0)
                                                              @foreach($assurances as $assurance)
                                                               <option>{{$assurance->Nom}}</option>
                                                              @endforeach
                                                              @endif
                                                          </select>
                                                          <tr>
                                                              <td>
                                                              @if($errors->has('Assurance'))
                                                              <span class="invalid-feedback" role="alert">
                                                               {{ $errors->first('Assurance') }}
                                                              </span>
                                                              @endif
                                                              </td>
                                                          </tr>
                                                       </div>
                                                   </div>
                                                   <br>
                                                  <div class="row">
                                                     <div class="col-lg-2 col-md-6 col-sm-6 col-lg-12">
                                                        <label class="login2 pull-right pull-right-pro">Compte E-Care</label>
                                                     </div>
                                                     <div class="col-lg-10 col-md-6 col-sm-6 col-lg-12">
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
                                                   <tr>
                                                      <td>
                                                        @if($errors->has('Compte_E_Care'))
                                                          <span class="invalid-feedback" role="alert">
                                                            {{ $errors->first('Compte_E_Care') }}
                                                          </span>
                                                        @endif
                                                      </td>
                                                    </tr>  
                                                   <br>
                                                   <h4>Personne A Prévénir</h4>
                                                   <div class="row">
                                                      <div class="col-lg-6">
                                                       <input type="text" class="form-control" value="" name="Nom_Personne_A_Prévenir" placeholder="Nom" />
                                                       <tr>
                                                              <td>
                                                              @if($errors->has('Nom_Personne_A_Prévenir'))
                                                              <span class="invalid-feedback" role="alert">
                                                               {{ $errors->first('Nom_Personne_A_Prévenir') }}
                                                              </span>
                                                              @endif
                                                              </td>
                                                          </tr>
                                                      </div>
                                                      <div class="col-lg-6">
                                                        <input type="text" class="form-control" value="" name="Prenom_Personne_A_Prévenir" placeholder="Prenom" />
                                                        <tr>
                                                              <td>
                                                              @if($errors->has('Prenom_Personne_A_Prévenir'))
                                                              <span class="invalid-feedback" role="alert">
                                                               {{ $errors->first('Prenom_Personne_A_Prévenir') }}
                                                              </span>
                                                              @endif
                                                              </td>
                                                          </tr>
                                                       </div>
                                                   </div>
                                                   <div class="row">
                                                      <div class="col-lg-6">
                                                       <input type="text" class="form-control" value="" name="Contact_Personne_A_Prévenir" placeholder="Contact" />
                                                       <tr>
                                                              <td>
                                                              @if($errors->has('Contact_Personne_A_Prévenir'))
                                                              <span class="invalid-feedback" role="alert">
                                                               {{ $errors->first('Contact_Personne_A_Prévenir') }}
                                                              </span>
                                                              @endif
                                                              </td>
                                                          </tr>
                                                      </div>
                                                      <div class="col-lg-6">
                                                        <input type="text" class="form-control" value="" name="Residence_Personne_A_Prévenir" placeholder="Résidence" />
                                                        <tr>
                                                              <td>
                                                              @if($errors->has('Residence_Personne_A_Prévenir'))
                                                              <span class="invalid-feedback" role="alert">
                                                               {{ $errors->first('Residence_Personne_A_Prévenir') }}
                                                              </span>
                                                              @endif
                                                              </td>
                                                          </tr>
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

