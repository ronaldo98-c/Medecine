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
                                  <li><span class="bread-blod">Services</span>
                                  </li>
                                </ul>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                              <form action="{{route('services.update',$service)}}" method="POST">
                                                {{csrf_field()}}
                                                {{method_field('PUT')}}
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-2">
                                                          <label class="login2 pull-right pull-right-pro">Nom Du Service</label>
                                                        </div>
                                                        <div class="col-lg-7">
                                                          <input type="text" class="form-control" value="{{old('Nom')?:$service->Nom}}" name="Nom"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                  <div class="row">
                                                   <div class="col-lg-2">
                                                      <label class="login2 pull-right pull-right-pro">Description Du Service</label>
                                                   </div>
                                                   <div class="col-lg-7">
                                                      <textarea  id="" cols="30" rows="10"  class="form-control" name="Description">{{$service->Description}}</textarea>
                                                    </div>
                                                 </div>
                                                 <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-2">
                                                          <label class="login2 pull-right pull-right-pro">Role Du Service</label>
                                                        </div>
                                                        <div class="col-lg-7">
                                                          <input type="text" class="form-control" value="{{old('Role')?:$service->Role}}" name="Role"/>
                                                        </div>
                                                    </div>
                                                </div>
                                             </div>
                                            <div class="form-group-inner">
                                               <div class="login-btn-inner">
                                                 <div class="row">
                                                   <div class="col-lg-2"></div>
                                                   <div class="col-lg-7">
                                                     <div class="login-horizental cancel-wp pull-left">
                                                      <a href="../../service"><button class="btn btn-white" >Cancel</button></a>
                                                      <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Save Change</button>
                                                      </div>
                                                    </div>
                                                   </div>
                                                 </div>
                                             </div>
                                           </form>
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
@endsection