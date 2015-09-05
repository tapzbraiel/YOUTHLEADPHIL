	<?php
		include('inc/header.php');
		include('menus/top-menu.php');
	?>

<div class="container">
	<div class="col-md-1"></div>
	<div class="col-md-10 sudlanan3">
		<h3 class="guide_text">DELEGATION HEAD INFORMATION</h3>
			<hr>
				<p class="txt_color">This section requires you to supply information about your Delegation Head.</p>

				<br></br>
			<form method="GET" action="../functions/delegates_register.php">
				<div class="form-group">
					<label class="txt_color"for="del_name">Complete Name of Delegation Head:</label>
					<p>e.g. Juan S. Dela Cruz Jr. </p>
					<input type="text" class="form-control" name="del_name" placeholder="Enter Complete Name"required>			 
				</div>

				<div class="form-group">
					<label class="txt_color"for="nickname">Nickname:</label>
					<p>max of 5 characters</p>
					<input type="text" class="form-control" name="nickname" placeholder="Enter you Nickname " required>		 
				</div>

				<div class="form-group">
                  <label for="sex">Sex:</label>
                  <select name="sex" class="form-control" palceholder="sex" required>
                  	<option value=''></option>
                    <option value='male'>Male</option>
                    <option value='female'>Female</option>
                  </select>
                </div>

				<div class="form-group">
					<label class="txt_color"for="age">Age:</label>
					<input type="text" class="form-control" name="age" placeholder="Enter your Age" required>		 
				</div>

				<div class="form-group">
					<label class="txt_color"for="contact">Mobile Number:</label>
					<p>e.g. 0915-889-6412</p>
					<input type="text" class="form-control" name="contact" placeholder="Enter Your Mobile NUmber" required>		 
				</div>

				<div class="form-group">
					<label class="txt_color"for="email_add">Email Address:</label>
					<p>e.g. juandelacruz@ymail.com</p>
					<input type="text" class="form-control" name="email_add" placeholder="Enter Your Email Address " required>		 
				</div>

				<div class="form-group">
					<label class="txt_color"for="org">Organization:</label>
					<p>e.g. Supreme Student Government</p>
					<input type="text" class="form-control" name="org" placeholder="Enter your Your Oraganization" required>		 
				</div>

				<div class="form-group">
					<label class="txt_color"for="contact">T-Shirt Size:</label>
					<p>In Inches (Shoulder, Chest, Length)</p>
						<select name="tsize" class="form-control" required>
		                    <option value=''>Select your t-shirt size</option>
		                    <option value='XS (16.5, 37, 26)'>XS (16.5, 37, 26)</option>
		                    <option value='S (17.5, 39, 27)'>S (17.5, 39, 27)</option>
		                    <option value='M (18.5, 41, 28)'>M (18.5, 41, 28)</option>
		                    <option value='L (19, 43, 29)'>L (19, 43, 29)</option>
		                    <option value='XL (19.5, 45, 30)'>XL (19.5, 45, 30)</option>
		                    <option value='XXL (20.5, 46, 31)'>XXL (20.5, 46, 31)</option>
	                  </select>	 
				</div>

				<div class="form-group">
					<label class="txt_color"for="foodres">Food restrictions and/or serious medical condition/s:</label>
					<input type="text" class="form-control" name="foodres" required>		 
				</div>
				<br>
				<div class="form-group">
					<label>If you would like to add one more delegate, click CONTINUE.</label>
					
				</div>
				
				<div class="form-group">
                  <input class="btn btn-primary btn-lg" value="Continue" type="submit"/>
             
                </div>
              






		</form>
	</div>
	<div class="col-md-1"></div>



</div>

	<?php
		include('inc/footer.php');
	?>