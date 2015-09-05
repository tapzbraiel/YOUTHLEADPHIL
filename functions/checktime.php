<?php
	include('../classes/class.checkattendance.php');
	$delegate_id = $_GET['attendeeID'];

	$c = new Checkattendance();
	if(!empty($_GET['session'])){
		$session_id = @$_GET['session'];
		if(!$c->isUserexist($delegate_id)){
		header('Location:../public/admin/attendancestart.php?session='. $session_id.'&usernotfound=true');
		}
		else{
			#if($chkentry()){
			#	header('Location:../public/admin/modal.php?attendeeID='.$delegate_id.'&pref_id='.$c->pref_id.'');
			#}
			#else{
				if($c->checktime()){
				header('Location:../public/admin/modal.php?attendeeID='.$delegate_id.'&session_id='.$session_id.'');
				}
				else{
					header('Location:../public/admin/attendancestart.php?error=true&session='.$session_id.'');
				}
			#}
			
		}
	}
	else{
		header('Location:../public/login.php');
	}
	
	
?>