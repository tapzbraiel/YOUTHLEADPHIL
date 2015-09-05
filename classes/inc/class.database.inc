<?php

class Database{
	//attributes of Database class
	public $server;
	public $user;
	public $pw;
	public $db;
	public static $conn;


	//function to connect to database
	function connect(){
		self::$conn=new mysqli($this->server, $this->user, $this->pw, $this->db);

		if(self::$conn->connect_errno){
			die("connection failed: " . self::$conn->connect_error);
		}
	}

}



?>