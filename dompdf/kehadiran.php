<?php

global $connection;
    
    if(isset($_GET['idp'])){
    
      
    $pelajar=$_GET['idp'];
        
    $query="SELECT K.id_p,K.tarikh,J.hari, J.slot FROM ke 
    AS K
    JOIN jadual as J
    ON K.idj=J.idj
    where K.id_p='{$pelajar}'";
        
     
        
        
        $kehadiran = mysqli_query($connection, $query);
                                  
            while($row= mysqli_fetch_array($kehadiran)){
                               
                                      $ks          = $row['slot'];
                                      $kh         = $row['hari'];
                                      $kt         = $row['tarikh'];
         echo "<tr>
                    <td>Tidak hadir ke kuliah</td>
	                <td>$kh</td>
	                <td>$kt</td>
                    <td>$ks</td>
               
             </tr>";        
    }
        
    }
    
    ?>
    