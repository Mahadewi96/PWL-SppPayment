<?php
  include("koneksi.php");  

	$id =$_REQUEST['NIS'];
	
	
	// sending query
	mysql_query("DELETE FROM siswa WHERE NIS = '$NIS'")
	or die(mysql_error());  	
	
	header("Location: siswa.php");
?>