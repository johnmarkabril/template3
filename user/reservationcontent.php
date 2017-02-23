<?php
	if ( isset($_POST['bodycont_submit']) ) {
?>

<div class="container padding-top">
	<div class="row">
		<div class="col-md-12">
			<div class="asdf">
				<img src="image/carousel3.jpg" style="width:100%;height:60%;">
				<div class="caption post-content" style="color: black;">
				<center>
					<br><br><br><br><div><h1><b>Book Your Reservation</b></h1></div>
					<h3><b><a href ="http://localhost/dalethesis/">Home </a>| Reservation Page</b></h3></center>
				</div>
			</div>
		</div>
	</div>
</div>
		<div class="padding-top-bottom container">

			<div class="panel panel-default no-margin">
				<div class="panel-body no-border" style="background-color: #670a12;color:#FFFFFF;">
					<div><h4 class="no-margin">Please verify your reservation</h4></div>
				</div>
			</div>
			<div class="padding-top">
				<div class="jumbotron">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="">FIRST NAME</label>
								<input type="text" class="full-width form-control" placeholder="ex.Juan" value="<?php echo $_POST['fname']; ?>" required/>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="">LAST NAME</label>
								<input type="text" class="full-width form-control" placeholder="ex.Dela Cruz" value="<?php echo $_POST['lname']; ?>" required/>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="">MOBILE NUMBER</label>
						<input type="text" class="full-width form-control" placeholder="+639*********" value="<?php echo $_POST['mnum']; ?>" required/>
					</div>
					<div class="form-group">
						<label class="">DATE</label>
						<input type="date" class="full-width form-control" name="reserveDate" placeholder="Date *" value="<?php echo $_POST['reserveDate']; ?>" required/>
					</div>
					<div class="form-group">
						<label class="">TIME</label>
						<input type="time" class="full-width form-control" placeholder="Time *" value="<?php echo $_POST['timeSet']; ?>" required/>
					</div>
					<div class="form-group">
						<label class="">NO. OF PERSON</label>
						<input type="number" class="full-width form-control" placeholder="*" value="<?php echo $_POST['noPer']; ?>" required/>
					</div>
					<div>
						<input type="button" class="btn btn-success btn-lg full-width" value="Submit"/>
					</div>
				</div>
			</div>
		</div>
<?php
	} else {
?>

<div class="container padding-top">
	<div class="row">
		<div class="col-md-12">
			<div class="asdf">
				<img src="image/carousel3.jpg" style="width:100%;height:60%;">
				<div class="caption post-content" style="color: black;">
				<center>
					<br><br><br><br><div><h1><b>Book Your Reservation</b></h1></div>
					<h3><b><a href ="http://localhost/dalethesis/">Home </a>| Reservation Page</b></h3></center>
				</div>
			</div>
		</div>
	</div>
</div>
		<div class="padding-top-bottom container">

			<div class="panel panel-default no-margin">
				<div class="panel-body no-border" style="background-color: #670a12;color:#FFFFFF;">
					<div><h4 class="no-margin">Please verify your reservation</h4></div>
				</div>
			</div>

			<div class="padding-top">
				<div class="jumbotron">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="">FIRST NAME</label>
								<input type="text" class="full-width form-control" placeholder="ex.Juan" value="" required/>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="">LAST NAME</label>
								<input type="text" class="full-width form-control" placeholder="ex.Dela Cruz" value="" required/>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="">MOBILE NUMBER</label>
						<input type="text" class="full-width form-control" placeholder="+639*********" value="" required/>
					</div>
					<div class="form-group">
						<label class="">DATE</label>
						<input type="date" class="full-width form-control" name="reserveDate" placeholder="Date *" value="" required/>
					</div>
					<div class="form-group">
						<label class="">TIME</label>
						<input type="time" class="full-width form-control" placeholder="Time *" value="" required/>
					</div>
					<div class="form-group">
						<label class="">NO. OF PERSON</label>
						<input type="number" class="full-width form-control" placeholder="*" value="" required/>
					</div>
					<div>
						<input type="button" class="btn btn-success btn-lg full-width" value="Submit"/>
					</div>
				</div>
			</div>
		</div>
<?php
	}
?>

