<?php
	include('inc/header.php');
	include('menus/top-menu.php');
	include('../classes/class.useraccount.php');
?>

<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4 sudlanan3">
		<form  method="" action="">
		<h3>LOG IN TO CONTINUE</h3>
		<hr>
			<div class="form-group">
          		<label form="username">Username</label>
          		<input class="form-control" value="" placeholder="User name" type="text" name="username" required/>
        	</div>
        	<div class="form-group">
          		<label for="password">Password</label>
          		<input class="form-control" value="" placeholder="Password" type="password" name="password" required/>
        	</div>
        	<div class="form-group">
        		<label>User Type</label>
        		<select class="form-control" required>
        			<option>User Type</option>
        			<?php
        				$u = new Useraccount();
        				$user_type = array();

        				$user_type=$u->loasusertype();
        				foreach ($user_type as $user) {
        			?>

        			<option> <?php echo $user->user_type ?></option>
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