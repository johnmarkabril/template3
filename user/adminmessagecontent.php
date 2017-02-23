<?php
	include 'conn.php';
	$query = "SELECT * FROM contact ORDER BY No DESC";
	$data = $connection->query($query);

	if($data->num_rows >= 1){
?>
		<div class="padding-top-bottom container">
			<div class="panel panel-default container-fluid">
				<div class="panel-heading">
			    	<h1 class="panel-title"><strong><b>All Messages</b></strong></h1>
				</div>
				<div class="panel-body table-responsive">
					<table class="table table-hover">
						<tr>
							<td style=\"color:red\"><strong><center>First Name</center></strong></td>
							<td style=\"color:red\"><strong><center>Last Name</center></strong></td>
							<td style=\"color:red\"><strong><center>Email Address</center></strong></td>
							<td style=\"color:red\"><strong><center>Message</center></strong></td>
							<td style=\"color:red\"><strong><center>Contact Number</center></strong></td>
						</tr>
						<?php
					        while ($row = $data->fetch_assoc()){
					        	$fname = $row["fname"];
								$lname = $row["lname"];
								$email= $row["email"];
								$message= $row["message"];
								$mnum= $row["mnum"];
						?>
								<tr>
									<td><strong><center><?php echo $fname; ?></center></strong></td>
									<td><strong><center><?php echo $lname; ?></center></strong></td>
									<td><strong><center><?php echo $email; ?></center></strong></td>
									<td><strong><center><?php echo $message; ?></center></strong></td>
									<td><strong><center><?php echo $mnum; ?></center></strong></td>
								</tr>
		        		<?php
		        			}
		        		?>
					</table>
				</div>
			</div>
		</div>
<?php
	}

?>
			


	
