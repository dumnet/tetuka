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
		<link href="css/sb-admin.css" rel="stylesheet">
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		<!-- Page Specific CSS -->
		<link rel="stylesheet" href="css/morris-0.4.3.min.css">
	</head>

	<body>

		<div id="wrapper">

			<!-- Sidebar -->
			<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo site_url(); ?>">Tetuka Panel</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav side-nav">
						<li class="active"><a href="<?php site_url('dashboard') ?>"><i class="icon-dashboard"></i> Dashboard</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-shopping-cart"></i> Sales <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo site_url('/'); ?>">Orders</a></li>
								<li><a href="<?php echo site_url('/'); ?>">Customers</a></li>
								<li><a href="<?php echo site_url('/'); ?>">Groups</a></li>
								<li><a href="<?php echo site_url('/'); ?>">Reports</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-table"></i> Catalogs <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo site_url('categories'); ?>">Categories</a></li>
								<li><a href="<?php echo site_url('products'); ?>">Products</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-desktop"></i> Contents <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo site_url('banners'); ?>">Banners</a></li>
								<li><a href="<?php echo site_url('pages'); ?>">Pages</a></li>
								<li><a href="<?php echo site_url('widgets'); ?>">Widgets</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-gear"></i> Administrative <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo site_url('auth/groups'); ?>">Groups</a></li>
								<li><a href="<?php echo site_url('auth/'); ?>">Users</a></li>
							</ul>
						</li>
						<!-- <li><a href="charts.html"><i class="icon-bar-chart"></i> Charts</a></li>
						<li><a href="tables.html"><i class="icon-table"></i> Tables</a></li>
						<li><a href="forms.html"><i class="icon-edit"></i> Forms</a></li>
						<li><a href="typography.html"><i class="icon-font"></i> Typography</a></li>
						<li><a href="bootstrap-elements.html"><i class="icon-desktop"></i> Bootstrap Elements</a></li>
						<li><a href="bootstrap-grid.html"><i class="icon-wrench"></i> Bootstrap Grid</a></li>
						<li><a href="blank-page.html"><i class="icon-file-alt"></i> Blank Page</a></li> -->
					</ul>

					<ul class="nav navbar-nav navbar-right navbar-user">
						<li class="dropdown messages-dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-envelope"></i> Messages <span class="badge">7</span> <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li class="dropdown-header">7 New Messages</li>
								<li class="message-preview">
									<a href="#">
										<span class="avatar"><img src="http://placehold.it/50x50"></span>
										<span class="name">John Smith:</span>
										<span class="message">Hey there, I wanted to ask you something...</span>
										<span class="time"><i class="icon-time"></i> 4:34 PM</span>
									</a>
								</li>
								<li class="divider"></li>
								<li class="message-preview">
									<a href="#">
										<span class="avatar"><img src="http://placehold.it/50x50"></span>
										<span class="name">John Smith:</span>
										<span class="message">Hey there, I wanted to ask you something...</span>
										<span class="time"><i class="icon-time"></i> 4:34 PM</span>
									</a>
								</li>
								<li class="divider"></li>
								<li class="message-preview">
									<a href="#">
										<span class="avatar"><img src="http://placehold.it/50x50"></span>
										<span class="name">John Smith:</span>
										<span class="message">Hey there, I wanted to ask you something...</span>
										<span class="time"><i class="icon-time"></i> 4:34 PM</span>
									</a>
								</li>
								<li class="divider"></li>
								<li><a href="#">View Inbox <span class="badge">7</span></a></li>
							</ul>
						</li>
						<li class="dropdown alerts-dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-bell-alt"></i> Alerts <span class="badge">3</span> <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Default <span class="label label-default">Default</span></a></li>
								<li><a href="#">Primary <span class="label label-primary">Primary</span></a></li>
								<li><a href="#">Success <span class="label label-success">Success</span></a></li>
								<li><a href="#">Info <span class="label label-info">Info</span></a></li>
								<li><a href="#">Warning <span class="label label-warning">Warning</span></a></li>
								<li><a href="#">Danger <span class="label label-danger">Danger</span></a></li>
								<li class="divider"></li>
								<li><a href="#">View All</a></li>
							</ul>
						</li>
						<li class="dropdown user-dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i> <?php echo $this->get('bitauth')->fullname; ?> <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="icon-user"></i> Profile</a></li>
								<li><a href="#"><i class="icon-envelope"></i> Inbox <span class="badge">7</span></a></li>
								<li><a href="#"><i class="icon-gear"></i> Settings</a></li>
								<li class="divider"></li>
								<li><a href="<?php echo site_url('auth/logout'); ?>"><i class="icon-power-off"></i> Log Out</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</nav>

			<div id="page-wrapper">
				<?php bootstrap_messages( $this->messages(FALSE) ); ?>
				<?php echo $this->content(); ?>	
			</div><!-- /#page-wrapper -->

		</div><!-- /#wrapper -->

		<!-- Bootstrap core JavaScript -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<!-- Page Specific Plugins -->
		<script src="js/raphael-min.js"></script>
		<script src="js/morris-0.4.3.min.js"></script>
		<script src="js/morris/chart-data-morris.js"></script>
		<script src="js/tablesorter/jquery.tablesorter.js"></script>
		<script src="js/tablesorter/tables.js"></script>
	</body>
</html>
