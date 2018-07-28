<?php
    global $connection;

    if(isset($_POST['tpelajar'])){
        $nama_pelajar    = $_POST['nama_pelajar'];
        $no_ndp          = $_POST['no_ndp'];
        $bahagian         = $_POST['bahagian'];
        $semester        = $_POST['semester'];
        $pass_pelajar    = $_POST['pass_pelajar'];
        $ic              = $_POST['ic'];
        $alamat          = $_POST['alamat'];
        
        $sql_query = mysqli_query($connection, "INSERT INTO pelajar 
        (nama_pelajar,no_ndp,bahagian,semester,pass_pelajar,ic,alamat) 
        VALUES 
        ('$nama_pelajar','$no_ndp','$bahagian','$semester','$pass_pelajar','$ic','$alamat')");

         header("Location: ./pelajar.php");
    }
?>
