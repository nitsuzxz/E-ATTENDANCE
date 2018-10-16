<?php
    global $connection;

    if(isset($_POST['submit'])){
        $jbahagian =$_POST['jb'];
        $jpengajar  = $_POST['jdp'];
        $jsesi=$_POST['sesi'];
        $jsubjek = $_POST['jssd'];
        $jkelas = $_POST['jks'];
        $jhari=$_POST['jhd'];
      
        foreach ( $_POST['kslot'] as $jslot)
        
        $sql_query = mysqli_query($connection, "INSERT INTO jadual 
        (bahagian,sesi,kelas,hari,slot,id_pen,id_sub) VALUES 
        
        ('$jbahagian','$jsesi','$jkelas','$jhari','$jslot','$jpengajar','$jsubjek')");

        header("Location: ./jadual.php");
    }



if (isset($_GET['delete'])){
    $delete_query="DELETE  FROM jadual where idj= {$_GET['delete']}'";
    $del=mysqli_query($connection,$delete_query);
  header("Location : ./jadual.php");
    
}
?>
