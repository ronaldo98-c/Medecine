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
                                        <h1>Examens physiques gyn??cologie </h1>
                                        <div class="sparkline13-outline-icon">
                                            <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>                                        </div>
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
                                         <a href="{{url('/Creation_Examen_Physique_Gynecologie')}}"><input type="submit" value="" class="btn-ajouter" title="Ajouter"></a> 
                                        <a href="{{url('/acces_laboratoire')}}"><input type="submit" value="" class="btn-retour"  title="Retour"></a>
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <th data-field="id">Id</th>
                                                    <th data-field="Poids" data-editable="false">Poids</th>
                                                    <th data-field="Taille" data-editable="false">Taille</th>
                                                    <th data-field="Imc" data-editable="false">Imc</th>
                                                    <th data-field="Pression_Art??rielle" data-editable="false">Pression Art??rielle</th>
                                                    <th data-field="Frequence_Cardiaque" >Frequence Cardiaque</th>
                                                    <th data-field="Frequence_Respiratoire">Frequence_Respiratoire</th>
                                                    <th data-field="Temp??rature" data-editable="false">Temp??rature</th>
                                                    <th data-field="Saturation_En_Oxygi??ne" data-editable="false">Saturation_En_Oxygi??ne</th>
                                                    <th data-field="Glyc??mie" data-editable="false">Glyc??mie</th>
                                                    <th data-field="Score_Coma_Glasgow" data-editable="false">Score_Coma_Glasgow</th>
                                                    <th data-field="Etat_G??n??ral" data-editable="false">Etat_G??n??ral</th>
                                                    <th data-field="Modifier" data-editable="false">Voir Plus</th>
                                                    <th data-field="supprimer" data-editable="false">supprimer</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @if(count($examen_physique_gynecologies) > 0)
                                              @foreach($examen_physique_gynecologies as $examen_physique_gynecologie)
                                              <tr>
                                                    <td>{{$examen_physique_gynecologie->id}}</td>
                                                    <td>{{$examen_physique_gynecologie->Poids}}</td>
                                                    <td>{{$examen_physique_gynecologie->Taille}}</td>
                                                    <td>{{$examen_physique_gynecologie->Imc}}</td>
                                                    <td>{{$examen_physique_gynecologie->Pression_Art??rielle}}</td>
                                                    <td>{{$examen_physique_gynecologie->Frequence_Cardiaque}}</td>
                                                    <td>{{$examen_physique_gynecologie->Frequence_Respiratoire}}</td>
                                                    <td>{{$examen_physique_gynecologie->Temp??rature}}</td>
                                                    <td>{{$examen_physique_gynecologie->Saturation_En_Oxygi??ne}}</td>
                                                    <td>{{$examen_physique_gynecologie->Glyc??mie}}</td>
                                                    <td>{{$examen_physique_gynecologie->Score_Coma_Glasgow}}</td>
                                                    <td>{{$examen_physique_gynecologie->Etat_G??n??ral}}</td>
                                                    <td ><a href="{{route('examen_physique_gynecologies.edit',$examen_physique_gynecologie)}}"><img src="{{ URL::asset('img/logo/edit.png')}}" alt=""></a></td>
                                                    <td><a href="{{route('examen_physique_gynecologies.destroy',$examen_physique_gynecologie)}}" data-method="DELETE" data-confirm="Etes vous sure?"><img src="img/logo/delete.png" alt=""></a></td>
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