<?php
global $connection;

if (isset($_GET['edit'])){
	$edit      =$_GET['edit'];
	$query     = "SELECT * FROM pelajar WHERE id_pelajar = $edit";
	$pelajar   = mysqli_query($connection, $query);
	$count     = mysqli_num_rows($pelajar);                        

	if ($count = 1) {
		while($row= mysqli_fetch_array($pelajar)){
		
			                         $id_pelajar    = $row['id_pelajar'];
                                     $nama_pelajar    = $row['nama_pelajar'];
                                     $no_ndp          = $row['no_ndp'];
                                     $bahagian        = $row['bahagian'];
                                     $kelas           = $row['kelas'];
                                     $ic              = $row['ic'];
                                     $Esesi            = $row['sesi'];
		}
	}
}



    if(isset($_POST['kpelajar'])){
        
        $nama_pelajar             =mysqli_real_escape_string  ($connection,$_POST['nama_pelajar']);
        $no_ndp                   =mysqli_real_escape_string  ($connection,$_POST['no_ndp']);
        $bahagian                 =mysqli_real_escape_string  ($connection,$_POST['bahagian']);
        $kelas                    =mysqli_real_escape_string  ($connection,$_POST['kelas']);
        $ic                       =mysqli_real_escape_string  ($connection,$_POST['ic']);
        $sesi                     =mysqli_real_escape_string  ($connection,$_POST['sesi']);
        
            $mysqli_query  = mysqli_query($connection, "UPDATE pelajar SET nama_pelajar='$nama_pelajar', no_ndp='$no_ndp',bahagian='$bahagian',kelas='$kelas',ic='$ic',jawatan='4' WHERE id_pelajar=$id_pelajar");
        
             header("Location: ./pelajar.php#successEdit");
}
       
    
?>
