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
	                                   <td><a href='./subjek.php?delete={$idsb}' button type='button' class='btn btn-danger'>Delete</a></td>
                                       <td><a href='./subjek.php?edit={$idsb}' onClick=\"return confirm('Adakah anda pasti hendak menyunting pengguna ini?');\" button type='button' class='btn btn-warning'>Edit</a></td>
                                       </tr>";
                                      }
                            if(isset($_GET['delete'])){
                            $query = "DELETE FROM subjek WHERE idsub = {$_GET['delete']}";
                            $delete_query = mysqli_query($connection, $query);
                            
                            header("Location: ./subjek.php");
                        }       

?>