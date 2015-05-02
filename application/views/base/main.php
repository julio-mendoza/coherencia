<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">

	<!-- Styles -->
	<link href="<?php echo $base_url; ?>/resources/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo $base_url; ?>/resources/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="<?php echo $base_url; ?>/resources/css/bootstrap-overrides.css" rel="stylesheet">

	<link href="<?php echo $base_url; ?>/resources/css/ui-lightness/jquery-ui-1.8.21.custom.css" rel="stylesheet">

	<link href="<?php echo $base_url; ?>/resources/css/slate.css" rel="stylesheet">
	<link href="<?php echo $base_url; ?>/resources/css/slate-responsive.css" rel="stylesheet">

	<link href="<?php echo $base_url; ?>/resources/css/components/error.css" rel="stylesheet">
	<?php echo $view_styles; ?>

	<!-- Javascript -->
	<script src="<?php echo $base_url; ?>/resources/js/jquery-1.7.2.min.js"></script>
	<script src="<?php echo $base_url; ?>/resources/js/jquery-ui-1.8.21.custom.min.js"></script>
	<script src="<?php echo $base_url; ?>/resources/js/jquery.ui.touch-punch.min.js"></script>
	<script src="<?php echo $base_url; ?>/resources/js/bootstrap.js"></script>

	<!-- TODO: check if it is needed -->
	<script src="<?php echo $base_url; ?>/resources/js/Slate.js"></script>

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
      						<i class="icon-home"></i><span>Home</span>
      					</a>
      				</li>
					<li class="dropdown">					
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-th"></i>
							Components
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li><a href="forms.html">Forms</a></li>
							<li><a href="ui-elements.html">UI Elements</a></li>
							<li><a href="grid.html">Grid Layout</a></li>
							<li><a href="tables.html">Tables</a></li>
							<li><a href="widgets.html">Widget Boxes</a></li>
							<li><a href="charts.html">Charts</a></li>
							<li><a href="tabs.html">Tabs & Accordion</a></li>
							<li><a href="buttons.html">Buttons</a></li>
						</ul>
					</li>
					<li class="dropdown">					
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-copy"></i>
							Sample Pages
							<b class="caret"></b>
						</a>	
					
						<ul class="dropdown-menu">
							<li><a href="invoice.html">Invoice</a></li>
							<li><a href="faq.html">FAQ</a></li>
							<li><a href="pricing.html">Pricing Plans</a></li>
							<li><a href="gallery.html">Image Gallery</a></li>
							<li><a href="wizard.html">Wizard</a></li>
							<li><a href="reports.html">Reports</a></li>
							<li><a href="calendar.html">Calendar</a></li>
						</ul>    				
					</li>
					<li class="dropdown active">					
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-external-link"></i>
							Other Pages
							<b class="caret"></b>
						</a>	
					
						<ul class="dropdown-menu">							
							<li><a href="login.html">Login</a></li>
							<li><a href="signup.html">Signup</a></li>
							<li><a href="error.html">Error</a></li>
							<li class="dropdown">
								<a href="javascript:;">
									Dropdown Menu									
									<i class="icon-chevron-right sub-menu-caret"></i>
								</a>
								
								<ul class="dropdown-menu sub-menu">
			                        <li><a href="javascript:;">Dropdown #1</a></li>
			                        <li><a href="javascript:;">Dropdown #2</a></li>
			                        <li><a href="javascript:;">Dropdown #3</a></li>
			                        <li><a href="javascript:;">Dropdown #4</a></li>
			                    </ul>
							</li>
						</ul>    				
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
