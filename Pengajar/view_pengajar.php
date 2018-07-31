 <?php
                                  global $connection;
                                  
                                  $query1 = "SELECT n.id_pengajar,n.nama_pengajar,n.email_pengajar,j.jawatan,b.bahagian
                                  from pengajar as n
                                  join jawatan as j
                                  on n.jawatan=j.id
                                  join bahagian as b
                                  on n.bahagian=b.id";


                                  $pengajar= mysqli_query($connection, $query1);
                                  
                                  while($row= mysqli_fetch_array($pengajar)){
                                      $id_pengajar= $row['id_pengajar'];
                                      $nama_pengajar= $row['nama_pengajar'];
                                      $email_pengajar= $row['email_pengajar'];
                                      $j_pengajar= $row['jawatan'];
                                      $bahagian= $row['bahagian'];
                                      
                                      echo "<tr>
	                                   <td>$id_pengajar</td>
	                                   <td>$nama_pengajar</td>
	                                   <td>$email_pengajar</td>
	                                   <td>$j_pengajar</td>
	                                   <td>$bahagian</td>
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