<?php
	if(empty($_GET['session'])){
		header('location:../login.php');
	}
	else{
	
?>
<?php

	include('inc/header.php');
	include('../../classes/class.checkattendance.php');
	include('../../classes/class.delegation.php');
	include('../../classes/class.delegate.php');
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
												<input name="session" id="session"  type="hidden" value="<?=$_GET['session'] ?>">
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
												<th>Barcode</th>
												<th>Complete Name</th>
												<th>Delegations</th>
												<th>Date</th>
													
											</tr>
										</thead>
										<tbody>
											<?php
											$att = new Checkattendance();
											$data = array();
											$data = $att->loadrecentAttendee($_GET['session']);
											foreach($data as $row=>$key){
												
											?>
											
											<tr>
												<td><?=$key->barcode?></td>
												<td><?=$key->del_fname . ' '. $key->del_lname?></td>
												<td><?=$key->del_delegation?></td>
												<td><?=$key->date?></td>
											</tr>
											<?php
											}
											?>
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
	}
	include('inc/footer.php');
?>