<?php
global $connection;
if (isset($_GET['edit'])){
    
	$edit=$_GET['edit'];
	$query = "SELECT * FROM subjek WHERE idsub = $edit";
	$sb= mysqli_query($connection, $query);
	$count = mysqli_num_rows($sb);                        

	if ($count = 1) {
		while($row= mysqli_fetch_array($sb)){
        $idsb            = $row['idsub'];    
		$ibgn            = $row['bahagian'];
        $isb             = $row['subjek'];
        $kd              = $row['kod'];
        $iss             = $row['sesi'];
		
		}
	}
}

    if(isset($_POST['ksb'])){
        
    
    
        $ibgn     =mysqli_real_escape_string  ($connection,$_POST['ibg']);
        $isb      =mysqli_real_escape_string  ($connection,$_POST['isb']);
        $kd       =mysqli_real_escape_string  ($connection,$_POST['ikd']);
        $iss      =mysqli_real_escape_string  ($connection,$_POST['iss']);
      
        
        $mysqli_query  = mysqli_query($connection, "UPDATE subjek SET bahagian='$ibgn', subjek='$isb',kod='$kd',sesi='$iss' WHERE idsub='$idsb'");
        header("Location: ./subjek.php#successsubjek");
        
}


                            if(isset($_GET['delete'])){
                                
                            $query = "DELETE FROM subjek WHERE idsub = {$_GET['delete']}";
                            $delete_query = mysqli_query($connection, $query);
                            
                            header("Location: ./subjek.php");
                        }
       
    
?>
