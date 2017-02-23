<?php
	$event_id = $_POST['event_id'];
	$start = $_POST['start'];
	$end = $_POST['end'];

	include 'conn.php';
	$sql = "UPDATE reservation SET start = '$start', `end` = '$end' WHERE NO = '$event_id'";
	if($connection->query($sql) === TRUE)
	{
		header('location: adminreservation.php');
	}
	else
	{
		echo"Error:".$sql." ".$connection->error;
	}
	$connection->close();
?>