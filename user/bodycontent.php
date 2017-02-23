<div class="container">
	<div class="padding-top-bottom">
		<div class="row">
			<div class="col-md-9">
				<center>
					<div class="asdf">
						<img src="image/img11.png" style="width:100%;height:80%">
						<div class="caption post-content" style="color: black;">
							<img class="img-responsive hvr-wobble-horizontal" src="image/img6.png">
							<div><h1><b>Our Restaurant</b></h1></div>
							<h3><b>Convenatly imiipact worldwide and data and improvements with a holistic theme and improvements with holistic</b></h3>
						</div>
					</div>
				</center>

				<div class="padding-bottom">
					<div class="panel panel-default no-margin">
					  	<div class="panel-body no-border" style="background-color: #670a12;color:#FFFFFF;">
					    	<div><h4 class="no-margin">Restaurant Upcoming Events</h4></div>
					  	</div>
					</div>

					<div>
						<div class="row">
							<?php
								include 'conn.php';

								$query = "SELECT * FROM event ORDER BY NO DESC LIMIT 3";
								$data = $connection->query($query);
								
								while ($row = $data->fetch_assoc()){
							?>
								<a href="/dalethesis/event.php">
									<div class="col-md-4 padding-top">
										<div class="panel panel-default no-margin no-border">
										  	<div class="panel-body no-border">
										  		<center>
										  			<img src="image/<?php echo $row['IMAGEURL']; ?>" class="img-responsive" style="height:30%; width:100%"; />
										  		</center>
										    	<div class="padding-top"><label class="no-margin"><?php echo $row['TITLE']; ?></label></div>
										    	<div><small><?php echo $row['DESCRIPTION']; ?></small></div>
										    	<div><small><?php echo $row['DATE']; ?></small></div>
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

				<div class="padding-bottom">
					<div class="panel panel-default no-margin">
					  	<div class="panel-body no-border" style="background-color: #670a12;color:#FFFFFF;">
					    	<div><h4 class="no-margin">Reserve now. Full pay later.</h4></div>
					  	</div>
					</div>
					<div class="padding-top">
						<form style="text-align: left;" action="reservation.php" method="POST">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="color-white">First Name</label>
										<input type="text" class="full-width form-control" name="fname" placeholder="ex.Juan" required/>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="color-white">Last Name</label>
										<input type="text" class="full-width form-control" name="lname" placeholder="ex.Dela Cruz" required/>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="color-white">MOBILE NUMBER</label>
								<input type="text" class="full-width form-control" name="mnum" placeholder="+639*********" required/>
							</div>
							<div class="form-group">
								<label class="color-white">DATE</label>
								<input type="date" class="full-width form-control" name="reserveDate" placeholder="Date *" required/>
							</div>
							<div class="form-group">
								<label class="color-white">TIME</label>
								<input type="time" class="full-width form-control" name="timeSet" placeholder="Time *" required/>
							</div>
							<div class="form-group">
								<label class="color-white">NO. OF PERSON</label>
								<input type="number" class="full-width form-control" name="noPer" placeholder="*" required/>
							</div>
							<div>
								<input type="submit" class="btn btn-success btn-lg full-width" name="bodycont_submit" value="Submit"/>
							</div>
						</form>
					</div>
				</div>
			</div>
			
			<div class="col-md-3">
				<div class="panel panel-default no-margin">
				  	<div class="panel-body no-border" style="background-color: #670a12;color:#FFFFFF;">
				    	<div><h4 class="no-margin">Our Restaurant Dishes</h4></div>
				  	</div>
				</div>

				<div class="row">

					<div class="col-md-12 padding-top">
			            <div class="widget-head-color-box navy-bg p-lg text-center padding-top-bottom no-margin" style="background-color: #FFB902;">
			                <div class="m-b-md">
			                    <h2 class="font-bold no-margins">
			                        Packages
			                    </h2>
			                </div>
			                <form method="GET" action="menu.php">
			                	<input type="text" style="display:none;" name="categs" value="Packages"/>
				                <button class="btn btn-link">
				                	<img src="image/logo1.png" style="height:10%;margin: 0px;" class="img-circle circle-border m-b-md img-responsive hvr-buzz" alt="profile">
				                </button>
			                </form>       
			            </div>
			            <div class="widget-text-box" style="color: black;">
			                <small>Convenatly imiipact worldwide and data and improvements with a holistic theme and improvements with holistic</small>
			            </div>
			        </div>

					<div class="col-md-12 padding-top">
			            <div class="widget-head-color-box navy-bg p-lg text-center padding-top-bottom no-margin" style="background-color: #FFB902;">
			                <div class="m-b-md">
			                    <h2 class="font-bold no-margins">
			                        Seafoods
			                    </h2>
			                </div>
			                <form method="GET" action="menu.php">
			                	<input type="text" style="display:none;" name="categs" value="Seafoods"/>
				                <button class="btn btn-link">
				                	<img src="image/logo6.png" style="height:10%;margin: 0px;" class="img-circle circle-border m-b-md img-responsive hvr-buzz" alt="profile">
				                </button>
			                </form> 
			                           
			            </div>
			            <div class="widget-text-box" style="color: black;">
			                <small>Convenatly imiipact worldwide and data and improvements with a holistic theme and improvements with holistic</small>
			            </div>
			        </div>
			        
					<div class="col-md-12 padding-top">
			            <div class="widget-head-color-box navy-bg p-lg text-center padding-top-bottom no-margin" style="background-color: #FFB902;">
			                <div class="m-b-md">
			                    <h2 class="font-bold no-margins">
			                        Pasta
			                    </h2>
			                </div>
			                <form method="GET" action="menu.php">
			                	<input type="text" style="display:none;" name="categs" value="Pasta"/>
				                <button class="btn btn-link">
				                	<img src="image/logo7.png" style="height:10%;margin: 0px;" class="img-circle circle-border m-b-md img-responsive hvr-buzz" alt="profile">
				                </button>
			                </form> 
			                           
			            </div>
			            <div class="widget-text-box" style="color: black;">
			                <small>Convenatly imiipact worldwide and data and improvements with a holistic theme and improvements with holistic</small>
			            </div>
			        </div>
			        
					<div class="col-md-12 padding-top">
			            <div class="widget-head-color-box navy-bg p-lg text-center padding-top-bottom no-margin" style="background-color: #FFB902;">
			                <div class="m-b-md">
			                    <h2 class="font-bold no-margins">
			                        Dessert
			                    </h2>
			                </div>
			                <form method="GET" action="menu.php">
			                	<input type="text" style="display:none;" name="categs" value="Dessert"/>
				                <button class="btn btn-link">
				                	<img src="image/logo8.png" style="height:10%;margin: 0px;" class="img-circle circle-border m-b-md img-responsive hvr-buzz" alt="profile">
				                </button>
			                </form> 
			                           
			            </div>
			            <div class="widget-text-box" style="color: black;">
			                <small>Convenatly imiipact worldwide and data and improvements with a holistic theme and improvements with holistic</small>
			            </div>
			        </div>
			        
					<div class="col-md-12 padding-top">
			            <div class="widget-head-color-box navy-bg p-lg text-center padding-top-bottom no-margin" style="background-color: #FFB902;">
			                <div class="m-b-md">
			                    <h2 class="font-bold no-margins">
			                        Drinks
			                    </h2>
			                </div>
			                <form method="GET" action="menu.php">
			                	<input type="text" style="display:none;" name="categs" value="Drinks"/>
				                <button class="btn btn-link">
				                	<img src="image/logo2.png" style="height:10%;margin: 0px;" class="img-circle circle-border m-b-md img-responsive hvr-buzz" alt="profile">
				                </button>
			                </form> 
			                           
			            </div>
			            <div class="widget-text-box" style="color: black;">
			                <small>Convenatly imiipact worldwide and data and improvements with a holistic theme and improvements with holistic</small>
			            </div>
			        </div>

		        </div>
			</div>

		</div>
	</div>

</div>