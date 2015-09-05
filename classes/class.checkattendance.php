<?php
	require_once('inc/connection.inc');


	class Checkattendance
	{
		public $attendance_id;
		public $date;
		function checktime(){
			$sql="SELECT session_id,IF(curtime()  > `session_start` AND now() < session_end, TRUE, FALSE) as QueryResult FROM `tbl_session` where is_active=1";
			$result=Database::$conn->query($sql);
			
			if($result->num_rows > 0){
				$value = mysqli_fetch_object($result);
				
					if($value->QueryResult==1){
						return true;
					}
					else{
						return false;
					}

			}
		}
		function saveattendance($session_id){
			$hasAlready = $this->isAlready($session_id);
			if($hasAlready){
				return true;
			}

			else{
				$sql="INSERT INTO tbl_attendance VALUES(null,'".$this->delegate_id."','".$session_id."',now())";
				
				Database::$conn->query($sql);

				return false;
			}
		}
		function isUserexist($delegate_id){
			$sql="SELECT * FROM tbl_delegates_barcode where delegates_barcode = '".$delegate_id."'";
			
			$result=Database::$conn->query($sql);
			
			if($result->num_rows > 0){
				return true;
					}
			else{
				return false;
					}
		}
		private function isAlready($session_id){
			$sql="SELECT * FROM tbl_attendance da right join tbl_session pt on pt.session_id = da.session_id 
			where pt.session_id = '".$session_id."' and delegates_id = '".$this->delegate_id."'";
			
			$result=Database::$conn->query($sql);
			
			if($result->num_rows > 0){
				return true;
					}
			else{
				return false;
					}
		}
		function loadrecentAttendee($session){
			$sql ="SELECT * FROM tbl_delegate_attendance where session_id=".$session."";
			
			$result=Database::$conn->query($sql);
			$ret_val = array();
			if($result->num_rows > 0){
			while($row=$result->fetch_array()){
				$d = new Delegates();
				$d->del_id = $row['del_id'];
				$d->barcode = $row['barcode'];
				$d->del_delegation = $row['del_delegation'];
				$d->del_fname = $row['del_fname'];
				$d->del_lname = $row['del_lname'];
				$d->attendance_id = $row['attendance_id'];
				$d->date = $row['session_date'];
				
				$ret_val[] = $d;
				
				}
			}
			return $ret_val;
		}
	}
?>