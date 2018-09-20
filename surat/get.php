<?php

global $connection;
    
    if(isset($_GET['sth'])&&isset($_GET['idp'])){
    
      $slot=$_GET['sth'];
      $pelajar=$_GET['idp'];
        
    $query="select p.id_pelajar,p.nama_pelajar,p.no_ndp,b.bahagian,p.ic,p.alamat
    from pelajar as p
    join bahagian as b
    where id_pelajar=$pelajar";
        
        $sss  = mysqli_query($connection, $query);
                                  
                                  while($row= mysqli_fetch_array($sss)){
                                      $id_pelajar       = $row['id_pelajar'];
                                      $nama_pelajar     = $row['nama_pelajar'];
                                      $no_ndp           = $row['no_ndp'];
                                      $bahagian         = $row['bahagian'];
                                      $ic               = $row['ic'];
                                      $alamat           = $row['alamat'];
        
    }
        
        
     $qp =    "SELECT P.id_pengajar,P.nama_pengajar,J.jawatan,B.bahagian
         FROM pengajar as P
         JOIN jawatan as J
         on P.jawatan=J.id
         JOIN bahagian as B
         on P.bahagian=B.id
         where id_pengajar={$_SESSION['id_pengajar']}";

$sp=mysqli_query($connection, $qp);
    
    while($row=mysqli_fetch_array($sp)){
        $nama       = $row['nama_pengajar'];
        $jawatan    = $row['jawatan'];
        $bahagian   = $row['bahagian']; 
    }   
    }

    ?>
    