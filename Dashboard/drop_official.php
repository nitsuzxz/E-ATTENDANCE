<?php

include ("../config/db.php");

        if (isset($_GET['sesi'])) {
        $sesi= $_GET['sesi'];

               if($sesi!=""){
                
                echo "<select id='pilih_kelas' name='pilih_kelas' class='form-control' required>";
                echo "<option value=''>";
                echo "Pilih Kelas";
                echo "</option>";
                echo "<option value='1' >"; 
                echo "KELAS 1"; 
                echo "</option>";
                echo "<option value='2' >"; 
                echo "KELAS 2"; 
                echo "</option>";
                echo "<option value='3' >"; 
                echo "KELAS 3"; 
                echo "</option>";       
                echo "<option value='4' >"; 
                echo "KELAS 4"; 
                echo "</option>";  
    
                    }  
        
        }



?>