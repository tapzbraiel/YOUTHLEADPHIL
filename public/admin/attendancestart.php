<?php
	include('inc/header.php');
?>
<?php
	include('menus/public-top_menu.php');
?>

<div class="container-fluid">
	
	<div class="span12">
		<div class="row-fluid">
		<div class="block">
			<div class="navbar navbar-inner block-header">
			     <div class="muted pull-left">ATTENDANCE</div>
			</div>
			<div class="block-content collapse in">
				<div class="container">
					<div class="span3"></div>
					<div class="span6">
					<?php
						if(@$_GET['error']){
						?>

						<label class="alert alert-danger">Session is already ended!</label>
						
						<?php
						}

						?>
						<?php
						if(@$_GET['already']){
						?>

						<label class="alert alert-danger">Attendee is already punch in!</label>
						
						<?php
						}

						?>
						<?php
						if(@$_GET['usernotfound']){
						?>

						<label class="alert alert-danger">Delegate doesn't exist!</label>
						
						<?php
						}

						?>
						<div class="block">

							<div class="navbar navbar-inner block-header">
								<div class="muted pull-left">Enter Attendee</div>
							</div>

							<div class="block-content collapse in">
								<div class="span1"></div>
								<div class="span10">
									<form method="GET" action="../../functions/checktime.php">
										<h4>ATTENDEE ID:</h4>
										
										<div class="control-group">
											<div class="controls">
												<input tabindex="0" required class="input-xlarge text-center span12 focused" name="attendeeID" id="attendeeID"  type="text">
											</div>
										</div>
											<button class="btn btn-primary pull-right" type="submit" >SUBMIT</button>
									</form>
								</div>
								<div class="span1"></div>
							</div>
						</div>
					</div>
					<div class="span3"></div>
				</div>
				<div class="container">
					
					<div class="span12">

					</div>
					
				</div>

			</div>
			</div>
		</div>
		<div class="row-fluid" >
		<div class="block">
							<div class="navbar navbar-inner block-header">
								<div class="muted pull-left">RECENTLY ADDED ATTENDEES</div>
							</div>
							<div class="block-content collapse in">
								<div class="span1"></div>
								<div class="span10">
									<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
										<thead>
											<tr>
												<th>Attendee Id</th>
												<th>First Name</th>
												<th>Last Name</th>
												<th>Session</th>
													
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>q</td>
												<td>q</td>
												<td>q</td>
												<td>q</td>
												

											</tr>
											<tr>
												<td>q</td>
												<td>q</td>
												<td>q</td>
												<td>q</td>
												

											</tr>
											<tr>
												<td>q</td>
												<td>q</td>
												<td>q</td>
												<td>q</td>
											</tr>
											<tr>
												<td>q</td>
												<td>q</td>
												<td>q</td>
												<td>q</td>
											</tr>
											<tr>
												<td>q</td>
												<td>q</td>
												<td>q</td>
												<td>q</td>
											</tr>
											<tr>
												<td>q</td>
												<td>q</td>
												<td>q</td>
												<td>q</td>
											</tr>

										</tbody>
									</table>
								</div>
								<div class="span1"></div>
							</div>
						</div>
	</div>
	</div>
</div>

<?php
	include('inc/footer.php');
?>