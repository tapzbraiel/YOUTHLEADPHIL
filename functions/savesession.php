<?php
	
	$session_name = $_GET['sessionname'];
	$day_no = $_GET['dayno'];
	$session_start = $_GET['starttime'];
	$session_end = $_GET['endtime'];
	$session_action = $_GET['action'];


	include('../classes/class.session.php');
	$s = new Session();
	$s->session_name = $session_name;
	$s->day_no = $day_no;
	$s->session_start = $session_start;
	$s->session_end = $session_end;
	$s->is_active = $session_action;
	if($s->saveSession()){
		header('Location: ../public/admin/preferences.php?saved=true');
	}
	else{
		echo Database::$conn->error;
	}


