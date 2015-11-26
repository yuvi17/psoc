<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<html>
	<head>
		<title>Add User </title>
	</head>
	<body>
	<center>
		<?php echo form_open('admin/createUser'); ?>
		<h2> Create a New User </h2>
		<form>
				<label for="clubId"><h2>Club Login Name</h2></label>
					<input type="input" name="clubId" class="form-control" required="required" placeholder="Enter Unique Name here" />
					<label class="active" for="password"><h2>Enter Password</h2></label>
					<input type="input" name="password" class="form-control" required="required" /><br />
						<label class="active" for="Id"><h2>Enter Club Id (Numeric)</h2></label>
					<input type="input" name="Id" class="form-control" required="required" placeholder="Id must be less than 19 for corpus clubs"/><br />
					<button  type="submit" role="submit">Create User</button>
		</form>

	</center>
	</body>
</html>
