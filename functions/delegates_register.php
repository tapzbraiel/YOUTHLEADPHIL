<?php

	$del_delegation = $_GET['delegation'];
	$del_fname = $_GET['Fname'];
	$del_lname = $_GET['Lname'];
	$del_bdate = $_GET['bdate'];
	$del_sex = $_GET['sex'];
	$del_contact =$_GET['contact'];



	include('../classes/class.delegate.php');
	$d = new Delegates();
	$d->del_delegation = $del_delegation;
	$d->del_fname = $del_fname;
	$d->del_lname = $del_lname;
	$d->del_bdate = $del_bdate;
	$d->del_sex = $del_sex;
	$d->del_contact = $del_contact;
	if($d->saveDelegate()){
		header('Location: ../public/admin/registerdelegates.php?saved=true');
	}
	else{
		echo Database::$conn->error;
	}
?>