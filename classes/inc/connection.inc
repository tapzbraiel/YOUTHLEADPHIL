<?php
	require('class.database.inc');

	//instantiation
	$db=new Database();
	$db->server='localhost';
	$db->user='root';
	$db->pw='';
	$db->db='youthleadphildatabase';
	$db->connect();
?>