<?php
    global $connection;

    if(isset($_POST['tpengajar'])){
        $nama_pengajar =$_POST['nama_pengajar'];
        $email_pengajar   = $_POST['email_pengajar'];
        $pass_pengajar=$_POST['pass_pengajar'];
        $bahagian = $_POST['bahagian'];
        $jawatan = $_POST['jawatan'];
        
        $sql_query = mysqli_query($connection, "INSERT INTO pengajar (nama_pengajar,email_pengajar,pass_pengajar,bahagian,jawatan) VALUES ('$nama_pengajar','$email_pengajar','$pass_pengajar','$bahagian','$jawatan')");

        
    }
?>
