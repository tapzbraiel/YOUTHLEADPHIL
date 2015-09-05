<?php

include('../../classes/class.delegate.php');

$id = @$_GET['id'];
$barcode = @$_POST['barcode'];

$d = new delegates();
if($d->saveDelBarcode($id,$barcode)){
	header('location:registerdelegates.php?success=true');
}

?>
