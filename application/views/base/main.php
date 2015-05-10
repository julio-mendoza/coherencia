<!DOCTYPE html>
<html lang="en" ng-app="cohHome">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="apple-mobile-web-app-capable" content="yes">

	<title><?php echo $title; ?></title>
	
	<!-- Library Styles -->
	<link href="<?php echo base_url('resources/css/bootstrap.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('resources/css/bootstrap-responsive.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('resources/css/bootstrap-overrides.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('resources/css/ui-lightness/jquery-ui-1.8.21.custom.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('resources/css/slate.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('resources/css/slate-responsive.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('resources/css/components/error.css'); ?>" rel="stylesheet">

	<!-- View Styles -->
	<?php echo $view_styles; ?>

	<!-- Library Scripts -->
	<script src="<?php echo base_url('resources/js/jquery-1.7.2.min.js'); ?>"></script>
	<script src="<?php echo base_url('resources/js/jquery-ui-1.8.21.custom.min.js'); ?>"></script>
	<script src="<?php echo base_url('resources/js/jquery.ui.touch-punch.min.js'); ?>"></script>
	<script src="<?php echo base_url('resources/js/bootstrap.js'); ?>"></script>
	<script src="<?php echo base_url('resources/js/angular/angular.js'); ?>"></script>

	<!-- Header Scripts -->
	<?php echo $view_scripts; ?>
</head>
<body>
	<div id="header">
		<div class="container">
			<h1>
				<a href="default.htm">Coherencia</a>
			</h1>
			<div id="info">
				<a href="javascript:;" id="info-trigger">
					<i class="icon-cog"></i>
				</a>
				<div id="info-menu">
					<div class="info-details">
						<h4>Welcome back, John D.</h4>
						<p>Logged in as Admin.<br>
							You have <a href="javascript:;">5 messages.</a>
						</p>
					</div> <!-- /.info-details -->				
					<div class="info-avatar">
						<img src="<?php echo $base_url; ?>/resources/img/avatar.jpg" alt="avatar">
					</div> <!-- /.info-avatar -->
				</div> <!-- /#info-menu -->
			</div> <!-- /#info -->
		</div> <!-- /.container -->
	</div> <!-- /#header -->

	<div id="nav">
		<div class="container">
			<a href="javascript:;" class="btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        		<i class="icon-reorder"></i>
      		</a>
      		<div class="nav-collapse">
      			<ul class="nav">
					<li class="nav-icon">
						<a href="default.htm">
							<i class="icon-home"></i>
							<span>Principal</span>
						</a>
					</li>
					<li>
						<a href="javascript:;">
							<i class="icon-th"></i>
							Prop&oacute;n tu Candidato
						</a>
					</li>
					<li>
						<a href="javascript:;">
							<i class="icon-copy"></i>
							Comit&eacute; Evaluador
						</a>
					</li>
					<li>
						<a href="javascript:;">
							<i class="icon-copy"></i>
							El Congreso que te mereces
						</a>
					</li>
					<li>
						<a href="javascript:;">
							<i class="icon-copy"></i>
							Evaluaci&oacute;n
						</a>
					</li>
					<li>
						<a href="javascript:;">
							<i class="icon-copy"></i>
							Administraci&oacute;n
						</a>
					</li>
				</ul>
				<ul class="nav pull-right">
					<li class="">
						<form class="navbar-search pull-left">
							<input type="text" class="search-query" placeholder="Search">
							<button class="search-btn"><i class="icon-search"></i></button>
						</form>	    				
					</li>
				</ul>
			</div> <!-- /.nav-collapse -->
		</div> <!-- /.container -->
	</div> <!-- /#nav -->

	<div class="container">
		<?php echo $body; ?>		
	</div> <!-- /container -->

	<div id="footer">
		<div class="container">
			&copy; 2015 Coherencia, todos los derechos reservados.
		</div> <!-- /.container -->
	</div> <!-- /#footer -->
</body>
</html>
