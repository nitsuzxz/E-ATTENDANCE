   <?php
    
    if(isset($_GET['sth'])&&isset($_GET['idp'])){
    
      $slot=$_GET['sth'];
      $pelajar=$_GET['idp'];
        
    $query=mysqli_query($connection,"select * from pelajar
            where id_pelajar=$pelajar");
        
        $pelajar  = mysqli_query($connection, $query);
                                  
                                  while($row= mysqli_fetch_array($pelajar)){
                                      $id_pelajar       = $row['id_pelajar'];
                                      $nama_pelajar     = $row['nama_pelajar'];
                                      $no_ndp           = $row['no_ndp'];
                                      $bahagian         = $row['bahagian'];
                                      $ic               = $row['ic'];
                                      $alamat           = $row['alamat'];
        
    }
        
    }
    
    ?>