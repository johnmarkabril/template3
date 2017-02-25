<?php
	if ( isset($_POST['bodycont_submit']) ) {
?>
<div class="container padding-top">
	<div class="row">
		<div class="col-md-12">
			<div class="asdf">
				<img src="image/carousel3.jpg" style="width:100%;height:70%;">
				<div class="caption post-content" style="color: black;">
				<center>
					<br><br><br><br><div><h1><b>Book Your Reservation</b></h1></div>
					<h3><b><a href ="dalethesis.php">Home </a>| Reservation Page</b></h3></center>
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
					<form action="reservation1.php" method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="">FIRST NAME</label>
								<input type="text" class="full-width form-control" placeholder="Juan" value="<?php echo $_POST['fname']; ?>" required/>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="">LAST NAME</label>
								<input type="text" class="full-width form-control" placeholder="Dela Cruz" value="<?php echo $_POST['lname']; ?>" required/>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="">MOBILE NUMBER</label>
						<input type="text" class="full-width form-control" placeholder="+639123456789" pattern="^(09|\+639)\d{9}$" value="<?php echo $_POST['mnum']; ?>" required/>
					</div>

					<div class="form-group">
						<label class="">DATE AND TIME START</label>
						<input type="datetime-local" step="7200" class="full-width form-control" name="start"  value="<?php echo $_POST['start']; ?>" required/>
					</div>

					<div class="form-group">
						<label class="">DATE AND TIME END</label>
						<input type="datetime-local" step="7200" class="full-width form-control" name="end"  value="<?php echo $_POST['end']; ?>" required/>
					</div>

					<div class="form-group">
						<label class="">NO. OF PERSON</label>
						<input type="number" class="full-width form-control" placeholder="*" value="<?php echo $_POST['noPer']; ?>" required/>
					</div>

					<div class="form-group">
						<input type="text" class="full-width form-control" style="display:none;" name="status" value="Reserved" readonly required/>
					</div>


					<div>
						<input type="Submit" class="btn btn-success btn-lg full-width" name=submit value="Submit"/>
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
				<img src="image/carousel3.jpg" style="width:100%;height:70%;">
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
					<div><h4 class="no-margin">Book a Reservation Now !!!</h4></div>
				</div>
			</div>

			<div class="padding-top">
				<div class="jumbotron">
				<form action="reservation1.php" method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="">FIRST NAME</label>
								<input type="text" class="full-width form-control" name="fname" placeholder="Juan" value="" required/>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label class="">LAST NAME</label>
								<input type="text" class="full-width form-control" name="lname" placeholder="Dela Cruz" value="" required/>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="">MOBILE NUMBER</label>
						<input type="text" class="full-width form-control" name="mnum" placeholder="+639123456789" pattern="^(09|\+639)\d{9}$" value="" required/>
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
						<label class="">NO. OF PERSON</label>
						<input type="number" class="full-width form-control" name="noPer" placeholder="*" value="" required/>
					</div>

					<div class="form-group">
						<input type="text" class="full-width form-control" style="display:none;" name="status" value="Reserved" readonly required/>
					</div>

					<div>
						<input type="Submit" class="btn btn-success btn-lg full-width" value="Submit"/>
					</div>
				</div>
			</div>
		</div>
<?php
	}
?>

