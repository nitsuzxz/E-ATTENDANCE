 <?php
                                  global $connection;
                                  
                                  $query = "SELECT * FROM pengajar";
                                  $pengajar= mysqli_query($connection, $query);
                                  
                                  while($row= mysqli_fetch_array($pengajar)){
                                      $id= $row['id'];
                                      $nama= $row['id_pengajar'];
                                      $email= $row['email'];
                                      $pass= $row['password'];
                                      $bahagian= $row['bahagian'];
                                      $jawatan= $row['jawatan'];
                                      
                                      echo "<tr>
	                                   <td>$id</td>
	                                   <td>$nama</td>
	                                   <td>$email</td>
	                                   <td>$pass</td>
	                                   <td>$bahagian</td>
	                                   <td>$jawatan</td>
	                                   <td><a href='./pengajar.php?delete={$id}' button type='button' class='btn btn-danger'>DELETE</button></a></td>
                                       <td><a href='./pengajar.php?edit={$id}' button type='button' class='btn btn-warning'>EDIT</button></a></td>
                                       
                                       </tr>";
                                      }
                            
                            if(isset($_GET['delete'])){
                            $query = "DELETE FROM pengajar WHERE id = {$_GET['delete']}";
                            $delete_query = mysqli_query($connection, $query);
                            
                            header("Location: ./pengajar.php");
                        }                                     
?>