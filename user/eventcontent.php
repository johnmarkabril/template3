<div class="container padding-top">
	<div class="row">
		<div class="col-md-12">
			<div class="asdf">
				<img src="image/carousel3.jpg" style="width:100%;height:70%;">
				<div class="caption post-content" style="color: black;">
				<center>
					<br><br><br><br><div><h1><b>Our Restaurant Events</b></h1></div>
					<h3><b><a href ="http://localhost/dalethesis/">Home </a>| Event Page</b></h3></center>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="padding-top-bottom">
	<div class="container">

		<div class="panel panel-default no-margin">
			<div class="panel-body no-border" style="background-color: #670a12;color:#FFFFFF;">
				<div><h4 class="no-margin">Restaurant Events</h4></div>
			</div>
		</div>

		<div class="">
			<div class="row">
							<?php
								include 'conn.php';

								$query = "SELECT * FROM event ORDER BY NO DESC";
								$data = $connection->query($query);
								$query = mysql_query("SELECT * FROM event ORDER BY NO DESC");

								while ($row = $data->fetch_assoc()){
							?>
								<a data-toggle="modal" data-target="#my<?php echo $row['NO'];?>">
									<div class="col-md-6 padding-top">
										<div class="panel panel-default no-margin no-border">
										  	<div class="panel-body no-border">
										  		<div class="row">
										  			<div class="col-md-7">
												  		<center>
												  			<img src="image/<?php echo $row['IMAGEURL']; ?>" class="img-responsive" style="height:40%; width:100%;"/>
												  		</center>
										  			</div>
										  			<div class="col-md-5">
										    			<div class="padding-top"><label class="no-margin"><?php echo $row['TITLE']; ?></label></div>
										    			<div><small><?php echo $row['DESCRIPTION']; ?></small></div>
										    			<div><small><?php echo $row['start']; ?></small></div>
										    		</div>
										    	</div>
										  	</div>
										</div>
									</div>
								</a>
							<?php
								}
							?>
			</div>
		</div>
	</div>
</div>
					<div class="padding-bottom">
						<CENTER><h4><a href="event.php" class="cd-top">Back to Top</a></h4></CENTER>
					</div>

							<?php
								include 'conn.php';

								$query = "SELECT * FROM event ORDER BY NO DESC";
								$data = $connection->query($query);
								$query = mysql_query("SELECT * FROM event ORDER BY NO DESC");

								while ($row = $data->fetch_assoc()){
							?>
		<div class="modal fade" id="my<?php echo $row['NO'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  	<div class="modal-dialog" role="document">
		    	<div class="modal-content">
			      	<div class="modal-body">
			        	<center>
			        		<div class="form-group">
			        			<img class="img-responsive" style="width: 100%;" src="image/<?php echo $row['IMAGEURL'];?>" />
			        		</div>
			        		<div class="form-group">
			        			<CENTER><label>Name Of Events: <span><?php echo $row['TITLE']; ?></span></label></CENTER>
			        		</div>
			        		<div class="form-group">
			        			<CENTER><label>Event Description: <span><?php echo $row['DESCRIPTION']; ?></span></label></CENTER>
			        		</div>
			        		<div class="form-group">
			        			<CENTER><label>Date and Time Start: <span><?php echo $row['start']; ?></span></label></CENTER>
			        		</div>

			        		<div class="form-group">
			        			<CENTER><label>Date and Time End: <span><?php echo $row['start']; ?></span></label></CENTER>
			        		</div>

			        	</center>
			      	</div>
		    	</div>
		  	</div>
		</div>

							<?php
								}
							?>