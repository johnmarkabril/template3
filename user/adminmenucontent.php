		<div class="padding-top-bottom container">
			<div class="panel panel-default no-margin">
				<div class="panel-body no-border" style="background-color: #670a12;color:#FFFFFF;">
					<div><b><h4 class="no-margin">Add a New Item on Menu </b></h4></div>
				</div>
			</div>

			<div class="padding-top">
				<div class="jumbotron">
				<form action="adminmenu1.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
							<label class="">NAME OF DISH</label>
							<input type="text" class="full-width form-control" name="Name" value="" required/>
					</div>

					<div class="form-group">
							<label class="">DISH DESCRIPTION</label>
					<div><textarea class="form-control" name="Description" required style="max-height: 20%;min-width:100%;max-width: 100%;min-height: 20%;"></textarea></div>
					</div>

					<div class="form-group">
						<label class="">PRICE</label>
						<input type="number" step="10" value="200" class="full-width form-control" name="price" value="" required/>
					</div>

					<div class="form-group">
						<label class="">CATEGORY</label><br>
							<select name="Category" style="width:50%;height:5%">
								  <option value="Packages">Packages</option>
								  <option value="Meat">Meat</option>
								  <option value="Pasta">Pasta</option>
								  <option value="Dessert">Dessert</option>
								  <option value="Drinks">Drinks</option>
							</select>
							<


					</div>
					<div class="form-group">
						<label class="">IMAGE</label>
						<input type="file" name="image" accept="image/*" required/>
					</div>
					
					<div>
						<input type="Submit" name="Submit" class="btn btn-success btn-lg full-width" value="Add New Item"/>
					</div>
				</form>
				</div>
			</div>
		</div>
	</form>