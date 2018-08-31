<?php

                global $connection;
                                  
                                  $query = "SELECT * FROM subjek ";
                                  $sbr= mysqli_query($connection, $query);
                                  
                                  while($row= mysqli_fetch_array($sbr)){
                                      $idsb= $row['idsub'];
                                      $sbk= $row['subjek'];
                                      $kd= $row['kod'];
                                      $bhgn= $row['bahagian'];
                                      $ss= $row['sesi'];
    
                                      
                                      echo "<tr>
	                                   <td>$sbk</td>
	                                   <td>$kd</td>
                                       <td>$bhgn</td>
	                                   <td>$ss</td>
                                       </tr>";
                                      }
                            if(isset($_GET['delete'])){
                            $query = "DELETE FROM subjek WHERE idsub = {$_GET['delete']}";
                            $delete_query = mysqli_query($connection, $query);
                            
                            header("Location: ./subjek.php");
                        }       

?>