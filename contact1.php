<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$message = $_POST['message'];
$mnum = $_POST['mnum'];



if ( $fname && $lname && $email && $message && $mnum  ) {

	mysql_connect('localhost' , 'root' , '') or die("Fail to Connect");

	mysql_select_db('dalethesis');

	mysql_query("INSERT INTO contact(No,fname,lname,email,message,mnum) VALUES ('','$fname','$lname','$email','$message','$mnum') ");

	$Submit = mysql_affected_rows();

				echo "	<script type='text/javascript'>
				if(confirm('Message Sent!'))
							{
								window.location.href= \"contact.php\";
							}else{
								window.location.href= \"contact.php\";
							}
					</script>";
	

}

else {

}
mysql_close();

?>
