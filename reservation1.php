<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mnum = $_POST['mnum'];
$start = $_POST['start'];
$end = $_POST['end'];
$noPer = $_POST['noPer'];
$status = $_POST['status'];

include 'conn.php';

$sql = "INSERT INTO reservation VALUES ('','$fname','$lname','$mnum','$start','$end','$noPer','$status')";

if($connection->query($sql) === TRUE) {
			echo "<script type='text/javascript'>alert('Reservation Sucessfully');</script>";
			echo "<script>setTimeout(\"location.href = '/dalethesis/reservation.php';\",1500);</script>";
		} else {
			echo "<script type='text/javascript'>alert('Reservation Failed');</script>";
			echo "<script>setTimeout(\"location.href = '/dalethesis/reservation.php';\",1500);</script>";
		}
	 
	$connection->close();


?>
