<?php
	$delegation_name = $_GET['delname'];
	$delegation_add = $_GET['deladd'];
	$delegation_contact = $_GET['delcontact'];



	include('../classes/class.delegation.php');
	$d = new Delegation();
	$d->delegation_name = $delegation_name;
	$d->delegation_add = $delegation_add;
	$d->delegation_contact = $delegation_contact;
	if($d->saveDelegation()){
		
		header('Location: ../public/admin/delegations.php');
	}
	else{
		echo Database::$conn->error;
	}
?>