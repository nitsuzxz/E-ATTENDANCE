 <?php
                                  global $connection;
                                  
                                  $query    = "SELECT 
                                  p.id_pelajar,p.nama_pelajar, p.no_ndp, p.ic, b.bahagian, p.kelas,s.sesi 
                                  from pelajar as p 
                                  join bahagian as b
                                  on p.bahagian=b.id
                                  join sesi as s
                                  on p.sesi=s.ids
                                  where p.bahagian={$_SESSION['bahagian']}
                                  ORDER BY p.nama_pelajar AND p.no_ndp ASC";

                                  $pelajar  = mysqli_query($connection, $query);
                                  
                                  while($row= mysqli_fetch_array($pelajar)){
                                       $id_pelajar    = $row['id_pelajar'];
                                     $nama_pelajar    = $row['nama_pelajar'];
                                     $no_ndp          = $row['no_ndp'];
                                     $bahagian        = $row['bahagian'];
                                     $kelas           = $row['kelas'];
                                     $ic              = $row['ic'];
                                     $sesi            = $row['sesi'];
                                      
                                      echo "<tr>
	                                   <td>$nama_pelajar</td>
                                           <td>$ic</td>
	                                   <td>$no_ndp</td>
                                       <td>$bahagian</td>
                                       <td>$sesi</td>
                                       <td>$kelas</td>
	                               
	                                   <td><a href='./pelajar.php?edit={$id_pelajar}' button  type='button' class='btn btn-warning'>EDIT</button></a></td>
	                                   <td><a onclick='modalDeletePelajar({$id_pelajar})' button type='button' class='btn btn-danger'>DELETE</button></a></td>
                                   
                                       
                                       </tr>";
                                      }
                            
                            if(isset($_GET['delete'])){
                            $query = "DELETE FROM pelajar WHERE id_pelajar = {$_GET['delete']}";
                            $delete_query = mysqli_query($connection, $query);
                            
                            header("Location: ./pelajar.php#success");
                        }                                     
?>

                                      
            