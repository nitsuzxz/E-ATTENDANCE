<?php

                global $connection;
                                  
                                  $query = "SELECT S.idsub,S.subjek,S.kod,b.bahagian,ses.sesi FROM subjek as S
                                  JOIN bahagian as B
                                  ON S.bahagian=B.id
                                  JOIN sesi as ses
                                  ON S.sesi=ses.ids
                                  WHERE S.bahagian={$_SESSION['bahagian']}
                                  ORDER BY S.subjek AND ses.sesi ASC";
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
                                       <td><a onclick='modal_delsubjek({$idsb})' button type='button' class='btn btn-danger'>DELETE</button></a></td>
                                       <td><a href='./subjek.php?edit={$idsb}' button  type='button' class='btn btn-warning'>EDIT</button></a></td>
                                       </tr>";
                                      }
       

?>