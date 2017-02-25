<?php
	$event_id = $_POST['event_id'];
	$start = $_POST['start'];
	$end = $_POST['end'];
	$date = date('m/d/Y h:i:sa');

	include 'conn.php';
	$sql = "UPDATE event SET start = '$start', `end` = '$end' WHERE NO = '$event_id'";
	if($connection->query($sql) === TRUE)
	{
		header('location: admineventlist.php');
		
		$note = "Admin updated the schedule of Event No. " .$event_id."  New Date and Time " . $start . " - " . $end . "";
		$SQL1 = "INSERT into adminactivity VALUES ('','$note','$date')";
		if($connection->query($SQL1) === TRUE) {

			}
	}
	else
	{
		echo"Error:".$sql." ".$connection->error;
	}
	$connection->close();
?>