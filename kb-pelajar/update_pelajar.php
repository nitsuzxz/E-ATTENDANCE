<?php
global $connection;
if (isset($_GET['edit'])){
	$edit      =$_GET['edit'];
	$query     = "SELECT * FROM pelajar WHERE id = $edit";
	$pelajar   = mysqli_query($connection, $query);
	$count     = mysqli_num_rows($pelajar);                        

	if ($count = 1) {
		while($row= mysqli_fetch_array($pelajar)){
		
			$id              = $row['id'];
			$nama_pelajar    = $row['nama_pelajar'];
			$no_ndp          = $row['no_ndp'];
            $bahagian        = $row['bahagian'];
            $semester        = $row['semester'];
			$pass_pelajar    = $row['pass_pelajar'];
			$ic              = $row['ic'];
			$alamat          = $row['alamat'];
		}
	}
}

    if(isset($_POST['kpelajar'])){
        
        $nama_pelajar      =mysqli_real_escape_string  ($connection,$_POST['nama_pelajar']);
        $no_ndp            =mysqli_real_escape_string  ($connection,$_POST['no_ndp']);
        $bahagian          =mysqli_real_escape_string  ($connection,$_POST['bahagian']);
        $semester          =mysqli_real_escape_string  ($connection,$_POST['semester']);
        $pass_pelajar      =mysqli_real_escape_string  ($connection,$_POST['pass_pelajar']);
        $ic                =mysqli_real_escape_string  ($connection,$_POST['ic']);
        $alamat            =mysqli_real_escape_string  ($connection,$_POST['alamat']);
        
        $mysqli_query  = mysqli_query($connection, "UPDATE pelajar SET nama_pelajar='$nama_pelajar', no_ndp='$no_ndp',bahagian='$bahagian',semester='$semester',pass_pelajar='$pass_pelajar',ic='$ic' ,alamat='$alamat' WHERE id=$id");

         header("Location: ./pelajar.php#successEdit");
    }
?>    