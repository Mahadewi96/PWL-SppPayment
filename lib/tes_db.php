<?php

	require_once('lib/DBClass.php');
	$db = new DBClass();
	
	$conn = $db->connect();
	
	$query = "select * from admin";
	$row = $db->getRows($query);
	
	print '<pre>';
	print_r($row);
	print '</pre>';
	
?>