<?php
	include('inc/header.php');
	include('menus/public-top_menu.php');
	include('../../classes/class.pagination.php');
	include('../../classes/class.delegation.php');




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
	                        
	                        <li  class="active">
	                            <a href="delegations.php"></i>Delegations</a>
	                        </li>
	                        
	                    </ul>
	                    
	                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
	                        
	                       <li>
	                            <a href="attendance.php"></i>Attendance</a>
	                        </li>
	                        
	                    </ul>
	                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
	                        
	                       <li>
	                            <a href="preferences.php"></i>Preferences</a>
	                        </li>
	                        
	                    </ul>
                </div>


                	<div class="span9" id="content">

                				<div id="myAlert" class="modal hide">
								<div class="modal-header">
									<button data-dismiss="modal" class="close" type="button">&times;</button>
									<h3>ADD NEW DELEGATION</h3>
								</div>
								<div class="modal-body">
								<form method="GET" action="../../functions/delegation.php">
				                	<div class="control-group">
				                	<label class="control-label">Delagationn Name<span>:</span></label>
				                		<div class="controls">
				                			<input class="input-xlarge span12 focused" name="delname" type="text" placeholder="Delagationn Name">
				                		</div>
				                	</div>
				                	<div class="control-group">
				                	<label class="control-label">Address<span>:</span></label>
				                		<div class="controls">
				                			<input class="input-xlarge span12 focused" name="deladd" type="text" placeholder="Address">
				                		</div>
				                	</div>
				                	<div class="control-group">
				                	<label class="control-label">Contact Number<span>:</span></label>
				                		<div class="controls">
				                			<input class="input-xlarge span12 focused" name="delcontact" type="text" placeholder="Contact Number">
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
				                                <div class="muted pull-left"><h4>List of Delegations</h4></div>
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
										                  <th>Delagation Name</th>
										                  <th>Address</th>
										                  <th>Contact Number</th>
										                  <th>Action</th>
										                </tr>
										              </thead>
										              <tbody>
										              <?php
										              		$d = new Delegation();
										              		$list_of_delegations = array();

										              		$list_of_delegations=$d->loadDelegation();
										              		foreach ($list_of_delegations as $del) {
										              			
										              		
										              ?>
										                <tr>
										                  <td><?php echo $del->delegation_name ?></td>
										                  <td><?php echo $del->delegation_add ?></td>
										                  <td><?php echo $del->delegation_contact ?></td> 
										                  <td>
										                  	<div class="btn-group pull-right">
															  <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Action <span class="caret"></span></button>
															  <ul class="dropdown-menu">
																<li><a href="#">Edit</a></li>
					<li><a href="delegationDelete.php?delegation_id=<?= $del->delegation_id .'&name=' . $del->delegation_name?>"  data-toggle="modal">Delete</a></li>
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


				                            <div id="deleteModal" class="modal hide">
											<div class="modal-header">
												<button data-dismiss="modal" class="close" type="button">&times;</button>
												<h3>Alert!</h3>
											</div>
											<div class="modal-body">
									<form method="POST" action="../../functions/delete_delegation.php?id=<?=$_GET['id']?>">
										<div class="control-group">
					                	<label class="control-label">Are you sure you want to delete this Delegation<span>?</span></label>
					                		<div class="controls">
					                			<input value="<?=$_GET['name']?>" class="input-xlarge span12 focused" disabled="" name="delname" type="text" placeholder="Delagationn Name">
					                		</div>
					                	</div>
					                	
												<button class="btn btn-primary" type="submit">SAVE</button>
									</form>
											</div>
											<div class="modal-footer">
												
											</div>
										</div>
										<script type="text/javascript">
										    $(window).load(function(){
										        $('#deleteModal').modal('show');
										    });
										</script>

				                            </div>
				                            <div class="container-fluid">
				                            	
											</div>


				                        </div>
				    </div>
				    </div>				                   
</div>


<?php
include('inc/footer.php');
?>