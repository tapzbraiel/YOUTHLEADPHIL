	<?php
		include('inc/header.php');
		include('menus/top-menu.php');
	?>

<div class="container">
	<div class="col-md-1"></div>
	<div class="col-md-10 sudlanan3">
		<div>
		<div class="col-md-1"></div> 
		<div class="col-md-10"><img src="img/cover.png" class="img-responsive" alt="Responsive image"></div>
		<div class="col-md-1"></div>
		</div>
		<h2 class="guide_text">DELEGATION INFORMATION</h2>
			<hr>
			<span>
				<p class="txt_color">This section requires you to supply information about your school or organization.</p>

				<p class="txt_color">For individually registering participants, please indicate "N/A" for non-applicable fields.</p>
			</span>
				<br>
			<form method="GET" action="../functions/delegationInfo_register.php">
				<div class="form-group">
					<label class="txt_color"for="del_name">Complete Name of Educational Institution or Community Organization:</label>
					<p>e.g. University of the Philippines (Mark N/A for Individual Delegates)</p>
					<input type="text" class="form-control" name="del_name" placeholder="Enter Complete Name of Educational Institution or Community Organization"required>			 
				</div>

				<div class="form-group">
					<label class="txt_color"for="st_add">Street Address:</label>
					<p>Home Address for Individual Delegates</p>
					<input type="text" class="form-control" name="st_add" placeholder="Enter Street Address " required>		 
				</div>

				<div class="form-group">
					<label class="txt_color"for="brgy">Barangay:</label>
					<p>Home Barangay for Individual Delegates</p>
					<input type="text" class="form-control" name="brgy" placeholder="Enter Barangay Name" required>		 
				</div>

				<div class="form-group">
					<label class="txt_color"for="city_town">City/Town:</label>
					<p>Home City/Town for Individual Delegates</p>
					<input type="text" class="form-control" name="city_town" placeholder="Enter City/Town Name" required>		 
				</div>

				<div class="form-group">
					<label class="txt_color"for="prov">Province:</label>
					<p>Home Province for Individual Delegates</p>
					<input type="text" class="form-control" name="prov" placeholder="Enter Province Name" required>		 
				</div>

				<div class="form-group">
					<label class="txt_color"for="zip_code">Zip Code:</label>
					<p>Home Zip Code for Individual Delegates</p>
					<input type="text" class="form-control" name="zip_code" placeholder="Enter Zip Code Name" required>		 
				</div>

				<div class="form-group">
					<label class="txt_color"for="region">Region:</label>
					<p>Home Region for Individual Delegates</p>
					<input type="text" class="form-control" name="region" placeholder="Enter your Region" required>		 
				</div>

				<div class="form-group">
					<label class="txt_color"for="contact">Contact Number of School/Organization:</label>
					<p>Contact Number of Parents/Guardian/Spouse for Individual Delegates</p>
					<input type="text" class="form-control" name="contact" placeholder="Enter Contact" required>		 
				</div>

				<div class="form-group">
					<label class="txt_color"for="name_head">Complete Name of Head (School President/Director):</label>
					<p>e.g. Dr. Juan S. Dela Cruz, Jr. (Name of Mother/Father/Guardian/Spouse for Individual Delegates)</p>
					<input type="text" class="form-control" name="name_head" placeholder="Enter Complete Name of Head (School president/Director)" required>		 
				</div>

				<div class="form-group">
					<label class="txt_color"for="pos">Position:</label>
					<p>e.g. University President/Director (Indicate if Mother/Father/Guardian/Spouse for Individual Delegates)</p>
					<input type="text" class="form-control" name="pos" placeholder="Enter Position" required>		 
				</div>

				<div class="form-group">
                  <input class="btn btn-primary" value="Continue" type="submit"/>
                </div>






		</form>
	</div>
	<div class="col-md-1"></div>



</div>

	<?php
		include('inc/footer.php');
	?>