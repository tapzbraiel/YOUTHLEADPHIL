<?php
	require_once('inc/connection.inc');

	class Delegates{
		public $del_id; 
		public $barcode; 
		public $del_delegation;
		public $del_fname;
		public $del_lname;
		public $del_bdate;
		public $del_sex;
		public $del_contact;
		public $attendance_id;
		public $date;
		function saveDelegate(){
			$sql="INSERT INTO `tbl_delegates_info` VALUES(NULL,
					'".$this->del_delegation."',
					'".$this->del_fname."',
					'".$this->del_lname."',
					'".$this->del_bdate."',
					'".$this->del_sex."',
					'".$this->del_contact."')";

		return Database::$conn->query($sql);
		}

		function loadDelegates(){
		$sql="SELECT del_id,if(delegates_barcode is null,'Not yet entered',delegates_barcode) as barcode, del_delegation, del_fname, del_lname, del_bdate, del_sex, del_contact FROM tbl_delegates_info di left join tbl_delegates_barcode db
on di.del_id = db.delegates_id group by del_id order by barcode desc";
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
				$d->del_bdate = $row['del_bdate'];
				$d->del_sex = $row ['del_sex'];
				$d->del_contact = $row['del_contact'];
				$ret_val[] = $d;
			}
		}
		return $ret_val;
	}
	function loadDelegateswithID(){
		$sql="SELECT del_id,if(delegates_barcode is null,'Not yet entered',delegates_barcode) as barcode, del_delegation, del_fname, del_lname, del_bdate, del_sex, del_contact FROM tbl_delegates_info di left join tbl_delegates_barcode db
on di.del_id = db.delegates_id WHERE delegates_barcode ='".$this->barcode."'  group by del_id order by barcode desc";
		$result=Database::$conn->query($sql);
		$ret_val = array();

		if($result->num_rows > 0){
			while($row=$result->fetch_array()){
				$d = new Delegation();
				$d->del_id = $row['del_id'];
				$d->barcode = $row['barcode'];
				$d->del_delegation = $row['del_delegation'];
				$d->del_fname = $row['del_fname'];
				$d->del_lname = $row['del_lname'];
				$d->del_bdate = $row['del_bdate'];
				$d->del_sex = $row ['del_sex'];
				$d->del_contact = $row['del_contact'];
				$ret_val[] = $d;
			}
		}
		return $ret_val;
	}

	function saveDelBarcode($id,$barcode){
		$sql = "INSERT INTO `tbl_delegates_barcode` VALUES(NULL,".$id.",".$barcode.")";
		
		return Database::$conn->query($sql);
	}

	}
?>