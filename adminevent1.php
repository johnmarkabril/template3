<?php

	$NAME = $_POST['NAME'];
	$TITLE = $_POST['TITLE'];
	$DESCRIPTION = $_POST['DESCRIPTION'];
	$DATE = $_POST['DATE'];
	$HOUR = $_POST['HOUR'];
    $loc = $_SERVER['DOCUMENT_ROOT']."/dalethesis/image/";

if ( isset($_POST['Submit']) ) {
        $image_name = addslashes($_FILES['image']['name']);

        move_uploaded_file($_FILES['image']['tmp_name'], $loc . $_FILES['image']['name']);

		include 'conn.php';

		$sql = "INSERT INTO event VALUES ('','$NAME','$TITLE','$DESCRIPTION','$DATE','$HOUR','$image_name') ";

		if($connection->query($sql) === TRUE) {
			header("Location: /dalethesis/adminevent.php");
		} else {
			header("Location: /dalethesis/adminevent.php");
		}
	} else {
		header("Location: /dalethesis/adminevent.php");
	}

	$connection->close();


?>
