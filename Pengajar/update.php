<?php
global $connection;
if (isset($_GET['edit'])){
	$edit=$_GET['edit'];
	$query = "SELECT * FROM pengajar WHERE id_pengajar = $edit";
	$pengajar= mysqli_query($connection, $query);
	$count = mysqli_num_rows($pengajar);                        

	if ($count = 1) {
		while($row= mysqli_fetch_array($pengajar)){
		
			$id= $row['id_pengajar'];
			$nama= $row['nama_pengajar'];
			$email= $row['email'];
			$pass= $row['password'];
			$bahagian= $row['bahagian'];
			$jawatan= $row['jawatan'];
		}
	}
}

    if(isset($_POST['kpengajar'])){
        
        $nama       =mysqli_real_escape_string  ($connection,$_POST['nama_pengajar']);
        $email      =mysqli_real_escape_string  ($connection,$_POST['email']);
        $pass       =mysqli_real_escape_string  ($connection,$_POST['password']);
        $bahagian   =mysqli_real_escape_string  ($connection,$_POST['bahagian']);
        $jawatan    =mysqli_real_escape_string  ($connection,$_POST['jawatan']);
        
        $mysqli_query  = mysqli_query($connection, "UPDATE pengajar SET nama_pengajar='$nama', email_pengajar='$email',pass_pengajar='$pass',bahagian='$bahagian',jawatan='$jawatan' WHERE id_pengajar=$id_pengajar");
        
         header("Location: ./pengajar.php");
}
       
    
?>    