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
                                                <li><a href="login"><span class="adminpro-icon adminpro-locked author-log-ic"></span>Deconnexion</a>
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
        <div id="WarningModalalert" class="modal modal-adminpro-general Customwidth-popup-WarningModal fade" role="dialog">
                   <div class="modal-dialog">
                      <div class="modal-content">
                            <div class="modal-close-area modal-close-df">
                                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('a_familiaus.store')}}" method="POST">
                                    {{csrf_field()}}
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                  <select name="Antécédent_Père" title="Antécédent Père"  class="form-control" >
                                                    <option>Antécédent Père</option>
                                                    <option>Aucun</option>
                                                    <option>HTA</option>
                                                    <option>Diabète</option>
                                                    <option>cancer prostate</option>
                                                    <option>cancer digestif</option>
                                                    <option>inconnu</option>
                                                    <option>Autre</option>
                                                  </select>
                                            </div>
                                            <div class="col-lg-6">
                                                 <select name="Antécédent_Mère" title="Antécédent Mère" class="form-control" >
                                                     <option>Antécédent Mère</option>
                                                    <option>HTA</option>
                                                    <option>Diabète</option>
                                                    <option>cancer du sein</option>
                                                    <option>ovaire</option>
                                                    <option>endomètre</option>
                                                    <option>cancer digestif</option>
                                                    <option>inconnu</option>
                                                    <option>Autre</option>
                                                 </select>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-6">
                                               <textarea name="Autre_Antécédent_Mère" title="Autre Antécédent Mère" cols="30" rows="10" placeholder="Antécédents de le mère si non définit" ></textarea>
                                            </div>
                                            <div class="col-lg-6">
                                                 <textarea name="Autre_Antécédent_Père"  title="Autre Antécédent Père" cols="30" rows="10" placeholder="Antécédents du père si non définit" ></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <select name="Antécédent_Autre_Menbre" title="Antécédent Autre Menbre" class="form-control">
                                                    <option>Antécédent Autre Menbre</option>
                                                    <option>HTA</option>
                                                    <option>cancer du sein</option>
                                                    <option>ovaire</option>
                                                    <option>endomètre</option>
                                                    <option>cancer digestif</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6">
                                              <select name="patient_id" id="" class="form-control" title="Identification du patient">
                                                @if(count($patients) > 0)
                                                @foreach($patients as $patient)
                                                <option>{{$patient->id}}</option>
                                                @endforeach
                                                @endif
                                              </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                       <center>
                                          <input type="reset" value="Cancel" class="btn btn-custon-four btn-warning btn-lg" data-dismiss="modal">
                                          <input type="submit" value="Save" class="btn btn-custon-four btn-warning btn-lg">
                                        </center>        
                                    </div>  
                                 </form>
                            </div>
                        </div>
                    </div>
         </div>
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
                                        <h1>Antécédents <span class="table-project-n">familiaux</span> </h1>
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
                                        <input type="submit" value="" class="btn-ajouter" data-toggle="modal"  data-target="#WarningModalalert" title="Ajouter">
                                        <a href="patient"><input type="submit" value="" class="btn-retour"  title="Retour"></a>
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <th data-field="id">Id</th>
                                                    <th data-field="patient_id">Id Patient</th>
                                                    <th data-field="patient_name">Nom Patient</th>
                                                    <th data-field="name" data-editable="false">Antécédent Père</th>
                                                    <th data-field="email" data-editable="false">Antécédent Mère</th>
                                                    <th data-field="Hypocholestérolemiant" data-editable="false">Antécédent Autre Des Menbres</th>
                                                    <th data-field="Antidépresseurs" data-editable="false">Autre Antécédent Père</th>
                                                    <th data-field="Antibiotiques" data-editable="false">Autre Antécédent Mère</th>
                                                    <th data-field="modifier" data-editable="false">Modifier</th>
                                                    <th data-field="supprimer" data-editable="false">Supprimer</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              @if(count($a_familiaus) > 0)
                                              @foreach($a_familiaus as $a_familiaux)
                                              <tr>
                                                    <td>{{$a_familiaux->id}}</td>
                                                    <td>{{$a_familiaux->patient_id}}</td>
                                                    <td>{{$a_familiaux->patient_name}}</td>
                                                    <td>{{$a_familiaux->Antécédent_Père}}</td>
                                                    <td>{{$a_familiaux->Antécédent_Mère}}</td>
                                                    <td>{{$a_familiaux->Antécédent_Autre_Menbre}}</td>
                                                    <td>{{$a_familiaux->Autre_Antécédent_Père}}</td>
                                                    <td>{{$a_familiaux->Autre_Antécédent_Mère}}</td>
                                                    <td><a href="{{route('a_familiaus.edit',$a_familiaux)}}"><img src="img/logo/edit.png" alt=""></a></td>
                                                    <td><a href="{{route('a_familiaus.destroy',$a_familiaux)}}" data-method="DELETE" data-confirm="Etes vous sure?"><img src="img/logo/delete.png" alt=""></a></td>
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
    <!-- Footer Start-->
    
@endsection