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
                                        <h1>Mode de <span class="table-project-n">vie</span> </h1>
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
                                        <a href="Creation_Mode_Vie"><input type="submit" value="" class="btn-ajouter" title="Ajouter"></a>
                                        <a href="patient"><input type="submit" value="" class="btn-retour"  title="Retour"></a>
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <th data-field="id">Id</th>
                                                    <th data-field="patient_id">Id Patient</th>
                                                    <th data-field="patient_name">Nom Patient</th>
                                                    <th data-field="Café" data-editable="false">Café</th>
                                                    <th data-field="Tabac" data-editable="false">Tabac</th>
                                                    <th data-field="Nombre_Cigarette" data-editable="false">Nombre Cigarette</th>
                                                    <th data-field="Nombre_Année" data-editable="false">Nombre Année</th>
                                                    <th data-field="Quantité_Paquet" data-editable="false">Quantité Paquet</th>
                                                    <th data-field="Alcool" data-editable="false">Alcool</th>
                                                    <th data-field="Pourcentage_Alcool" >Pourcentage Alcool</th>
                                                    <th data-field="Volume_Quotidien">Volume Quotidien</th>
                                                    <th data-field="Quantité_Alcool">Quantité Alcool</th>
                                                    <th data-field="modifier" data-editable="false">Modifier</th>
                                                    <th data-field="supprimer" data-editable="false">Supprimer</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              @if(count($mode_vies) > 0)
                                              @foreach($mode_vies as $mode_vie)
                                              <tr>
                                                    <td>{{$mode_vie->id}}</td>
                                                    <td>{{$mode_vie->patient_id}}</td>
                                                    <td>{{$mode_vie->patient_name}}</td>
                                                    <td>{{$mode_vie->Café}}</td>
                                                    <td>{{$mode_vie->Tabac}}</td>
                                                    <td>{{$mode_vie->Nombre_Cigarette}}</td>
                                                    <td>{{$mode_vie->Nombre_Année}}</td>
                                                    <td>{{$mode_vie->Quantité_Paquet}}</td>
                                                    <td>{{$mode_vie->Alcool}}</td>
                                                    <td>{{$mode_vie->Pourcentage_Alcool}}</td>
                                                    <td>{{$mode_vie->Volume_Quotidien}}</td>
                                                    <td>{{$mode_vie->Quantité_Alcool}}</td>
                                                    <td><a href="{{route('mode_vies.edit',$mode_vie)}}"><img src="img/logo/edit.png" alt=""></a></td>
                                                    <td><a href="{{route('mode_vies.destroy',$mode_vie)}}" data-method="DELETE" data-confirm="Etes vous sure?"><img src="img/logo/delete.png" alt=""></a></td>
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