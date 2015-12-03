<marquee behavior="alternate"><h2>MAHADEWI MUSIC SCHOOL</h2></marquee>
<p>TABEL ADMIN MAHADEWI MUSIC SCHOOL</p>                           




						   <table  class='table table-striped'>
                            	<tr>
                                	<th>NO</th>
									<th>USERNAME</th>
                                    <th>ADMIN NAME</th>
									<th>EMAIL</th>
									
                                </tr>
								
<?php
 
$user_name = "root";
$password = "";
$database = "apotek";
$host_name = "localhost";
 
$connect_db=mysql_connect($host_name, $user_name, $password);
 
$find_db=mysql_select_db($database);
 
if ($find_db) {
									$no=1;
									$query = "select * from admin order by username";
									$hasil = mysql_query($query);
									while($tampilkan = mysql_fetch_array($hasil))
									{
								        echo"<tr>
												<td>$no</td>
												<td>$tampilkan[username]</td>
												<td>$tampilkan[nama_lengkap]</td>
												<td>$tampilkan[email]</td>
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
                        
                        
                       