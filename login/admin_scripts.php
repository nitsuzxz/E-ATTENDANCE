<?php
    global $connection;
    global $error1;


    if (isset($_POST['login'])){
        $uname= $_POST['uname'];
        $psw= $_POST['psw'];
        
        $email= mysqli_real_escape_string($connection, $uname);
        $pass= mysqli_real_escape_string($connection, $psw);
        
        $select_query = "SELECT * FROM user_acc WHERE email = '{$email}'";
        $query = mysqli_query($connection, $select_query);
        
        $row = mysqli_fetch_array($query);
        $admin_uname=$row['email'];
        $admin_psw= $row['password'];
        $us_role= $row['role'];
        
        if(!empty ($uname) && !empty($psw)){
            
        if($email === $admin_uname && $pass === $admin_psw){
            if($us_role == 1) {
             header("Location: ./Dashboard/index.php");   
            
            }
            else if ($us_role == 2){
                header("Location: ./Pengajar/pengajar.php");
            }
         
            
            $_SESSION['email']= $admin_uname;
        }else{
            $error1 ="<div class='alert alert-danger'>
    <strong>ALERT!</strong> Admin Login Credential are invalid.
  </div>";
            }
        }
    }

?>