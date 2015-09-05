<?php
	include('../classes/class.checkattendance.php');
	
	$c = new Checkattendance();
	
	if(!empty($_GET['del_id'])){
		$c->delegate_id = @$_GET['del_id'];
	}
	
	if(!empty($_GET['session_id'])){
		$session_id = @$_GET['session_id'];
	}
	
	if(!$c->saveattendance($session_id)){
		header('Location:../public/admin/attendancestart.php?session='. $session_id.'');
	}
	else{
		header('Location:../public/admin/attendancestart.php?session='. $session_id.'&already=true');
	}
?>