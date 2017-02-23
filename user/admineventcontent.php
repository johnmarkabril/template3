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
							<label class="">DATE</label>
							<input type="date" class="full-width form-control" name="DATE" value="" required/>
						</div>

						<div class="form-group">
							<label class="">Time</label>
							<input type="Time" class="full-width form-control" name="HOUR" placeholder="12:00" value="" required/>
						</div>

						<div class="form-group">
							<label class="">IMAGE</label>
							<input type="file" name="image"  accept="image/*" required/>
						</div>
						
						<div>
							<input type="Submit" name="Submit" class="btn btn-success btn-lg full-width" value="Add New Event"/>
						</div>
					</form>
				</div>
			</div>
		</div>