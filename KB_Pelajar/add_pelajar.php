<?php
    global $connection;

    if(isset($_POST['tpelajar'])){
        $nama_pelajar    = $_POST['nama_pelajar'];
        $no_ndp          = $_POST['no_ndp'];
        $bahagian        = $_POST['bahagian'];
        $kelas           = $_POST['kelas'];
        $ic              = $_POST['ic'];
        $sesi            = $_POST['sesi'];
    
        
        $sql_query = mysqli_query($connection, "INSERT INTO pelajar (nama_pelajar,jawatan, no_ndp, bahagian, ic, kelas,sesi) VALUES 
        ('$nama_pelajar','4','$no_ndp','$bahagian','$ic','$kelas','$sesi')");

         header("Location: ./pelajar.php");
    }
?>
