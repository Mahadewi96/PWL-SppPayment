<p> DAFTAR SISWA MAHADEWI MUSIC SCHOOL</p>                           



							
						   <table  class='table table-striped'>
                            	<tr>
                                	<th>NIS</th>
									<th>NAMA SISWA</th>
									<th>JENIS KELAMIN</th>
									<th>TANGGAL LAHIR</th>
									<th>ALAMAT</th>
                                    <th>AGAMA</th>
									<th>NAMA ORTU</th>
									<th>KODE DIVISI</th>
									<th>ACTION</th>
									
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
									$query = "select * from siswa order by NIS";
									$hasil = mysql_query($query);
									while($tampilkan = mysql_fetch_array($hasil))
									{
								        echo"<tr>
												<td>$tampilkan[NIS]</td>
												<td>$tampilkan[namasiswa]</td>
												<td>$tampilkan[jeniskelamin]</td>
												<td>$tampilkan[tanggallahir]</td>
												<td>$tampilkan[alamat]</td>
												<td>$tampilkan[agama]</td>
												<td>$tampilkan[namaortu]</td>
												<td>$tampilkan[kodedivisi]</td>
												
												<td><a href='?modul=edit/edit_siswa&NIS=$tampilkan[NIS]'>Edit</a> |
													<a href='?modul=delete/delete_siswa&NIS=$tampilkan[NIS]'>Hapus<a>
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
                        
                        
                       