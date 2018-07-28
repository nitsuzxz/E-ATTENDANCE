 <?php
                                  global $connection;
                                  
                                  $query    = "SELECT * FROM pelajar";
                                  $pelajar  = mysqli_query($connection, $query);
                                  
                                  while($row= mysqli_fetch_array($pelajar)){
                                      $id               = $row['id'];
                                      $nama_pelajar     = $row['nama_pelajar'];
                                      $no_ndp           = $row['no_ndp'];
                                      $bahagian        = $row['bahagian'];
                                      $semester         = $row['semester'];
                                      $pass_pelajar     = $row['pass_pelajar'];
                                      $ic               = $row['ic'];
                                      $alamat           = $row['alamat'];
                                      
                                      echo "<tr>
	                                   <td>$id</td>
	                                   <td>$nama_pelajar</td>
	                                   <td>$no_ndp</td>
                                       <td>$bahagian</td>
                                       <td>$semester</td>
	                                   <td>$pass_pelajar</td>
	                                   <td>$ic</td>
	                                   <td>$alamat</td>
	                                   <td><a onclick='modalDelete({$id})' button type='button' class='btn btn-danger'>DELETE</button></a></td>
                                       <td><a href='./pelajar.php?edit={$id}' button  type='button' class='btn btn-warning'>EDIT</button></a></td>
                                       
                                       </tr>";
                                      }
                            
                            if(isset($_GET['delete'])){
                            $query = "DELETE FROM pelajar WHERE id = {$_GET['delete']}";
                            $delete_query = mysqli_query($connection, $query);
                            
                            header("Location: ./pelajar.php");
                        }                                     
?>