<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, minimum-scale=1.0, maximum-scale=3.0"> 
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/home_custom.css">
						<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>assets/css/bootstrap.min.js"></script>
	      <script src="//cdn.transifex.com/live.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Quicksand:400,700|Muli|Nunito|Amaranth' rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/logo.png" type="image/x-icon">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<title>
			<?php echo $username;?> DashBoard
		</title>
	</head>
	<body>
<header>
	<nav class="navbar navbar-default">
	  <div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="#"><img src="<?php echo base_url(); ?>assets/images/logo.png" width="80px"></a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav navbar-right">
			<li><a href="#"><h4>HOME</h4></a></li>
				<li><a href="#"><h4>GALLERY</h4></a></li>
				<li><a href="#"><h4>CONTACT US</h4></a></li>
				<li><a href="#"><h4>ABOUT US</h4></a></li>
				<li ><a href="register"><h4>COVERAGE REQUEST</h4></a></li>
				<li class="active"><a href="#"><h4>DASHBOARD</h4></a></li>
		  </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
</header>
	<div class="row main contanier-fluid">
		<div class="col-sm-3 visible-sm visible-md visible-lg side-nav pull-left">
			<ul >
				<li class="active"><h2 class="active"><i class="fa fa-desktop"></i> DashBoard</h2></li>
				<li class><a href="register"><h2><i class="fa fa-file-text"></i> Coverage Request</h2></a></li>
				<li ><a href="<?php echo base_url(); ?>home/view"><h2><i class="fa fa-list"></i> Previous Events</h2></a></li>
				<li ><a href="<?php echo base_url(); ?>home/change"><h2><i class="fa fa-wrench"></i> Change Password</h2></a></li>
				<li><a href="<?php echo base_url(); ?>home/logout"><h2><i class="fa fa-sign-out"></i> Logout</h2></a></li>
			</ul>
		</div>
	<div class="col-sm-9 content">
			<span class="heading">	<h1 class="center">Welcome <?php echo $username;?></h1></span>

   <div class="center">
<span>	<img src="<?php echo base_url(); ?>assets/images/<?php echo $username.".png";?>" width="80px"></img> </span>
	</div>
	<br>
	<br>
	<p id="text">
		Ahoy !! Welcome to your DashBoard.</p>
	<h5>
		This page will be your interface to PSOC.
		<br>
		Here you can register for you upcoming events so as to be covered by our photographers.Along with this, you can also check the status
		of the pics of your event covered by us anytime and get to know when we shall be able to handover the pics to you.
		<br>
	</h5>
	<br>
	<h2> Some Guidelines </h2>
	<ul>
		<li>
				<h5>Fill the form titled coverage request available on the left navigation bar.</h5>
		</li>
		<li>
				<h5>Mention proper contact details of the person in charge of the event for smooth communication </h5>
		</li>
		<li>
				<h5>After you fill out the form, we shall send you a mail with details of members tasked with covering your event.
					You're requested to contact them only for any further communication</h5>
		</li>
		<li>
				<h5>After the event is covered, you can come back here, and view status of your event at your DashBoard in previous 
				events coloumn.</h5>
		</li>
		<li><h5>
			In case of futher queries, mail us at psoc.bitm@gmail.com or ping us on Facebook at
			<a link href="https://www.facebook.com/psoc.bitm?fref=ts"> Photographic Society</a></h5>
		</li>
		 <?php 
			if($id>21)
			 echo '<li>
				<h5> Please handover the payment to the person in-charge of your coverage </h5>
			</li>'
			?>
			
	</ul>
   <br>
  <div class=" visible-md visible-lg btn-group btn-group-justified buttons">

   <a class="btn btn-info btn-lg center" role="button" href="<?php echo base_url(); ?>home/register"><h5><i class="fa fa-file-text"></i> Register For Event</h5></a>
   <a class="btn btn-info btn-lg center" role="button" href="<?php echo base_url(); ?>home/view"><h5><i class="fa fa-list"></i> View Previous Event</h5></a>
      <a class="btn btn-info btn-lg center " role="button" href="<?php echo base_url(); ?>home/logout"><h5><i class="fa fa-sign-out"></i> Logout</h5></a>
   </div>
  </div>
  </div>
  <div class="container-fluid visible-xs">
	<ul >
				<li class="active"><h2 class="active"><i class="fa fa-desktop"></i> DashBoard</h2></li>
				<li class><a href="<?php echo base_url(); ?>home/register"><h2><i class="fa fa-file-text"></i> Register</h2></a></li>
				<li ><a href="<?php echo base_url(); ?>home/view"><h2><i class="fa fa-list"></i> Previous Events</h2></a></li>
				<li ><a href="<?php echo base_url(); ?>home/change"><h2><i class="fa fa-wrench"></i> Change Password</h2></a></li>
				<li><a href="<?php echo base_url(); ?>home/logout"><h2><i class="fa fa-sign-out"></i> Logout</h2></a></li>
			</ul>
	</div>
 </body>
</html>