<?php
include ("../config/db.php");
global $connection;

        if (isset($_GET['hari'])&&isset($_GET['ssb'])&&isset($_GET['ssp'])) {
        $hari= $_GET['hari'];
        $bahagian= $_GET['ssb'];
        $pengajar= $_GET['ssp'];
            if($hari!=""){

            $res=mysqli_query($connection,"select slot from jadual 
where bahagian='$bahagian'' and id_pen='$pengajar'' and hari='$hari'");
            
            
             echo "<select id='ksesi' name='ksesi' onclick='kkelas();' class='form-control' required>";
             echo "<option value=''>";
             echo "Pilih Sesi";
             echo "</option>";
             while($row=mysqli_fetch_array($res))
                {
                   
                    echo "<option value='$row[idj]'>"; 
                    echo $row["slot"]; 
                    echo "</option>";
                }  
     
        }
        }

                            
?>