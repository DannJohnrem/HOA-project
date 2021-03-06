<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Mosaddek">
	<meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<link rel="shortcut icon" href="img/favicon.png">

	<title>Editable Table</title>

	<!-- Bootstrap core CSS -->
	<link href="<?php echo base_url(); ?>lib/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>lib/css/bootstrap-reset.css" rel="stylesheet">
	<!--external css-->
	<link href="<?php echo base_url(); ?>lib/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>lib/assets/data-tables/DT_bootstrap.css" />
	<!-- Custom styles for this template -->
	<link href="<?php echo base_url(); ?>lib/css/style.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>lib/css/style-responsive.css" rel="stylesheet" />

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
	<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

	<section id="container" class="">
		<!--header start-->
		<header class="header white-bg">
			<div class="sidebar-toggle-box">
				<div data-original-title="Toggle Navigation" data-placement="right" class="fa fa-bars tooltips"></div>
			</div>
			<!--logo start-->
			<a href="index.html" class="logo">Admin<span>dashboard</span></a>
			<!--logo end-->
			<div class="top-nav ">
				<ul class="nav pull-right top-menu">
					<!-- user login dropdown start-->
					<li class="dropdown">
						<a data-toggle="dropdown" class="dropdown-toggle" href="#">
							<span class="username">ADMIN</span>
							<b class="caret"></b>
						</a>
					</li>
					<!-- user login dropdown end -->
				</ul>
			</div>
		</header>
		<!--header end-->
		<!--sidebar start-->
		<aside>
			<div id="sidebar" class="nav-collapse ">
				<!-- sidebar menu start-->
				<ul class="sidebar-menu" id="nav-accordion">
					<li>
						<a href="index.html">
							<i class="fa fa-dashboard"></i>
							<span>Dashboard</span>
						</a>
					</li>
				</ul>
				<!-- sidebar menu end-->
			</div>
		</aside>
		<!--sidebar end-->
		<!--main content start-->
		<section id="main-content">
			<section class="wrapper site-min-height">
				<!-- page start-->
				<section class="panel">
					<header class="panel-heading">
						Editable Table
					</header>
					<div class="panel-body">
						<div class="adv-table editable-table ">
							<div class="clearfix">
								<div class="btn-group">
									<button id="editable-sample_new" class="btn green">
										Add New <i class="fa fa-plus"></i>
									</button>
								</div>
								<div class="btn-group pull-right">
									<button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i
											class="fa fa-angle-down"></i>
									</button>
									<ul class="dropdown-menu pull-right">
										<li><a href="#">Print</a></li>
										<li><a href="#">Save as PDF</a></li>
										<li><a href="#">Export to Excel</a></li>
									</ul>
								</div>
							</div>
							<div class="space15"></div>
							<table class="table table-striped table-hover table-bordered" id="editable-sample">
								<thead>
									<tr>
										<th>Full Name</th>
										<th>Email</th>
										<th>Contact Number</th>
										<th>Notes</th>
										<th>Edit</th>
										<th>Delete</th>
									</tr>
								</thead>
								<tbody>
									<tr class="">
										<td>Jondi Rose</td>
										<td>Alfred Jondi Rose</td>
										<td>1234</td>
										<td class="center">super user</td>
										<td><a class="edit" href="javascript:;">Edit</a></td>
										<td><a class="delete" href="javascript:;">Delete</a></td>
									</tr>
									<tr class="">
										<td>Dulal</td>
										<td>Jonathan Smith</td>
										<td>434</td>
										<td class="center">new user</td>
										<td><a class="edit" href="javascript:;">Edit</a></td>
										<td><a class="delete" href="javascript:;">Delete</a></td>
									</tr>
									<tr class="">
										<td>Sumon</td>
										<td> Sumon Ahmed</td>
										<td>232</td>
										<td class="center">super user</td>
										<td><a class="edit" href="javascript:;">Edit</a></td>
										<td><a class="delete" href="javascript:;">Delete</a></td>
									</tr>
									<tr class="">
										<td>vectorlab</td>
										<td>dk mosa</td>
										<td>132</td>
										<td class="center">elite user</td>
										<td><a class="edit" href="javascript:;">Edit</a></td>
										<td><a class="delete" href="javascript:;">Delete</a></td>
									</tr>
									<tr class="">
										<td>Admin</td>
										<td> Flat Lab</td>
										<td>462</td>
										<td class="center">new user</td>
										<td><a class="edit" href="javascript:;">Edit</a></td>
										<td><a class="delete" href="javascript:;">Delete</a></td>
									</tr>
									<tr class="">
										<td>Rafiqul</td>
										<td>Rafiqul dulal</td>
										<td>62</td>
										<td class="center">new user</td>
										<td><a class="edit" href="javascript:;">Edit</a></td>
										<td><a class="delete" href="javascript:;">Delete</a></td>
									</tr>
									<tr class="">
										<td>Jhon Doe</td>
										<td>Jhon Doe </td>
										<td>1234</td>
										<td class="center">super user</td>
										<td><a class="edit" href="javascript:;">Edit</a></td>
										<td><a class="delete" href="javascript:;">Delete</a></td>
									</tr>
									<tr class="">
										<td>Dulal</td>
										<td>Jonathan Smith</td>
										<td>434</td>
										<td class="center">new user</td>
										<td><a class="edit" href="javascript:;">Edit</a></td>
										<td><a class="delete" href="javascript:;">Delete</a></td>
									</tr>
									<tr class="">
										<td>Sumon</td>
										<td> Sumon Ahmed</td>
										<td>232</td>
										<td class="center">super user</td>
										<td><a class="edit" href="javascript:;">Edit</a></td>
										<td><a class="delete" href="javascript:;">Delete</a></td>
									</tr>
									<tr class="">
										<td>vectorlab</td>
										<td>dk mosa</td>
										<td>132</td>
										<td class="center">elite user</td>
										<td><a class="edit" href="javascript:;">Edit</a></td>
										<td><a class="delete" href="javascript:;">Delete</a></td>
									</tr>
									<tr class="">
										<td>Admin</td>
										<td> Flat Lab</td>
										<td>462</td>
										<td class="center">new user</td>
										<td><a class="edit" href="javascript:;">Edit</a></td>
										<td><a class="delete" href="javascript:;">Delete</a></td>
									</tr>
									<tr class="">
										<td>Rafiqul</td>
										<td>Rafiqul dulal</td>
										<td>62</td>
										<td class="center">new user</td>
										<td><a class="edit" href="javascript:;">Edit</a></td>
										<td><a class="delete" href="javascript:;">Delete</a></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</section>
				<!-- page end-->
			</section>
		</section>
		<!--main content end-->
		<!--footer start-->
		<footer class="site-footer">
			<div class="text-center">
				2013 &copy; FlatLab by VectorLab.
				<a href="#" class="go-top">
					<i class="fa fa-angle-up"></i>
				</a>
			</div>
		</footer>
		<!--footer end-->
	</section>

	<!-- js placed at the end of the document so the pages load faster -->
	<script src="<?php echo base_url(); ?>lib/js/jquery-1.8.3.min.js"></script>
	<script src="<?php echo base_url(); ?>lib/js/bootstrap.min.js"></script>
	<script class="include" type="text/javascript" src="<?php echo base_url(); ?>lib/js/jquery.dcjqaccordion.2.7.js">
	</script>
	<script src="<?php echo base_url(); ?>lib/js/jquery.scrollTo.min.js"></script>
	<script src="<?php echo base_url(); ?>lib/js/jquery.nicescroll.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>lib/assets/data-tables/jquery.dataTables.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>lib/assets/data-tables/DT_bootstrap.js"></script>
	<script src="<?php echo base_url(); ?>lib/js/respond.min.js"></script>

	<!--common script for all pages-->
	<script src="<?php echo base_url(); ?>lib/js/common-scripts.js"></script>

	<!--script for this page only-->
	<script src="<?php echo base_url(); ?>lib/js/editable-table.js"></script>

	<!-- END JAVASCRIPTS -->
	<script>
		jQuery(document).ready(function () {
			EditableTable.init();
		});

	</script>


</body>

</html>
