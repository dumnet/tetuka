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
		<link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
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
					<a class="navbar-brand" href="index.html">SB Admin</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav side-nav">
						<li class="active"><a href="index.html"><i class="icon-dashboard"></i> Dashboard</a></li>
						<li><a href="charts.html"><i class="icon-bar-chart"></i> Charts</a></li>
						<li><a href="tables.html"><i class="icon-table"></i> Tables</a></li>
						<li><a href="forms.html"><i class="icon-edit"></i> Forms</a></li>
						<li><a href="typography.html"><i class="icon-font"></i> Typography</a></li>
						<li><a href="bootstrap-elements.html"><i class="icon-desktop"></i> Bootstrap Elements</a></li>
						<li><a href="bootstrap-grid.html"><i class="icon-wrench"></i> Bootstrap Grid</a></li>
						<li><a href="blank-page.html"><i class="icon-file-alt"></i> Blank Page</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-collapse"></i> Dropdown <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Dropdown Item</a></li>
								<li><a href="#">Another Item</a></li>
								<li><a href="#">Third Item</a></li>
								<li><a href="#">Last Item</a></li>
							</ul>
						</li>
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
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i> John Smith <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="icon-user"></i> Profile</a></li>
								<li><a href="#"><i class="icon-envelope"></i> Inbox <span class="badge">7</span></a></li>
								<li><a href="#"><i class="icon-gear"></i> Settings</a></li>
								<li class="divider"></li>
								<li><a href="#"><i class="icon-power-off"></i> Log Out</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</nav>

			<div id="page-wrapper">

				<div class="row">
					<div class="col-lg-12">
						<h1>Dashboard <small>Statistics Overview</small></h1>
						<ol class="breadcrumb">
							<li class="active"><i class="icon-dashboard"></i> Dashboard</li>
						</ol>
						<div class="alert alert-success alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							Welcome to SB Admin by <a class="alert-link" href="http://startbootstrap.com">Start Bootstrap</a>! Feel free to use this template for your admin needs! We are using a few different plugins to handle the dynamic tables and charts, so make sure you check out the necessary documentation links provided.
						</div>
					</div>
				</div><!-- /.row -->

				<div class="row">
					<div class="col-lg-3">
						<div class="panel panel-info">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-6">
										<i class="icon-comments icon-5x"></i>
									</div>
									<div class="col-xs-6 text-right">
										<p class="announcement-heading">456</p>
										<p class="announcement-text">New Mentions!</p>
									</div>
								</div>
							</div>
							<a href="#">
								<div class="panel-footer announcement-bottom">
									<div class="row">
										<div class="col-xs-6">
											View Mentions
										</div>
										<div class="col-xs-6 text-right">
											<i class="icon-circle-arrow-right"></i>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="panel panel-warning">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-6">
										<i class="icon-check icon-5x"></i>
									</div>
									<div class="col-xs-6 text-right">
										<p class="announcement-heading">12</p>
										<p class="announcement-text">To-Do Items</p>
									</div>
								</div>
							</div>
							<a href="#">
								<div class="panel-footer announcement-bottom">
									<div class="row">
										<div class="col-xs-6">
											Complete Tasks
										</div>
										<div class="col-xs-6 text-right">
											<i class="icon-circle-arrow-right"></i>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="panel panel-danger">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-6">
										<i class="icon-tasks icon-5x"></i>
									</div>
									<div class="col-xs-6 text-right">
										<p class="announcement-heading">18</p>
										<p class="announcement-text">Crawl Errors</p>
									</div>
								</div>
							</div>
							<a href="#">
								<div class="panel-footer announcement-bottom">
									<div class="row">
										<div class="col-xs-6">
											Fix Issues
										</div>
										<div class="col-xs-6 text-right">
											<i class="icon-circle-arrow-right"></i>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-6">
										<i class="icon-comments icon-5x"></i>
									</div>
									<div class="col-xs-6 text-right">
										<p class="announcement-heading">56</p>
										<p class="announcement-text">New Orders!</p>
									</div>
								</div>
							</div>
							<a href="#">
								<div class="panel-footer announcement-bottom">
									<div class="row">
										<div class="col-xs-6">
											Complete Orders
										</div>
										<div class="col-xs-6 text-right">
											<i class="icon-circle-arrow-right"></i>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div><!-- /.row -->

				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h3 class="panel-title"><i class="icon-bar-chart"></i> Traffic Statistics: October 1, 2013 - October 31, 2013</h3>
							</div>
							<div class="panel-body">
								<div id="morris-chart-area"></div>
							</div>
						</div>
					</div>
				</div><!-- /.row -->

				<div class="row">
					<div class="col-lg-4">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h3 class="panel-title"><i class="icon-long-arrow-right"></i> Traffic Sources: October 1, 2013 - October 31, 2013</h3>
							</div>
							<div class="panel-body">
								<div id="morris-chart-donut"></div>
								<div class="text-right">
									<a href="#">View Details <i class="icon-circle-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h3 class="panel-title"><i class="icon-time"></i> Recent Activity</h3>
							</div>
							<div class="panel-body">
								<div class="list-group">
									<a href="#" class="list-group-item">
										<span class="badge">just now</span>
										<i class="icon-calendar"></i> Calendar updated
									</a>
									<a href="#" class="list-group-item">
										<span class="badge">4 minutes ago</span>
										<i class="icon-comment-alt"></i> Commented on a post
									</a>
									<a href="#" class="list-group-item">
										<span class="badge">23 minutes ago</span>
										<i class="icon-truck"></i> Order 392 shipped
									</a>
									<a href="#" class="list-group-item">
										<span class="badge">46 minutes ago</span>
										<i class="icon-money"></i> Invoice 653 has been paid
									</a>
									<a href="#" class="list-group-item">
										<span class="badge">1 hour ago</span>
										<i class="icon-user"></i> A new user has been added
									</a>
									<a href="#" class="list-group-item">
										<span class="badge">2 hours ago</span>
										<i class="icon-check"></i> Completed task: "pick up dry cleaning"
									</a>
									<a href="#" class="list-group-item">
										<span class="badge">yesterday</span>
										<i class="icon-globe"></i> Saved the world
									</a>
									<a href="#" class="list-group-item">
										<span class="badge">two days ago</span>
										<i class="icon-check"></i> Completed task: "fix error on sales page"
									</a>
								</div>
								<div class="text-right">
									<a href="#">View All Activity <i class="icon-circle-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h3 class="panel-title"><i class="icon-money"></i> Recent Transactions</h3>
							</div>
							<div class="panel-body">
								<div class="table-responsive">
									<table class="table table-bordered table-hover table-striped tablesorter">
										<thead>
											<tr>
												<th>Order # <i class="icon-sort"></i></th>
												<th>Order Date <i class="icon-sort"></i></th>
												<th>Order Time <i class="icon-sort"></i></th>
												<th>Amount (USD) <i class="icon-sort"></i></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>3326</td>
												<td>10/21/2013</td>
												<td>3:29 PM</td>
												<td>$321.33</td>
											</tr>
											<tr>
												<td>3325</td>
												<td>10/21/2013</td>
												<td>3:20 PM</td>
												<td>$234.34</td>
											</tr>
											<tr>
												<td>3324</td>
												<td>10/21/2013</td>
												<td>3:03 PM</td>
												<td>$724.17</td>
											</tr>
											<tr>
												<td>3323</td>
												<td>10/21/2013</td>
												<td>3:00 PM</td>
												<td>$23.71</td>
											</tr>
											<tr>
												<td>3322</td>
												<td>10/21/2013</td>
												<td>2:49 PM</td>
												<td>$8345.23</td>
											</tr>
											<tr>
												<td>3321</td>
												<td>10/21/2013</td>
												<td>2:23 PM</td>
												<td>$245.12</td>
											</tr>
											<tr>
												<td>3320</td>
												<td>10/21/2013</td>
												<td>2:15 PM</td>
												<td>$5663.54</td>
											</tr>
											<tr>
												<td>3319</td>
												<td>10/21/2013</td>
												<td>2:13 PM</td>
												<td>$943.45</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="text-right">
									<a href="#">View All Transactions <i class="icon-circle-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div><!-- /.row -->

			</div><!-- /#page-wrapper -->

		</div><!-- /#wrapper -->

		<!-- Bootstrap core JavaScript -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<!-- Page Specific Plugins -->
		<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
		<script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
		<script src="js/morris/chart-data-morris.js"></script>
		<script src="js/tablesorter/jquery.tablesorter.js"></script>
		<script src="js/tablesorter/tables.js"></script>
	</body>
</html>
