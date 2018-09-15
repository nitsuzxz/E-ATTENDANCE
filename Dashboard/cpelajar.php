<?php

global $connection;
                                  

$query = "SELECT id_p,count(kehadiran) AS cnt FROM ke WHERE `kehadiran` = '/' GROUP BY `id_p`";      

        
                $count= mysqli_query($connection, $query);

                 while($row= mysqli_fetch_array($count)){
                     
                     $cp=$row['cnt'];
                      $dp=$row['id_p'];
                     
                     
                          echo "<tr>
	                                   
	                                   <td>$dp</td>
	                                   <td>$cp</td>
                                    <td><a href='../surat/surat.php?sth={$cp}&idp={$dp}' button  type='button' class='btn btn-warning'>Muat Turun</button></a></td>    
                                       
                                       </tr>";
                     
                
                 }

?>



