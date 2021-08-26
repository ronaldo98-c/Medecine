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
                                <form action="{{route('a_imunologiques.store')}}" method="POST">
                                    {{csrf_field()}}
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                  <select name="Groupe_Sanguin" title="Groupe Sanguin" class="form-control">
                                                    <option>Groupe Sanguin</option>
                                                    <option>A</option>
                                                    <option>B</option>
                                                    <option>AB</option>
                                                    <option>O</option>
                                                    <option>Inconnu</option>
                                                  </select>
                                            </div>
                                            <div class="col-lg-6">
                                                 <select name="Rhésus" title="Rhésus" class="form-control">
                                                    <option>Rhésus</option>
                                                    <option>+</option>
                                                    <option>-</option>
                                                    <option>Inconnu</option>
                                                 </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                  <select name="Electrophorèse" title="Electrophorèse" class="form-control" >
                                                    <option>Electrophorèse</option>
                                                    <option>AA</option>
                                                    <option>AS</option>
                                                    <option>SS</option>
                                                    <option>Inconnu</option>
                                                  </select>
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="number" name="Electrophorèse_A"title="Electrophorèse A" class="form-control" placeholder="% Electrophorèse A" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                            <input type="number" name="Electrophorèse_B"title="Electrophorèse B" class="form-control" placeholder="% Electrophorèse B" required>
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
                                        <h1>Antécédents imunologiques</h1>
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
                                                    <th data-field="name" data-editable="false">Groupe Sanguin</th>
                                                    <th data-field="email" data-editable="false">Rhésus</th>
                                                    <th data-field="Hypocholestérolemiant" data-editable="false">Electrophorèse</th>
                                                    <th data-field="Antidépresseurs" data-editable="false">% Electrophorèse A</th>
                                                    <th data-field="Antibiotiques" data-editable="false">% Electrophorèse B</th>
                                                    <th data-field="modifier" data-editable="false">Modifier</th>
                                                    <th data-field="supprimer" data-editable="false">Supprimer</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              @if(count($a_imunologiques) > 0)
                                              @foreach($a_imunologiques as $a_imunologique)
                                              <tr>
                                                    <td>{{$a_imunologique->id}}</td>
                                                    <td>{{$a_imunologique->patient_id}}</td>
                                                    <td>{{$a_imunologique->patient_name}}</td>
                                                    <td>{{$a_imunologique->Groupe_Sanguin}}</td>
                                                    <td>{{$a_imunologique->Rhésus}}</td>
                                                    <td>{{$a_imunologique->Electrophorèse}}</td>
                                                    <td>{{$a_imunologique->Electrophorèse_A}}</td>
                                                    <td>{{$a_imunologique->Electrophorèse_B}}</td>
                                                    <td ><a href="{{route('a_imunologiques.edit',$a_imunologique)}}"><img src="img/logo/edit.png" alt=""></a></td>
                                                    <td><a href="{{route('a_imunologiques.destroy',$a_imunologique)}}" data-method="DELETE" data-confirm="Etes vous sure?"><img src="img/logo/delete.png" alt=""></a></td>
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