<?php
    global $connection;

    if(isset($_POST['tpengajar'])){
        $nama =$_POST['id_pengajar'];
        $email   = $_POST['email'];
        $pass=$_POST['password'];
        $bahagian = $_POST['bahagian'];
        $jawatan = $_POST['jawatan'];
        
        $sql_query = mysqli_query($connection, "INSERT INTO pengajar (id_pengajar,email,password,bahagian,jawatan) VALUES ('$nama','$email','$pass','$bahagian','$jawatan')");

        
    }
?>
