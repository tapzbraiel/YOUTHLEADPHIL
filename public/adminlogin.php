<?php
	include('inc/header.php');
	include('../classes/class.useraccount.php');
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
                        <a class="page-scroll" href="login.php">Login as Checker</a>
                    </li>
                </ul>
            </div>
        </div>
        
    </nav>
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4 sudlanan3">
		<form  method="" action="">
		<h3>Login as Admin</h3>
		<hr>
			<div class="form-group">
          		<label form="username">Username</label>
          		<input class="form-control" value="" placeholder="User name" type="text" name="username" required/>
        	</div>
        	<div class="form-group">
          		<label for="password">Password</label>
          		<input class="form-control" value="" placeholder="Password" type="password" name="password" required/>
        	</div>
        	
        	<input class="btn btn-primary" type="submit" value="LOGIN">
		</form>
	</div>
	<div class="col-md-4"></div>
</div>

<?php
	include('inc/footer.php');
?>