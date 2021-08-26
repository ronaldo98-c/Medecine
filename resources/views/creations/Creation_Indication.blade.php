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
                                            <li><span class="bread-blod">Indication</span>
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
                                         <form action="{{route('indications.store')}}" method="POST">
                                            {{csrf_field()}}
                                             <div class="form-group-inner">
                                              <div class="row">
                                                 <div class="col-lg-6">
                                                      <select name="Dystocie" id="" class="form-control" >
                                                         <option>Dystocie</option>
                                                          <option>Céphalo Pelvienne</option>
                                                          <option>Dynamique</option>
                                                      </select>
                                                 </div>
                                                 <div class="col-lg-6">
                                                      <select name="Utérus_cicatriciel" id="" class="form-control">
                                                          <option>Utérus cicatriciel</option>
                                                          <option>uni cicatriciel</option>
                                                          <option>bi cicatriciel</option>
                                                          <option>tri  cicatriciel</option>
                                                      </select>
                                                 </div>
                                               </div>
                                               <div class="row">
                                                 <div class="col-lg-6">
                                                      <select name="Utérus_myomateux" id="" class="form-control">
                                                          <option>Utérus myomateux</option>
                                                          <option>symptomatique</option>
                                                          <option>gros myome</option>
                                                          <option>impact sur l'endomètre</option>
                                                      </select>
                                                 </div>
                                                 <div class="col-lg-6">
                                                      <input type="text"placeholder="GEU/GEUR" name="GEU" class="form-control" required>
                                                 </div>
                                               </div>
                                               <div class="row">
                                                 <div class="col-lg-6">
                                                    <input type="text" name="Multiparité" placeholder="Multiparité" class="form-control" required>
                                                 </div>
                                                 <div class="col-lg-6">
                                                      <select name="Cancer_Endomètre" id="" class="form-control">
                                                          <option>Cancer de l'endomètre</option>
                                                          <option>Stade 1</option>
                                                          <option>Stade 2</option>
                                                          <option>Stade 3</option>
                                                          <option>Stade 4</option>
                                                      </select>
                                                 </div>
                                               </div>
                                               <div class="row">
                                                 <div class="col-lg-6">
                                                    <input type="text" name="Cancer_col_utérus" class="form-control"placeholder="Cancer du col de l'utérus" required>
                                                 </div>
                                                 <div class="col-lg-6">
                                                     <input type="text" name="Lésions_précancéreuses"placeholder="Lésions précancéreuses" class="form-control" required>
                                                 </div>
                                               </div>
                                               <div class="row">
                                                 <div class="col-lg-6">
                                                      <select name="Kyste_Ovarien" id="" class="form-control">
                                                          <option>Kyste Ovarien</option>
                                                          <option>Droit</option>
                                                          <option>Gauche</option>
                                                      </select>
                                                 </div>
                                                 <div class="col-lg-6">
                                                      <input type="text" name="Abcès_Tuboovarien"placeholder="Abcès Tuboovarien" class="form-control" required>
                                                 </div>
                                               </div>
                                               <div class="row">
                                                 <div class="col-lg-6">
                                                     <input type="text" name="Béance_cervicale" class="form-control"placeholder="Béance cervicale" required>
                                                 </div>
                                                 <div class="col-lg-6">
                                                      <select name="Cancer_sein" id="" class="form-control">
                                                          <option>Cancer du sein</option>
                                                          <option>ACRO 1</option>
                                                          <option>ACRO 2</option>
                                                          <option>ACRO 3</option>
                                                      </select>
                                                 </div>
                                               </div>
                                               <div class="row">
                                                 <div class="col-lg-6">
                                                      <select name="Hysteroscopie" id="" class="form-control">
                                                          <option>Hysteroscopie</option>
                                                          <option>Diagnostique</option>
                                                          <option>Thérapeutique</option>
                                                          <option>cure de synéchies</option>
                                                          <option>2nd look post-myomectomie</option>
                                                      </select>
                                                 </div>
                                                 <div class="col-lg-6">
                                                      <select name="Nom_Medecin" class="form-control">
                                                         <option>Nom Medecin</option>
                                                         @if(count($medecins) > 0)
                                                          @foreach($medecins as $medecin)
                                                          <option>{{$medecin->Nom}}</option>
                                                          @endforeach
                                                          @endif
                                                      </select>
                                                 </div>
                                               </div>
                                               <div class="row">
                                                 <div class="col-lg-6">
                                                      <select name="Nom_Patient" id="" class="form-control">
                                                      <option>Nom Patient</option>
                                                       @if(count($patients) > 0)
                                                       @foreach($patients as $patient)
                                                      <option>{{$patient->Nom}}</option>
                                                      @endforeach
                                                       @endif
                                                      </select>
                                                 </div>
                                                 <div class="col-lg-6">
                                                      <select name="Nom_Service" id="" class="form-control">
                                                      <option>Nom Service</option>
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
                                           <a href="{{url('/indication')}}"><button class="btn btn-white cancel" >Cancel</button></a>
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

