<?php

require_once('lib/DBClass.php');

class Divisi{{

	private $db;

	public function Divisi(){
		$this->db = new DBClass();
	}

	public function readAllDivisi(){
		$query = "Select * from Divisi";
		return $this->db->getRows($query);	
	}
	
}