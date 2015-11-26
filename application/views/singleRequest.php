<html xmlns="http://www.w3.org/1999/xhtml">
<body>
	 <?php echo validation_errors(); ?> 
  <?php echo form_open('admin/fillDetails/'.$eventId); ?> 
   <table border=1>
		<tr><td>EVENT ID </td><td><?php echo $eventId ?></td></tr>
		<tr><td>CLUB NAME </td><td> <?php echo $club_id ?></td></tr>
		<tr><td>EVENT NAME </td><td><?php echo $eventName ?></td></tr>
		<tr><td>START DATE </td><td><?php echo $startDate ?></td></tr>
		<tr><td>START TIME </td><td><?php echo $startTime1 ?></td></tr>
		<tr><td>END DATE </td><td><?php echo $endDate ?></td></tr>
		<tr><td>END TIME </td><td><?php echo $endTime1 ?></td></tr>
		<tr><td>START TIME </td><td><?php echo $startTime ?></td></tr>
		<tr><td>END TIME </td><td><?php echo $endTime ?></td></tr>
		<tr><td>VIDEO </td><td><?php echo $video ?></td></tr>
		<tr><td>PAYMENT DETAILS </td><td><?php echo $payment ?></td></tr>
		<tr><td>CONTACT NAME </td><td><?php echo $contactName ?></td></tr>
		<tr><td>CONTACT NUMBER </td><td><?php echo $number ?></td></tr>
	</table>
	<form>
		<?php 
			if($covered==0) {?>
			<label for="coverageIncharge">CoverageIncharge</label>
				<input type="input" name="coverageIncharge" /><br />
					<label for="phNumber">Number</label>
				<input type="input" name="phNumber" /><br />
			<?php
			}
			else
			{
				?>
					<label for="status">Status</label>
				<input type="radio" name="status" value="Being Sorted">Being Sorted<br>
				<input type="radio" name="status" value="Being Edited">Being Edited<br>
				<input type="radio" name="status" value="Uploaded">Uploaded<br>
				<input type="radio" name="status" value="Removed">Removed<br>
						<label for="hub">Hub</label>
				<input type="input" name="hub" placeholder="Leave blank if not applicable" /><br />
					<label for="nick">Nick</label>
				<input type="input" name="nick" placeholder="Leave blank if not applicable" /><br />
					<label for="folder">Folder</label>
				<input type="input" name="folder" placeholder="Leave blank if not applicable" /><br />
			<?php } ?>
			<input type="submit" name="submit" value="Submit">
	</form>		
				
</body>
</html>