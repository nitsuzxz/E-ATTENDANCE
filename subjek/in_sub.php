<?php
    global $connection;

    if(isset($_POST['tsubjek'])){
        $bahagian         = $_POST['bahagian'];
        $subjek            = $_POST['subjek'];
        $kod              = $_POST['kod'];
        
        $sql_query = mysqli_query($connection, "INSERT INTO subjek ( subjek, kod, bahagian) VALUES ('$subjek', '$kod', $bahagian)");

         header("Location: ./subjek.php");
    }



?>
