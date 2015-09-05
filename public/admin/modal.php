
<?php
	include('inc/header.php');
	include('../../classes/class.delegate.php');
	include('../../classes/class.delegation.php');
	include('../../classes/class.checkattendance.php');
	include('menus/public-top_menu.php');
	if(empty($_GET['attendeeID'])&&empty($_GET['session_id'])){
		header('location:attendancestart.php');
	}
	else{
	
?><?php
															$d = new Delegates();
															$d->barcode = $_GET['attendeeID'];
															$del = array();
															$del = $d->loadDelegateswithID();
															foreach($del as $key => $row){
																?>
														
					<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" id="order" class="modal fade">
		                <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Delegate Information</h4>
		                      </div>
		                     	  <div class="modal-body">
										
										<div class="col-md-6">
										<img src="" class="img img-responsive">

											<form method="POST" action="../../functions/checkattendee.php?session_id=<?=$_GET['session_id']?>&del_id=<?=$row->del_id ?>">
												<div class="control-group">
													<div class="controls">
														<label>Barcode</label>
														<input class="input-xlarge focused span2" value="<?= $_GET['attendeeID'] ?>" disabled=""  type="text">
													</div>
													<div class="controls">
														<label>Complete Name</label>
														
												<input class="input-xlarge focused span4" value="<?=$row->del_fname.' '.$row->del_lname ?>" disabled=""  type="text">			
												
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
			<?php		
															}
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
	
	}
	include('inc/footer.php');
?>
							