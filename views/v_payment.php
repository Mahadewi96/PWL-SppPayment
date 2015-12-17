<p> TABEL PEMBAYARAN SPP MAHADEWI MUSIC SCHOOL</p>                           




						   <table  class='table table-striped'>
                            	<tr>
                                	<th>NO PEMBAYARAN</th>
									<th>NIS</th>
									<th>JENIS PEMBAYARAN</th>
									<th>TANGGAL PEMBAYARAN</th>
									<th>KODE DIVISI</th>
                                    <th>TOTAL PEMBAYARAN</th>
									<th>USERNAME ADMIN</th>
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
									$query = "select * from pembayaran order by kodepembayaran";
									$hasil = mysql_query($query);
									while($tampilkan = mysql_fetch_array($hasil))
									{
								        echo"<tr>
												<td>$tampilkan[kodepembayaran]</td>
												<td>$tampilkan[NIS]</td>
												<td>$tampilkan[jenispembayaran]</td>
												<td>$tampilkan[tglpembayaran]</td>
												<td>$tampilkan[kodedivisi]</td>
												<td>$tampilkan[totalpembayaran]</td>
												<td>$tampilkan[username]</td>
												<td><a href='?modul=edit_pembayaran&id=$tampilkan[kodepembayaran]'><span class='label label-success'>edit</span>
													<a href='proses.php?modul=hapus_pembaya&id=$tampilkan[kodepembayaran]'><span class='label label-danger'>delete</span>
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
                        
                        
                       