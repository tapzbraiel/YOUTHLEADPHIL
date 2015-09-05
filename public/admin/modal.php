<?php
	include('inc/header.php');
?>
<?php
	include('menus/public-top_menu.php');
?>
					<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" id="order" class="modal fade">
		                <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Delegate Information (ID: <?= $_GET['attendeeID'] ?>)</h4>
		                      </div>
		                     	  <div class="modal-body">
										
										<div class="col-md-6">
										<img src="" class="img img-responsive">

											<form method="POST" action="../../functions/checkattendee.php?attendeeID=<?=$_GET['attendeeID']?>&pref_id=<?=$_GET['pref_id']?>">
												<div class="control-group">
													<img src="bootstrap/img/glyphicons-halflings.png" width="150px" height="150px" class="align_center img img-responsive">
												</div>
												<div class="control-group">
													<div class="controls">
														<label>Full Name</label>
														<input class="input-xlarge focused span4" value="" disabled=""  type="text">
														</div>
													<div class="controls">
														<label>Nickname</label>
														<input class="input-xlarge focused span2" value="" disabled=""  type="text">
													</div>
													
												</div>
													<button class="btn btn-primary pull-right" type="submit" autofocus>ENTER</button>
											</form>
										</div>
		                     	  </div>
		                      <div class="modal-footer">
		                      </div>
		                  </div>
		                </div>
		            </div>
		      <script type="text/javascript">
			    $(window).load(function(){
			        $('#order').modal('show');
			    });
			</script>
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
												<input class="input-xlarge text-center span12 focused" name="attendeeID" type="text">
											</div>
										</div>
											<button class="btn btn-primary pull-right" type="submit">SUBMIT</button>
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
								<div class="span12">
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
							</div>
						</div>
	</div>
	</div>
</div>

<?php
	include('inc/footer.php');
?>
							