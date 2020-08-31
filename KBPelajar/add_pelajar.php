<?php
    global $connection;

    if(isset($_POST['tpelajar'])){
        $nama_pelajar    = $_POST['nama_pelajar'];
        $no_ndp          = $_POST['no_ndp'];
        $bahagian        = $_POST['bahagian'];
        $kelas           = $_POST['kelas'];
        $ic              = $_POST['ic'];
        $sesi            = $_POST['sesi'];
        
        $validation_pelajar="SELECT * FROM pelajar WHERE no_ndp='$no_ndp' ";
        $res=mysqli_query($connection,$validation_pelajar);
        
        if (mysqli_num_rows($res) == 0) {
            
        $sql_query = mysqli_query($connection, "INSERT INTO pelajar (nama_pelajar,jawatan, no_ndp, bahagian, ic, kelas,sesi) VALUES 
        ('$nama_pelajar','4','$no_ndp','$bahagian','$ic','$kelas','$sesi')");

         header("Location: ./pelajar.php#adds");
            
        }else{
            
            header("Location: ./pelajar.php#exist"); 
            
        }
    }
?>
