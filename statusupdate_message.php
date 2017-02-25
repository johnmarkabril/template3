<?php
	$mark = $_POST['mark'];
	$No = $_POST['No'];
	$date = date('m/d/Y  h:i:a');

	include 'conn.php';
	$sql = "UPDATE contact SET mark = '$mark' WHERE No = '$No';";
	if($connection->query($sql) === TRUE)
	{
		echo "<script type='text/javascript'>alert('Status Update Successfully');</script>";
		echo "<script>setTimeout(\"location.href = 'adminmessage.php';\",100);</script>";

		$note = "Admin updated the status of message No." .$No." to mark as ".$mark."";
		$SQL1 = "INSERT into adminactivity VALUES ('','$note','$date')";
		if($connection->query($SQL1) === TRUE) {

			}

	} else {
			echo "<script type='text/javascript'>alert('Failed to update');</script>";
			echo "<script>setTimeout(\"location.href = 'adminmessage.php';\",100);</script>";
		}
	 
	$connection->close();


		?>