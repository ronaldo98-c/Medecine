<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>eCare</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('img/favicon.ico')}}">
    <!-- Google Fonts
		============================================ -->
    <link href="" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href=" {{ URL::asset('css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css')}}">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href=" {{ URL::asset('css/adminpro-custon-icon.css')}}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/meanmenu.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/form/all-type-forms.css')}}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/jquery.mCustomScrollbar.min.css ')}}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/modals.css ')}}">
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
    <link rel="stylesheet" href="{{ URL::asset('css/style.css ')}}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/responsive.css')}}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{ URL::asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>
<body class="materialdesign">
<div class="wrapper-pro">
        <div class="left-sidebar-pro">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <a href="#"><img src=" {{ URL::asset('img/message/logo.jpg')}}" alt="" />
                    </a>
                    <h3>Welcome</h3>
                    <h6 class="em">{{Auth::user()->email}}</h6>            
                    <strong>AP+</strong>
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item"><a href="{{url('/patient')}}" aria-expanded="false" class="nav-link dropdown-toggle"><i class="glyphicon glyphicon-user"></i><span class="mini-dn">Patients</span></a>
                        </li>
                        <li class="nav-item"><a href="{{url('/consultation')}}" aria-expanded="false" class="nav-link dropdown-toggle"><i class="glyphicon glyphicon-pencil"></i><span class="mini-dn">Consultations</span></a>
                        </li>
                        <li class="nav-item"><a href="{{url('/acces_laboratoire')}}"  aria-expanded="false" class="nav-link dropdown-toggle"><i class="glyphicon glyphicon-sort"></i><span class="mini-dn">Laboratoires</span></a>
                        </li>
                        <li class="nav-item"><a href="{{url('/acces_medecin')}}"  aria-expanded="false" class="nav-link dropdown-toggle"><i class="glyphicon glyphicon-user"></i><span class="mini-dn">Médecins</span> </a>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-table"></i> <span class="mini-dn">Creations</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
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
@yield('content')
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
        <script src="{{ URL::asset('js/vendor/jquery-1.11.3.min.js')}} "></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{ URL::asset('js/bootstrap.min.js')}} "></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{ URL::asset('js/jquery.meanmenu.js')}} "></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{ URL::asset('js/jquery.mCustomScrollbar.concat.min.js')}} "></script>
    <!-- sticky JS
		============================================ -->
    <script src="{{ URL::asset('js/jquery.sticky.js')}} "></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{ URL::asset('js/jquery.scrollUp.min.js')}} "></script>
    <!-- counterup JS
		============================================ -->
    <script src="{{ URL::asset('js/counterup/jquery.counterup.min.js')}} "></script>
    <script src="{{ URL::asset('js/counterup/waypoints.min.js')}}"></script>
    <!-- peity JS
		============================================ -->
    <script src="{{ URL::asset('js/peity/jquery.peity.min.js')}} "></script>
    <script src="{{ URL::asset('js/peity/peity-active.js')}}"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="{{ URL::asset('js/sparkline/jquery.sparkline.min.js')}} "></script>
    <script src="{{ URL::asset('js/sparkline/sparkline-active.js')}} "></script>
    <!-- data table JS
		============================================ -->
    <script src="{{ URL::asset('js/data-table/bootstrap-table.js')}} "></script>
    <script src="{{ URL::asset('js/data-table/tableExport.js')}} "></script>
    <script src="{{ URL::asset('js/data-table/data-table-active.js')}}"></script>
    <script src="{{ URL::asset('js/data-table/bootstrap-table-editable.js')}} "></script>
    <script src="{{ URL::asset('js/data-table/bootstrap-editable.js')}} "></script>
    <script src="{{ URL::asset('js/data-table/bootstrap-table-resizable.js')}} "></script>
    <script src="{{ URL::asset('js/data-table/colResizable-1.5.source.js')}} "></script>
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

</body>
<script>
     $(document).ready(function(){
        
        $('#frm').submit(function(){

          $(this).attr("action","http://localhost/Medecine/App/Helpers/helpers.php");

        });

     });
    </script>

</html>
