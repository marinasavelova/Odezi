<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="<?php echo e(asset('images/icon.png')); ?>">

	<title>Flat Dream</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:300,200,100' rel='stylesheet' type='text/css'>

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/js/bootstrap/dist/css/bootstrap.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/js/jquery.gritter/css/jquery.gritter.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/fonts/font-awesome-4/css/font-awesome.min.css')); ?>">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="../../assets/js/html5shiv.js"></script>
	  <script src="../../assets/js/respond.min.js"></script>
	<![endif]-->

	<!-- Custom styles for this template -->
  <!--<link href="<?php echo e(asset('/css/app.css')); ?>" rel="stylesheet">-->

  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/js/jquery.nanoscroller/nanoscroller.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/js/jquery.codemirror/lib/codemirror.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/js/jquery.codemirror/theme/ambiance.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/js/jquery.vectormaps/jquery-jvectormap-1.2.2.css')); ?>"  media="screen">
  
  <?php echo $__env->yieldContent('css'); ?>
  
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/style.css')); ?>">

</head>

<body class="texture">
<div id="cl-wrapper">

    <?php if(!Auth::guest()): ?>
        <?php echo $__env->make('menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>
    
    <div class="container-fluid" id="pcont">
        <?php if(!Auth::guest()): ?>
          <?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php endif; ?>
        
        <?php if(Auth::guest()): ?>
            <?php echo $__env->yieldContent('auth'); ?>
        <?php else: ?>
        <div class="cl-mcont">
            <?php echo $__env->yieldContent('breadcrumbs'); ?>
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <?php endif; ?>
    </div>
</div>
<!--<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Laravel</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="<?php echo e(url('/')); ?>">Home</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<?php if(Auth::guest()): ?>
						<li><a href="<?php echo e(url('/auth/login')); ?>">Login</a></li>
						<li><a href="<?php echo e(url('/auth/register')); ?>">Register</a></li>
					<?php else: ?>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo e(Auth::user()->name); ?> <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="<?php echo e(url('/auth/logout')); ?>">Logout</a></li>
							</ul>
						</li>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</nav>-->
  
  <?php echo HTML::script('js/jquery.js'); ?>

  <?php echo HTML::script('js/jquery.cookie/jquery.cookie.js'); ?>

  <?php echo HTML::script('js/jquery.pushmenu/js/jPushMenu.js'); ?>

  <?php echo HTML::script('js/jquery.nanoscroller/jquery.nanoscroller.js'); ?>

  <?php echo HTML::script('js/jquery.sparkline/jquery.sparkline.min.js'); ?>

  <?php echo HTML::script('js/jquery.ui/jquery-ui.js'); ?>

  <?php echo HTML::script('js/jquery.gritter/js/jquery.gritter.js'); ?>

  <?php echo HTML::script('js/behaviour/core.js'); ?>


  <script type="text/javascript">
    $(function(){
      $("#cl-wrapper").css({opacity:1,'margin-left':0});
    });
  </script>
    
  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <?php echo HTML::script('js/bootstrap/dist/js/bootstrap.min.js'); ?>

  <?php echo HTML::script('js/jquery.codemirror/lib/codemirror.js'); ?>

  <?php echo HTML::script('js/jquery.codemirror/mode/xml/xml.js'); ?>

  <?php echo HTML::script('js/jquery.codemirror/mode/css/css.js'); ?>

  <?php echo HTML::script('js/jquery.codemirror/mode/htmlmixed/htmlmixed.js'); ?>

  <?php echo HTML::script('js/jquery.codemirror/addon/edit/matchbrackets.js'); ?>

  <?php echo HTML::script('js/jquery.vectormaps/jquery-jvectormap-1.2.2.min.js'); ?>

  <?php echo HTML::script('js/jquery.vectormaps/maps/jquery-jvectormap-world-mill-en.js'); ?>

  <?php echo HTML::script('js/behaviour/dashboard.js'); ?>

  
  <?php echo HTML::script('js/jquery.flot/jquery.flot.js'); ?>

  <?php echo HTML::script('js/jquery.flot.pie.js'); ?>

  <?php echo HTML::script('js/jquery.flot/jquery.flot.resize.js'); ?>

  <?php echo HTML::script('js/jquery.flot/jquery.flot.labels.js'); ?>


  <?php echo $__env->yieldContent('scripts'); ?>

</body>
</html>
