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
                                            <li><a href="#">Home</a> <span class="bread-slash"></span>
                                            </li>
                                            <li><span class="bread-blod">Indication</span>
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
                                        <h1>Liste des indications</h1>
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
                                        <a href="Creation_Indication"><input type="submit" value="" class="btn-ajouter" title="Ajouter"></a>
                                        <a href="compte_rendu"><input type="submit" value="" class="btn-retour"  title="Retour"></a>
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <th data-field="id">Id</th>
                                                    <th data-field="Dystocie" data-editable="false">Dystocie</th>
                                                    <th data-field="Ut??rus_cicatriciel" data-editable="false">Ut??rus cicatriciel</th>
                                                    <th data-field="Ut??rus_myomateux" data-editable="false">Ut??rus myomateux</th>
                                                    <th data-field="GEU/GEUR" data-editable="false">GEU/GEUR</th>
                                                    <th data-field="Multiparit??" data-editable="false">Multiparit?? </th>
                                                    <th data-field="Cancer_Endom??tre" data-editable="false">Cancer Endom??tre </th>
                                                    <th data-field="Cancer_col_ut??rus" data-editable="false">Cancer col ut??rus</th>
                                                    <th data-field="L??sions_pr??canc??reuses">L??sions pr??canc??reuses</th>
                                                    <th data-field="Kyste_Ovarien">Kyste Ovarien</th>
                                                    <th data-field="Abc??s_Tuboovarien" data-editable="false">Abc??s Tuboovarien</th>
                                                    <th data-field="B??ance_cervicale" data-editable="false">B??ance cervicale</th>
                                                    <th data-field="Cancer_sein" data-editable="false">Cancer sein</th>
                                                    <th data-field="Hysteroscopie" data-editable="false">Hysteroscopie</th>
                                                    <th data-field="Nom_Medecin" data-editable="false">Nom Medecin </th>
                                                    <th data-field="Nom_Patient" data-editable="false">Nom Patient </th>
                                                    <th data-field="Nom_Service" data-editable="false">Nom Service</th>
                                                    <th data-field="modifier" data-editable="false">Modifier</th>
                                                    <th data-field="supprimer" data-editable="false">Supprimer</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @if(count($indications) > 0)
                                            @foreach($indications as $indication)
                                            <tr>
                                                    <td>{{$indication->id}}</td>
                                                    <td>{{$indication->Dystocie}}</td>
                                                    <td>{{$indication->Ut??rus_cicatriciel}}</td>
                                                    <td>{{$indication->Ut??rus_myomateux}}</td>
                                                    <td>{{$indication->GEU}}</td>
                                                    <td>{{$indication->Multiparit??}}</td>
                                                    <td >{{$indication->Cancer_Endom??tre}}</td>
                                                    <td>{{$indication->Cancer_col_ut??rus}}</td>
                                                    <td>{{$indication->L??sions_pr??canc??reuses}}</td>
                                                    <td>{{$indication->Kyste_Ovarien}}</td>
                                                    <td>{{$indication->Abc??s_Tuboovarien}}</td>
                                                    <td>{{$indication->B??ance_cervicale}}</td>
                                                    <td >{{$indication->Cancer_sein}}</td>
                                                    <td>{{$indication->Hysteroscopie}}</td>
                                                    <td>{{$indication->Nom_Medecin}}</td>
                                                    <td>{{$indication->Nom_Patient}}</td>
                                                    <td >{{$indication->Nom_Service}}</td>
                                                    <td ><a href="{{route('indications.edit',$indication)}}"><img src="{{ URL::asset('img/logo/edit.png')}}" alt=""></a></td>
                                                    <td><a href="{{route('indications.destroy',$indication)}}" data-method="DELETE" data-confirm="Etes vous sure?"><img src="img/logo/delete.png" alt=""></a></td>
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