<div class="col-md-9">
<?php
	include 'conn.php';
	$query = "SELECT * FROM event  ORDER BY No DESC ";
	$data = $connection->query($query);
	if($data->num_rows >= 1){
?>
		<div class="padding-top-bottom container" style="width: 100%">
			<div class="panel panel-default container-fluid padding-top">
					<div class="panel-body no-border" style="background-color: #670a12;color:#FFFFFF;">
						<b><h4 class="no-margin">List of Event</b></h4>
					</div>
				<div class="panel-body table-responsive">
					<table class="table">
						<tr >
							<td style="color:red"><strong><center>Event ID</center></strong></td>
							<td style="color:red"><strong><center>Name of Client</center></strong></td>
							<td style="color:red"><strong><center>Name of Event</center></strong></td>
							<td style="color:red"><strong><center>Event Description</center></strong></td>
							<td style="color:red"><strong><center>Date and Time Start</center></strong></td>
							<td style="color:red"><strong><center>Date and Time End</center></strong></td>
							<td style="color:red"><strong><center>Image</center></strong></td>
							<td style="color:red"><strong><center>Status</center></strong></td>
						</tr>
						<?php
					        while ($row = $data->fetch_assoc()){
					        	$NO = $row["NO"];
					        	$NAME = $row["NAME"];
								$TITLE = $row["TITLE"];
								$DESCRIPTION= $row["DESCRIPTION"];
								$start= $row["start"];
								$end= $row["end"];
								$IMAGEURL= $row["IMAGEURL"];
								$status = $row["status"];
						?>
								<tr>
									<td><strong><center><?php echo $NO; ?></center></strong></td>
									<td><strong><center><?php echo $NAME; ?></center></strong></td>
									<td><strong><center><?php echo $TITLE; ?></center></strong></td>
									<td><strong><center><?php echo $DESCRIPTION; ?></center></strong></td>
									<td><strong><center><?php echo $start; ?></center></strong></td>
									<td><strong><center><?php echo $end; ?></center></strong></td>
									<td><strong><center><?php echo $IMAGEURL ?></center></strong></td>
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