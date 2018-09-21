 <?php
                           global $connection;
                           $query    = "SELECT 
                                  p.id_pelajar,p.nama_pelajar, p.no_ndp, p.ic, p.alamat, b.bahagian, p.kelas 
                                  from pelajar as p 
                                  join bahagian as b
                                  on p.bahagian=b.id
                                  WHERE p.bahagian='{$_SESSION['bahagian']}'";
                                  
                          $pelajar  = mysqli_query($connection, $query);
                                  
                                  while($row= mysqli_fetch_array($pelajar)){
                                      $id_pelajar       = $row['id_pelajar'];
                                      $nama_pelajar     = $row['nama_pelajar'];
                                      $no_ndp           = $row['no_ndp'];
                                      $bahagian         = $row['bahagian'];
                                      $kelas            = $row['kelas'];
                                      $ic               = $row['ic'];
                                      $alamat           = $row['alamat'];
                                      
                                      echo "<tr>
	                                   <td>$id_pelajar</td>
	                                   <td>$nama_pelajar</td>
	                                   <td>$no_ndp</td>
                                       <td>$bahagian</td>
                                       <td>$kelas</td>
	                                   <td>$ic</td>
	                                   <td>$alamat</td>
	                                   <td><a onclick='modalDeletePelajar({$id_pelajar})' button type='button' class='btn btn-danger'>DELETE</button></a></td>
                                       <td><a href='./pelajar.php?edit={$id_pelajar}' button  type='button' class='btn btn-warning'>EDIT</button></a></td>
                                       
                                       </tr>";
                                      }
                            
                           if(isset($_GET['delete'])){
                            $query = "DELETE FROM pelajar WHERE id_pelajar = {$_GET['delete']}";
                            $delete_query = mysqli_query($connection, $query);
                            
                            header("Location: ./pelajar.php");
                        }                                     
?>