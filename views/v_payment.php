<p> TABEL PEMBAYARAN SPP MAHADEWI MUSIC SCHOOL</p>                           




						   <table  class='table table-striped'>
                            	<tr>
                                	<th>NO PEMBAYARAN</th>
									<th>NIS</th>
									<th>JENIS PEMBAYARAN</th>
									<th>TANGGAL PEMBAYARAN</th>
									<th>DIVISI</th>
                                    <th>TOTAL PEMBAYARAN</th>
									<th>NO KTP ORTU</th>
									<th>USERNAME ADMIN</th>
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
									$query = "select * from pembayaran order by kodepembayaran";
									$hasil = mysql_query($query);
									while($tampilkan = mysql_fetch_array($hasil))
									{
								        echo"<tr>
												<td>$tampilkan[kodepembayaran]</td>
												<td>$tampilkan[NIS]</td>
												<td>$tampilkan[jenispembayaran]</td>
												<td>$tampilkan[tglpembayaran]</td>
												<td>$tampilkan[Divisi]</td>
												<td>$tampilkan[totalpembayaran]</td>
												<td>$tampilkan[noktp]</td>
												<td>$tampilkan[username]</td>
												<td><a href='?modul=edit_pembayaran&id=$tampilkan[kodepembayaran]'>Edit</a> |
													<a href='proses.php?modul=hapus_pembaya&id=$tampilkan[kodepembayaran]'>Hapus<a>
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
                        
                        
                       