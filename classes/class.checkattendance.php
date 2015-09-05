<?php
	require_once('inc/connection.inc');


	class Checkattendance
	{
		public $delegate_id;
		public $delegate_Cname;
		public $delegate_Nname;
		public $delegate_sex;
		public $delegate_age; 
		public $delegate_contact; 
		public $delegate_email; 
		public $delegate_org; 
		public $delegate_tsize; 
		public $delegate_foodres;

		public $pref_id;
		public $pref_start;
		public $pref_end;
		

		function checktime(){
			$sql="SELECT pref_id, IF(now()  > `pref_start` AND now() < pref_end, TRUE, FALSE) as QueryResult FROM `pref_time` where is_active=1";
			$result=Database::$conn->query($sql);
			
			if($result->num_rows > 0){
				$value = mysqli_fetch_object($result);
				
					if($value->QueryResult==1){
						$this->pref_id = $value->pref_id;
						return true;
					}
					else{
						$this->pref_id = $value->pref_id;
						return false;
					}

			}
		}
		function saveattendance(){
			$hasAlready = $this->isAlready();
			if($hasAlready){
				return true;
			}

			else{
				$sql="INSERT INTO tbl_delegate_attendance VALUES(null,'".$this->delegate_id."','".$this->pref_id."',now())";
				
				Database::$conn->query($sql);

				return false;
			}
		}
		function isUserexist($delegate_id){
			$sql="SELECT * FROM tbl_delegates_info where delegate_attend_id = '".$delegate_id."'";
			
			$result=Database::$conn->query($sql);
			
			if($result->num_rows > 0){
				return true;
					}
			else{
				return false;
					}
		}
		private function isAlready(){
			$sql="SELECT * FROM tbl_delegate_attendance da right join tbl_session pt on pt.pref_id = da.pref_id 
			where pt.pref_id = '".$this->pref_id."' and delegate_attendance_id = '".$this->delegate_id."'";

			$result=Database::$conn->query($sql);
			
			if($result->num_rows > 0){
				return true;
					}
			else{
				return false;
					}
		}
	}
?>