<?php
global $connection;
if (isset($_GET['edit'])){
	$edit=$_GET['edit'];
	$query = "SELECT * FROM subjek WHERE id = $edit";
	$sb= mysqli_query($connection, $query);
	$count = mysqli_num_rows($sb);                        

	if ($count = 1) {
		while($row= mysqli_fetch_array($sb){
		
        $ibgn         = $_POST['ibg'];
        $isb            = $_POST['isb'];
        $kd              = $_POST['ikd'];
        $iss              = $_POST['iss'];
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