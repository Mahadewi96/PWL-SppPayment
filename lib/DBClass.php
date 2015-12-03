<?php

	class DBClass
	{
		/*
        *  Class Members:
		* 		$db - Data base connection
		* 		$dbname - Database name
        *		$rowColl - rows collection
        *       $host - server path
		* 		$user -  User name
		* 		$password  - Password
		*/

		public $db, $dbname, $rowColl;
		public $host, $user, $password;

		/*
		*   Initialize the class members
		*
		*   $t_host - House server
		*   $t_dbname - Databse Name
		*   $t_user - User Name
		*   $t_pass - User Password
		*/
		
		function __construct()
		{
			$this->db = false;
			$this->dbname = 'pembayaranSpp';
			$this->host   = 'localhost';
			$this->user   = 'root';
			$this->password = '';
		}

		/*
		*   Make a connection for default settings
		*   and
		*   Select the Database
		*/

		function connect()
		{
			$this->db = mysql_connect(
				$this->host, 
				$this->user, 
				$this->password) 
			or die("Database Connection Access Error..".mysql_error());
			
			if($this->db == false) return false;
			mysql_select_db($this->dbname, $this->db);
		}

		/*
		*   Connection Closed
		*/

		function close()
		{
			mysql_close($this->db) or die ("Database Access Error...".mysql_error());
			$this->db = false;
		}
		
		function getRows($sql)
		{
			if(!is_resource($this->db)) $this->connect();			
			
			$this->rowColl = mysql_query($sql) or die("Error : ".mysql_error());
			$rows  = array();
			
			if( count($this->rowColl) > 1) mysql_data_seek($this->rowColl,0);
			
			while ($row = mysql_fetch_array($this->rowColl, MYSQL_ASSOC))
				$rows[] = $row;
			
			return $rows;
		}
		
		/*
		*   parameter:
		*   $sql - (string) Insert query
		*
		*/

		function putRows($sql)
		{
			if(!is_resource($this->db)) $this->connect();
			mysql_query($sql,$this->db) 
				or die("Qry : " . $sql . "Insertion/Updation Error...." . mysql_error());						
		}
	}
?>
