<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>AvocadoPanel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Styles -->
  	<link href='<?php echo base_url; ?>public/assets/css/chosen.css' rel='stylesheet' tyle="text/css">
	<link href="<?php echo base_url; ?>public/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url; ?>public/assets/css/theme/avocado.css" rel="stylesheet" type="text/css" id="theme-style">
	<link href="<?php echo base_url; ?>public/assets/css/prism.css" rel="stylesheet/less" type="text/css">
	<link href='<?php echo base_url; ?>public/assets/css/fullcalendar.css' rel='stylesheet' tyle="text/css">
  	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,600,300' rel='stylesheet' type='text/css'> 
	<link href='<?php echo base_url; ?>public/assets/css/styles.css' rel='stylesheet' tyle="text/css">
	<link href='<?php echo base_url; ?>public/assets/css/bootstrap-datetimepicker.min.css' rel='stylesheet' tyle="text/css">
	<style type="text/css">
		body { padding-top: 102px; }
	</style>
	<link href="<?php echo base_url; ?>assets/css/bootstrap-responsive.css" rel="stylesheet">
	
	<!-- JavaScript/jQuery, Pre-DOM -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script src="<?php echo base_url; ?>public/assets/js/charts/excanvas.min.js"></script>
	<script src="<?php echo base_url; ?>public/assets/js/charts/jquery.flot.js"></script>
	<script src="<?php echo base_url; ?>public/assets/js/jquery.jpanelmenu.min.js"></script>
	<script src="<?php echo base_url; ?>public/assets/js/jquery.cookie.js"></script>
	<script src="<?php echo base_url; ?>public/assets/js/avocado-custom-predom.js"></script>


	<!-- HTML5, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>

<body>

	<!-- Top Fixed Bar -->
	<div class="navbar navbar-inverse navbar-fixed-top">

		<!-- Top Fixed Bar: Navbar Inner -->
		<div class="navbar-inner">

			<!-- Top Fixed Bar: Container -->
			<div class="container">

				<!-- Mobile Menu Button -->
				<a href="#">
					<button type="button" class="btn btn-navbar mobile-menu">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</a>
				<!-- / Mobile Menu Button -->

				<!-- / Logo / Brand Name -->
				<a class="brand" href="#"><i class="icon-leaf"></i> Avocado<b>Panel</b> - shared on themelock.com</a>
				<!-- / Logo / Brand Name -->

				<!-- User Navigation -->
				<ul class="nav pull-right">
					
					<!-- User Navigation: Notifications -->
					<li class="dropdown">

						<!-- User Navigation: Notifications Link -->
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-align-justify icon-white"></i>
							<span class="hidden-phone"> Notifications </span>
							<span class="badge badge-inverse">16</span>
						</a>
						<!-- / User Navigation: Notifications Link -->

						<!-- User Navigation: Notifications Dropdown -->
						<ul class="dropdown-menu widget">

							<!-- User Navigation: Notifications Top -->
							<li>

								<!-- User Navigation: Notifications Add News -->
								<a href="#" class="send" rel="tooltip" title="Add News"><i class="icon-edit"></i></a>
								<!-- / User Navigation: Notifications Add News -->

								<!-- User Navigation: Notifications Header -->
								<h2><i class="icon-align-justify"></i> Notifications 
								<span class="badge badge-light small">16</span></h2>
								<!-- / User Navigation: Notifications Header -->
							</li>
							<!-- / User Navigation: Notifications Top -->

							<!-- User Navigation: Notifications Item -->
							<li>
								<a href="#" class="note">
									<small>1 hour ago</small>
									<p><i class="icon-edit"></i> <b>You</b> added <b>We´ve launched!</b></p>
								</a>
							</li>
							<!-- / User Navigation: Notifications Item -->

							<!-- User Navigation: Notifications Item -->
							<li>
								<a href="#" class="note">
									<small>6 hour ago</small>
									<p><i class="icon-edit"></i> <b>You</b> added <b>Some changes</b></p>
								</a>
							</li>
							<!-- / User Navigation: Notifications Item -->

							<!-- User Navigation: Notifications Item -->
							<li>
								<a href="#" class="note">
									<small>12 hour ago</small>
									<p><i class="icon-envelope"></i> <b>Jason</b> sendt you a message</p>
								</a>
							</li>
							<!-- / User Navigation: Notifications Item -->

							<!-- User Navigation: Notifications Item -->
							<li>
								<a href="#" class="note">
									<small>15 hour ago</small>
									<p><i class="icon-user"></i> <b>Kate</b> added you as friend</p>
								</a>
							</li>
							<!-- / User Navigation: Notifications Item -->

							<!-- User Navigation: Notifications View All -->
							<li><a href="#" class="text-center"><i class="icon-inbox"></i> View All Notifications</a></li>
							<!-- / User Navigation: Notifications View All -->

						</ul>
						<!-- / User Navigation: Notifications Dropdown -->

					</li>
					<!-- / User Navigation: Notifications -->

					<!-- User Navigation: Messages -->
					<li class="dropdown">

						<!-- User Navigation: Messages Link -->
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-envelope icon-white"></i>
							<span class="hidden-phone"> Messages </span>
							<span class="badge badge-inverse">5</span>
						</a>
						<!-- / User Navigation: Messages Link -->

						<!-- / User Navigation: Messages Dropdown -->
						<ul class="dropdown-menu widget">

							<!-- User Navigation: Messages Top -->
							<li>

								<!-- User Navigation: Messages New Message -->
								<a href="#" class="send" rel="tooltip" title="New Message"><i class="icon-edit"></i></a>
								<!-- / User Navigation: Messages New Message -->

								<!-- User Navigation: Messages Header -->
								<h2><i class="icon-envelope"></i> Messages <span class="badge badge-light small">6</span></h2>
								<!-- / User Navigation: Messages Header -->

							</li>
							<!-- / User Navigation: Messages Top -->

							<!-- User Navigation: Messages Message -->
							<li>
								<a href="#" class="message">
									<small>1 hour ago</small>
									<h3><i class="icon-user"></i> Jason</h3>
									<p>Keep up the work! </p>
								</a>
							</li>
							<!-- / User Navigation: Messages Message -->

							<!-- User Navigation: Messages Message -->
							<li>
								<a href="#" class="message">
									<small>3 hour ago</small>
									<h3><i class="icon-user"></i> Janika</h3>
									<p>Did you update that thing? </p>
								</a>
							</li>
							<!-- / User Navigation: Messages Message -->

							<!-- User Navigation: Messages View All Messages -->
							<li>
								<a href="#" class="text-center">
									<i class="icon-inbox"></i> View All Messages
								</a>
							</li>
							<!-- / User Navigation: Messages View All Messages -->

						</ul>
						<!-- / User Navigation: Messages Dropdown -->

					</li>
					<!-- / User Navigation: Messages -->

					<!-- User Navigation: User -->
					<li class="dropdown">

						<!-- User Navigation: User Link -->
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-user icon-white"></i> 
							<span class="hidden-phone"><?php echo $_SESSION['company_name']; ?></span>
						</a>
						<!-- / User Navigation: User Link -->

						<!-- User Navigation: User Dropdown -->
						<ul class="dropdown-menu">
							<li><a href="#"><i class="icon-user"></i> Profile</a></li>
							<li><a href="#settings" data-toggle="modal"><i class="icon-cog"></i> Settings</a></li>
							<li><a href="#messages" data-toggle="modal"><i class="icon-envelope"></i> Messages</a></li>
							<li class="divider"></li>
							<li><a href="<?php echo base_url; ?>logout.php"><i class="icon-off"></i> Logout</a></li>
						</ul>
						<!-- / User Navigation: User Dropdown -->

					</li>
					<!-- / User Navigation: User -->

				</ul>
				<!-- / User Navigation -->

			</div>
			<!-- / Top Fixed Bar: Container -->

		</div>
		<!-- / Top Fixed Bar: Navbar Inner -->

		<!-- Top Fixed Bar: Breadcrumb -->
		<div class="breadcrumb clearfix">

			<!-- Top Fixed Bar: Breadcrumb Container -->
			<div class="container">

				<!-- Top Fixed Bar: Breadcrumb Location -->
				<ul class="pull-left">
					<li><a href="#"><i class="icon-home"></i> Home</a> <span class="divider">/</span></li>
					<li class="active"><a href="#"><i class="icon-align-justify"></i> Dashboard</a></li>
				</ul>
				<!-- / Top Fixed Bar: Breadcrumb Location -->

				<!-- Top Fixed Bar: Breadcrumb Right Navigation -->
				<ul class="pull-right">

					<!-- Top Fixed Bar: Breadcrumb Theme -->
					<li class="dropdown">
						<!-- Top Fixed Bar: Breadcrumb Theme Link -->
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog"></i> Theme</a>

						<!-- Top Fixed Bar: Breadcrumb Theme Dropdown -->
						<ul class="dropdown-menu" id="theme">
							<li><a href="#" data-style="avocado" class="active"><i class="icon-circle"></i> Avocado</a></li>
							<li><a href="#" data-style="strawberry"><i class="icon-circle"></i> Strawberry</a></li>
							<li><a href="#" data-style="blueberry"><i class="icon-circle"></i> Blueberry</a></li>
							<li><a href="#" data-style="azalea"><i class="icon-circle"></i> Azalea</a></li>
							<li><a href="#" data-style="tangerine"><i class="icon-circle"></i> Tangerine</a></li>
						</ul>
						<!-- / Top Fixed Bar: Breadcrumb Theme Dropdown -->

					</li>
					<!-- / Top Fixed Bar: Breadcrumb Theme -->

					<li><a href="<?php echo base_url; ?>logout.php"><i class="icon-off"></i> Logout</a></li>
				</ul>
				<!-- / Top Fixed Bar: Breadcrumb Right Navigation -->

			</div>
			<!-- / Top Fixed Bar: Breadcrumb Container -->

		</div>
		<!-- / Top Fixed Bar: Breadcrumb -->

	</div>
	<!-- / Top Fixed Bar -->

	<!-- Moldule: Settings -->
	<div id="settings" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel"><i class="icon-cog"></i> Account settings</h3>
		</div>

		<div class="modal-body">

			<form class="form-horizontal">
		
				<div class="control-group">
					<label class="control-label" for="inputName"><i class="icon-user"></i> Name</label>
					<div class="controls">
						<input type="text" id="inputName" placeholder="Name">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="inputUsername"><i class="icon-user"></i> Username</label>
					<div class="controls">
						<input type="text" id="inputUsername" placeholder="Username">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="inputPassword"><i class="icon-key"></i> Password</label>
					<div class="controls">
						<input type="password" id="inputPassword" placeholder="Password">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="inputRepeat"><i class="icon-key"></i> Repeat Password</label>
					<div class="controls">
						<input type="password" id="inputRepeat" placeholder="Password">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="inputEmail"><i class="icon-envelope"></i> Email</label>
					<div class="controls">
						<input type="text" id="inputEmail" placeholder="Email">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="inputWebsite"><i class="icon-home"></i> Website</label>
					<div class="controls">
						<input type="text" id="inputUsername" placeholder="Website">
					</div>
				</div>
						 
		</div>

		<div class="modal-footer">

			<button class="btn btn-primary">Save changes</button>
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
			</form>

		</div>

	</div> 
	<!-- / Module: Settings -->

	<!-- Module: Messages -->
	<div id="messages" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel"><i class="icon-comment"></i> Messages</h3>
		</div>

		<div class="modal-body no-padding">
		
			<div class="list-widget">

				<div class="item">
					<small class="pull-right">2 hours ago</small>
					<h3><i class="icon-user"></i> Kasper <span class="label">admin</span></h3>
					<p>This panel is so cool!</p>
				</div>
			
				<div class="item">
					<small class="pull-right">6 hours ago</small>
					<h3><i class="icon-user"></i> Janika <span class="label">admin</span></h3>
					<p>Look at this stuff I made!</p>
				</div>

				<div class="item">
					<small class="pull-right">8 hours ago</small>
					<h3><i class="icon-user"></i> Janika <span class="label">admin</span></h3>
					<p>I'll make this admin panel holy as swiss cheese.</p>
				</div>

			</div>

		</div>

		<div class="modal-footer">

			<a href="#newmessage" class="btn btn-primary" data-dismiss="modal" data-toggle="modal">New mesaage</a>
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>

		</div>

	</div>
	<!-- / Module: Messages -->
	 
	<!-- Module: New Messages -->
	<div id="newmessage" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel"><i class="icon-comment"></i> New Message</h3>
		</div>

		<div class="modal-body">
			<div class="control-group">
				<label class="control-label" for="inputName"> </label>
				<div class="controls">
					<input type="text" id="inputName" placeholder="Recipient">
				</div>
			</div>
			
			<!-- Textarea -->
			<div class="btn-toolbar" data-role="editor-toolbar" data-target="#editor">

				<div class="btn-group">
					<a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="icon-font"></i><b class="caret"></b></a>
					<ul class="dropdown-menu">
					</ul>
				</div>

				<div class="btn-group">
					<a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="icon-text-height"></i>&nbsp;<b class="caret"></b></a>
					<ul class="dropdown-menu">
					<li><a data-edit="fontSize 5"><font size="5">Huge</font></a></li>
					<li><a data-edit="fontSize 3"><font size="3">Normal</font></a></li>
					<li><a data-edit="fontSize 1"><font size="1">Small</font></a></li>
					</ul>
				</div>

				<div class="btn-group">
					<a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="icon-bold"></i></a>
					<a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="icon-italic"></i></a>
					<a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="icon-strikethrough"></i></a>
					<a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="icon-underline"></i></a>
				</div>
				
				<div class="btn-group">
					<a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="icon-picture"></i></a>
					<input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
				</div>

			</div>

			<div id="sendmessage"></div>
			<!-- /Textarea -->

		</div>
		<div class="modal-footer">

			<button class="btn btn-primary">Send Message</button>
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>

		</div>

	</div>
	<!-- / Module: New Messages -->

	<!-- Content Container -->
	<div class="container">

		<!-- Main Navigation: Box -->
		<div class="navbar navbar-inverse" id="nav">

			<!-- Main Navigation: Inner -->
			<div class="navbar-inner">

				<!-- Main Navigation: Nav -->
				<ul class="nav">

					<!-- Main Navigation: Dashboard -->
					<li class="active"><a href="<?php echo base_url; ?>"><i class="icon-align-justify"></i> Dashboard</a></li>
					<!-- / Main Navigation: Dashboard -->

					<!-- Main Navigation: General -->
					<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="icon-th"></i> Company <b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo base_url; ?>add-new-company.php"><i class="icon-th"></i> Add Company</a></li>
								<li><a href="icons.html"><i class="icon-circle"></i> All Company</a></li>
								<li><a href="add-aucations.php"><i class="icon-circle"></i> Add Aucations</a></li>
								<li><a href="all-auctions.php"><i class="icon-circle"></i> all Aucations</a></li>
							</ul>
					</li>
					<!-- / Main Navigation: General -->

					<!-- Main Navigation: UI Elements -->
					<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-magic">
								</i> UI Elements <b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="forms.html"><i class="icon-check"></i> Forms</a></li>
								<li><a href="wysiwyg.html"><i class="icon-edit"></i> WYSIWYG</a></li>
								<li><a href="tabs.html"><i class="icon-th-large"></i> Tabs / Accordion</a></li>
							</ul>
					</li>
					<!-- / Main Navigation: UI Elements -->

					<!-- Main Navigation: Components -->
					<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="icon-th-large"></i> Components <b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="calendar.html"><i class="icon-calendar"></i> Calendar</a></li>
								<li><a href="maps.html"><i class="icon-map-marker"></i> Maps</a></li>
								<li><a href="tables.html"><i class="icon-table"></i> Tables</a></li>
								<li><a href="charts.html"><i class="icon-bar-chart"></i> Charts</a></li>
								<li><a href="login.html"><i class="icon-key"></i> Login</a></li>
								<li class="dropdown-submenu">
									<a href="#"><i class="icon-signin"></i> Sub-Menu</a>
									<ul class="dropdown-menu">
										<li><a href="#"><i class="icon-signout"></i> This</a></li>
										<li><a href="#"><i class="icon-sitemap"></i> Is</a></li>
										<li><a href="#"><i class="icon-share-alt"></i> An</a></li>
										<li><a href="#"><i class="icon-reorder"></i> Example</a></li>
									</ul>
								</li>
							</ul>
					</li>
					<!-- / Main Navigation: Components -->

					<!-- Main Navigation: Gallery -->
					<li><a href="gallery.html"><i class="icon-picture"></i> Gallery</a></li>
					<!-- / Main Navigation: Gallery -->

				</ul>
				<!-- / Main Navigation: Nav -->
			
				<!-- Main Navigation: Search -->
				<form class="navbar-search pull-right">
					<input type="text" class="search-query typeahead" placeholder="Search">
				</form>
				<!-- / Main Navigation: Search -->

			</div>
			<!-- / Main Navigation: Inner -->

		</div>
		<!-- / Main Navigation: Box -->