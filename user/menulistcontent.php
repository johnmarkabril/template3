<div class="col-md-9">
<?php
	include 'conn.php';
	$query = "SELECT * FROM product";
	$data = $connection->query($query);

	if($data->num_rows >= 1){
?>
		<div class="padding-top-bottom container" style="width: 100%;">
			<div class="panel panel-default container-fluid">
				<div class="panel-heading">
			    	<CENTER><h4 class="panel-title"><strong><b>List of Menu</b></strong></h4></CENTER>
				</div>
				<div class="panel-body table-responsive">
					<table class="table">
						<tr>
							<td style=\"color:red\"><strong><center>Menu ID</center></strong></td>
							<td style=\"color:red\"><strong><center>Name</center></strong></td>
							<td style=\"color:red\"><strong><center>Description</center></strong></td>
							<td style=\"color:red\"><strong><center>Price</center></strong></td>
							<td style=\"color:red\"><strong><center>Category</center></strong></td>
							<td style=\"color:red\"><strong><center>Image</center></strong></td>
							<td style=\"color:red\"><strong><center>Status</center></strong></td>
						</tr>
						<?php
					        while ($row = $data->fetch_assoc()){
					        	$No = $row["No"];
					        	$Name = $row["Name"];
								$Description = $row["Description"];
								$price= $row["price"];
								$Category= $row["Category"];
								$Imageurl= $row["Imageurl"];
								$status= $row["status"];
						?>
								<tr>
									<td><strong><center><?php echo $No; ?></center></strong></td>
									<td><strong><center><?php echo $Name; ?></center></strong></td>
									<td><strong><center><?php echo $Description; ?></center></strong></td>
									<td><strong><center><?php echo $price; ?></center></strong></td>
									<td><strong><center><?php echo $Category; ?></center></strong></td>
									<td><strong><center><?php echo $Imageurl; ?></center></strong></td>
									<td><strong><center><?php echo $status; ?></center></strong></td>
									<td>
									</td>
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
						<b><h4 class="no-margin">Update Menu Status</b></h4>
					</div>
				</div>

				<div class="jumbotron">
				<form action="statusupdate.php" method="post">
					<div class="form-group">
							<label class="">Menu ID</label>
							<input type="text" class="full-width form-control" name="No" value="" required/>
					</div>

						<div class="form-group">
							<label class="">Status</label><br>
								<select name="status" style="width:100%;height:5%">
									  <option value="Available">Available</option>
									  <option value="Not Available">Not Available</option>
								</select>
						</div>
					<div>
							<input type="Submit" name="Submit" class="btn btn-success btn-lg full-width" value="Update"/>
					</div>
					</div>
</div>
</form>
</div>
</b>
</div>
</div>
</div>
			


	
