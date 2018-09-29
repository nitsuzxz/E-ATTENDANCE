<?php
    global $connection;

    if(isset($_POST['submitkehadiran'])){
        
        $idj =$_POST['k_sesi'];
         foreach ( $_POST['idpk'] as $idp);
        foreach  ( $_POST['kehadiranpelajar'] as $kp);
        
    
             
        $sql_query = mysqli_query($connection, "INSERT INTO ke 
        (idj,id_p,kehadiran) VALUES 
        
        ('$idj','$idp','$kp')");

        header("Location: ./kehadiran.php");
    }
?>

