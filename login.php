<?php
	
	session_start();

	if ( isset($_POST['submit']) ) {
		if ( empty( $_SESSION['session_data'] ) ) {
			$email = $_POST['email'];
			$pass = $_POST['pass'];

			include 'conn.php';
			$query = "SELECT * FROM user WHERE email = '".$email."' OR password = '".$pass."' ";
			$data = $connection->query($query);
			if($data->num_rows >= 1){
		        while ($row = $data->fetch_assoc()){
		        	if ( $email == $row['email'] && $pass == $row['password'] ) {
						$_SESSION['session_data'] = $row;
						header('Location: admin.php');
						exit();
					} else {
						header('Location: index.php');
						exit();
					}
		        }
		    } else {
		    	header('Location: index.php');
				exit();
		    }
		} else {
			header('Location: admin.php');
			exit();
		}
	} else {
		header('Location: index.php');
		exit();
	}

?>