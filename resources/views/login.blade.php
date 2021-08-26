<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login</title>
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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/adminpro-custon-icon.css">
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- owl.carousel CSS
    ============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
    ============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
    ============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/modals.css">
    <link rel="stylesheet" href="css/tabs.css">
    <!-- main CSS
    ============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- morrisjs CSS
    ============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
    ============================================ -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
    ============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
    ============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- forms CSS
    ============================================ -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
    <!-- style CSS
    ============================================ -->
    <!-- <link rel="stylesheet" href="css/stylese.css"> -->
    <link rel="stylesheet" href="css/page.css">
    <!-- responsive CSS
    ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
    ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>    
    <style>
     .invalid-feedback{
        color:red;
    }
    #overlayer
		{
			width: 100%;
			height: 100%;
			position: absolute;
			z-index: 1;
			background: rgb(27, 66, 112);
		}
		.loader
		{
			display: inline-block;
			width: 70px;
			height: 70px;
			position: absolute;
            z-index: 3;
			border: 4px solid #Fff;
			top: 150px;
			animation: loader 2s infinite ease;
		}
		.loader-inner
		{
			vertical-align: top;
			display: inline-block;
			width: 100%;
			background-color: #fff;
			animation: loader-inner 2s infinite ease-in;
		}
		@keyframes loader
		{
			0%
			{
				transform: rotate(0deg);
			}
			25%
			{
				transform: rotate(180deg);
			}
			50%
			{
				transform: rotate(180deg);
			}
			75%
			{
				transform: rotate(360deg);
			}
			100%
			{
				transform: rotate(360deg);
			}
		}
		@keyframes loader-inner
		{
			0%
			{
				height: 0%;
			}
			25%
			{
				height: 0%;
			}
			50%
			{
				height: 100%;
			}
			75%
			{
				height: 100%;
				
			}
			100%
			{
				height: 0%;
			}
		}
    </style>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
          <div id="overlayer"></div>
          <center>
          <span class="loader">
	       <span class="loader-inner">
		
	        </span>
          </span>
          </center>
          <div class="color-line"></div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-md-4 col-sm-4 col-xs-12">
                <div class="hpanel">
                    <div class="panel-body">  
                        <form action="{{ route('login-user') }}" id="loginForm" method="POST">
                              {{csrf_field()}}
                            <div class="form-group">
                                <label class="control-label" for="Email">Email</label>
                                <input type="email" placeholder="example@gmail.com" title="Please enter you username" value="" name="email" id="username" class="form-control">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        {{ $errors->first('email') }}
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Mot de pass</label>
                                <input type="password" title="Please enter your password" placeholder="******"  value="" name="password" id="password" class="form-control">
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                       {{ $errors->first('password') }}
                                    </span>
                                @endif
                            </div>
                            <button class="btn btn-warning btn-block loginbtn">Login</button>                        
                        </form>
                        @if ($errors->has('all'))
                                    <span class="invalid-feedback" role="alert">
                                       {{ $errors->first('all') }}
                                    </span>
                         @endif
                        @if ($message = Session::get('success'))
                                <div class="alert alert-info">
                                    <p>{{ $message }}</p>
                                </div>
                        @endif
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
    <!-- jquery
    ============================================ -->
    <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
    ============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
    ============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
    ============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
    ============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
    ============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
    ============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
    ============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
    ============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
     <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
    ============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- tab JS
    ============================================ -->
    <script src="js/tab.js"></script>
    <!-- icheck JS
    ============================================ -->
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
    <!-- plugins JS
    ============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
    ============================================ -->
    <script src="js/main.js"></script>
    <script src="js/modal-active.js"></script>
    <script>
       $(document).ready(function(){
         $('.loader').delay(2000).fadeOut("slow");
         $('#overlayer').delay(2000).fadeOut("slow");
        })
    </script>
</body>

</html>