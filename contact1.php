<?php

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$mnum = $_POST['mnum'];
	$mark = $_POST['mark'];
	$date = date('m/d/Y h:i:sa');

	include 'conn.php';

	$sql = "INSERT INTO contact VALUES ('','$fname','$lname','$email','$message','$mnum','$date','$mark') ";

	if($connection->query($sql) === TRUE) {
			echo "<script type='text/javascript'>alert('Message Sent');</script>";
			echo "<script>setTimeout(\"location.href = '/dalethesis/contact.php';\",500);</script>";
		} else {
			echo "<script type='text/javascript'>alert('Message Not Sent');</script>";
			echo "<script>setTimeout(\"location.href = '/dalethesis/contact.php';\",500);</script>";
		}
	 
	$connection->close();


?>

