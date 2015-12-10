<?php
require("koneksi.php");
$id =$_REQUEST['NIS'];

$result = mysql_query("SELECT * FROM siswa WHERE NIS  = '$NIS'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$NIS=$test['NIS'] ;
				$namasiswa=$test['namasiswa'] ;					
				$jeniskelamin=$test['jeniskelamin'] ;
				$tanggallahir=$test['tanggallahir'] ;
				$alamat=$test['alamat'] ;
				$agama=$test['agama'] ;
				$namaortu=$test['namaortu'] ;
				$kodedivisi=$test['kodedivisi'] ;


if(isset($_POST['save']))
{	
	$NIS_save = $_POST['NIS'];
	$namasiswa_save = $_POST['namasiswa'];
	$jeniskelamin_save = $_POST['jeniskelamin'];
	$tanggallahir_save = $_POST['tanggallahir'];
	$alamat_save = $_POST['alamat'];
	$agama_save = $_POST['agama'];
	$namaortu_save = $_POST['namaortu'];
	$kodedivisi_save = $_POST['kodedivisi'];

	mysql_query("UPDATE siswa SET NIS ='$NIS_save', namasiswa ='$namasiswa_save',
		 jeniskelamin ='$jeniskelamin_save',tanggallahir ='$tanggallahir_save',alamat ='$alamat_save',agama ='$agama_save',namaortu ='$namaortu_save',kodedivisi ='$kodedivisi_save' WHERE NIS = '$NIS'")
				or die(mysql_error()); 
	echo "Saved!";
	
	header("Location: siswa.php");			
}
mysql_close($conn);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form method="post">
<table>
	<tr>
		<td>NIS:</td>
		<td><input type="text" name="NIS" value="<?php echo $NIS ?>"/></td>
	</tr>
	<tr>
		<td>Nama Siswa:</td>
		<td><input type="text" name="namasiswa" value="<?php echo $namasiswa ?>"/></td>
	</tr>
	<tr>
		<td>Jenis Kelamin:</td>
		<td><input type="text" name="jeniskelamin" value="<?php echo $jeniskelamin ?>"/></td>
	</tr>
	<tr>
		<td>Tanggal Lahir:</td>
		<td><input type="text" name="tanggallahir" value="<?php echo $tanggallahir ?>"/></td>
	</tr>
	<tr>
		<td>Alamat:</td>
		<td><input type="text" name="alamat" value="<?php echo $alamat ?>"/></td>
	</tr>
	<tr>
		<td>Agama:</td>
		<td><input type="text" name="agama" value="<?php echo $agama ?>"/></td>
	</tr>
	<tr>
		<td>Nama Ortu:</td>
		<td><input type="text" name="namaortu" value="<?php echo $namaortu ?>"/></td>
	</tr>
	<tr>
		<td>Kode Divisi:</td>
		<td><input type="text" name="kodedivisi" value="<?php echo $kodedivisi ?>"/></td>
	</tr>
	
	
	
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="save" value="save" /></td>
	</tr>
</table>

</body>
</html>
