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
       $item6 = mysqli_real_escape_string($connection, $data[5]);
       
       $query = "INSERT into pelajar(`nama_pelajar`, `no_ndp`, `jawatan`, `bahagian`, `ic`, `sesi`, `kelas`) values('$item1','$item2','4','$item3','$item4','$item5','$item6')";
       
       mysqli_query($connection, $query);
   }
   fclose($handle);
   
       header("Location: ./pelajar.php");
  }
 }
}

?>