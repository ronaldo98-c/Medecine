@extends('layouts/masters')
@section('content')
  <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Header top area start-->
            <!-- Header top area end-->
            <!-- Breadcome start-->
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
                             <div class="row">
                                <div class="col-lg-9">
                                     <div class="all-form-element-inner">
                                        <form action="{{route('a_gynecologiques.update',$a_gynecologique)}}" method="POST">
                                            {{csrf_field()}}
                                            {{method_field('PUT')}}
                                            <div class="form-group-inner">
                                            <div class="row">
                                             <div class="col-lg-6">
                                                 <input type="number" name="Puberte" placeholder="Puberte" title="Age D'installation" class="form-control" value="{{old('Puberte')?:$a_gynecologique->Puberte}}">
                                             </div>
                                             <div class="col-lg-6">
                                                 <input type="number" name="Ménarche" placeholder="Ménarche" title="Age D'installation" class="form-control" value="{{old('Ménarche')?:$a_gynecologique->Ménarche}}">
                                              </div>
                                            </div>
                                            <br>
                                             <h5><center>Caractérisation Actuelle Du Cycle Menstruel</center></h5>
                                          <div class="row">
                                             <div class="col-lg-4">
                                                   <select name="Type_Cycle" class="form-control" title="Type De Cycle Menstruel">
                                                      <option>{{$a_gynecologique->Type_Cycle}}</option>
                                                      <option>Régulier</option>
                                                      <option>Irrégulier</option>
                                                  </select>
                                             </div>
                                             <div class="col-lg-4">
                                                <select name="Abondance_Cycle" class="form-control" title="Abondance Cycle">
                                                  <option>{{$a_gynecologique->Abondance_Cycle}}</option>
                                                  <option>Minimal</option>
                                                  <option>Modérée</option>
                                                  <option>Normale</option>
                                                  <option>Importante</option>
                                                </select>
                                             </div>
                                             <div class="col-lg-4">
                                                <select name="Syndrome_Prémenstruel" class="form-control" title="Syndrome Prémenstruel">
                                                  <option>{{$a_gynecologique->Syndrome_Prémenstruel}}</option>
                                                  <option>Oui</option>
                                                  <option>Non</option>
                                                </select>
                                             </div>
                                           </div>
                                           <div class="row">
                                              <div class="col-lg-4">
                                                 <input type="number" name="Durée_Règle" placeholder="Durée Règle" title="Durée Règle" class="form-control" value="{{old('Durée_Règle')?:$a_gynecologique->Durée_Règle}}">
                                              </div>
                                              <div class="col-lg-4">
                                                 <input type="number" name="Durée_Cycle" placeholder="Durée Cycle" title="Durée Cycle" class="form-control" value="{{old('Durée_Cycle')?:$a_gynecologique->Durée_Cycle}}">
                                              </div>
                                           </div>
                                           <br>
                                           <center><h5>Vie Sexuel</h5>
                                             <h6>Remplir Si Vrai</h6></center>
                                           <div class="row">                       
                                              <div class="col-lg-4">
                                                 <select name="Partenaire_Actuel" class="form-control" title="Partenaire Actuel">
                                                 <option>{{$a_gynecologique->Partenaire_Actuel}}</option>
                                                    <option>unique</option>
                                                    <option>Multiples</option>
                                                 </select>
                                              </div>
                                              <div class="col-lg-4">
                                                 <input type="number" name="Partenaire_Cumulé" class="form-control" title="Partenaire Cumulé" value="{{old('Partenaire_Cumulé')?:$a_gynecologique->Partenaire_Cumulé}}">
                                              </div>
                                              <div class="col-lg-4">
                                                 <input type="number" name="Premier_Rapport" class="form-control" title="Age Premier Rapport" value="{{old('Premier_Rapport')?:$a_gynecologique->Premier_Rapport}}">
                                              </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                 <select name="Abus_Sexuel" class="form-control" title="Abus Sexuel">
                                                     <option>{{$a_gynecologique->Abus_Sexuel}}</option>
                                                    <option>Oui</option>
                                                    <option>Non</option>
                                                 </select>
                                                </div>
                                                <div class="col-lg-4">
                                                 <select name="Dyspareunie" class="form-control" title="Dyspareunie">
                                                    <option>{{$a_gynecologique->Dyspareunie}}</option>
                                                    <option>Oui</option>
                                                    <option>Non</option>
                                                 </select>
                                                </div>
                                                <div class="col-lg-4">
                                                 <select name="Intromission_Pénienne" class="form-control" title=" Douleur Intromission Pénienne">
                                                    <option>{{$a_gynecologique->Intromission_Pénienne}}</option>
                                                    <option>Oui</option>
                                                    <option>Non</option>
                                                 </select>
                                                </div>
                                            </div>
                                            <br>
                                            <center><h5>Contraception</h5>
                                            <div class="row">
                                              <div class="col-lg-4">
                                                 <select name="Méthode_Contraceptive" class="form-control" title="Méthode Contraceptive">
                                                 <option>{{$a_gynecologique->Méthode_Contraceptive}}</option>
                                                    <option>DIU</option>
                                                    <option>inplant</option>
                                                    <option>pilule</option>
                                                    <option>préservatif</option>
                                                 </select>
                                                </div>
                                                <div class="col-lg-4">
                                                 <select name="Tolérance" class="form-control" title="Tolérance">
                                                    <option>{{$a_gynecologique->Tolérance}}</option>
                                                    <option>Oui</option>
                                                    <option>Non</option>
                                                 </select>
                                                </div>
                                                <div class="col-lg-4">
                                                 <select name="Complication" class="form-control" title=" Complication">
                                                    <option>{{$a_gynecologique->Complication}}</option>
                                                    <option>Aucune</option>
                                                    <option>prise de poid</option>
                                                    <option>trouble cycle</option>
                                                    <option>autre</option>
                                                 </select>
                                                </div>
                                            </div>
                                           <br>
                                           <h5><center>Infections Génitales</center></h5>
                                           <div class="row">
                                              <div class="col-lg-4">
                                                 <select name="Infection_Génitale" class="form-control" title="Infection Génitale">
                                                    <option>{{$a_gynecologique->Infection_Génitale}}</option>
                                                    <option>Non</option>
                                                    <option>Actuel</option>
                                                    <option>Evolutives</option>
                                                 </select>
                                              </div>
                                              <div class="col-lg-4">
                                                 <select name="Germe_En_Cause" class="form-control" title="Germe En Cause">
                                                      <option>{{$a_gynecologique->Germe_En_Cause}}</option>
                                                     <option> Papilloma Virus</option>
                                                     <option>Herpes virus</option>
                                                     <option>Chlamydia Trachomatis</option>
                                                     <option>Candida Albicans</option>
                                                     <option>Trichomonas</option>
                                                     <option>Gonocoques</option>
                                                     <option>Gardenella</option>
                                                     <option>autres</option>
                                                 </select>
                                              </div>
                                              <div class="col-lg-4">
                                                 <select name="patient_id" class="form-control" title="Identifiant du patient">
                                                     <option>{{$a_gynecologique->patient_id}}</option>
                                                     @if(count($patients) > 0)
                                                     @foreach($patients as $patient)
                                                     <option>{{$patient->id}}</option>
                                                     @endforeach
                                                     @endif
                                                 </select>
                                              </div>
                                            </div>
                                            <br>
                                           <h5><center>Malformations utéro-génitales</center></h5>
                                            <div class="row">
                                               <div class="col-lg-4">
                                                   <select name="Nom_Malformation" title="Nom Malformation" class="form-control">
                                                       <option>{{$a_gynecologique->Nom_Malformation}}</option>
                                                       <option>hypoplasie utérine</option>
                                                       <option>agénésie utérine</option>
                                                       <option>fistuleutéro-vaginale</option>
                                                       <option>imperforation hyménale</option>
                                                       <option> autre</option>
                                                   </select>
                                               </div>
                                               <div class="col-lg-4">
                                                   <input type="date" name="Date_Prise_En_Charge" title="Date Prise En Charge" class="form-control" value="{{old('Date_Prise_En_Charge')?:$a_gynecologique->Date_Prise_En_Charge}}">
                                               </div>
                                               <div class="col-lg-4">
                                                  <input name="Moyens_Utilisés" title="Moyens Utilisés" class="form-control" placeholder="Moyens Utilisés" value="{{old('Moyens_Utilisés')?:$a_gynecologique->Moyens_Utilisés}}">
                                               </div>
                                            </div>
                                            <div class="row">
                                               <div class="col-lg-4">
                                                   <select name="Evolution" title="Evolution" class="form-control">
                                                      <option>{{$a_gynecologique->Moyens_Utilisés}}</option>
                                                      <option>Favorable</option>
                                                      <option>Défavorable</option>
                                                   </select>
                                               </div>
                                            </div>
                                            <br>
                                            <h5><center>Préménopause</center></h5>
                                            <div class="row">
                                               <div class="col-lg-4">
                                                   <select name="Préménopause" title="Préménopause" class="form-control">
                                                       <option>{{$a_gynecologique->Préménopause}}</option>
                                                      <option>oui</option>
                                                      <option>non</option>
                                                   </select>
                                               </div>
                                            </div>
                                            <h5><center>Ménopause</center></h5>
                                            <div class="row">
                                               <div class="col-lg-4">
                                                 <br>
                                                   <input name="Age_Ménopause" type="number" title="Age_Ménopause" class="form-control" value="{{old('Age_Ménopause')?:$a_gynecologique->Age_Ménopause}}">
                                               </div>
                                               <div class="col-lg-4">
                                               <br>
                                                   <select name="Tolérance_Traitement" title="Tolérance" class="form-control">
                                                      <option>{{$a_gynecologique->Tolérance_Traitement}}</option>
                                                      <option>oui</option>
                                                      <option>non</option>
                                                   </select>
                                               </div>
                                               <div class="col-lg-4">
                                                   <span class="color">Si Traitements substitutifs</span>
                                                   <input name="Médicament"  cols="30" rows="10" class="form-control" title="Médicament" placeholder="Médicament" value="{{old('Médicament')?:$a_gynecologique->Médicament}}">
                                               </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                   <select name="Complication_Traitement" title="Complication Traitement" class="form-control">
                                                      <option>{{$a_gynecologique->Grossesse_Actuel}}</option>
                                                      <option>aucune</option>
                                                      <option>fracture osseuse</option>
                                                      <option>trouble cycle</option>
                                                      <option>autres</option>
                                                   </select>
                                               </div>
                                               <div class="col-lg-4">
                                                   <input name="Grossesse_Actuel" title="Grossesse Actuel" class="form-control"  value="{{old('Grossesse_Actuel')?:$a_gynecologique->Grossesse_Actuel}}">
                                               </div>
                                            </div>
                                           </div>
                                             <div class="form-group-inner">
                                                <div class="login-btn-inner">
                                                   <div class="row">
                                                      <div class="col-lg-2"></div>
                                                         <div class="col-lg-7">
                                                           <div class="login-horizental cancel-wp pull-left">
                                                              <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Save</button>
                                                            </div>
                                                          </div>
                                                       </div>
                                                    </div>
                                                 </div>
                                                </div>
                                          </form>
                                           <a href="{{route('a_gynecologiques.index')}}"><button class="btn btn-white cancel" >Cancel</button></a>
                                          </div>
                                        </div>
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <!-- Static Table End -->
@endsection

