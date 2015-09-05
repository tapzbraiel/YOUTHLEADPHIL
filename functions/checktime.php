<?php
	include('../classes/class.checkattendance.php');
	$delegate_id = $_GET['attendeeID'];


	$c = new Checkattendance();
	if(!$c->isUserexist($delegate_id)){
		header('Location:../public/admin/attendancestart.php?usernotfound=true');
	}
	else{
		#if($chkentry()){
		#	header('Location:../public/admin/modal.php?attendeeID='.$delegate_id.'&pref_id='.$c->pref_id.'');
		#}
		#else{
			if($c->checktime()){
			header('Location:../public/admin/modal.php?attendeeID='.$delegate_id.'&pref_id='.$c->pref_id.'');
			}
			else{
				header('Location:../public/admin/attendancestart.php?error=true');
			}
		#}
		
	}
	
?>