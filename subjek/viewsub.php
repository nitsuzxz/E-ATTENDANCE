<?php

                global $connection;
                                  
                                  $query = "SELECT * FROM subjek INNER JOIN pengajar ON subjek.id_sub=pengajar.id_pengajar";
                                  $pengajar= mysqli_query($connection, $query);
                                  
                                  while($row= mysqli_fetch_array($pengajar)){
                                      $id_pengajar= $row['id_pengajar'];
                                      $nama_pengajar= $row['nama_pengajar'];
                                      $email_pengajar= $row['email_pengajar'];
                                      $pass_pengajar= $row['pass_pengajar'];
                                      $bahagian= $row['bahagian'];
                                      $jawatan= $row['jawatan'];
                                      
                                      echo "<tr>
	                                   <td>$id_pengajar</td>
	                                   <td>$nama_pengajar</td>
	                                   <td>$email_pengajar</td>
	                                   <td>$pass_pengajar</td>
	                                   <td>$bahagian</td>
	                                   <td>$jawatan</td>
	                                   <td><a href='./pengajar.php?delete={$id_pengajar}' onClick=\"return confirm('Adakah anda hendak memadam pengguna ini?');\" button type='button' class='btn btn-danger'>delete</a></td>
                                       <td><a href='./pengajar.php?edit={$id_pengajar}' onClick=\"return confirm('Adakah anda pasti hendak menyunting pengguna ini?');\" button type='button' class='btn btn-warning'>EDIT</a></td>
                                       </tr>";
                                      }

?>