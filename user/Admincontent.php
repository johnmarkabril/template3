<div class="col-md-1"></div>
<div class="col-md-10">
<?php
	include 'conn.php';
	$query = "SELECT * FROM adminactivity ORDER BY number DESC ";
	$data = $connection->query($query);
	if($data->num_rows >= 1){
?>
		<div class="padding-top-bottom container" style="width: 100%;">
			<div class="panel panel-default container-fluid padding-top">
				<div class="panel-heading" >
			<div class="panel-body no-border" style="background-color: #670a12;color:#FFFFFF;">
				<div><h3 class="no-margin"><center>Activity Log</center></h3></div>
			</div>
				<div class="panel-body table-responsive">
					<table class="table">
						<tr >
							<td style="color:red"><strong><center>Action</center></strong></td>
							<td style="color:red"><strong><center>Date and Time</center></strong></td>
						</tr>
						<?php
					        while ($row = $data->fetch_assoc()){
						        	$action = $row["action"];
									$date = $row["date"];
						?>
								<tr>
									<td><strong><center><?php echo $action; ?></center></strong></td>
									<td><strong><center><?php echo $date; ?></center></strong></td>
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