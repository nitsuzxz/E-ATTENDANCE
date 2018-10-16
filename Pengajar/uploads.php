<?php
global $connection;
if(isset($_POST["submit"]))
{
 if($_FILES['file']['name'])
 {
  $filename = explode(".", $_FILES['file']['name']);
  if($filename[1] == 'csv')
  {
   $handle = fopen($_FILES['file']['tmp_name'], "r");
   while($data = fgetcsv($handle))
   {
    $item1 = mysqli_real_escape_string($connection, $data[0]);  
       $item2 = mysqli_real_escape_string($connection, $data[1]);
       $item3 = mysqli_real_escape_string($connection, $data[2]);
       $item4 = mysqli_real_escape_string($connection, $data[3]);
       $item5 = mysqli_real_escape_string($connection, $data[4]);
       
                $query = "INSERT into pengajar(nama_pengajar, email_pengajar, pass_pengajar, bahagian, jawatan) values('$item1','$item2','pengajar@ilpkl','$item4','3')";
                mysqli_query($connection, $query);
   }
   fclose($handle);
   
       header("Location: ./pengajar.php");
 
  }
 }
}

?>