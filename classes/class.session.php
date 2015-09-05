<?php
	require_once('inc/connection.inc');

class Session{

	public $session_id;
	public $session_name; 
	public $session_start; 
	public $session_end; 
	public $day_no; 
	public $is_active;


	function saveSession(){
		$sql="INSERT INTO `tbl_session` VALUES(NULL,
				'".$this->session_name."',
				".$this->day_no.",
				'".$this->session_start."',
				'".$this->session_end."',
				".$this->is_active.");";

		return Database::$conn->query($sql);
	}

 
	function loadsession(){
		$sql="SELECT * FROM `tbl_session`";
		$result=Database::$conn->query($sql);
		$ret_val = array();

		if($result->num_rows > 0){
			while($row=$result->fetch_array()){
				$s = new Session();
				$s->session_id = $row['session_id'];
				$s->session_name = $row['session_name'];
				$s->day_no = $row['day_no'];
				$s->session_start = $row['session_start'];
				$s->session_end = $row['session_end'];
				$s->is_active = $row['is_active'];
				$ret_val[] = $s;
			}
		}
		return $ret_val;

	}
}
?>