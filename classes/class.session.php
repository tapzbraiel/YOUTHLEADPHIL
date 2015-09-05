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
		$sql="INSERT INTO `tbl_sessions` VALUES(NULL,
				'".$this->session_name."',
				".$this->day_no.",
				'".$this->session_start."',
				'".$this->session_end."');";
		return Database::$conn->query($sql);
	}
	
	function loadSession(){
		$sql="SELECT * FROM tbl_session";
		$result=Database::$conn->query($sql);
		$ret_val = array();
		if($result->num_rows > 0){
			while($row=$result->fetch_array()){
				$u = new Session();
				$u->session_id = $row['session_id'];
				$u->session_name = $row['session_name'];
				$ret_val[] = $u;
			}
		}
		
		return $ret_val;
	}
	
	
}
?>