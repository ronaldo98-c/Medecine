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
                                            <li><span class="bread-blod">Ant??c??dents</span>
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
                                                 <input type="number" name="M??narche" placeholder="M??narche" title="Age D'installation" class="form-control" value="{{old('M??narche')?:$a_gynecologique->M??narche}}">
                                              </div>
                                            </div>
                                            <br>
                                             <h5><center>Caract??risation Actuelle Du Cycle Menstruel</center></h5>
                                          <div class="row">
                                             <div class="col-lg-4">
                                                   <select name="Type_Cycle" class="form-control" title="Type De Cycle Menstruel">
                                                      <option>{{$a_gynecologique->Type_Cycle}}</option>
                                                      <option>R??gulier</option>
                                                      <option>Irr??gulier</option>
                                                  </select>
                                             </div>
                                             <div class="col-lg-4">
                                                <select name="Abondance_Cycle" class="form-control" title="Abondance Cycle">
                                                  <option>{{$a_gynecologique->Abondance_Cycle}}</option>
                                                  <option>Minimal</option>
                                                  <option>Mod??r??e</option>
                                                  <option>Normale</option>
                                                  <option>Importante</option>
                                                </select>
                                             </div>
                                             <div class="col-lg-4">
                                                <select name="Syndrome_Pr??menstruel" class="form-control" title="Syndrome Pr??menstruel">
                                                  <option>{{$a_gynecologique->Syndrome_Pr??menstruel}}</option>
                                                  <option>Oui</option>
                                                  <option>Non</option>
                                                </select>
                                             </div>
                                           </div>
                                           <div class="row">
                                              <div class="col-lg-4">
                                                 <input type="number" name="Dur??e_R??gle" placeholder="Dur??e R??gle" title="Dur??e R??gle" class="form-control" value="{{old('Dur??e_R??gle')?:$a_gynecologique->Dur??e_R??gle}}">
                                              </div>
                                              <div class="col-lg-4">
                                                 <input type="number" name="Dur??e_Cycle" placeholder="Dur??e Cycle" title="Dur??e Cycle" class="form-control" value="{{old('Dur??e_Cycle')?:$a_gynecologique->Dur??e_Cycle}}">
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
                                                 <input type="number" name="Partenaire_Cumul??" class="form-control" title="Partenaire Cumul??" value="{{old('Partenaire_Cumul??')?:$a_gynecologique->Partenaire_Cumul??}}">
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
                                                 <select name="Intromission_P??nienne" class="form-control" title=" Douleur Intromission P??nienne">
                                                    <option>{{$a_gynecologique->Intromission_P??nienne}}</option>
                                                    <option>Oui</option>
                                                    <option>Non</option>
                                                 </select>
                                                </div>
                                            </div>
                                            <br>
                                            <center><h5>Contraception</h5>
                                            <div class="row">
                                              <div class="col-lg-4">
                                                 <select name="M??thode_Contraceptive" class="form-control" title="M??thode Contraceptive">
                                                 <option>{{$a_gynecologique->M??thode_Contraceptive}}</option>
                                                    <option>DIU</option>
                                                    <option>inplant</option>
                                                    <option>pilule</option>
                                                    <option>pr??servatif</option>
                                                 </select>
                                                </div>
                                                <div class="col-lg-4">
                                                 <select name="Tol??rance" class="form-control" title="Tol??rance">
                                                    <option>{{$a_gynecologique->Tol??rance}}</option>
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
                                           <h5><center>Infections G??nitales</center></h5>
                                           <div class="row">
                                              <div class="col-lg-4">
                                                 <select name="Infection_G??nitale" class="form-control" title="Infection G??nitale">
                                                    <option>{{$a_gynecologique->Infection_G??nitale}}</option>
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
                                           <h5><center>Malformations ut??ro-g??nitales</center></h5>
                                            <div class="row">
                                               <div class="col-lg-4">
                                                   <select name="Nom_Malformation" title="Nom Malformation" class="form-control">
                                                       <option>{{$a_gynecologique->Nom_Malformation}}</option>
                                                       <option>hypoplasie ut??rine</option>
                                                       <option>ag??n??sie ut??rine</option>
                                                       <option>fistuleut??ro-vaginale</option>
                                                       <option>imperforation hym??nale</option>
                                                       <option> autre</option>
                                                   </select>
                                               </div>
                                               <div class="col-lg-4">
                                                   <input type="date" name="Date_Prise_En_Charge" title="Date Prise En Charge" class="form-control" value="{{old('Date_Prise_En_Charge')?:$a_gynecologique->Date_Prise_En_Charge}}">
                                               </div>
                                               <div class="col-lg-4">
                                                  <input name="Moyens_Utilis??s" title="Moyens Utilis??s" class="form-control" placeholder="Moyens Utilis??s" value="{{old('Moyens_Utilis??s')?:$a_gynecologique->Moyens_Utilis??s}}">
                                               </div>
                                            </div>
                                            <div class="row">
                                               <div class="col-lg-4">
                                                   <select name="Evolution" title="Evolution" class="form-control">
                                                      <option>{{$a_gynecologique->Moyens_Utilis??s}}</option>
                                                      <option>Favorable</option>
                                                      <option>D??favorable</option>
                                                   </select>
                                               </div>
                                            </div>
                                            <br>
                                            <h5><center>Pr??m??nopause</center></h5>
                                            <div class="row">
                                               <div class="col-lg-4">
                                                   <select name="Pr??m??nopause" title="Pr??m??nopause" class="form-control">
                                                       <option>{{$a_gynecologique->Pr??m??nopause}}</option>
                                                      <option>oui</option>
                                                      <option>non</option>
                                                   </select>
                                               </div>
                                            </div>
                                            <h5><center>M??nopause</center></h5>
                                            <div class="row">
                                               <div class="col-lg-4">
                                                 <br>
                                                   <input name="Age_M??nopause" type="number" title="Age_M??nopause" class="form-control" value="{{old('Age_M??nopause')?:$a_gynecologique->Age_M??nopause}}">
                                               </div>
                                               <div class="col-lg-4">
                                               <br>
                                                   <select name="Tol??rance_Traitement" title="Tol??rance" class="form-control">
                                                      <option>{{$a_gynecologique->Tol??rance_Traitement}}</option>
                                                      <option>oui</option>
                                                      <option>non</option>
                                                   </select>
                                               </div>
                                               <div class="col-lg-4">
                                                   <span class="color">Si Traitements substitutifs</span>
                                                   <input name="M??dicament"  cols="30" rows="10" class="form-control" title="M??dicament" placeholder="M??dicament" value="{{old('M??dicament')?:$a_gynecologique->M??dicament}}">
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

