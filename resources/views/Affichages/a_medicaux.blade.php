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
                                        <h1>Antécédents<span class="table-project-n">médicaux</span> </h1>
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
                                        <a href="Creation_A_Medicaux"><input type="submit" value="" class="btn-ajouter" title="Ajouter"></a>
                                        <a href="patient"><input type="submit" value="" class="btn-retour"  title="Retour"></a>
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <th data-field="id">Id</th>
                                                    <th data-field="patient_id" data-editable="false">Id Patient</th>
                                                    <th data-field="patient_name" data-editable="false">Nom Patient</th>
                                                    <th data-field="Nom_Patologie_Chronique" data-editable="false">Patologie Chronique</th>
                                                    <th data-field="Tabac" data-editable="false">Date Decouverte</th>
                                                    <th data-field="Nombre_Cigarette" data-editable="false">Autre</th>
                                                    <th data-field="Quantité_Paquet" data-editable="false">Circonstance Decouverte</th>
                                                    <th data-field="Alcool" data-editable="false">Reponse Traitement Initial</th>
                                                    <th data-field="Pourcentage_Alcool" >Reponse Traitement Actuel</th>
                                                    <th data-field="Volume_Quotidien">Complication</th>
                                                    <th data-field="Quantité_Alcool">Autre Detail</th>
                                                    <th data-field="Patologie_Infectieuse" data-editable="false">Patologie Infectieuse</th>
                                                    <th data-field="Date_Decouverte" data-editable="false">Date Decouverte</th>
                                                    <th data-field="Autre_Patologie" >Autre Patologie</th>
                                                    <th data-field="Circonstance_Decouverte_Patologie_Infectieuse">Circonstance Decouverte</th>
                                                    <th data-field="Reponse_Traitement_Initial">Reponse Traitement Initial</th>
                                                    <th data-field="Reponse_Traitement_Actuel">Reponse Traitement Actuel</th>
                                                    <th data-field="Complication">Complication</th>
                                                    <th data-field="Autre_Detail" data-editable="false">Autre Detail</th>
                                                    <th data-field="supprimer" data-editable="false">Modifier</th>
                                                    <th data-field="Modifier" data-editable="false">Supprimer</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @if(count($a_medicaus) > 0)
                                              @foreach($a_medicaus as $a_medicaux)
                                              <tr>
                                                    <td>{{$a_medicaux->id}}</td>
                                                    <td>{{$a_medicaux->patient_id}}</td>
                                                    <td>{{$a_medicaux->patient_name}}</td>
                                                    <td>{{$a_medicaux->Nom_Patologie_Chronique}}</td>
                                                    <td>{{$a_medicaux->Date_Decouverte_Patologie_Chronique}}</td>
                                                    <td>{{$a_medicaux->Autre_Patologie_Chronique}}</td>
                                                    <td>{{$a_medicaux->Circonstance_Decouverte_Patologie_Chronique}}</td>
                                                    <td>{{$a_medicaux->Reponse_Traitement_Initial_Patologie_Chronique}}</td>
                                                    <td>{{$a_medicaux->Reponse_Traitement_Actuel_Patologie_Chronique}}</td>
                                                    <td>{{$a_medicaux->Complication_Patologie_Chronique}}</td>
                                                    <td>{{$a_medicaux->Autre_Detail_Patologie_Chronique}}</td>
                                                    <td>{{$a_medicaux->Nom_Patologie_Infectieuse}}</td>
                                                    <td>{{$a_medicaux->Date_Decouverte_Patologie_Infectieuse}}</td>
                                                    <td>{{$a_medicaux->Autre_Patologie_Infectieuse}}</td>
                                                    <td>{{$a_medicaux->Circonstance_Decouverte_Patologie_Infectieuse}}</td>
                                                    <td>{{$a_medicaux->Reponse_Traitement_Initial_Patologie_Infectieuse}}</td>
                                                    <td>{{$a_medicaux->Reponse_Traitement_Actuel_Patologie_Infectieuse}}</td>
                                                    <td>{{$a_medicaux->Complication_Patologie_Infectieuse}}</td>
                                                    <td>{{$a_medicaux->Autre_Detail_Patologie_Infectieuse}}</td>
                                                    <td ><a href="{{route('a_medicaus.edit',$a_medicaux)}}"><img src="img/logo/edit.png" alt=""></a></td>
                                                    <td><a href="{{route('a_medicaus.destroy',$a_medicaux)}}" data-method="DELETE" data-confirm="Etes vous sure?"><img src="img/logo/delete.png" alt=""></a></td>
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
                                                    <td></td>
                                                    <td></td>
                                                    <td ></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td ></td>
                                                    <td></td>
                                                    <td ></td>
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