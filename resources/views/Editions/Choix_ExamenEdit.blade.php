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
                                            <li><span class="bread-blod">Antécédents</span>
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
                                        <form action="{{route('choix_examens.update',$choix_examen)}}" method="POST">
                                            {{csrf_field()}}
                                            {{method_field('PUT')}}
                                            <div class="form-group-inner">
                                              <div class="row">
                                                  <div class="col-lg-6">
                                                      <select id="service_nom" class="form-control" name="service_nom" title="Nom Du Service">
                                                        <option>{{$choix_examen->service_nom}}</option>
                                                        @if(count($services) > 0)
                                                        @foreach($services  as  $service)
                                                         <option>{{$service->Nom}}</option>
                                                        @endforeach
                                                       @endif
                                                      </select>
                                                  </div>
                                                  <div class="col-lg-6">
                                                       <select id="examen_complementaire_id" class="form-control" name="examen_complementaire_id" title="Id De EXamen Complementaire ">
                                                          <option>{{$choix_examen->examen_complementaire_id}}</option>
                                                          @if(count($examen_complementaires) > 0)
                                                          @foreach($examen_complementaires  as  $examen_complementaire)
                                                            <option>{{$examen_complementaire->id}}</option>
                                                          @endforeach
                                                          @endif
                                                        </select>
                                                    </div>
                                               </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                         <select id="examen_physique_gynecologie_id" class="form-control" name="examen_physique_gynecologie_id" title="Id Du Examen Physique Gynécologie">
                                                           <option>{{$choix_examen->examen_physique_gynecologie_id}}</option>
                                                           @if(count($examen_physique_gynecologies) > 0)
                                                           @foreach($examen_physique_gynecologies  as  $examen_physique_gynecologie)
                                                             <option>{{$examen_physique_gynecologie->id}}</option>
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
                                           <a href="{{route('choix_examens.index')}}"><button class="btn btn-white cancel" >Cancel</button></a>
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
