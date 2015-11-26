<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');  ?>

<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, minimum-scale=1.0, maximum-scale=3.0"> 
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/request_custom.css">
						<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>assets/css/bootstrap.min.js"></script>
	      <script src="//cdn.transifex.com/live.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Quicksand:400,700|Muli|Nunito|Amaranth' rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/logo.png" type="image/x-icon">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<title>
			PSoC Coverage Form
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
				<li class="active"><a href="register"><h4>COVERAGE REQUEST</h4></a></li>
				<li class=><a href="load"><h4>DASHBOARD</h4></a></li>
		  </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
</header>
	<div class="row main contanier-fluid">
		<div class="col-sm-3 visible-sm visible-md visible-lg side-nav pull-left">
			<ul >
				<li><a href="load"><h2><i class="fa fa-desktop"></i> DashBoard</h2></a></li>
				<li class="active"><h2 class="active"><i class="fa fa-file-text"></i> Coverage</h2></li>
				<li ><a href="view"><h2><i class="fa fa-list"></i> Previous Events</h2></a></li>
				<li><a href="logout"><h2><i class="fa fa-sign-out"></i> Logout</h2></a></li>
			</ul>
		</div>
		<div class="col-sm-9 form-content">
<?php
			echo form_open('register/create'); ?>
		<div class="center">
				<span>	<h2>Welcome <?php echo $username;?></h2></span>
		<span>	<img src="<?php echo base_url(); ?>assets/images/<?php echo $username.".png";?>" width="80px"></img> </span>
			<br>
			<form class="form-group details">
		</div>	
					<label class="active" for="eventName"><h2>Event Name</h2></label>
					<input type="input" name="eventName" class="form-control" required="required" /><br />
					<label class="active"for="venue"><h2>Venue</h2></label>
				<input type="input" name="venue" class="form-control" required="required" /><br />
				<label class="active"for="startDate"><h2>Start Date</h2></label>
				<input type="input" data-prdata-date-format="yyyy/mm/dd" ovide="datepicker" name="startDate" class="datepicker form-control"  required="required" placeholder="yyyy -mm-dd"/><br />
			<div class="row">
				<div class="col-sm-6 col-xs-12">
				<label class="active"for="startTime1"><h2>Start Time</h2></label>
				<input type="input" name="startTime1" class="form-control"  required="required" placeholder="hh-mm-ss"/><br />
				</div>
				<div class="col-sm-6 col-xs-12">
				<label class="active"for="endTime1"><h2>End Time</h2></label>
				<input type="input" name="endTime1" class="form-control" required="required" placeholder="hh-mm-ss"/><br />
				</div>
			</div>
				<label class="active"for="endDate"><h2>End Date</h2></label>
				<input type="input" name="endDate" class="form-control" placeholder="dd-mm-yyyy" /><br />
				<div class="row">
				<div class="col-sm-6 col-xs-12">
				<label class="active"for="startTime"><h2>Start Time</h2></label>
				<input type="input" name="startTime" class="form-control"  placeholder="hh-mm-ss"/><br />
				</div>
				<div class="col-sm-6 col-xs-12">
				<label class="active"for="endTime"><h2>End Time</h2></label>
				<input type="input" name="endTime" class="form-control"  placeholder="hh-mm-ss"/><br />
				</div>
			</div>
				<label class="active"for="video"><h2>Video Coverage </h2></label>
				<br>
				<input type="radio" name="video" class=" pull-left" value="YES"><h2>YES</h2>
				<input type="radio" name="video" class=" pull-left" value="NO"><h2>NO</h2><br>

			   <?php 
				if($id>19)
				
					echo '<label class="active" for="payment">payment</label>
					<br>
			  <input type="radio" name="payment" class="form-control" value="cheque"><h2>Cheque</h2><br>
			<input type="radio" name="payment"  value="DD"><h2>DD</h2><br>
			<input type="radio" name="payment"  value="Cash"><h2>Cash</h2><br>'
				?>
				<h2>Contact Details</h2>
				<br>
				<label class="active"for="contactName"><h2>Name</h2></label>
				<input type="input" name="contactName" class="form-control" required="required"/><br />
				<label class="active"for="number"><h2>Number</h2></label>
				<input type="input" name="number" class="form-control" required="required"/><br />
					<label class="active"for="email"><h2>EMail-Id</h2></label>
				<input type="input" name="email" class="form-control" required="required"/><br />
				<div class="center">
				<button type="submit" name="submit" class=" center btn btn-lg btn-info  value="Submit">Submit</button>
				</div>
				<br>
				<br>
			</div>
		</form>
	</div>
	</body>
	<script>
		$('.datepicker').datepicker()
	</script>
</html>