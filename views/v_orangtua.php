<p> TABEL DATA ORANG TUA SISWA MAHADEWI MUSIC SCHOOL</p>                           




						   <table  class='table table-striped'>
                            	<tr>
                                	<th>NO KTP</th>
									<th>NAMA</th>
									<th>NO TELP</th>
									<th>JENIS KELAMIN</th>
                                    <th>ALAMAT</th>
									<th>PEKERJAAN</th>
									</tr>
								
<?php
 
$user_name = "root";
$password = "";
$database = "pembayaranSpp";
$host_name = "localhost";
 
$connect_db=mysql_connect($host_name, $user_name, $password);
 
$find_db=mysql_select_db($database);
 
if ($find_db) {
									$no=1;
									$query = "select * from orangtua order by noktp";
									$hasil = mysql_query($query);
									while($tampilkan = mysql_fetch_array($hasil))
									{
								        echo"<tr>
												<td>$tampilkan[noktp]</td>
												<td>$tampilkan[nama]</td>
												<td>$tampilkan[notelp]</td>
												<td>$tampilkan[jeniskelamin]</td>
												<td>$tampilkan[alamat]</td>
												<td>$tampilkan[pekerjaan]</td>
												<td><a href='?modul=edit_orangtua&id=$tampilkan[noktp]'>Edit</a> |
													<a href='proses.php?modul=hapus_orangtua&id=$tampilkan[noktp]'>Hapus<a>
												</td>
                	                        </tr>";
									$no++;
									}
mysql_close($connect_db);
 
}else {
 
  echo "Database Tidak Ada";
 
  mysql_close($connect_db);
 
}
 
?>
								
                            </table>
                        
                        
                       