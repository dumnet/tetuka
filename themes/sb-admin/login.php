<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Dashboard - Tetuka Admin</title>

		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.css" rel="stylesheet">

		<!-- Add custom CSS here -->
		<link href="css/login.css" rel="stylesheet">
		<link href="css/sb-admin.css" rel="stylesheet">
		<!--<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">-->
	</head>

	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<a class="navbar-brand" href="index.html">Tetuka Admin</a>
			</div>
		</nav>
		<div class="container">
			<?php bootstrap_messages( $this->messages(FALSE) ); ?>
			<?php echo $this->content(); ?>										
		</div>
		<!-- Bootstrap core JavaScript -->
		<script src="js/bootstrap.js"></script>
		<!-- Page Specific Plugins -->
	</body>
</html>
