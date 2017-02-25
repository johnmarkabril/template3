<?php
	$Name = $_POST['Name'];
	$Description = $_POST['Description'];
	$price = $_POST['price'];
	$Category = $_POST['Category'];
	$date = date('m/d/Y h:i:sa');
	$loc = $_SERVER['DOCUMENT_ROOT']."/dalethesis/image/";
	$status = $_POST['status'];

	


if ( isset($_POST['Submit']) ) {
        $image_name = addslashes($_FILES['image']['name']);

        move_uploaded_file($_FILES['image']['tmp_name'], $loc . $_FILES['image']['name']);

        include 'conn.php';

		$sql = "INSERT INTO product VALUES ('','$Name','$Description','$image_name','$price','$Category','$status') ";

		if($connection->query($sql) === TRUE) {
			echo "<script type='text/javascript'>alert('Menu Added');</script>";	
			echo "<script>setTimeout(\"location.href = '/dalethesis/adminmenu.php';\",500);</script>";	

			$note = "Admin added new items on menu Named:" . $Name . "";

			$SQL1 = "INSERT into adminactivity VALUES ('','$note','$date')";
			if($connection->query($SQL1) === TRUE) {

			}	
		} else {
			echo "<script type='text/javascript'>alert('Failed to add');</script>";
			echo "<script>setTimeout(\"location.href = '/dalethesis/adminmenu.php';\",500);</script>";
		}
	} else {
			echo "<script type='text/javascript'>alert('Failed to add');</script>";
			echo "<script>setTimeout(\"location.href = '/dalethesis/adminmenu.php';\",500);</script>";
	}
	
	$connection->close();


?>
