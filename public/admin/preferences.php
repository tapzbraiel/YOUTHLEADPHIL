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
				                        <!-- block -->
						<div class="block">
				            <div class="navbar navbar-inner block-header">
				                <div class="muted pull-left"><h4>PREFERENCES</h4></div>
				            </div>
				            <div class="block-content collapse in">
				                

				                
				                
				                <form method="post" action="../../functions/savepreferences.php">
				                	<h3>ADD NEW SESSION</h3>
				                	<hr>

				                	<div class="control-group">
				                	<label>Session Title:</label>
				                		<div class="controls">
				                			<input  class="input-xlarge span6 focused" name="sessiontitle" type="text" placeholder="Session Title">
				                		</div>
				                	</div>
				                	<div class="control-group">
				                	<label>Day:</label>
				                		<div class="controls">
				                			<input class="input-xlarge span6 focused" name="dayno" type="text" placeholder="Day Number">
				                		</div>
				                	</div>
				                	<div class="control-group">
				                	<label class="control-label">Start Time <span class="required">eg. 12:00 AM</span></label>
				                		<div class="controls">
				                			<input  class="input-xlarge span6 focused" name="starttime" type="time" placeholder="">
				                		</div>
				                	</div>
				                	<div class="control-group">
				                	<label class="control-label">Start End <span class="required">eg. 1:00 AM</span></label>
				                		<div class="controls">
				                			<input class="input-xlarge span6 focused" name="endtime" type="time" placeholder="End Time">
				                		</div>
				                	</div>

				                	<div class="control-group">
				                		<div class="controls">
				                		<label>
				                			<input class="uniform_on" type="checkbox" id="optionsCheckbox" value="option1">
				                			Check this for delayed entry..
				                		</label>
				                		</div>
				                	</div>
											<button class="btn btn-primary" type="submit">SUBMIT</button>

				                </form>
							</div>
				        </div>
				                            


				    </div>
				                        <!-- /block -->
				    </div>
				    </div>				                   
</div>


<?php
include('inc/footer.php');
?>