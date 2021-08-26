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
                                    <li class="nav-item"><a href="" class="nav-link" data-toggle="modal"  data-target="#WarningModalalert">Diagnostic</a>
                                    </li>
                                    <li class="nav-item"><a href="{{url('/pronostic')}}" class="nav-link">Pronostic</a>
                                    </li>
                                    <li class="nav-item"><a href="{{url('/surveillance')}}" class="nav-link">Surveillance</a>
                                    </li>
                                    <li class="nav-item"><a href="{{url('/compte_rendu')}}" class="nav-link" title="compte rendu de operation chirugicale">Compte Rendu</a>
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
        @isset($choix_examen)
        <div id="WarningModalalert" class="modal modal-adminpro-general Customwidth-popup-WarningModal fade" role="dialog">
                   <div class="modal-dialog">
                      <div class="modal-content">
                            <div class="modal-close-area modal-close-df">
                                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('diagnostics.store')}}" method="POST">
                                    {{csrf_field()}}
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-6">
                                              <input type="text" name="choix_examen_id" value ="{{$choix_examen->id}}" title="Identification des Examens Effectués" class="form-control">
                                            </div>
                                            <div class="col-lg-6">
                                              <input type="text" name="medecin_numero_ordre" value ="{{$choix_examen->medecin_numero_ordre}}" title="Numéro Ordre du Médecin Consultant" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <textarea name="Diagnostic_Principale" id="" cols="30" rows="10" placeholder="Diagnostic Principale" title="Diagnostic Principale" class="form-control" required></textarea>
                                            </div>
                                            <div class="col-lg-6">
                                                <textarea name="Diagnostic_Différentiel" id="" cols="30" rows="10" placeholder="Diagnostics Différentiels" title="Diagnostics Différentiels" class="form-control" required></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <textarea name="Diagnostic_Travail" id="" cols="30" rows="10"  placeholder="Diagnostic De Travail" title="Diagnostic De Travail" class="form-control" required></textarea>
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
         @endif
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
                                            <li><span class="bread-blod">Medecin</span>
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
                                        <h1>Liste des diagnostics</h1>
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
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <th data-field="id">Id</th>
                                                    <th data-field="choix_examen_id" data-editable="false">Id Examens</th>
                                                    <th data-field="medecin_id" data-editable="false">Id Médecin</th>
                                                    <th data-field="Diagnostic_Principale" data-editable="false">Diagnostic Principale</th>
                                                    <th data-field="Diagnostic_Différentiel" data-editable="false">Diagnostics Différentiels</th>
                                                    <th data-field="Diagnostic_Travail" data-editable="false">Diagnostic De Travail</th>
                                                    <th data-field="modifier" data-editable="false">Modifier</th>
                                                    <th data-field="supprimer" data-editable="false">Supprimer</th>
                                                    <th data-field="suite" data-editable="false">Suite</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @if(count($diagnostics) > 0)
                                            @foreach($diagnostics as $diagnostic)
                                               <tr>
                                                    <td>{{$diagnostic->id}}</td>
                                                    <td>{{$diagnostic->choix_examen_id}}</td>
                                                    <td>{{$diagnostic->medecin_numero_ordre}}</td>
                                                    <td>{{$diagnostic->Diagnostic_Principale}}</td>
                                                    <td>{{$diagnostic->Diagnostic_Différentiel}}</td>
                                                    <td>{{$diagnostic->Diagnostic_Travail}}</td>
                                                    <td ><a href="{{route('diagnostics.edit',$diagnostic)}}"><img src="{{ URL::asset('img/logo/edit.png')}}" alt=""></a></td>
                                                    <td><a href="{{route('diagnostics.destroy',$diagnostic)}}" data-method="DELETE" data-confirm="Etes vous sure?"><img src="img/logo/delete.png" alt=""></a></td>
                                                    <td><a href="{{route('traitements.show',$diagnostic)}}"><img src="{{ URL::asset('img/logo/suite.png')}}" alt=""></a></td>
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
                                                    <td ></td>
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