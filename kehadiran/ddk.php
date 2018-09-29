<?php
include ("../config/db.php");

        if (isset($_GET['hari'])&&isset($_GET['ssb'])&&isset($_GET['ssp'])) {
        $hari= $_GET['hari'];
        $bahagian= $_GET['ssb'];
        $pengajar= $_GET['ssp'];
              
                $query= "select * from jadual where bahagian=$bahagian and id_pen=$pengajar and hari='$hari'";
                $res=mysqli_query($connection,$query);
                
                
                echo "<select id='k_sesi' name='k_sesi' onclick='kehadiran_kelas()' class='form-control' required>";
                echo "<option value=''>";
                echo "Pilih Sesi";
                echo "</option>";
                if($hari!=""){
                while($row=mysqli_fetch_array($res))
                    
                    {   
                    
                        echo "<option value='$row[slot]' kelas='$row[kelas]' sesi='$row[sesi]'>"; 
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
              
                $query2= "select * from pelajar where bahagian=$bahagian_pelajar and kelas=$kelas_pelajar and sesi='$sesi_pelajar'";
                $res2=mysqli_query($connection,$query2);
                
                

                if($slot_pelajar!=""){
                while($row=mysqli_fetch_array($res2))
                    {
                    
                                      $pid=$row['id_pelajar'];                         
                                      $pnm  = $row['nama_pelajar'];
                                     
                                    
                                      
                                      echo "<tr>";
                                       echo "<td>";
                                      echo "<input  name='idpk[]' value='$pid' >"; 
                                      echo $pnm; 
                                       echo "</input>";
                                     echo "</td>";
                                      echo "<td>";
                                      echo "<select  name='kehadiranpelajar[]'  class='form-control' required>";
                                      echo "<option value=''>";
                                      echo "Please select";
                                      echo "</option>";
                                      echo "<option value='/'>";
                                      echo "Hadir";
                                      echo "</option>";
                                      echo "<option value='o'>";
                                      echo "Tidak Hadir";
                                      echo "</option>";
                                      echo "<option value='k'>";
                                      echo "Kebenaran";
                                      echo "</option>";
                                      echo "</select>";
                                      echo "</td>";
                                      echo "</tr>";
                    }  
        
            }
        }

                            
?>