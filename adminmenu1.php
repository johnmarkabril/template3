<?php

	$Name = $_POST['Name'];
	$Description = $_POST['Description'];
	$price = $_POST['price'];
	$Category = $_POST['Category'];
	$loc = $_SERVER['DOCUMENT_ROOT']."/dalethesis/image/";

	// $timeGet = $_POST['time'];
	// $Converttime  = date("H:i", strtotime($timeGet));

	// $dateGet = $_POST['date'];
	// $Convertdate = date("YYYY-MM-DD", strtotime( $timeGet ));

	// $dateTime = $Convertdate." ".$Converttime;	

if ( isset($_POST['Submit']) ) {
        $image_name = addslashes($_FILES['image']['name']);

        move_uploaded_file($_FILES['image']['tmp_name'], $loc . $_FILES['image']['name']);

		include 'conn.php';

		$sql = "INSERT INTO product VALUES ('','$Name','$Description','$price','$Category','$image_name') ";

		if($connection->query($sql) === TRUE) {
			header("Location: /dalethesis/adminmenu.php");
		} else {
			header("Location: /dalethesis/adminmenu.php");
		}
	} else {
		header("Location: /dalethesis/adminmenu.php");
	}
	
	$connection->close();


?>
