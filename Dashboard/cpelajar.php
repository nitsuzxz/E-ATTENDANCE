 <?php

global $connection;
                                  

$query = "SELECT K.id_p,P.nama_pelajar, COUNT(kehadiran) as KH
FROM ke as K
JOIN pelajar AS P
on P.id_pelajar=K.id_p
WHERE `kehadiran` = 'o' GROUP BY `id_p`";      

        
                $count= mysqli_query($connection, $query);

                 while($row= mysqli_fetch_array($count)){
                     
                     $cp=$row['KH'];
                      $np=$row['nama_pelajar'];
                      $dp=$row['id_p'];
                      if($cp>14){
                          echo "<tr>
	                                   
                                    <td>$np</td>
	                                <td>$cp</td>
                                    <td><a href='../surat/dpdf.php?sth={$cp}&idp={$dp}' button  type='button' class='btn btn-warning'>Muat Turun</button></a></td>    
                                       
                                </tr>";
                     
                
                 }
                }

?>



