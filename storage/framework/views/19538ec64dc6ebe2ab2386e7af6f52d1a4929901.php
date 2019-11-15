
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="PIXINVENT">
  <title><?php echo e(config('app.name', 'Laravel')); ?></title>

  <link rel="apple-touch-icon" href="<?php echo e(asset('app-assets/images/ico/apple-icon-120.png')); ?>">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('app-assets/images/ico/favicon.ico')); ?>">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('app-assets/css/vendors.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('app-assets/vendors/css/charts/morris.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('app-assets/vendors/css/extensions/unslider.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('app-assets/vendors/css/weather-icons/climacons.min.css')); ?>">
  <!-- END VENDOR CSS-->
  <!-- BEGIN STACK CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('app-assets/css/app.css')); ?>">
  <!-- END STACK CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('app-assets/css/core/menu/menu-types/vertical-menu.css')); ?>">
  <!-- link(rel='stylesheet', type='text/css', href=app_assets_path+'/css'+rtl+'/pages/users.css')-->
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/assets/css/style.css')); ?>">
  <!-- END Custom CSS-->

  <!-- Scripts -->
  <script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
</script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>
<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">

<?php if(Auth::guest()): ?>
    <?php echo $__env->make('auth.login', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php else: ?>
    <?php echo $__env->make('layouts.fixed-top', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    

        <?php echo $__env->yieldContent('content'); ?>
    <!-- </div> -->

    <!-- Scripts -->
    <footer class="footer footer-static footer-light navbar-border">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
          <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2019 <a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent"
            target="_blank">IVAN Christiono </a>, All rights reserved. </span>
          <span class="float-md-right d-block d-md-inline-block d-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span>
        </p>
      </footer>

<?php endif; ?>
      <script src="/js/app.js"></script> <!--DARI LARAVEL -->
      <!-- BEGIN VENDOR JS-->
      <script src="<?php echo e(asset('app-assets/vendors/js/vendors.min.js')); ?>" type="text/javascript"></script>
      <!-- BEGIN VENDOR JS-->
      <!-- BEGIN PAGE VENDOR JS-->
      <script src="<?php echo e(asset('app-assets/vendors/js/extensions/jquery.knob.min.js')); ?>" type="text/javascript"></script>
      <script src="<?php echo e(asset('app-assets/js/scripts/extensions/knob.js')); ?>" type="text/javascript"></script>
      <script src="<?php echo e(asset('app-assets/vendors/js/charts/raphael-min.js')); ?>" type="text/javascript"></script>
      <script src="<?php echo e(asset('app-assets/vendors/js/charts/morris.min.js')); ?>" type="text/javascript"></script>
      <script src="<?php echo e(asset('app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js')); ?>"
      type="text/javascript"></script>
      <script src="<?php echo e(asset('app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js')); ?>"
      type="text/javascript"></script>
      <script src="<?php echo e(asset('app-assets/data/jvector/visitor-data.js')); ?>" type="text/javascript"></script>
      <script src="<?php echo e(asset('app-assets/vendors/js/charts/chart.min.js')); ?>" type="text/javascript"></script>
      <script src="<?php echo e(asset('app-assets/vendors/js/charts/jquery.sparkline.min.js')); ?>" type="text/javascript"></script>
      <script src="<?php echo e(asset('app-assets/vendors/js/extensions/unslider-min.js')); ?>" type="text/javascript"></script>
      <link rel="stylesheet" type="text/css" href="<?php echo e(asset('app-assets/css/core/colors/palette-climacon.css')); ?>">
      <link rel="stylesheet" type="text/css" href="<?php echo e(asset('app-assets/fonts/simple-line-icons/style.min.css')); ?>">
      <!-- END PAGE VENDOR JS-->
      <!-- BEGIN STACK JS-->
      <script src="<?php echo e(asset('app-assets/js/core/app-menu.js')); ?>" type="text/javascript"></script>
      <script src="<?php echo e(asset('app-assets/js/core/app.js')); ?>" type="text/javascript"></script>
      <script src="<?php echo e(asset('app-assets/js/scripts/customizer.js')); ?>" type="text/javascript"></script>
      <!-- END STACK JS-->
      <!-- BEGIN PAGE LEVEL JS-->
      <script src="{{asset('app-assets/js/scripts/pages/dashboard-analytics.js" type="text/javascript"></script>
      <!-- END PAGE LEVEL JS-->
    </body>
    </html>
</body>
</html>
