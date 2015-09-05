<?php
	require_once('inc/connection.inc');

class Useraccount{
	public $user_id;
	public $user_name;
	public $password;
	public $user_type;



	function loasusertype(){
		$sql="SELECT * FROM `tbl_user_account`";
		$result=Database::$conn->query($sql);
		$ret_val = array();
		if($result->num_rows > 0){
			while($row=$result->fetch_array()){
				$u = new Useraccount();
				$u->user_id = $row['user_id'];
				$u->user_type = $row['user_type'];
				$ret_val[] = $u;
			}
		}
		return $ret_val;
	}

}
?>