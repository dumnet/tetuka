<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" href="assets/ico/favicon.png">

		<title><?php echo $this->get('page_title', 'Tetuka Theme default title');?></title>

		<!-- Bootstrap core CSS -->
		<link href="assets/css/bootstrap.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="assets/css/tetuka.css" rel="stylesheet">

		<!-- Just for debugging purposes. Don't actually copy this line! -->
		<!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>

		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6"><h1>Tetuka Shopping Cart</h1></div>
				<!-- Add the extra clearfix for only the required viewport -->
				<div class="clearfix visible-xs"></div>

				<div class="col-xs-6 col-sm-3">Shopping Cart<br>2(items)-Rp.559000</div>
				<div class="col-xs-6 col-sm-3">Free Delivery<br>Jabotabek</div>
			</div>
			<!-- Static navbar -->
			<div class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Man</a></li>
						<li><a href="#">Women</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li class="dropdown-header">Nav header</li>
								<li><a href="#">Separated link</a></li>
								<li><a href="#">One more separated link</a></li>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<form class="navbar-form navbar-right">
							<div class="form-group">
								<input type="keyword" placeholder="Search..." class="form-control">
							</div>
							<button type="submit" class="btn btn-success">Go</button>
						</form>
					</ul>
				</div><!--/.nav-collapse -->
			</div>

			<!-- Carousel
			================================================== -->
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img data-src="holder.js/900x250/auto/#777:#7a7a7a/text:First slide" alt="First slide">
						<div class="container">
							<div class="carousel-caption">
								<h1>Example headline.</h1>
								<p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
								<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
							</div>
						</div>
					</div>
					<div class="item">
						<img data-src="holder.js/900x250/auto/#666:#6a6a6a/text:Second slide" alt="Second slide">
						<div class="container">
							<div class="carousel-caption">
								<h1>Another example headline.</h1>
								<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
								<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
							</div>
						</div>
					</div>
					<div class="item">
						<img data-src="holder.js/900x250/auto/#555:#5a5a5a/text:Third slide" alt="Third slide">
						<div class="container">
							<div class="carousel-caption">
								<h1>One more for good measure.</h1>
								<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
								<p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
							</div>
						</div>
					</div>
				</div>
				<a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			</div><!-- /.carousel -->
			
			<!-- contents -->
			<div class="row">
				<?php bootstrap_messages( $this->messages(FALSE) ); ?>
				<!-- product -->
				<div class="col-xs-18 col-sm-9">
					<?php echo $this->content(); ?>										
				</div>
				<!-- Add the extra clearfix for only the required viewport -->
				<div class="clearfix visible-xs"></div>
				<!-- menu sidebar -->
				<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
					
					<div class="list-group">
						<a href="#" class="list-group-item active">Link</a>
						<a href="#" class="list-group-item">Link</a>
						<a href="#" class="list-group-item">Link</a>
						<a href="#" class="list-group-item">Link</a>
						<a href="#" class="list-group-item">Link</a>
						<a href="#" class="list-group-item">Link</a>
						<a href="#" class="list-group-item">Link</a>
						<a href="#" class="list-group-item">Link</a>
						<a href="#" class="list-group-item">Link</a>
						<a href="#" class="list-group-item">Link</a>
					</div>
				</div>
			</div>
			<div class="footer">
				<p>&copy; Tetuka Shopping Cart 2013</p>
			</div>
		</div> <!-- /container -->

		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/holder.js"></script>
	</body>
</html>
