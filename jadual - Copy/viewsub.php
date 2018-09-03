<?php
include("../config/db.php");
                global $connection;
                                  
                                  $query = "SELECT * FROM subjek ";
                                  if(isset($_GET['bahagian'])){
                                    $bahagian = $_GET['bahagian'];
                                    $query = $query . " WHERE bahagian=$bahagian";
                                  }
                                  if(isset($_GET['sesi'])){
                                    $sesi = $_GET['sesi'];
                                    $query = $query . " AND sesi=$sesi";
                                  }
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