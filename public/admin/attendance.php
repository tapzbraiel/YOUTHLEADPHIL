<?php
    include('inc/header.php');
?>
<?php
    include('menus/public-top_menu.php');
    include('classes/class.attendance.php');
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
	                        
	                       <li class="active">
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
				                        <!-- block -->
				                        <div class="block">
				                            <div class="navbar navbar-inner block-header">
				                                <div class="muted pull-left"><h4>ATTENDANCE</h4></div>
				                            </div>
				                            <div class="block-content collapse in">
				                                <div class="span9">
				  									<table class="table table-bordered table-striped">
										              <thead>
										                <tr>
										                  <th>ID</th>
										                  <th>Conference Name</th>
										                  <th>Date</th>
										                  <th></th>
										                </tr>
										              </thead>
										              <tbody>
										              		<?php
										              			$a = new Attendance();
										              			$list_of_conference = array();

										              			$list_of_conference = $a->loadConference();
										              				foreach($list_of_conference as $list) {

										              		?>
										                <tr>
										                	<td><?php echo $list->confe_id ?></td>
										                  <td><?php echo $list->confe_name ?></td>
										                  <td><?php echo $list->confe_date ?></td> 
										                  
										                  <td>
										                  <center>
										                  	<a href="temp.php?id='.$list['confe_id'].'"><button class="btn btn-mini"><i class=" icon-arrow-right"></i></button></a>
										                  	<button class="btn btn-mini btn-primary"><i class=" icon-pencil icon-white"></i></button>
										                  	<button class="btn btn-mini btn-danger"><i class=" icon-white icon-remove"></i></button>
										                  </center>
										                  </td> 
										                </tr>
										                 <?php } ?>
										              </tbody>
										            </table>
				                                </div>
				                                <div class="span3">
				                                	<button class="btn btn-mini disabled"><i class=" icon-arrow-right"></i></button>Select
										           	<button class="btn btn-mini btn-primary disabled "><i class=" icon-pencil icon-white"></i></button>Edit
										            <button class="btn btn-mini btn-danger disabled"><i class=" icon-white icon-remove"></i></button>Delete
				                                </div>
				                            </div>
				                            


				                        </div>
				                        <!-- /block -->
				    </div>
  </div>

<?php
	include('inc/footer.php');
?>