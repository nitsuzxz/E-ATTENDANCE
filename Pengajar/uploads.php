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
      
       
       $query = "INSERT INTO pengajar ( `nama_pengajar`, `email_pengajar`, `pass_pengajar`, `jawatan`, `bahagian`) values('$item1','$item2','user123','3','$item3')";
       
       mysqli_query($connection, $query);
   }
   fclose($handle);
   
       header("Location: ./pengajar.php");
  }
 }
}

?>