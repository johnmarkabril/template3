<div class="col-md-9">
<?php
	include 'conn.php';
	$query = "SELECT * FROM reservation ORDER BY No DESC";
	$data = $connection->query($query);
	if($data->num_rows >= 1){
?>
		<div class="container" style="width: 100%">
			<div class="panel panel-default container-fluid padding-top">
				<div class="panel-heading" >
					<div class="panel-body no-border" style="background-color: #670a12;color:#FFFFFF;">
						<b><h4 class="no-margin">List of Reservation </b></h4>
					</div>
				</div>
				<div class="panel-body table-responsive">
					<table class="table">
						<tr >
							<td style="color:red"><strong><center>Reservation ID</center></strong></td>
							<td style="color:red"><strong><center>First Name</center></strong></td>
							<td style="color:red"><strong><center>Last Name</center></strong></td>
							<td style="color:red"><strong><center>Mobile Number</center></strong></td>
							<td style="color:red"><strong><center>Date and Time Start</center></strong></td>
							<td style="color:red"><strong><center>Date and Time End</center></strong></td>
							<td style="color:red"><strong><center>Number of Person</center></strong></td>
							<td style="color:red"><strong><center>Status</center></strong></td>
						</tr>
						<?php
					        while ($row = $data->fetch_assoc()){
					        	$No = $row["No"];
					        	$fname = $row["fname"];
								$lname = $row["lname"];
								$mnum= $row["mnum"];
								$start= $row["start"];
								$end= $row["end"];
								$noPer= $row["noPer"];
								$status= $row["status"];
						?>
								<tr>
									<td><strong><center><?php echo $No; ?></center></strong></td>
									<td><strong><center><?php echo $fname; ?></center></strong></td>
									<td><strong><center><?php echo $lname; ?></center></strong></td>
									<td><strong><center><?php echo $mnum; ?></center></strong></td>
									<td><strong><center><?php echo $start; ?></center></strong></td>
									<td><strong><center><?php echo $end; ?></center></strong></td>
									<td><strong><center><?php echo $noPer ?></center></strong></td>
									<td><strong><center><?php echo $status ?></center></strong></td>
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

	
