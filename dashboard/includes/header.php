<!doctype html>
<html lang="en">

<head>
	<title><?php echo $page_title; ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="">
	<link rel="icon" type="image/png" sizes="96x96" href="">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="dashboard.php"><img src="" width="35" height="35" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">	
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Signed in : <span> <?php echo $email; ?> </span>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="dashboard.php"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
						
						<li><a href="add_content.php"><i class="fa fa-exchange"></i> <span>Add New Content</span></a></li>

						<li><a href="all_contents.php"><i class="fa fa-exchange"></i> <span>View All Contents</span></a></li>

						<li><a href="message.php"><i class="fa fa-info"></i> <span>Messages</span></a></li>

						<li><a href="logout.php"><i class="fa fa-sign-out"></i> <span> Logout</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<!-- <h3 class="panel-title"><img src="" width="35" height="35"></h3> -->
							
								<center><h3 style="background-color: skyblue;
    color: #fff; font-weight: bold; padding: 10px;">ACCOUNT DASHBOARD</h3></center>
							<!-- 	<p style="font-size: 14px; color: red;"></p> -->
							
						</div>
					</div>