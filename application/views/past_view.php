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
		 Past Events
		</title>
	</head>
	<body>
<header>
	<nav class="navbar navbar-default">
	  <div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="true">
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
	<div class="row contanier-fluid">
		<div class="col-sm-2 visible-sm visible-md visible-lg side-nav pull-left">
			<ul >
				<li class="active"><h2 class="active"><i class="fa fa-desktop"></i> DashBoard</h2></li>
				<li class><a href="register"><h2><i class="fa fa-file-text"></i> Coverage Request</h2></a></li>
				<li ><a href="view"><h2><i class="fa fa-list"></i> Previous Events</h2></a></li>
				<li><a href="logout"><h2><i class="fa fa-sign-out"></i> Logout</h2></a></li>
			</ul>
		</div>
		<div class="col-sm-10 col-xs-12 events">
		<table class="table table-responsive table-condensed">
			<tr>
				<td>Event Id</td>
				<td>Event Name</td>
				<td>Date</td>
				<td>Incharge</td>
				<td>Number</td>
				<td>Status</td>
				<td>Hubs</td>
				<td>Nick</td>
				<td>Folder</td>
			</tr>
			<tr>
			<?php
			foreach ($yuvraj as $row)
			{ ?>
				<td><?php echo $row['eventId'];?> </td>
				<td><?php echo $row['eventName'];?> </td>
				<td><?php echo $row['startDate'];?> </td>
				<td><?php echo $row['coverageIncharge'];?> </td>
				<td><?php echo $row['phNumber'];?> </td>
				<?php
					if($row['covered']==0)
					{
				?>
				<td><?php echo "To Be Covered" ?></td>
				<?php
				}
					else
					{
				?>
				<td><?php echo $row['status'];?> </td>
				<?php } ?>
				<td><?php echo $row['hub'];?></td>
				<td><?php echo $row['nick'];?> </td>
				<td><?php echo $row['folder'];?> </td>
			</tr>
	<?php
			} 
	
		
		
?>
	</div>
	</div>
</body>
</html>