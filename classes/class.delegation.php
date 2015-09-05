<?php
require_once('inc/connection.inc');


class Delegation{
	public $delegation_id;
	public $delegation_name;
	public $delegation_add;
	public $delegation_contact;



	function saveDelegation(){
		$sql="INSERT INTO `tbl_delegations` VALUES(NULL,
			'".$this->delegation_name."',
			'".$this->delegation_add."',
			'".$this->delegation_contact."')";

		return Database::$conn->query($sql);
	}


	function loadDelegation(){
		$sql="SELECT * FROM `tbl_delegations`";
		$result=Database::$conn->query($sql);
		$ret_val = array();

		if($result->num_rows > 0){
			while($row=$result->fetch_array()){
				$d = new Delegation();
				$d->delegation_id = $row['delegation_id'];
				$d->delegation_name = $row['delegation_name'];
				$d->delegation_add = $row['delegation_add'];
				$d->delegation_contact = $row['delegation_contact'];
				$ret_val[] = $d;
			}
		}
		return $ret_val;
	}
}


?>

