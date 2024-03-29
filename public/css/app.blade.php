
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <link href="/css/jquery.dataTables.css" rel="stylesheet">
  <link href="/css/dataTables.bootstrap.css" rel="stylesheet">

  <link rel="apple-touch-icon" href="{{asset('app-assets/images/ico/apple-icon-120.png')}}">
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('app-assets/images/ico/favicon.ico')}}">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/vendors.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/charts/morris.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/extensions/unslider.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/weather-icons/climacons.min.css')}}">
  <!-- END VENDOR CSS-->
  <!-- BEGIN STACK CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/app.css')}}">
  <!-- END STACK CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
  <!-- link(rel='stylesheet', type='text/css', href=app_assets_path+'/css'+rtl+'/pages/users.css')-->
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('css/assets/css/style.css')}}">
  <!-- END Custom CSS-->

  <!-- Scripts -->
  <script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
</script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>
<body class="vertical-layout vertical-menu 2-columns fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">



  @include('layouts.fixed_top')
  @include('layouts.sidebar')
  @yield('content')
  
    <!-- </div> -->

    <!-- Scripts -->

  @if(Auth::guest())

  @else
    <footer class="footer footer-static footer-light navbar-border">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
          <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2019 <a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent"
            target="_blank">IVAN Christiono </a>, All rights reserved. </span>
          <span class="float-md-right d-block d-md-inline-block d-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span>
        </p>
  
      </footer>
@endif

      <script src="/js/app.js"></script> <!--DARI LARAVEL -->
      <script src="/js/jquery.dataTables.min.js"></script>
      <script src="/js/dataTables.bootstrap.min.js"></script>

      <!-- BEGIN VENDOR JS-->
      <script src="{{asset('app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
      <!-- BEGIN VENDOR JS-->
      <!-- BEGIN PAGE VENDOR JS-->
      <script src="{{asset('app-assets/vendors/js/extensions/jquery.knob.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('app-assets/js/scripts/extensions/knob.js')}}" type="text/javascript"></script>
      <script src="{{asset('app-assets/vendors/js/charts/raphael-min.js')}}" type="text/javascript"></script>
      <script src="{{asset('app-assets/vendors/js/charts/morris.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js')}}"
      type="text/javascript"></script>
      <script src="{{asset('app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js')}}"
      type="text/javascript"></script>
      <script src="{{asset('app-assets/data/jvector/visitor-data.js')}}" type="text/javascript"></script>
      <script src="{{asset('app-assets/vendors/js/charts/chart.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('app-assets/vendors/js/charts/jquery.sparkline.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('app-assets/vendors/js/extensions/unslider-min.js')}}" type="text/javascript"></script>
      <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/colors/palette-climacon.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('app-assets/fonts/simple-line-icons/style.min.css')}}">
      <!-- END PAGE VENDOR JS-->
      <!-- BEGIN STACK JS-->
      <script src="{{asset('app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
      <script src="{{asset('app-assets/js/core/app.js')}}" type="text/javascript"></script>
      <script src="{{asset('app-assets/js/scripts/customizer.js')}}" type="text/javascript"></script>
      <!-- END STACK JS-->
      <!-- BEGIN PAGE LEVEL JS-->
      <script src="{{asset('app-assets/js/scripts/pages/dashboard-analytics.js')}}" type="text/javascript"></script>
      <!-- END PAGE LEVEL JS-->

    
    </body>
</html>