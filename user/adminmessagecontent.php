<div class="col-md-9">
<?php
	include 'conn.php';
	$mark ='Unread';
	$query = "SELECT * FROM contact WHERE mark = '".$mark."'";
	$data = $connection->query($query);

	if($data->num_rows >= 1){
?>
		<div class="padding-top-bottom container" style="width: 100%">
			<div class="panel panel-default container-fluid padding-top">
				<div class="panel-heading">
					<div class="panel-body no-border" style="background-color: #670a12;color:#FFFFFF;">
						<b><h4 class="no-margin">Message List</b></h4>
					</div>
				</div>
				<div class="panel-body table-responsive">
					<table class="table table-hover">
						<tr >
							<td style="color:red"><strong><center>Message No.</center></strong></td>
							<td style="color:red"><strong><center>First Name</center></strong></td>
							<td style="color:red"><strong><center>Last Name</center></strong></td>
							<td style="color:red"><strong><center>Email Address</center></strong></td>
							<td style="color:red"><strong><center>Message</center></strong></td>
							<td style="color:red"><strong><center>Contact Number</center></strong></td>
							<td style="color:red"><strong><center>Date and Time Received</center></strong></td>
							<td style="color:red"><strong><center>Status</center></strong></td>
							
						</tr>
						<?php
					        while ($row = $data->fetch_assoc()){
					        	$No = $row["No"];
					        	$fname = $row["fname"];
								$lname = $row["lname"];
								$email= $row["email"];
								$message= $row["message"];
								$mnum= $row["mnum"];
								$date= $row["date"];
								$mark= $row["mark"];
						?>
								<tr>
									<td><strong><center><?php echo $No; ?></center></strong></td>
									<td><strong><center><?php echo $fname; ?></center></strong></td>
									<td><strong><center><?php echo $lname; ?></center></strong></td>
									<td><strong><center><?php echo $email; ?></center></strong></td>
									<td><strong><center><?php echo $message; ?></center></strong></td>
									<td><strong><center><?php echo $mnum; ?></center></strong></td>
									<td><strong><center><?php echo $date; ?></center></strong></td>
									<td><strong><center><?php echo $mark; ?></center></strong></td>

									<div>
		
									</div>
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

</div>

<div class="col-md-3">
<div class="panel panel-default no-margin">
</div>

				<div class="padding-top-bottom">
					<div class="panel-body no-border" style="background-color: #670a12;color:#FFFFFF;">
						<b><h4 class="no-margin">Update Message Status</b></h4>
					</div>
				</div>

				<div class="jumbotron">
				<form action="statusupdate_message.php" method="post">
					<div class="form-group">
							<label class="">Message No.</label>
							<input type="text" class="full-width form-control" name="No" value="" required/>
					</div>

					<div class="form-group">
							<label class="">Status</label>
							<input type="text" class="full-width form-control" value="Read" name="mark" readonly value="" required/>
					</div>
					<div>
							<input type="Submit" name="Submit" class="btn btn-success btn-lg full-width" value="Update"/>
					</div>
					</div>			


	
