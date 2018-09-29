<?php
    global $connection;

    if(isset($_POST['submitkehadiran'])){
        
        $idj =$_POST['k_idj'];
        
        
        foreach (array_combine($_POST['idpk'],  $_POST['kehadiranpelajar']) as $idp => $kp){
            $sql_query = mysqli_query($connection, "INSERT INTO ke 
            (idj,id_p,kehadiran) VALUES 
            
            ('$idj','$idp','$kp')");
    
        }
    
        header("Location: ./kehadiran.php");
    }
?>