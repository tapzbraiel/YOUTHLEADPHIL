<?php
	include('inc/header.php');
	include('menus/public-top_menu.php');
	include('../../classes/class.pagination.php');
	include('../../classes/class.session.php');
?>

	
	

<div class="container-fluid">
            <div class="row-fluid">
                <div class="span3" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
	                        <li>
	                            <a href="index.php"></i> Dashboard</a>
	                        </li>
	                    </ul>
	                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
	                        
	                        <li>
	                            <a href="registerdelegates.php"></i>Registration</a>
	                        </li>
	                        
	                    </ul>
	                     <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
	                        
	                        <li>
	                            <a href="delegations.php"></i>Delegations</a>
	                        </li>
	                        
	                    </ul>
	                    
	                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
	                        
	                       <li>
	                            <a href="attendance.php"></i>Attendance</a>
	                        </li>
	                        
	                    </ul>
	                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
	                        
	                       <li   class="active">
	                            <a href="preferences.php"></i>Preferences</a>
	                        </li>
	                        
	                    </ul>
                </div>


                	<div class="span9" id="content">


                		<div id="myAlert" class="modal hide">
								<div class="modal-header">
									<button data-dismiss="modal" class="close" type="button">&times;</button>
									<h3>ADD NEW SESSION</h3>
								</div>
								<div class="modal-body">
								<form method="GET" action="../../functions/savesession.php">
				                	<div class="control-group">
				                	<label class="control-label">Session Name<span>:</span></label>
				                		<div class="controls">
				                			<input class="input-xlarge span12 focused" name="sessionname" type="text" placeholder="Session Name">
				                		</div>
				                	</div>
				                	<div class="control-group">
				                	<label class="control-label">Day Number<span>:</span></label>
				                		<div class="controls">
				                			<input class="input-xlarge span12 focused" name="dayno" type="text" placeholder="eg.: 1">
				                		</div>
				                	</div>
				                	<div class="control-group">
				                	<label class="control-label">Session Start Time:<span class="required">eg.: 12:00 AM</span></label>
				                		<div class="controls">
				                			<input class="input-xlarge span12 focused" name="starttime" type="time">
				                		</div>
				                	</div>
				                	<div class="control-group">
				                	<label class="control-label">Session End Time:<span class="required">eg.: 12:00 AM</span></label>
				                		<div class="controls">
				                			<input class="input-xlarge span12 focused" name="endtime" type="time">
				                		</div>
				                	</div>
				                	<div class="control-group">
				                   		<div class="controls">
				                			<input class="input-xlarge span12 focused" value="0" name="action" type="hidden">
				                		</div>
				                	</div>
											<button class="btn btn-primary" type="submit">SAVE</button>

				               		 </form>
											</div>
											<div class="modal-footer">
												
											</div>
									</div>




				                        <!-- block -->
						<div class="block">
				            <div class="navbar navbar-inner block-header">
				                <div class="muted pull-left"><h4>PREFERENCES</h4></div>
				            </div>
				            <div class="block-content collapse in">
				                

				                <div class="col-md-12">
				                                <div class="table-toolbar">
				                                      <div class="btn-group">
				                                         <a href="#myAlert" data-toggle="modal"><button class="btn btn-success">Add New <i class="icon-plus icon-white"></i></button></a>
				                                      </div>
				                                      <div class="btn-group pull-right">
				                                         <button data-toggle="dropdown" class="btn dropdown-toggle">Tools <span class="caret"></span></button>
				                                         <ul class="dropdown-menu">
				                                            <li><a href="#">Print</a></li>
				                                            <li><a href="#">Save as PDF</a></li>
				                                            <li><a href="#">Export to Excel</a></li>
				                                         </ul>
				                                      </div>
                                   </div>
                                   <hr>
				  									<table class="table table-striped table-bordered" id="example2">
										              <thead>
										                <tr>
										                  <th>Session Name</th>
										                  <th>Day</th>
										                  <th>Session Start</th>
										                  <th>Session End</th>
										                  <th>Action</th>
										                </tr>
										              </thead>
										              <tbody>
										              <?php
										              	$s =  new Session();
										              	$list_of_session = array();

										              	$list_of_session=$s->loadsession();
										              	foreach ($list_of_session as $ses) {
				
										              ?>
										                <tr>
										                  <td><?php echo $ses->session_name ?></td>
										                  <td><?php echo $ses->day_no ?></td>
										                  <td><?php echo $ses->session_start ?></td>
										                  <td><?php echo $ses->session_end ?></td>
										                  <td>
										                  	<div class="btn-group pull-right">
															  <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Action <span class="caret"></span></button>
															  <ul class="dropdown-menu">
																<li><a href="#">Set as active</a></li>
																<li><a href="#">Edit</a></li>
															  </ul>
															</div>
										                  </td>
										                </tr>
										              <?php
										              	}
										              ?>
										              </tbody>
										            </table>
				                                </div>
				                
				                
							</div>
				        </div>
				                            


				    </div>
				    </div>
				    </div>				                   
</div>


<?php
include('inc/footer.php');
?>