<?php

class DB{
	private $host;
	private $db;
	private $user;
	private $password;
	private $charset;

	public function _construct(){
		$this->host ='localhost';
		$this->db = 'help';
		$this->user = 'root';
		$this->password ='';
		$this->charset = 'utf8mb4_bin';
	}

	function connect(){
		try{
			$connection = "mysql:host=".$this->host."; dbname=".$this->db."; username=".$this->user."; password=".$this->password.";";
		}
		catch(error){

		}
	}
}
?>