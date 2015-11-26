<html xmlns="http://www.w3.org/1999/xhtml">
<body>
<?php
/*	if($q)
		{*/
		//$data=$data->result();
			foreach ($data as $row)
			{
			echo $row['eventId'];
			echo $row['club'];
			echo $row['startDate'];
				//die();
			echo '<br>';
			echo "That's all folks";
			}
		//}
	/*	else
		{
		echo "No new Request for today";*/
		
		
?>

<a href="back">Home</a>
<a href="logout">Logout</a>
</body>
</html>