

<?php
//This is the logic that allows the user to update his data in the database

    global $connection;
    global $id_pen, $email_pen, $pass_pen, $bhgn_pen,$jwtn_pen;

    $query_select = "SELECT * FROM pengejar WHERE id = {$_SESSION['id']} ";
    $send_query = mysqli_query($connection, $query_select);
    $count = mysqli_num_rows($send_query);

    if(!$send_query){
        die("QUERY FAILED " . mysqli_error($connection));
    }

    while($row = mysqli_fetch_array($send_query)){
        $id_pen= $row['id_pengajar'];
        $email_pen = $row['email'];
        $pass_pen= $row['password'];
        $bhgn_pen= $row['jabatan'];
        $jwtn_pen = $row['jawatan'];
        

    if(isset($_POST['tpengajar'])){
        
        $id_pen = mysqli_real_escape_string($connection, $_POST['email']);
        $email_pen = mysqli_real_escape_string($connection, $_POST['firstname']);
        $pass_pen = mysqli_real_escape_string($connection, $_POST['lastname']);
        $bhgn_pen = mysqli_real_escape_string($connection, $_POST['gender']);
        $jwtn_pen = mysqli_real_escape_string($connection, $_POST['quote']);

        

        
        if($count <= 0){
            $error = "<div class='alert alert-danger email_alert text-center'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times</a>Please complete your profile before your can update.</div>"; 
        }else{
            $update = "UPDATE profile SET ";
            $update .= "firstname = '{$id_pen}', ";
            $update .= "lastname = '{$email_pen}', ";
            $update .= "email = '{$pass_pen}', ";
            $update .= "gender = '{$bhgn_pen}', ";
            $update .= "quote = '{$jwtn_pen}', ";
           
            
            $update_query = mysqli_query($connection, $update);
            
            if(!$update_query){
                die("UPDATE WAS NOT SUCCESSFUL " . mysqli_error($connection));
            }
            
            header("Location: ../users/profile.php?fisrtname={$user_firstname}");
        }
        
    }

?>