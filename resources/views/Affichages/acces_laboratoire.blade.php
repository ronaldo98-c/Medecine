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
                                    <li class="nav-item"><a href="" class="nav-link"  data-toggle="modal"  data-target="#WarningModal">Choix-Examen</a>
                                    </li>
                                    <li class="nav-item"><a href="" class="nav-link" data-toggle="modal"  data-target="#WarningModalalert">Examens</a>
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
        <!--Modals one -->
        <div id="WarningModalalert" class="modal modal-adminpro-general Customwidth-popup-WarningModal fade" role="dialog">
                   <div class="modal-dialog">
                      <div class="modal-content">
                            <div class="modal-close-area modal-close-df">
                                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                            </div>
                            <div class="modal-body">
                                <form  method="POST" id="frm">
                                    {{csrf_field()}}
                                    <div class="form-group-inner">
                                         <div class="row">
                                            <div class="col-lg-12">
                                                <select id="service_name" class="form-control" name="service_name">
                                                    <option>Entrer le Service</option>
                                                    @if(count($services) > 0)
                                                    @foreach($services as $service)
                                                    <option>{{$service->Nom}}</option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <select  class="form-control" name="examen_name" id="examen_name">
                                                   <option>Entrer Le Type Examen</option>
                                                   <option>Physique</option>
                                                   <option>Complémentaire</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                       <center>
                                          <input type="reset" value="Cancel" class="btn btn-custon-four btn-warning btn-lg " data-dismiss="modal">
                                          <input type="submit" value="Save" class="btn btn-custon-four btn-warning btn-lg " id="avance">
                                        </center>        
                                    </div>  
                                 </form>
                            </div>
                        </div>
                    </div>
         </div>
        <!-- End Modals one-->
           <!--Modals two -->
           @if(isset($consultation))
           <div id="WarningModal" class="modal modal-adminpro-general Customwidth-popup-WarningModal fade" role="dialog">
                   <div class="modal-dialog">
                      <div class="modal-content">
                            <div class="modal-close-area modal-close-df">
                                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('choix_examens.store')}}"  method="POST">
                                    {{csrf_field()}}
                                    <div class="form-group-inner">
                                         <div class="row">
                                            <div class="col-lg-6">
                                                    <input type="text" id="patient_id" class="form-control" value="{{$consultation->patient_id}}" name="patient_id" title="Id Du Patient">
                                            </div>
                                            <div class="col-lg-6">
                                                <select id="service_nom" class="form-control" name="service_nom" title="Nom Du Service">
                                                    <option>Nom Du Service</option>
                                                    @if(count($services) > 0)
                                                    @foreach($services  as  $services)
                                                    <option>{{$services->Nom}}</option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                    <input type="text" id="medecin_numero_ordre" class="form-control" value="{{$consultation->medecin_numero_ordre}}" name="medecin_numero_ordre" title="Numéro Ordre Medecin Consultant"></div>
                                            <div class="col-lg-6">
                                                <select id="examen_complementaire_id" class="form-control" name="examen_complementaire_id" title="Id De EXamen Complementaire ">
                                                    <option>Id De EXamen Complementaire</option>
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
                                                <select id="examen_physique_gynecologie_id" class="form-control" name="examen_physique_gynecologie_id" title="Entrer la valeur si Definit">
                                                    <option>Id De Examen Physique Gynécologie</option>
                                                    @if(count($examen_physique_gynecologies) > 0)
                                                    @foreach($examen_physique_gynecologies  as  $examen_physique_gynecologie)
                                                    <option>{{$examen_physique_gynecologie->id}}</option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                       <center>
                                          <input type="reset" value="Cancel" class="btn btn-custon-four btn-warning btn-lg " data-dismiss="modal">
                                          <input type="submit" value="Save" class="btn btn-custon-four btn-warning btn-lg " id="avance">
                                        </center>        
                                    </div>  
                                 </form>
                            </div>
                        </div>
                    </div>
         </div>
         @endif
        <!-- End Modals two-->
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
                                            <li><span class="bread-blod">Examens</span>
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
                                        <h1>Liste des examens </h1>
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
                                                    <th data-field="name" data-editable="false">Id Patient</th>
                                                    <th data-field="prenom" data-editable="false">Nom Service</th>
                                                    <th data-field="matricule" data-editable="false">Numero Ordre Medecin</th>
                                                    <th data-field="id_service" data-editable="false">Id Examen Complémentaire</th>
                                                    <th data-field="id_service" data-editable="false">Id Examen Physique Gynécologie</th>
                                                    <th data-field="modifier" data-editable="false">Modifier</th>
                                                    <th data-field="supprimer" data-editable="false">Supprimer</th>
                                                    <th data-field="suite" data-editable="false">Suite</th>
                                                </tr>
                                            </thead>
                                            <tbody>  
                                             @if(count($choix_examens) > 0)
                                             @foreach($choix_examens as $choix_examen)                                 
                                               <tr>
                                                    <td>{{$choix_examen->id}}</td>
                                                    <td>{{$choix_examen->patient_id}}</td>
                                                    <td>{{$choix_examen->service_nom}}</td>
                                                    <td>{{$choix_examen->medecin_numero_ordre}}</td>
                                                    <td>{{$choix_examen->examen_complementaire_id}}</td>
                                                    <td>{{$choix_examen->examen_physique_gynecologie_id}}</td>
                                                    <td ><a href="{{route('choix_examens.edit',$choix_examen)}}"><img src="{{ URL::asset('img/logo/edit.png')}}" alt=""></a></td>
                                                    <td><a href="{{route('choix_examens.destroy',$choix_examen)}}" data-method="DELETE" data-confirm="Etes vous sure?"><img src="img/logo/delete.png" alt=""></a></td>
                                                    <td><a href="{{route('diagnostics.show',$choix_examen)}}"><img src="{{ URL::asset('img/logo/suite.png')}}" alt=""></a></td>
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