<!DOCTYPE html>
<html lang="en" ng-app="cohApp.Main">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta name="description" content="Coherencia, el congreso que te mereces">
    <meta name="author" content="Coherencia">
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
	<link href="<?php echo base_url('resources/css/app.css'); ?>" rel="stylesheet">
</head>
<body ng-controller="MainController">
	<!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
	<div id="header">
		<div class="container">
			<h1>
				<a ng-href="#/">Coherencia</a>
			</h1>
			<div id="info">
				<a href="javascript:;" id="info-trigger">
					<i class="icon-cog"></i>
				</a>
				<div id="info-menu">
					<div class="info-details">
						<h4>¿Quieres participar activamente?
							<a ng-href="#/login">Inicia Sesi&oacute;n</a></h4>
						<p>No tienes cuenta?
							<a ng-href="#/login/new">Reg&iacute;strate</a>
						</p>
					</div> <!-- /.info-details -->				
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
						<a ng-href="#/">
							<i class="icon-home"></i>
							<span>Principal</span>
						</a>
					</li>
					<li>
						<a ng-href="#/candidatos/nuevo">
							<i class="icon-th"></i>
							Mi Candidato
						</a>
					</li>
					<li>
						<a ng-href="#/comite-evaluador">
							<i class="icon-copy"></i>
							El Comit&eacute; Evaluador
						</a>
					</li>
					<li>
						<a ng-href="#/congreso">
							<i class="icon-copy"></i>
							Mi Congreso
						</a>
					</li>
					<li>
						<a ng-href="#/evaluaciones">
							<i class="icon-copy"></i>
							Las Evaluaciones
						</a>
					</li>
					<li>
						<a ng-href="#/admin/home">
							<i class="icon-copy"></i>
							Soy Administrador
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
		<div ng-view=""></div>
	</div> <!-- /container -->

	<div id="footer">
		<div class="container">
			Coherencia &copy; 2015, todos los derechos reservados.
		</div> <!-- /.container -->
	</div> <!-- /#footer -->

	<script type="text/javascript">
		window.appSettings = {
			basePath: '<?php echo base_url("/"); ?>',
			restPath: '<?php echo site_url("/api/"); ?>'	
		};
	</script>
	<!-- Library Scripts -->
	<script src="<?php echo base_url('resources/js/jquery-1.7.2.min.js'); ?>"></script>
	<script src="<?php echo base_url('resources/js/jquery-ui-1.8.21.custom.min.js'); ?>"></script>
	<script src="<?php echo base_url('resources/js/jquery.ui.touch-punch.min.js'); ?>"></script>
	<script src="<?php echo base_url('resources/js/bootstrap.js'); ?>"></script>
	<script src="<?php echo base_url('resources/js/angular/angular.js'); ?>"></script>
	<script src="<?php echo base_url('resources/js/angular/angular-animate.js'); ?>"></script>
	<script src="<?php echo base_url('resources/js/angular/angular-aria.js'); ?>"></script>
	<script src="<?php echo base_url('resources/js/angular/angular-cookies.js'); ?>"></script>
	<script src="<?php echo base_url('resources/js/angular/angular-loader.js'); ?>"></script>
	<script src="<?php echo base_url('resources/js/angular/angular-messages.js'); ?>"></script>
	<script src="<?php echo base_url('resources/js/angular/angular-resource.js'); ?>"></script>
	<script src="<?php echo base_url('resources/js/angular/angular-route.js'); ?>"></script>
	<script src="<?php echo base_url('resources/js/angular/angular-sanitize.js'); ?>"></script>
	<script src="<?php echo base_url('resources/js/angular/angular-touch.js'); ?>"></script>
	<!-- JQuery Widgets -->
	<script src="<?php echo base_url('resources/js/plugins/smartwizard/jquery.smartWizard-2.0.modified.js'); ?>"></script>
	<!-- App Scripts -->
	<script src="<?php echo base_url('resources/app/app.js'); ?>"></script>
	<script src="<?php echo base_url('resources/app/common/main.js'); ?>"></script>
	<script src="<?php echo base_url('resources/app/common/directives/smart-wizard.js'); ?>"></script>
	<script src="<?php echo base_url('resources/app/common/services/config-values.js'); ?>"></script>
	<script src="<?php echo base_url('resources/app/home/controllers/info.js'); ?>"></script>
	<script src="<?php echo base_url('resources/app/home/controllers/main.js'); ?>"></script>
	<script src="<?php echo base_url('resources/app/judges/main.js'); ?>"></script>
	<script src="<?php echo base_url('resources/app/judges/controllers/judges-list.js'); ?>"></script>
	<script src="<?php echo base_url('resources/app/judges/services/judges.js'); ?>"></script>
	<script src="<?php echo base_url('resources/app/login/main.js'); ?>"></script>
	<script src="<?php echo base_url('resources/app/login/controllers/login.js'); ?>"></script>
	<script src="<?php echo base_url('resources/app/login/controllers/login-new.js'); ?>"></script>
	<script src="<?php echo base_url('resources/app/login/services/user-accounts.js'); ?>"></script>
</body>
</html>
