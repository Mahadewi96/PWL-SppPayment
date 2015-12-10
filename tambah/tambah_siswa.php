<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Siswa</title>
</head>

<body>
<form method="post">
<table>

	<tr>
		<td>NIS:</td>
		<td><input type="text" name="NIS" /></td>
	</tr>
	<tr>
		<td>Nama Siswa</td>
		<td><input type="text" name="namasiswa" /></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td><input type="text" name="jeniskelamin" /></td>
	</tr>
	<tr>
		<td>Tanggal Lahir</td>
		<td><input type="text" name="tanggallahir" /></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat" /></td>
	</tr>
	<tr>
		<td>Agama</td>
		<td><input type="text" name="agama" /></td>
	</tr>
	<tr>
		<td>Nama Ortu</td>
		<td><input type="text" name="namaortu" /></td>
	</tr>
	<tr>
		<td>Kode Divisi</td>
		<td><input type="text" name="kodedivisi" /></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="submit" value="add" /></td>
	</tr>
</table>
<?php
if (isset($_POST['submit']))
	{	   
	include 'koneksi.php';
	
			 		$NIS=$_POST['NIS'] ;
					$namasiswa= $_POST['namasiswa'] ;					
					$jeniskelamin=$_POST['jeniskelamin'] ;
					$tanggallahir=$_POST['tanggallahir'] ;
					$alamat_POST['alamat'] ;
					$agama=$_POST['agama'] ;
					$namaoru=$_POST['namaortu'] ;
					$kodedivisi=$_POST['kodedivisi'] ;
												
		 mysql_query("INSERT INTO siswa (NIS,namasiswa,jeniskelamin,tanggallahir,alamat,agama,namaortu,kodedivisi) 
		 VALUES ('$NIS','$namasiswa','$jeniskelamin','$tanggallahir','$alamat','$agama','$namaortu','$kodedivisi')"); 
				
				
	        }
?>
</form>
<table border="1">
	
			<?php
			include("koneksi.php");
			
				
			$result=mysql_query("SELECT * FROM siswa");
			
			while($test = mysql_fetch_array($result))
			{
				$NIS = $test['NIS'];	
				echo "<tr align='center'>";	
				echo"<td><font color='black'>" .$test['NIS']."</font></td>";
				echo"<td><font color='black'>" .$test['namasiswa']."</font></td>";
				echo"<td><font color='black'>". $test['jeniskelamin']. "</font></td>";
				echo"<td><font color='black'>". $test['tanggallahir']. "</font></td>";
				echo"<td><font color='black'>". $test['alamat']. "</font></td>";
				echo"<td><font color='black'>". $test['agama']. "</font></td>";
				echo"<td><font color='black'>". $test['namaortu']. "</font></td>";
				echo"<td><font color='black'>". $test['kodedivisi']. "</font></td>";
				echo"<td> <a href ='view.php?NIS=$NIS'>Edit</a>";
				echo"<td> <a href ='del.php?NIS=$NIS'><center>Delete</center></a>";
									
				echo "</tr>";
			}
			mysql_close($conn);
			?>
</table>

</body>
</html>
