<?php	
	$No = $_POST['No'];
	$status= $_POST['status'];
	$date = date('m/d/Y  h:i:a');

	include 'conn.php';
	$sql = "UPDATE reservation SET status = '$status' WHERE No = '$No';";
	if($connection->query($sql) === TRUE)
	{
		echo "<script type='text/javascript'>alert('Status Update Successfully');</script>";
		echo "<script>setTimeout(\"location.href = 'adminreservation.php';\",100);</script>";

		$note = "Admin updated the status of reservation no. " .$No." to mark as ".$status."";
		
		$SQL1 = "INSERT into adminactivity VALUES ('','$note','$date')";
		if($connection->query($SQL1) === TRUE) {

			}

	} else {
			echo "<script type='text/javascript'>alert('Failed to update');</script>";
			echo "<script>setTimeout(\"location.href = 'adminreservation.php';\",100);</script>";
		}
	 
	$connection->close();


		?>