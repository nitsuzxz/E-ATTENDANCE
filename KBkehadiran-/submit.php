<?php
    global $connection;

    if(isset($_POST['submitkehadiran'])){
        $idj =$_POST['k_slot'];
        $tarikh =$_POST['date'];
        
        
        
            $validation="SELECT * FROM ke as K 
                JOIN pelajar as P
                on K.id_p=P.id_pelajar
                WHERE idj='$idj' AND tarikh='$tarikh'  ";
          
            $res1=mysqli_query($connection,$validation);
                
    
                if (mysqli_num_rows($res1) == 0) {
                    
                      foreach (array_combine($_POST['idpk'],  $_POST['kehadiranpelajar']) as $idp => $kp){
                      $sql_query = mysqli_query ($connection, "INSERT INTO ke 
                                    (idj,id_p,kehadiran,tarikh) VALUES    ('$idj','$idp','$kp','$tarikh')");
                }
                }else{
                      foreach (array_combine($_POST['idpk'],  $_POST['kehadiranpelajar']) as $idp => $kp){
                      $sql_query = mysqli_query ($connection, " UPDATE ke SET kehadiran='$kp' where id_p='$idp' AND tarikh='$tarikh'" );
                    
        }
        }
    
             
        
        header("Location: ./kehadiran.php#kehadiran");
    
    }
?>
