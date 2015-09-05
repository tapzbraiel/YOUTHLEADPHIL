<?php
include('../classes/class.useraccount.php');

$type=$_GET['type'];
$uname =$_POST['username'];
$pass =$_POST['pass'];
$session=@$_POST['session'];

$u = new UserAccount();

$u->user_name = $uname;
$u->password =$pass;
$u->user_type = $type;

if($u->chklogin()){
	header('location:../public/admin/attendancestart.php?session='.$session.'');
}
else{
	header('location:../public/login.php?error=true');
}
?>