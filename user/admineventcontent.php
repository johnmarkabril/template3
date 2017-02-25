		<div class="padding-top-bottom container">
			<div class="panel panel-default no-margin">
				<div class="panel-body no-border" style="background-color: #670a12;color:#FFFFFF;">
					<div><b><h4 class="no-margin">Add a New Event </b></h4></div>
				</div>
			</div>

			<div class="padding-top">
				<div class="jumbotron">
					<form action="adminevent1.php" method="post" enctype="multipart/form-data">
						<div class="form-group">
								<label class="">NAME OF CLIENT</label>
								<input type="text" class="full-width form-control" name="NAME" value="" required/>
						</div>

						<div class="form-group">
								<label class="">NAME OF EVENT</label>
								<input type="text" class="full-width form-control" name="TITLE" value="" required/>
						</div>

						<div class="form-group">
							<label class="">EVENT DESCRIPTION</label>
						<div><textarea class="form-control" name="DESCRIPTION" required style="max-height: 20%;min-width:100%;max-width: 100%;min-height: 20%;"></textarea></div>
						</div>

						<div class="form-group">
							<label class="">DATE AND TIME START</label>
							<input type="datetime-local"  class="full-width form-control" name="start"  value="" required/>
						</div>

						<div class="form-group">
							<label class="">DATE AND TIME START</label>
							<input type="datetime-local"  class="full-width form-control" name="end"  value="" required/>
						</div>	

						<div class="form-group">
							<label class="">IMAGE</label>
							<input type="file" name="image"  accept="image/*" required/>
						</div>
						
					<div class="form-group">
						<input type="text" class="full-width form-control" style="display:none;" name="status" value="Upcoming" readonly required/>
					</div>
						
						<div>
							<input type="Submit" name="Submit" class="btn btn-success btn-lg full-width" value="Add New Event"/>
						</div>
					</form>
				</div>
			</div>
		</div>