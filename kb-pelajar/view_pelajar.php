 <?php
                                  global $connection;
                                  $query = "SELECT * FROM pelajar WHERE kursus='{$_SESSION['bahagian']}'";
                                  $pelajar= mysqli_query($connection, $query);
                                  
                                  while($row= mysqli_fetch_array($pelajar)){
                                      $id               = $row['id'];
                                      $nama_pelajar     = $row['nama_pelajar'];
                                      $no_ndp           = $row['no_ndp'];
                                      $kursus           = $row['kursus'];
                                      $semester         = $row['semester'];
                                      $ic               = $row['ic'];
                                      $alamat           = $row['alamat'];
                                      
                                      echo "<tr>
	                                   <td>$id</td>
	                                   <td>$nama_pelajar</td>
	                                   <td>$no_ndp</td>
                                       <td>$kursus</td>
                                       <td>$semester</td>
	                                   <td>$ic</td>
	                                   <td>$alamat</td>
	                                   <td><a href='./pelajar.php?delete={$id}' button type='button' class='btn btn-danger'>DELETE</button></a></td>
                                       <td><a href='./pelajar.php?edit={$id}' button type='button' class='btn btn-warning'>EDIT</button></a></td>
                                       
                                       </tr>";
                                      }
                            
                            if(isset($_GET['delete'])){
                            $query = "DELETE FROM pelajar WHERE id = {$_GET['delete']}";
                            $delete_query = mysqli_query($connection, $query);   
                            header("Location: ./pelajar.php");
                        }                                     
?>