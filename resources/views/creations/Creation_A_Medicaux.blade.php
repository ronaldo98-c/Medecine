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
                                            <li><span class="bread-blod">Ant??c??dents</span>
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
                                         <form action="{{route('a_medicaus.store')}}" method="POST">
                                            {{csrf_field()}}
                                          <div class="form-group-inner">
                                            <div class="row">
                                             <center><h5>Patologies Chroniques/H??r??ditaires</h5>
                                             <h6>Ne Remplir Que Si d??finit</h6></center>
                                            <div class="col-lg-6">
                                                 <select name="Nom_Patologie_Chronique" class="form-control" title="Nom Patologie Chronique" >
                                                    <option>Nom Patologie Chronique</option>
                                                    <option>Diab??te</option>
                                                    <option>HTA</option>
                                                    <option>asthme</option>
                                                    <option>Insuffisance R??nale</option>
                                                    <option>Insuffisance H??patite</option>
                                                    <option>Autre</option>
                                                 </select>
                                             </div>
                                            <div class="col-lg-6">
                                                  <input type="date" name="Date_Decouverte_Patologie_Chronique" title="Date Decouverte" class="form-control" >
                                            </div>
                                          </div>
                                          <span class="color">Si Aute Patologie</span>
                                          <div class="row">
                                             <div class="col-lg-6">
                                                  <input type="text" name="Autre_Patologie_Chronique" title="Nom D'une Autre Patologie" class="form-control" placeholder="Nom D'une Autre Patologie" >
                                             </div>
                                             <div class="col-lg-6">
                                                <select name="Circonstance_Decouverte_Patologie_Chronique" class="form-control" title="Circonstance Decouverte Patologie Chronique">
                                                  <option>Circonstance Decouverte</option>
                                                  <option>Consultation courante</option>
                                                  <option>Situation D'urgence</option>
                                                  <option>Campagne de sant??</option>
                                                  <option>Autre</option>
                                                </select>
                                             </div>
                                           </div>
                                           <br>
                                           <div class="row">                       
                                              <div class="col-lg-6">
                                                <span class="color">Remplir Si Traitement Initial</span>
                                                 <select name="Reponse_Traitement_Initial_Patologie_Chronique" class="form-control" title="Reponse Traitement Initial">
                                                    <option>Reponse Traitement Initial</option>
                                                    <option>Favorable</option>
                                                    <option>D??favorable</option>
                                                    <option>Aucune R??ponse</option>
                                                 </select>
                                              </div>
                                              <div class="col-lg-6">
                                                 <span class="color">Remplir Si Traitement Actuel</span>
                                                 <select name="Reponse_Traitement_Actuel_Patologie_Chronique" class="form-control" title="Reponse Traitement Actuel">
                                                    <option>Reponse Traitement Actuel</option>
                                                    <option>Favorable</option>
                                                    <option>D??favorable</option>
                                                    <option>Aucune R??ponse</option>
                                                 </select>
                                              </div>
                                            </div>
                                            <div class="row">
                                               <div class="col-lg-6">
                                                    <span class="color"> Remplir Si Complication</span>
                                                    <textarea name="Complication_Patologie_Chronique" cols="30" rows="10" placeholder="Complication" title="Complication" class="form-control" ></textarea>
                                               </div>
                                               <br>
                                               <div class="col-lg-6">
                                                    <textarea name="Autre_Detail_Patologie_Chronique"  cols="30" rows="10" placeholder="Autre Detail Important" class="form-control" title="Autre Detail Patologie Chronique" ></textarea>
                                               </div>
                                            </div>
                                            <br>
                                            <center><h5>Patologies Infectieuses</h5>
                                            <h6>Repondre Si Definit</h6></center>
                                            <div class="row">
                                            <div class="col-lg-6">
                                                 <select name="Nom_Patologie_Infectieuse" class="form-control" title="Nom Patologie Chronique">
                                                    <option>Nom Patologie Infectieuse</option>
                                                    <option>VIH</option>
                                                    <option> H??patite B</option>
                                                    <option> H??patite C</option>
                                                    <option>tuberculose</option>
                                                    <option>toxoplasmose</option>
                                                    <option>rub??ole</option>
                                                    <option>Autre</option>
                                                 </select>
                                             </div>
                                            <div class="col-lg-6">
                                                  <input type="date" name="Date_Decouverte_Patologie_Infectieuse"  title="Date Decouverte" class="form-control" >
                                            </div>
                                          </div>
                                          <br>
                                          <div class="row">
                                             <div class="col-lg-6">
                                                 <span class="color">Si Autre Patologie</span>
                                                  <input type="text" name="Autre_Patologie_Infectieuse" title="Nom D'une Autre Patologie Infectieuse" class="form-control" placeholder="Nom D'une Autre Patologie Infectieuse" >
                                             </div>
                                             <br>
                                             <div class="col-lg-6">
                                                <select name="Circonstance_Decouverte_Patologie_Infectieuse" title="Circonstance Decouverte Patologie Chronique" class="form-control">
                                                  <option>Circonstance_Decouverte_Patologie_Infectieuse</option>
                                                  <option>Consultation courante</option>
                                                  <option>Situation D'urgence</option>
                                                  <option>Campagne de sant??</option>
                                                  <option>Autre</option>
                                                </select>
                                             </div>
                                           </div>
                                           <br>
                                           <div class="row">
                                              <div class="col-lg-6">
                                                 <span class="color">Remplir Si Traitement Initial</span>
                                                 <select name="Reponse_Traitement_Initial_Patologie_Infectieuse" class="form-control" title="Reponse Traitement Initial">
                                                    <option>Reponse Traitement Initial Patologie Infectieuse</option>
                                                    <option>Favorable</option>
                                                    <option>D??favorable</option>
                                                    <option>Aucune R??ponse</option>
                                                 </select>
                                              </div>
                                              <div class="col-lg-6">
                                              <span class="color">Remplir Si Traitement Actuel</span>
                                                 <select name="Reponse_Traitement_Actuel_Patologie_Infectieuse" class="form-control" title="Reponse Traitement Actuel">
                                                 <option>Reponse Traitement Actuel Infectieuse</option>
                                                    <option>Favorable</option>
                                                    <option>D??favorable</option>
                                                    <option>Aucune R??ponse</option>
                                                 </select>
                                              </div>
                                            </div>
                                            <div class="row">
                                               <div class="col-lg-6">
                                                    <span class="color"> Remplir Si Complication</span>
                                                    <textarea name="Complication_Patologie_Infectieuse" cols="30" rows="10" title="Complication Patologie Infectieuse" placeholder="Complication Patologie Infectieuse" title="Complication" class="form-control" ></textarea>
                                               </div>
                                               <br>
                                               <div class="col-lg-6">
                                                    <textarea name="Autre_Detail_Patologie_Infectieuse"  cols="30" rows="10" title="Autre Detail Patologie Infectieuse"  placeholder="Autre Detail Patologie Infectieuse" class="form-control" ></textarea>
                                               </div>
                                            </div>
                                            <div class="row">
                                              <div class="col-lg-6">
                                                <select name="patient_id" title="Identifiant du patient" class="form-control" id="">
                                                @if(count($patients) > 0)
                                                @foreach($patients as $patient)
                                                  <option>{{$patient->id}}</option>
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
                                           <a href="{{route('a_medicaus.index')}}"><button class="btn btn-white cancel" >Cancel</button></a>
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

@else
   <?php redirect()->route('login');?>
 @endif
@endsection

