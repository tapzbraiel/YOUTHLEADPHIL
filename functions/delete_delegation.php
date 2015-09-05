<?php	
	include('../classes/class.delegation.php');

	$id = @$_GET['id'];

	$d = new Delegation();
	if($d->deleteDelegation($id)){
		header('Location: ../public/admin/delegations.php?deleted=true');
	}
	else{
		echo Database::$conn->error;
	}
?>