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
?>