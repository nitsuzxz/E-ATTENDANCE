<?php
include ("../config/db.php");
    global $connection;

    if(isset($_POST['submitkehadiran'])){
  
        
    
        foreach ( $_POST['idpelajar'] as $id_pel );
        foreach ( $_POST['kehadiran'] as $kehadiran );
            
        $sql_query = mysqli_query($connection, "INSERT INTO ke ( id_p, kehadiran) VALUES  ('$id_pel','$kehadiran')");

        header("Location: ./kehadiran.php");
    }
?>
