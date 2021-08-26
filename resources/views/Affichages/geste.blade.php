<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>eCare</title>
    <meta name="description" content="">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('img/icon.ico')}}">
    <!-- Google Fonts
		============================================ -->
    <link href="" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-editable.css')}}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css')}}">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/adminpro-custon-icon.css')}}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/meanmenu.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/form/all-type-forms.css')}}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/jquery.mCustomScrollbar.min.css')}}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/modals.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/tabs.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/data-table/bootstrap-table.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/data-table/bootstrap-editable.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/normalize.css')}}">
    <!-- charts CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/c3.min.css')}}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css')}}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/responsive.css')}}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{ URL::asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>
<body class="materialdesign">
       <div id="overlayer"></div>
        <center>
        <span class="loader">
	         <span class="loader-inner">
		
	        </span>
         </span>
         </center>  
      <div class="wrapper-pro">
        <div class="left-sidebar-pro">
        
            <nav id="sidebar">
                <div class="sidebar-header">
                    <a href="#"><img src="{{ URL::asset('img/message/logo.jpg')}}" alt="" />
                    </a>
                    <h3>Welcome</h3>
                    @if(Session::has('email'))
                    <h6 class="em"><?php echo Session::get('email');?></h6>    
                    @endif               
                    <strong>AP+</strong>
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item"><a href="{{url('/patient')}}" aria-expanded="false" class="nav-link dropdown-toggle"><i class="glyphicon glyphicon-user"></i><span class="mini-dn" title="Enregistrement des patients">Patients</span></a>
                        </li>
                        <li class="nav-item"><a href="{{url('/consultation')}}" aria-expanded="false" class="nav-link dropdown-toggle"><i class="glyphicon glyphicon-pencil"></i><span class="mini-dn" title="Gestion des consultations">Consultations</span></a>
                        </li>
                        <li class="nav-item"><a href="{{url('/acces_laboratoire')}}"  aria-expanded="false" class="nav-link dropdown-toggle"><i class="glyphicon glyphicon-sort"></i><span class="mini-dn" title="Gestion des examens">Laboratoires</span></a>
                        </li>
                        <li class="nav-item"><a href="{{url('/acces_medecin')}}"  aria-expanded="false" class="nav-link dropdown-toggle"><i class="glyphicon glyphicon-user"></i><span class="mini-dn" title="Gestion des diagnostics et autres">Médecins</span> </a>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-table"></i> <span class="mini-dn" title="Gestion des paramètres">Creations</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="{{url('/services')}}" class="dropdown-item">Services</a>
                                <a href="{{url('/medecin')}}" class="dropdown-item">Médecins</a>
                                <a href="{{url('/laboratoires')}}" class="dropdown-item">Laboratoires</a>
                                <a href="{{url('/assurances')}}" class="dropdown-item">Assurances</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
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
                                            <li><span class="bread-blod">Gestes</span>
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
                                        <h1>Liste des gestes</h1>
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
                                        <a href="Creation_Geste"><input type="submit" value="" class="btn-ajouter" title="Ajouter"></a>
                                        <a href="compte_rendu"><input type="submit" value="" class="btn-retour"  title="Retour"></a>
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <th data-field="id">Id</th>
                                                    <th data-field="Patient" data-editable="false">Nom Patient</th>
                                                    <th data-field="Médecin" data-editable="false">Nom Médecin</th>
                                                    <th data-field="Service" data-editable="false">Nom Service</th>
                                                    <th data-field="Incision" data-editable="false">Incision</th>
                                                    <th data-field="Dissection" data-editable="false">Dissection </th>
                                                    <th data-field="modifier" data-editable="false">Modifier</th>
                                                    <th data-field="supprimer" data-editable="false">Supprimer</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @if(count($gestes) > 0)
                                            @foreach($gestes as $geste)
                                            <tr>
                                                    <td>{{$geste->id}}</td>
                                                    <td>{{$geste->Nom_Patient}}</td>
                                                    <td>{{$geste->Nom_Medecin}}</td>
                                                    <td>{{$geste->Nom_Service}}</td>
                                                    <td>{{$geste->Incision}}</td>
                                                    <td>{{$geste->Dissection}}</td>
                                                    <td><a href="{{route('gestes.edit',$geste)}}"><img src="{{ URL::asset('img/logo/edit.png')}}" alt=""></a></td>
                                                    <td><a href="{{route('gestes.destroy',$geste)}}" data-method="DELETE" data-confirm="Etes vous sure?"><img src="img/logo/delete.png" alt=""></a></td>
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
            </div>
        </div> 
        <div class="footer-copyright-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                        <p>@ eCare2019</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer End-->
    <!-- Chat Box Start-->
    <!-- Chat Box End-->

    <!-- jquery
		============================================ -->
        <script src="{{ URL::asset('js/vendor/jquery-1.11.3.min.js')}}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{ URL::asset('js/jquery.meanmenu.js')}}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{ URL::asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <!-- sticky JS
		============================================ -->
    <script src="{{ URL::asset('js/jquery.sticky.js')}}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{ URL::asset('js/jquery.scrollUp.min.js')}}"></script>
    <!-- counterup JS
		============================================ -->
    <script src="{{ URL::asset('js/counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{ URL::asset('js/counterup/waypoints.min.js')}}"></script>
    <!-- peity JS
		============================================ -->
    <script src="{{ URL::asset('js/peity/jquery.peity.min.js')}}"></script>
    <script src="{{ URL::asset('js/peity/peity-active.js')}}"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="{{ URL::asset('js/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{ URL::asset('js/sparkline/sparkline-active.js')}}"></script>
    <!-- data table JS
		============================================ -->
    <script src="{{ URL::asset('js/data-table/bootstrap-table.js')}}"></script>
    <script src="{{ URL::asset('js/data-table/tableExport.js')}}"></script>
    <script src="{{ URL::asset('js/data-table/data-table-active.js')}}"></script>
    <script src="{{ URL::asset('js/data-table/bootstrap-table-editable.js')}}"></script>
    <script src="{{ URL::asset('js/data-table/bootstrap-editable.js')}}"></script>
    <script src="{{ URL::asset('js/data-table/bootstrap-table-resizable.js')}}"></script>
    <script src="{{ URL::asset('js/data-table/colResizable-1.5.source.js')}}"></script>
    <script src="{{ URL::asset('js/data-table/bootstrap-table-export.js')}}"></script>
    <!-- modal JS
		============================================ -->
        <script src="{{ URL::asset('js/modal-active.js')}}"></script>
    <!-- icheck JS
		============================================ -->
    <script src="{{ URL::asset('js/icheck/icheck.min.js')}}"></script>
    <script src="{{ URL::asset('js/icheck/icheck-active.js')}}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{ URL::asset('js/main.js')}}"></script>
    <script src="{{ URL::asset('js/larails.js')}}"></script>
    @include('flashy::message')
</body>
<script>
     $(document).ready(function(){
        
        $('#frm').submit(function(){

          $(this).attr("action","http://localhost/Medecine/App/Helpers/helpers.php");

        });

     });
</script>
 <script>
    $(document).ready(function(){
     
      $('#poids').keyup(function(){
   
       $('#taille').keyup(function(){
          var result = $('#poids').val()/$('#taille').val();
          $('#imc').attr('value',result);

          if(result < 16.50){
            $('.err').html('<strong>Dénutrition</strong>');
          }
          if(result > 16.50 && result<18.49){
            $('.err').html('<strong>Maigruer</strong>');
           }
          if(result > 18.50 && result<24.99){
            $('.err').html('<strong>Poids Normal</strong>');
          }
          if(result > 25 && result<29.99){
            $('.err').html('<strong>Surpoids</strong>');
          }
          if(result > 30 && result<34.99){
            $('.err').html('<strong>Obésité Modérée</strong>');
          }
          if(result > 35 && result<39.99){
            $('.err').html('<strong>Obésité sévère</strong>');
          }
          if(result > 40){
            $('.err').html('<strong>Obésité</strong>');
          }
       });   

      });
    });
    $(document).ready(function(){
     
       $('#Temperature').keyup(function(){
       
        var temperature = $('#Temperature').val();
             
             if(temperature < 36.4)
             {
                $('#element').addClass('rouge');
             }
             if(temperature > 36.4 && temperature < 37.4)
             {
               $('#element').addClass('verte');
             }
             if(temperature > 37.5 && temperature < 38.4)
             {
               $('#element').addClass('orange');
             }
             if(temperature > 38.5)
             {
               $('#element').addClass('rouge');
             }
     
      });
   
    });
    $(document).ready(function(){
       var $conteneur = $('.admin-widget-flot-ch'),
           $contenu =  $('.admin-widget-flot-ch .phrase'),
           taille = $contenu.length - 1,
           i = 0,
           $courant = $contenu.eq(i);
           $contenu.css('display','none');
           $courant.css('display','block');


    function slideText()
    {
      setTimeout(() => {
        
        if(i < taille)
        {
          i++;
        }
        else{
          i = 0;
        }

        $courant = $contenu.eq(i);
        $contenu.css('display','none');
        $courant.css('display','block');
        
        slideText();

      }, 2000);
    }
    slideText();
    });
    // $(document).ready(function(){
     
    //  $('#recherche').keyup(function(){
    //    var query = $(this).val();
    //    if(query != '')
    //    {
    //      $.ajax({
    //       url:"http://localhost/Medecine/App/Helpers/helpers.php",
    //       method:"POST",
    //       data:{query:query},
    //       success:function(data)
    //       {
    //          $('#ServiceList').fadeIn();
    //          $('#ServiceList').html(data);
    //       }


    //      });
    //    }   
    //    else
    //    {
    //     $('#ServiceList').fadeOut();
    //     $('#ServiceList').html("");
    //    }
    //  });
    //   $(document).on('click','li',function(){
    //      $('#recherche').val($('#ServiceList').text());
    //      $('#ServiceList').fadeOut();

    //      var query = $(this).text();
    //      if(query != '')
    //      {
    //        $.ajax({
    //         url:"http://localhost/Medecine/App/Helpers/helpers.php",
    //         method:"GET",
    //         data:{query:query},
    //         success:function(data)
    //         {
    //           $('table').fadeIn();
    //           $('table').html(data); 
    //         }

    //        });

    //      }
    //      else
    //      {
    //          $('table').fadeOut();
    //           $('table').html(""); 
    //      }

    //   });


    // });
    $(document).ready(function(){
         $('.loader').delay(100).fadeOut("slow");
         $('#overlayer').delay(100).fadeOut("slow");
        })
    </script>
</html>