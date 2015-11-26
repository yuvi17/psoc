<html xmlns="http://www.w3.org/1999/xhtml">
<body>
<?php
	if($result)
		{ ?>
		<table border=1>
			<tr>
				<td> Event Id </td>
				<td> Club </td>
				<td> Date </td>
				<td> Details </td>
			</tr>

			<?php
			foreach ($result as $row)
			{?>
			
			<tr>
			
			<td><?php echo $row['eventId'];?> </td> 
			<td><?php echo $row['club_id'];?> </td>
			<td><?php echo $row['startDate']; ?></td>
			<td><a href="getRequest/<?php echo $row['eventId']?>" >View</a>
			</tr>
			<?php
			} 
		}
		else
		{
		echo "No new Request for today";
		}
		
?>

<a href="back">Home</a>
<a href="logout">Logout</a>
</body>
</html>