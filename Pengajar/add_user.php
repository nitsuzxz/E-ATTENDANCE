<?php

    global $connection;

    if(isset($_POST['tpengajar'])){
        $nama_pengajar         = $_POST['nama_pengajar'];
        $email_pengajar        = $_POST['email_pengajar'];
        $bahagian              = $_POST['bahagian'];
        $jawatan               = $_POST['jawatan'];
        
        $validation="SELECT * FROM pengajar where email_pengajar='$email_pengajar'";
        $result_validation= mysqli_query($connection, $validation);
        
        if (mysqli_num_rows($result_validation) == 0) {
            
     $sql_query = mysqli_query($connection, "INSERT INTO pengajar (nama_pengajar,email_pengajar,pass_pengajar,jawatan,bahagian) VALUES ('$nama_pengajar','$email_pengajar','user123','$jawatan','$bahagian')");
            
              header("Location: ./pengajar.php#add");  
    } else{
            
        $error1 ="<div class='alert alert-danger'>
    <strong>ALERT!</strong> Pengguna telah wujud!
  </div>";
             header("Location: ./pengajar.php#telahwujud"); 
                       
        }

    }
?>
