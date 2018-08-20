<?php
    global $connection;

    if(isset($_POST['tsjk'])){
        $ibgn         = $_POST['ibg'];
        $isb            = $_POST['isb'];
        $kd              = $_POST['ikd'];
        $iss              = $_POST['iss'];
        
        $sql_query = mysqli_query($connection, "INSERT INTO subjek ( subjek, kod, bahagian,sesi) VALUES ('$isb', '$kd', '$ibg', '$iss')");

         header("Location: ./subjek.php");
    }



?>
