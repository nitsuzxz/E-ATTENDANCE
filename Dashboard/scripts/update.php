<?php
global $connection;
if (isset($_GET['edit'])){
	$edit=$_GET['edit'];
	$query = "SELECT * FROM pengajar WHERE id = $edit";
	$pengajar= mysqli_query($connection, $query);
	$count = mysqli_num_rows($pengajar);                        

	if ($count = 1) {
		while($row= mysqli_fetch_array($pengajar)){
			//send data to form
			$id= $row['id'];
			$nama= $row['id_pengajar'];
			$email= $row['email'];
			$pass= $row['password'];
			$bahagian= $row['jabatan'];
			$jawatan= $row['jawatan'];
		}
	}
}

    if(isset($_POST['kpengajar'])){
        
        $nama       =mysqli_real_escape_string  ($connection,$_POST['id_pengajar']);
        $email      =mysqli_real_escape_string  ($connection,$_POST['email']);
        $pass       =mysqli_real_escape_string  ($connection,$_POST['password']);
        $bahagian   =mysqli_real_escape_string  ($connection,$_POST['jabatan']);
        $jawatan    =mysqli_real_escape_string  ($connection,$_POST['jawatan']);
        
        $mysqli_query  = mysqli_query($connection, "UPDATE pengajar SET id_pengajar='$nama', email='$email',password='$pass',jabatan='$bahagian',jawatan='$jawatan' WHERE id=$id");
}
       
    
?>    