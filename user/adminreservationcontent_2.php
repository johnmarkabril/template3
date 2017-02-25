<div class="col-md-3">
<div class="panel panel-default no-margin">
				</div>
				<div class="padding-bottom">
					<div class="panel-body no-border" style="background-color: #670a12;color:#FFFFFF;">
						<b><h4 class="no-margin">Update Reservation </b></h4>
					</div>
				</div>

				<div class="jumbotron">
				<form action="statusupdate_reservation.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label class="">Reservation ID</label>
						<input type="text" class="full-width form-control" name="No" value="" required/>
					</div>

						<div class="form-group">
							<label class="">Status</label><br>
								<select name="status" style="width:100%;height:5%">
									  <option value="Reserved">Reserved</option>
									  <option value="Reservation Done">Reservation Done</option>
									  <option value="Reservation Cancelled">Reservation Cancelled</option>
								</select>
						</div>

						<div>
							<input type="Submit" name="Submit" class="btn btn-success btn-lg full-width" name=submit value="Update"/>
					</div>

					</div>
</div>