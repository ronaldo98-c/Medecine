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
                                        <h1>Antécédents gynécologiques</h1>
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
                                        <a href="Creation_A_Gynecologique"><input type="submit" value="" class="btn-ajouter" title="Ajouter"></a>
                                        <a href="patient"><input type="submit" value="" class="btn-retour"  title="Retour"></a>
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <th data-field="id">Id</th>
                                                    <th data-field="patient_id">Id Patient</th>
                                                    <th data-field="patient_name">Nom Patient</th>
                                                    <th data-field="Puberte" data-editable="false">Puberte</th>
                                                    <th data-field="Ménarche" data-editable="false">Ménarche</th>
                                                    <th data-field="Type_Cycle" data-editable="false">Type Cycle</th>
                                                    <th data-field="Abondance_Cycle" data-editable="false">Abondance Cycle</th>
                                                    <th data-field="Syndrome_Prémenstruel" data-editable="false">Syndrome Prémenstruel</th>
                                                    <th data-field="Durée_Règle" >Durée Règle</th>
                                                    <th data-field="Durée_Cycle">Durée Cycle</th>
                                                    <th data-field="Partenaire Actuel">Partenaire Actuel</th>
                                                    <th data-field="Partenaire Cumulé" data-editable="false">Partenaire Cumulé</th>
                                                    <th data-field="Premier_Rapport" data-editable="false">Premier Rapport</th>
                                                    <th data-field="Abus_Sexuel" >Abus Sexuel</th>
                                                    <th data-field="Dyspareunie">Dyspareunie</th>
                                                    <th data-field="Intromission_Pénienne">Intromission Pénienne</th>
                                                    <th data-field="Méthode_Contraceptive">Méthode Contraceptive</th>
                                                    <th data-field="Tolérance">Tolérance</th>
                                                    <th data-field="Complication" data-editable="false">Complication</th>
                                                    <th data-field="Infection_Génitale" data-editable="false">Infection Génitale</th>
                                                    <th data-field="Germe_En_Cause" data-editable="false">Germe  En Cause</th>
                                                    <th data-field="Nom_Malformation" >Nom Malformation</th>
                                                    <th data-field="Date_Prise_En_Charge">Date Prise En Charge</th>
                                                    <th data-field="Moyens_Utilisés">Moyens Utilisés</th>
                                                    <th data-field="Evolution">Evolution</th>
                                                    <th data-field="Préménopause">Préménopause</th>
                                                    <th data-field="Age_Ménopause">Age Ménopause</th>
                                                    <th data-field="Médicament">Médicament</th>
                                                    <th data-field="Tolérance_Traitement">Tolérance_Traitement</th>
                                                    <th data-field="Complication_Traitement">Complication Traitement</th>
                                                    <th data-field="Grossesse_Actuel" data-editable="false">Grossesse Actuel</th>
                                                    <th data-field="supprimer" data-editable="false">Modifier</th>
                                                    <th data-field="Modifier" data-editable="false">Supprimer</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @if(count($a_gynecologiques) > 0)
                                              @foreach($a_gynecologiques as $a_gynecologique)
                                              <tr>
                                                    <td>{{$a_gynecologique->id}}</td>
                                                    <td>{{$a_gynecologique->patient_id}}</td>
                                                    <td>{{$a_gynecologique->patient_name}}</td>
                                                    <td>{{$a_gynecologique->Puberte}}</td>
                                                    <td>{{$a_gynecologique->Ménarche}}</td>
                                                    <td>{{$a_gynecologique->Type_Cycle}}</td>
                                                    <td>{{$a_gynecologique->Abondance_Cycle}}</td>
                                                    <td>{{$a_gynecologique->Syndrome_Prémenstruel}}</td>
                                                    <td>{{$a_gynecologique->Durée_Règle}}</td>
                                                    <td>{{$a_gynecologique->Durée_Cycle}}</td>
                                                    <td>{{$a_gynecologique->Partenaire_Actuel}}</td>
                                                    <td>{{$a_gynecologique->Partenaire_Cumulé}}</td>
                                                    <td>{{$a_gynecologique->Premier_Rapport}}</td>
                                                    <td>{{$a_gynecologique->Abus_Sexuel}}</td>
                                                    <td>{{$a_gynecologique->Dyspareunie}}</td>
                                                    <td>{{$a_gynecologique->Intromission_Pénienne}}</td>
                                                    <td>{{$a_gynecologique->Méthode_Contraceptive}}</td>
                                                    <td>{{$a_gynecologique->Tolérance}}</td>
                                                    <td>{{$a_gynecologique->Complication}}</td>
                                                    <td>{{$a_gynecologique->Infection_Génitale}}</td>
                                                    <td>{{$a_gynecologique->Germe_En_Cause}}</td>
                                                    <td>{{$a_gynecologique->Nom_Malformation}}</td>
                                                    <td>{{$a_gynecologique->Date_Prise_En_Charge}}</td>
                                                    <td>{{$a_gynecologique->Moyens_Utilisés}}</td>
                                                    <td>{{$a_gynecologique->Evolution}}</td>
                                                    <td>{{$a_gynecologique->Préménopause}}</td>
                                                    <td>{{$a_gynecologique->Age_Ménopause}}</td>
                                                    <td>{{$a_gynecologique->Médicament}}</td>
                                                    <td>{{$a_gynecologique->Tolérance_Traitement}}</td>
                                                    <td>{{$a_gynecologique->Complication_Traitement}}</td>
                                                    <td>{{$a_gynecologique->Grossesse_Actuel}}</td>
                                                    <td ><a href="{{route('a_gynecologiques.edit',$a_gynecologique)}}"><img src="img/logo/edit.png" alt=""></a></td>
                                                    <td><a href="{{route('a_gynecologiques.destroy',$a_gynecologique)}}" data-method="DELETE" data-confirm="Etes vous sure?"><img src="img/logo/delete.png" alt=""></a></td>
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