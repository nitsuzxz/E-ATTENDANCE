<?php

global $connection;

if (isset($_GET['edit'])){
	$edit=$_GET['edit'];
	$query = "SELECT * FROM pengajar WHERE id_pengajar = $edit";
	$pengajar= mysqli_query($connection, $query);
	$count = mysqli_num_rows($pengajar);                        

	if ($count = 1) {
		while($row= mysqli_fetch_array($pengajar)){
		
			$id_pengajar= $row['id_pengajar'];
			$nama_pengajar= $row['nama_pengajar'];
			$email_pengajar= $row['email_pengajar'];
			$pass_pengajar= $row['pass_pengajar'];
			$bahagian= $row['bahagian'];
			$jawatan= $row['jawatan'];
		}
	}
}

    if(isset($_POST['kpengajar'])){
        
        $nama       =mysqli_real_escape_string  ($connection,$_POST['nama_pengajar']);
        $email      =mysqli_real_escape_string  ($connection,$_POST['email_pengajar']);
        $pass       =mysqli_real_escape_string  ($connection,$_POST['pass_pengajar']);
        $bahagian   =mysqli_real_escape_string  ($connection,$_POST['bahagian']);
        $jawatan    =mysqli_real_escape_string  ($connection,$_POST['jawatan']);
        
        $mysqli_query  = mysqli_query($connection, "UPDATE pengajar SET nama_pengajar='$nama', email_pengajar='$email',pass_pengajar='$pass',bahagian='$bahagian',jawatan='$jawatan' WHERE id_pengajar=$id_pengajar");
        
         header("Location: ./pengajar.php#successEdit");
}
       
    
?>    