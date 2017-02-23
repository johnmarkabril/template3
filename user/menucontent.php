<div class="row">
		<div class="col-md-12">
			<div class="asdf">
				<img src="image/carousel3.jpg" style="width:100%;height:60%;">
				<div class="caption post-content" style="color: black;">
				<center>
					<br><br><br><br><div><h1><b>Our Food Menu</b></h1></div>
					<h3><b><a href ="http://localhost/dalethesis/">Home </a>| Menu Page</b></h3></center>
				</div>
			</div>
		</div>
		</div>
<div class="container">
	<center>

		<div class="row" style="padding: 15px;">
			<div class="col-md-12">
				<div class="row">
					<?php

						include 'conn.php';

						if ( isset($_GET['categs']) ) {
							$categs = $_GET['categs'];
							$query = "SELECT * FROM product WHERE Category = '". $categs ."'";
							$data = $connection->query($query);
					?>

							<h1><strong style="">Menu of <?php echo $categs; ?></strong></h1>
					<?php
						} else {
							$query = "SELECT * FROM product";
							$data = $connection->query($query);
					?>

							<h1><strong style="">Our Menu</strong></h1>
					<?php
						}
							if($data->num_rows >= 1){
		                    	while ($row = $data->fetch_assoc()){
					?>

								<div class="col-md-4" style="padding-bottom: 30px;">
						            <div class="widget-head-color-box navy-bg p-lg text-center" style="background-color: #FFB902;">
						                <div class="m-b-md">
						                    <h2 class="font-bold no-margins">
						                        <?php echo $row['Name']; ?>
						                    </h2>
						                </div>
						                <?php $img = $row['Imageurl']; ?>
						                <a data-toggle="modal" data-target="#my<?php echo $row['No'];?>">
						                <img src="image/<?php echo $img; ?>" style="height:20%;" class="img-circle circle-border m-b-md img-responsive hvr-buzz" alt="profile">     
						               	</a>        
						            </div>
						            
						            <div class="widget-text-box" style="color: black;">
						                <b><small>
						                        <?php echo $row['Description']; ?></small></b>
						            </div>
						        </div>
					<?php
							}
							$numrow = $data->num_rows;
							if ( $numrow == 0 ) {
					?>
								<center>
									<h1>No Products!</h1>
								</center>
					<?php
							}
						}
					?>
				</div>
			</div>
		</div>
	</center>		

</div>
<?php
	$query = "SELECT * FROM product";
	$data = $connection->query($query);

	if($data->num_rows > 1){
		while ($row = $data->fetch_assoc()){
?>
			<div class="modal fade" id="my<?php echo $row['No'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  	<div class="modal-dialog" role="document">
			    	<div class="modal-content">
				      	<div class="modal-body">
				        	<center>
				        		<div class="form-group">
				        			<img class="img-responsive" style="width: 100%;" src="image/<?php echo $row['Imageurl'];?>" />
				        		</div>
				        		<div class="form-group">
				        			<label>Name: <span><?php echo $row['Name']; ?></span></label>
				        		</div>
				        		<div class="form-group">
				        			<label>Price: <span><?php echo $row['price']; ?></span></label>
				        		</div>
				        		<div class="form-group">
				        			<label>Description</label>
				        			<h3><?php echo $row['Description']; ?></h3>
				        		</div>
				        	</center>
				      	</div>
			    	</div>
			  	</div>
			</div>
<?php
		}
	}
?>