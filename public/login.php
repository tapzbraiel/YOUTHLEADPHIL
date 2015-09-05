<?php
	include('inc/header.php');
	include('../classes/class.session.php');
?>
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand page-scroll" href="#page-top">
                    <span class=" text1">YOUTH LEAD PHILIPPINES</span>
                </a>
            </div>

            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                	<li>
                        <a class="page-scroll" href="adminlogin.php">Login as admin</a>
                    </li>
                </ul>
            </div>
        </div>
        
    </nav>
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4 sudlanan3">
		<form  method="POST" action="../functions/checklogin.php?type=checker">
		<h3>Login as Checker</h3>
		<hr>
		<?php
			
			if(!empty($_GET['error'])){
				if($_GET['error']){
			?>
          		<label class="alert alert-danger col-md-12 text-center">Invalid Login</label>
        	
        	<?php	
				}
			}
			?>
			<div class="form-group">
          		<label form="username">Username</label>
          		<input class="form-control" value="" placeholder="User name" type="text" name="username" required/>
        	</div>
        	<div class="form-group">
          		<label for="password">Password</label>
          		<input class="form-control" value="" placeholder="Password" type="password" name="pass" required/>
        	</div>
        	<div class="form-group">
        		<label>Session</label>
        		<select name="session" class="form-control" required>
        			<option>Select session here..</option>
        			<?php
        				$s = new Session();
        				$session = array();

        				$session=$s->loadSession();
        				foreach ($session as $sess) {
        			?>

        			<option value="<?php echo $sess->session_id ?>"><?php echo $sess->session_name ?></option>
        			<?php
        				}
        			?>
        			
        		</select>
        	</div>
        	<input class="btn btn-primary" type="submit" value="LOGIN">
		</form>
	</div>
	<div class="col-md-4"></div>
</div>

<?php
	include('inc/footer.php');
?>