<!DOCTYPE HTML>
<html lang="en">
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
			PSoC Login Form
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
				<li ><a href="home/register"><h4>REGISTER</h4></a></li>
				<li class="active"><a href="#"><h4>LOGIN</h4></a></li>
		  </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
</header>
 <body>
 <div class="container login">
   <div class="form-group">
   <?php echo form_open('verifylogin'); ?>
   <?php echo validation_errors();?>
     <label for="username"><h2>Username:</h2></label>
     <input type="text" class="form-control" size="40" required="required" id="username" name="username"/>
     <br/>
     <label for="password"><h2>Password</h2></label>
     <input type="password" class="form-control" size="40" required="required" id="passowrd" name="password"/>
     <br/>
     <input class="btn btn-default btn-primary center-align" role="submit" type="submit" value="Login"> 
	 </div>
   </form>
   </div>
 </body>
</html>