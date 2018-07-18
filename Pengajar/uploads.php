<?php
 
global $connection;
 
 if(isset($_POST["import"])){
       
        $filename=$_FILES['file']['tmp_name'];{
            $filCSV= explode(".",$FILES['$filename']['name']);
            if ($filCSV[1]=='csv')
            {
                $handle= fopen($FILES['$filename']['tmp_name'], "r");
                while($data= fgetcsv($handle))
                {
                    $id_pengajar=mysqli_real_escape_string ($connection, $data[0]);
                    $email=mysqli_real_escape_string ($connection, $data[1]);
                    $password=mysqli_real_escape_string ($connection, $data[2]);
                    $jabatan=mysqli_real_escape_string ($connection, $data[3]);
                    $jawatan=mysqli_real_escape_string ($connection, $data[4]);
                   
                    $sql_query = mysqli_query($connection, "INSERT INTO pengajar ('id_pengajar', 'email', 'password', 'bahagian', 'jawatan') values ('$id_pengajar','$email','$password','$jabatan','$jawatan')");
                   
                   
                   
                }
                fclose($handle);
               
                echo "<script>alert('import done');</script>";
            }
        }
 }
?>