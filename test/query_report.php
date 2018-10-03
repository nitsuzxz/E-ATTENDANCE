<?php

include("../config/db.php");
    
   
    if(isset($_GET['muat_turun'])){
        $kelas =$_GET['pilih_kelas'];
        $sesi =$_GET['sel_sesis'];
        $mula =$_GET['date'];
        $akhir =$_GET['date2'];
        
        
        $query ="SELECT * FROM ke AS K
        JOIN jadual as J
        ON K.idj=J.idj
        WHERE tarikh BETWEEN '2018-10-01' AND '2018-10-03'
        AND sesi='$sesi'
        AND kelas='$kelas'";
        
        $query_official_report= mysqli_query($connection, $query);
                                  
        while($row= mysqli_fetch_array($query_official_report)){
            
            
            
    }
}
?>