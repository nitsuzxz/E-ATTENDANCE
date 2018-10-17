<?php
    global $connection;

    if(isset($_POST['submitkehadiran'])){
 
        $idj =$_POST['ganti_pelajard'];
        $tarikh =$_POST['date'];
  
   
         foreach (array_combine($_POST['idpk'],  $_POST['kehadiranpelajar']) as $idp => $kp){
         $sql_query = mysqli_query($connection, "INSERT INTO ke 
            (idj,id_p,kehadiran,tarikh) VALUES    ('$idj','$idp','$kp','$tarikh')");

        }
    
             
        
        header("Location: ./ganti.php");
    }
?>