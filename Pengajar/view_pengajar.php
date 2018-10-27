 <?php
                                  global $connection;


                            $query1="SELECT P.id_pengajar, P.nama_pengajar,P.email_pengajar,J.jawatan, B.bahagian
                            FROM pengajar as P
                            JOIN jawatan as J
                            on P.jawatan=J.id
                            Join bahagian as B
                            ON P.bahagian=B.id";
                                  
                                  $pengajar= mysqli_query($connection, $query1);
                                    $datas= array();
                                  
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