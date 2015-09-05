
<?php
	

		if(@$_GET['barcode'] != 'Not yet entered'){
                     header('location:registerdelegates.php?hasbarcode=true'.$dels->barcode.'');
            }
            else
            {
            include('inc/header.php');
			include('menus/public-top_menu.php');
			include('../../classes/class.pagination.php');
			include('../../classes/class.delegate.php');
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
	                        
	                        <li class="active">
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
	                        
	                       <li>
	                            <a href="preferences.php"></i>Preferences</a>
	                        </li>
	                        
	                    </ul>
                </div>


                	<div class="span9" id="content">
				    <div id="myAlert" class="modal hide">
											<div class="modal-header">
												<button data-dismiss="modal" class="close" type="button">&times;</button>
												<h3>ADD NEW DELEGATES</h3>
											</div>
											<div class="modal-body">
								<form method="GET" action="../../functions/delegates_register.php">
							    	<div class="control-group">
				                	<label class="control-label">Delelgates Delegation<span>:</span></label>
				                		<div class="controls">
				                			<select name="delegation" class=" span12 m-warp">
				                				<?php
										            $d = new Delegation();
										            $list_of_delegations = array();

										            $list_of_delegations=$d->loadDelegation();
										         	
										         	foreach ($list_of_delegations as $del) { 		
										              ?>
				                				<option value="<?php echo $del->delegation_name ?>"><?php echo $del->delegation_name ?></option>
				                				<?php
				                					}
				                				?>
				                			</select>
				                		</div>
				                	</div>
				                	<div class="control-group">
				                	<label class="control-label">First Name<span>:</span></label>
				                		<div class="controls">
				                			<input class="input-xlarge span12 focused" name="Fname" type="text" placeholder="First Name">
				                		</div>
				                	</div>
				                	<div class="control-group">
				                	<label class="control-label">Last Name<span>:</span></label>
				                		<div class="controls">
				                			<input class="input-xlarge span12 focused" name="Lname" type="text" placeholder="Last Name">
				                		</div>
				                	</div>
				                	<div class="control-group">
				                	<label class="control-label">Birth Date<span>:</span></label>
				                		<div class="controls">
				                			<input class="input-xlarge span12 focused" name="bdate" type="text" placeholder="2010-12-24">
				                		</div>
				                	</div>
				                	<div class="control-group">
				                	<label class="control-label">Sex<span>:</span></label>
				                		<div class="controls">
				                			<select name="sex" class="span12">
				                				<option value="male">Male</option>
				                				<option value="female">Female</option>
				                			</select>
				                		</div>
				                	</div>
				                	<div class="control-group">
				                	<label class="control-label">Contact Number<span>:</span></label>
				                		<div class="controls">
				                			<input class="input-xlarge span12 focused" name="contact" type="text" placeholder="09097111112">
				                		</div>
				                	</div>

											<button class="btn btn-primary" type="submit">SAVE</button>

				                </form>
											</div>
											<div class="modal-footer">
												
											</div>
					</div>                       
				    <div class="block">
				            <div class="navbar navbar-inner block-header">
				                <div class="muted pull-left"><h4>REGISTRATION</h4></div>
				            </div>
				            <div class="block-content collapse in">
				            <div class="span12">
				            <div class="table-toolbar">
                                      <div class="btn-group">
                                         <a href="#myAlert" data-toggle="modal"><button class="btn btn-success">Add New <i class="icon-plus icon-white"></i></button></a>
                                      </div>
                                      <hr>
                                      
                                   </div>
                                   <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
                                        <thead>
                                            <tr>
                                                <th>Barcode Id</th>
                                               
                                                <th>Complete Name</th>
                                                <th>Delegations</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        	$barcode ='';
                                        	$d = new Delegates();
                                        	$list_of_delegates = array();

                                        	$list_of_delegates = $d->loadDelegates();
                                        	foreach ($list_of_delegates as $dels) {
                                        	
                                        ?>
                                            <tr>
                                            	<td><?php echo $dels->barcode ?></td>
                                                <td><?php echo $dels->del_fname?> <?php echo $dels->del_lname ?></td>
                                                <td><?php echo $dels->del_delegation ?></td>
                                                <td class="">
		                                            <div class="btn-group pull-right">
													  <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Action <span class="caret"></span></button>
													  <ul class="dropdown-menu">
														<li><a href="#">Edit</a></li>
														<li><a href="addbarcode.php?id=<?= $dels->del_id .'&name='.$dels->del_fname . $dels->del_lname ?>"  data-toggle="modal">Add Barcode</a></li>
													   </ul>
													</div>
                                                </td>
                                            </tr>
                                        <?php
                                        $barcode =$dels->barcode;
                                       }
                                        ?>  
                                        </tbody>
                                    </table>
								</div>
							</div>

				<div id="myAlert1" class="modal hide">
								<div class="modal-header">
									<button data-dismiss="modal" class="close" type="button">&times;</button>
									<h4>ADD BARCODE</h4>

								</div>
								<div class="modal-body">
								<form method="post" action="savebarcode.php?id=<?=$_GET['id']?>">
				                	<div class="control-group">
				                	<label class="control-label">Delagates Name<span>:</span></label>
				                		<div class="controls">
				                			<input value="<?=$_GET['name']?>" class="input-xlarge span12 focused" disabled="" name="delname" type="text" placeholder="Delagationn Name">
				                		</div>
				                	</div>
				                	<div class="control-group">
				                	<label class="control-label">Barcode Id<span>:</span></label>
				                		<div class="controls">
				                			<input class="input-xlarge span12 focused" required name="barcode" type="text" placeholder="Enter Barcode here..." autofocus>
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
			        $('#myAlert1').modal('show');
			    });
			</script>


				        </div>

				    </div>
				    </div>
				    </div>				                   
</div>



<?php
include('inc/footer.php');

            }

?>