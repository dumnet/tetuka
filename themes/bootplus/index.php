<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo $this->get('page_title', 'Bootplus Theme');?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Le styles -->
		<link href="css/fonts.css" rel="stylesheet">
		<link href="css/bootplus.css" rel="stylesheet">
		<style type="text/css">
			body { padding-top: 60px; padding-bottom: 40px; }
		</style>
		<link href="css/bootplus-responsive.css" rel="stylesheet">

		<!-- Le jQuery and bootstrap JS -->
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>

		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script src="js/html5.js"></script>
		<![endif]-->
	</head>

  	<body>
  		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="brand" href="#">Project name</a>
					<div class="nav-collapse">
						<ul class="nav">
							<li class="active"><a href="#">Home</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#contact">Contact</a></li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>

		<div class="container">
			
			<?php echo $this->content(); ?>
			
			<hr>

			<footer>
				<p>&copy; Company 2012</p>
			</footer>

		</div> <!-- /container -->

	</body>
</html>
