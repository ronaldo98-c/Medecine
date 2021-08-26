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
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Header top area start-->
        <!--Modals -->
        <!-- End Modals-->
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
                                            <li><a href="#">Accueil</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Patient</span>
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
                                        <h1>Liste <span class="table-project-n">des patients et leurs</span> antécédents</h1>
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
                                        <a href="patient"><input type="submit" value="" class="btn-retour"  title="Retour"></a>
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>

                                                    <th data-field="name" data-editable="false">Id Patient</th>
                                                    <th data-field="patient_name" data-editable="false">Nom Patient</th>
                                                    <th data-field="email" data-editable="false">A_Allergique id</th>
                                                    <th data-field="phone" data-editable="false">A_Chirugicaux id</th>
                                                    <th data-field="company" data-editable="false">A_Familiaux id</th>
                                                    <th data-field="complete">A_Gynecologique id</th>
                                                    <th data-field="task" data-editable="false">A_Imunologique id</th>
                                                    <th data-field="date" data-editable="false">A_Medicamenteux id</th>
                                                    <th data-field="nationalite" data-editable="false">A_Medicaux id</th>
                                                    <th data-field="lieu" data-editable="false">A_Obstetricaux id</th>
                                                    <th data-field="price" data-editable="false">A_Vaccinaux id</th>
                                                    <th data-field="">Mode_Vie id</th>
                                                    <th data-field="suite" data-editable="false">Suite</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(count($patients) > 0)
                                                 @foreach($patients as $patient)
                                                <tr>
                                                    <td>{{$patient->id}}</td>
                                                    <td>{{$patient->Nom}}</td> 
                                                    <td>{{getId($patient->id)}}</td> 
                                                    <td>{{getIdChirugie($patient->id)}}</td>
                                                    <td>{{getIdFamiliaux($patient->id)}}</td>
                                                    <td>{{getIdGynecologique($patient->id)}}</td>
                                                    <td>{{getIdImmunologique($patient->id)}}</td>
                                                    <td>{{getIdMedicamenteux($patient->id)}}</td>
                                                    <td>{{getIdMedicaux($patient->id)}}</td>
                                                    <td>{{getIdObstetricaux($patient->id)}}</td>
                                                    <td>{{getIdVaccinaux($patient->id)}}</td>
                                                    <td>{{getIdModeVie($patient->id)}}</td>
                                                    <td><a href="{{route('consultations.show',$patient)}}"><img src="img/logo/suite.png" alt=""></a></td>
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

