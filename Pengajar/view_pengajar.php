 <?php
                                  global $connection;
                                  
                                  $query = "SELECT * FROM pengajar";
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
	                                   <td><a onclick='modalDelete({$id_pengajar})' button type='button' class='btn btn-danger'>DELETE</button></a></td>
                                       <td><a href='./pengajar.php?edit={$id_pengajar}' button  type='button' class='btn btn-warning'>EDIT</button></a></td>
                                       </tr>";
                                      }

                            
                            if(isset($_GET['delete'])){
                            $query = "DELETE FROM pengajar WHERE id_pengajar = {$_GET['delete']}";
                            $delete_query = mysqli_query($connection, $query);
                            
                            header("Location: ./pengajar.php#success");
                        }                                     
?>