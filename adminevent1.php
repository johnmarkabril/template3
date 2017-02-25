<?php

	$NAME = $_POST['NAME'];
	$TITLE = $_POST['TITLE'];
	$DESCRIPTION = $_POST['DESCRIPTION'];
	$start = $_POST['start'];
	$end = $_POST['end'];
	$date = date('m/d/Y h:i:sa');
    $loc = $_SERVER['DOCUMENT_ROOT']."/dalethesis/image/";
    $status = $_POST['status'];

if ( isset($_POST['Submit']) ) {
        $image_name = addslashes($_FILES['image']['name']);

        move_uploaded_file($_FILES['image']['tmp_name'], $loc . $_FILES['image']['name']);

		include 'conn.php';
		$sql = "INSERT INTO event VALUES ('','$NAME','$TITLE','$DESCRIPTION','$start','$end','$image_name','$status') ";

		if($connection->query($sql) === TRUE) {
			echo "<script type='text/javascript'>alert('Event Added');</script>";
			echo "<script>setTimeout(\"location.href = '/dalethesis/adminevent.php';\",500);</script>";

			$note = "Admin added new event named: " . $TITLE . " ";

			$SQL1 = "INSERT into adminactivity VALUES ('','$note','$date')";
			if($connection->query($SQL1) === TRUE) {

			}
		} else {
			echo "<script type='text/javascript'>alert('Fail to Add Event');</script>";
			echo "<script>setTimeout(\"location.href = '/dalethesis/adminevent.php';\",500);</script>";
		}
	} else {
			echo "<script type='text/javascript'>alert('Fail to Add Event');</script>";
			echo "<script>setTimeout(\"location.href = '/dalethesis/adminevent.php';\",500);</script>";
	}

	$connection->close();


?>
