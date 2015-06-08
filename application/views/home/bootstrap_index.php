<!doctype html>
<html class="no-js" lang="es" ng-app="cohApp.Main">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <meta name="description" content="Coherencia, el congreso que te mereces">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Coherencia">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!-- build:css(.) styles/vendor.css -->
    <!-- bower:css -->
    <link rel="stylesheet" href="<?php echo base_url('resources/css/bootstrap/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('resources/css/bootstrap/bootstrap-theme.css'); ?>">
    <!-- endbower -->
    <!-- endbuild -->
    <link rel="stylesheet" href="<?php echo base_url('resources/css/main.css'); ?>">
    <!-- build:css(.tmp) styles/main.css -->
    <!-- <link rel="stylesheet" href="styles/main.css"> -->
    <!-- endbuild -->
  </head>
  <body ng-controller="MainController">
    <!--[if lt IE 7]>
      <p class="browsehappy">Est&aacute;s usando un navegador <strong>antiguo</strong>. Por favor <a href="http://browsehappy.com/">actualiza tu navegador</a> para mejorar tu experiencia.</p>
    <![endif]-->

    <!-- Add your site or application content here -->
    <div class="header">
      <div class="navbar navbar-default" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#js-navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#/">Coherencia</a>
          </div>

          <div class="collapse navbar-collapse" id="js-navbar-collapse">
            <ul class="nav navbar-nav">
              <li><a ng-href="#/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Principal</a></li>
              <!--<li><a ng-href="#/candidatos/nuevo">Mi Candidato</a></li>-->
              <li><a ng-href="#/comite-evaluador">El Comit&eacute; Evaluador</a></li>
              <li><a ng-href="#/congreso">Mi Congreso</a></li>
              <li><a ng-href="#/evaluaciones">Las Evaluaciones</a></li>
              <li><a ng-href="#/admin/home">Soy Administrador</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
              <li><a ng-href="#/usuario/nuevo">Registrarme</a></li>
              <li><a ng-href="#/login">Iniciar Sesi&oacute;n</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div ng-view=""></div>
    </div>

    <footer class="footer">
      <div class="container">
        <p class="text-muted">Coherencia &copy; 2015, todos los derechos reservados.</p>
      </div>
    </footer>

    <script type="text/javascript">
      window.appSettings = {
        basePath: '<?php echo base_url("/"); ?>',
        restPath: '<?php echo site_url("/api/"); ?>'
      };
    </script>

    <!-- build:js(.) scripts/vendor.js -->
    <!-- bower:js -->
    <script src="<?php echo base_url('resources/js/jquery/jquery.js'); ?>"></script>
    <script src="<?php echo base_url('resources/js/angular/angular.js'); ?>"></script>
    <script src="<?php echo base_url('resources/js/bootstrap/bootstrap.js'); ?>"></script>
    <script src="<?php echo base_url('resources/js/angular/angular-animate.js'); ?>"></script>
    <script src="<?php echo base_url('resources/js/angular/angular-aria.js'); ?>"></script>
    <script src="<?php echo base_url('resources/js/angular/angular-cookies.js'); ?>"></script>
    <script src="<?php echo base_url('resources/js/angular/angular-loader.js'); ?>"></script>
    <script src="<?php echo base_url('resources/js/angular/angular-messages.js'); ?>"></script>
    <script src="<?php echo base_url('resources/js/angular/angular-resource.js'); ?>"></script>
    <script src="<?php echo base_url('resources/js/angular/angular-route.js'); ?>"></script>
    <script src="<?php echo base_url('resources/js/angular/angular-sanitize.js'); ?>"></script>
    <script src="<?php echo base_url('resources/js/angular/angular-touch.js'); ?>"></script>
    <!-- endbower -->
    <!-- endbuild -->

    <!-- build:js({.tmp,app}) scripts/scripts.js -->
    <!-- JQuery Widgets -->
    <script src="<?php echo base_url('resources/js/plugins/smartwizard/jquery.smartWizard-2.0.modified.js'); ?>"></script>
    <!-- App Scripts -->
    <script src="<?php echo base_url('resources/app/app.js'); ?>"></script>
    <script src="<?php echo base_url('resources/app/auth/auth.module.js'); ?>"></script>
    <script src="<?php echo base_url('resources/app/auth/login.controller.js'); ?>"></script>
    <script src="<?php echo base_url('resources/app/auth/newuseraccount.controller.js'); ?>"></script>
    <script src="<?php echo base_url('resources/app/auth/useraccounts.service.js'); ?>"></script>
    <script src="<?php echo base_url('resources/app/common/common.module.js'); ?>"></script>
    <script src="<?php echo base_url('resources/app/common/match.directive.js'); ?>"></script>
    <script src="<?php echo base_url('resources/app/common/smartwizard.directive.js'); ?>"></script>
    <script src="<?php echo base_url('resources/app/common/configvalues.service.js'); ?>"></script>
    <script src="<?php echo base_url('resources/app/home/controllers/info.js'); ?>"></script>
    <script src="<?php echo base_url('resources/app/home/controllers/main.js'); ?>"></script>
    <script src="<?php echo base_url('resources/app/judges/main.js'); ?>"></script>
    <script src="<?php echo base_url('resources/app/judges/controllers/judges-list.js'); ?>"></script>
    <script src="<?php echo base_url('resources/app/judges/services/judges.js'); ?>"></script>
    <!-- endbuild -->
  </body>
</html>
