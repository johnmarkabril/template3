<div class="col-md-3">
<div class="panel panel-default no-margin">
</div>

				<div class="padding-top-bottom">
					<div class="panel-body no-border" style="background-color: #670a12;color:#FFFFFF;">
						<b><h4 class="no-margin">Update Event Status</b></h4>
					</div>
				</div>

				<div class="jumbotron">
				<form action="statusupdate_event.php" method="post">
					<div class="form-group">
							<label class="">Event ID</label>
							<input type="text" class="full-width form-control" name="NO" value="" required/>
					</div>

						<div class="form-group">
							<label class="">Status</label><br>
								<select name="status" style="width:100%;height:5%">
									  <option value="Upcoming">Upcoming</option>
									  <option value="Done">Done</option>
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