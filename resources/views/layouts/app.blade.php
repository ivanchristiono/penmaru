
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/vendors.css')}}">
  <link href="{{asset('css/jquery.dataTables.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('app-assets/vendors/css/tables/datatable/datatables.min.css')}}" rel="stylesheet" type="text/css">
  <!-- <link href="{{asset('css/dataTables.bootstrap.css')}}" rel="stylesheet" type="text/css"> -->

  <link rel="apple-touch-icon" href="{{asset('app-assets/images/ico/apple-icon-120.png')}}">
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('app-assets/images/ico/favicon.ico')}}">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/forms/selects/select2.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/pickers/daterange/daterangepicker.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/pickers/datetime/bootstrap-datetimepicker.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/pickers/pickadate/pickadate.css')}}">
  <!-- END VENDOR CSS-->
  <!-- BEGIN STACK CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/app.css')}}">
  <!-- END STACK CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/pickers/daterange/daterange.css')}}">
  <!-- link(rel='stylesheet', type='text/css', href=app_assets_path+'/css'+rtl+'/pages/users.css')-->
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
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
      
      <script src="{{asset('js/app.js')}}"></script> <!--DARI LARAVEL -->
      <!-- BEGIN VENDOR JS-->
      <script src="{{asset('app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
      <!-- BEGIN VENDOR JS-->  
      <script src="{{asset('js/bootstrap.min.js') }}"></script>
      <script src="{{asset('app-assets/vendors/js/tables/datatable/datatables.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('app-assets/js/scripts/tables/datatables/datatable-basic.js')}}" type="text/javascript"></script>
      <!-- <script src="{{asset('js/jquery.dataTables.min.js')}}"></script> -->
      <!-- <script src="{{asset('js/dataTables.bootstrap.min.js')}}"></script> -->
      

      
      <!-- BEGIN PAGE VENDOR JS-->
      <script src="{{asset('app-assets/vendors/js/forms/select/select2.full.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('app-assets/vendors/js/pickers/dateTime/bootstrap-datetimepicker.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('app-assets/vendors/js/pickers/pickadate/picker.js')}}" type="text/javascript"></script>
      <script src="{{asset('app-assets/vendors/js/pickers/pickadate/picker.date.js')}}" type="text/javascript"></script>
      <script src="{{asset('app-assets/vendors/js/pickers/pickadate/picker.time.js')}}" type="text/javascript"></script>
      <script src="{{asset('app-assets/vendors/js/pickers/pickadate/legacy.js')}}" type="text/javascript"></script>
      <script src="{{asset('app-assets/vendors/js/pickers/daterange/daterangepicker.js')}}" type="text/javascript"></script>
      <!-- END PAGE VENDOR JS-->

      <!-- BEGIN STACK JS-->
      <script src="{{asset('app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
      <script src="{{asset('app-assets/js/core/app.js')}}" type="text/javascript"></script>
      <script src="{{asset('app-assets/js/scripts/customizer.js')}}" type="text/javascript"></script>
      <!-- END STACK JS-->

      <!-- BEGIN PAGE LEVEL JS-->
      <script src="{{asset('app-assets/js/scripts/forms/select/form-select2.js')}}" type="text/javascript"></script>
      <script src="{{asset('app-assets/js/scripts/pickers/dateTime/bootstrap-datetime.js')}}" type="text/javascript"></script>
      <script src="{{asset('app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js')}}" type="text/javascript"></script>
      <!-- END PAGE LEVEL JS-->
      @yield('scripts')
    </body>
</html>