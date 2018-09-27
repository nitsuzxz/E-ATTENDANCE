<?php
include ("../config/db.php");

        if (isset($_GET['hari'])&&isset($_GET['ssb'])&&isset($_GET['ssp'])) {
        $hari= $_GET['hari'];
        $bahagian= $_GET['ssb'];
        $pengajar= $_GET['ssp'];
              
                $query= "select slot from jadual where bahagian=$bahagian and id_pen=$pengajar and hari='$hari'";
                $res=mysqli_query($connection,$query);
                
                
                echo "<select id='k_sesi' name='k_sesi' onclick='kehadiran_kelas()' class='form-control' required>";
                echo "<option value=''>";
                echo "Pilih Sesi";
                echo "</option>";
                if($hari!=""){
                while($row=mysqli_fetch_array($res))
                    {
                    
                    $kelas1=$row['kelas'];
                    $sesi2=$row['sesi'];
                    
                        echo "<option value='$row[slot]'>"; 
                        echo $row["slot"]; 
                        echo "</option>";
                    }  
        
            }
        }
if (isset($_GET['kelas'])&&isset($_GET['slot'])&&isset($_GET['sesi'])&&isset($_GET['bahagian_1'])) {
        $kelas_pelajar= $_GET['kelas'];
        $sesi_pelajar= $_GET['sesi'];
        $bahagian_pelajar= $_GET['bahagian_1'];
        $slot_pelajar= $_GET['slot'];
              
                $query2= "select * from pelajar where bahagian=$bhgnp and kelas=$kelasp and sesi='$sesip'";
                $res2=mysqli_query($connection,$query2);
                
                

                if($dk!=""){
                while($row=mysqli_fetch_array($res))
                    {
                    
                                      $pid=$row['id_pelajar'];                         
                                      $pnm  = $row['nama_pengajar'];
                                     
                                    
                                      
                                      echo "<tr>
	                                  
                                       <td>$pnm</td>
	                                
                                       </tr>";
                    }  
        
            }
        }

                            
?>