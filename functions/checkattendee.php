<?php
	include('../classes/class.checkattendance.php');
	
	
	$c = new Checkattendance();
	if(!empty($_GET['attendeeID'])){
		$c->delegate_id = @$_GET['attendeeID'];
	}
	if(!empty($_GET['pref_id'])){
		$c->pref_id = @$_GET['pref_id'];
	}
	
	if(!$c->saveattendance()){
		header('Location:../public/admin/attendancestart.php');
	}
	else{
		header('Location:../public/admin/attendancestart.php?already=true');
	}
?>