<?php
    global $connection;

    if(isset($_POST['tpengajar'])){
        $nama =$_POST['id_pengajar'];
        $email   = $_POST['email'];
        $pass=$_POST['password'];
        $bahagian = $_POST['bahagian'];
        $jawatan = $_POST['jawatan'];
        
        $sql_query = mysqli_query($connection, "INSERT INTO pengajar (id_pengajar,email,password,jabatan,jawatan) VALUES ('$nama','$email','$pass','$bahagian','$jawatan')");

        
    }

    if (isset($_SESSION['edit'])){
        $edit=$_SESSION['id'];
        $query = "SELECT * FROM pengajar";
        $pengajar= mysqli_query($connection, $query);
        $count = mysqli_num_rows($pengajar);                         

    while($row= mysqli_fetch_array($pengajar)){
         $id= $row['id'];
         $nama= $row['id_pengajar'];
         $email= $row['email'];
         $pass= $row['password'];
         $bahagian= $row['jabatan'];
         $jawatan= $row['jawatan'];   
    }
   }
?>