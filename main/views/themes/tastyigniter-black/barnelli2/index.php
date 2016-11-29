<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		 <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<title>BARNELLI</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
		<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		<link rel="stylesheet" href="less/custom.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Covered+By+Your+Grace' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="less/jquery.maximage.css" type="text/css" media="screen" charset="utf-8" />
		<script src="js/jquery-2.0.3.min.js"></script>
		<script src="js/modernizr-2.6.2.min.js"></script>
	</head>
	<body>
		<!--[if lt IE 7]>
			<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

		<!-- Add your site or application content here -->
		<div class="container full-bg visible-xs sm-navbar">
			<nav>
				<div class="row">
					<div class="navbar-inner">
						<ul class="main-menu nav">
							<li>
								<header class="small-logo">
									<a href="index.php?page=home" title=""><img src="img/logo.png" alt="Barnelli"/></a>
								</header>
							</li>
							<li class="reorder">
								<a href="#" title="" class="exclude" data-djax-exclude="true"><i class="fa fa-reorder"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div id="mobile-nav" class="visible-xs">
			<?php include 'mobile_navbar.php'; ?>
		</div>
		<?php include 'navbar.php'; ?>
		
		<div id="content-wrapper">
			<?php include (!isset($_GET['p']) ? 'splash.php' : $_GET['p'] . '.php'); ?>
		</div>
		
		<script src="js/jquery.djax.min.js"></script>
		<script src="js/jquery.nicescroll.min.js"></script>
		<script src="js/jquery.ba-throttle-debounce.min.js"></script>
		<script src="js/transit.js"></script>
		<script src="js/jquery.cycle.all.min.js"></script>
		<script src="js/jquery.maximage.min.js"></script>
		<script src="js/jquery.colorbox-min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>