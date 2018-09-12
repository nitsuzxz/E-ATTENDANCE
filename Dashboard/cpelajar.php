<?php

global $connection;
                                  
 $query = "SELECT count(kehadiran) FROM ke WHERE `kehadiran` = '/' GROUP BY `id_p";      

        
                $count= mysqli_query($connection, $query);

                 while($row= mysqli_fetch_array($$count)){
                     
                     $cp=$row['count(kehadiran)'];
                 }


?>