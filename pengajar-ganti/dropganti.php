<?php
include ("../config/db.php");

        if (isset($_GET['pengajar'])) {
        $pengajar= $_GET['pengajar'];

               if($pengajar!=""){
                
                echo "<select id='ganti_harid' name='ganti_harid' onclick='ganti_slot()' class='form-control' required>";
                echo "<option value=''>";
                echo "Pilih Hari";
                echo "</option>";
                echo "<option value='ISNIN' >"; 
                echo "ISNIN"; 
                echo "</option>";
                echo "<option value='SELASA' >"; 
                echo "SELASA"; 
                echo "</option>";
                echo "<option value='RABU' >"; 
                echo "RABU"; 
                echo "</option>";       
                echo "<option value='KHAMIS' >"; 
                echo "KHAMIS"; 
                echo "</option>";  
                echo "<option value='JUMAAT' >"; 
                echo "JUMAAT"; 
                echo "</option>";
                    }  
        
        }



        if (isset($_GET['hari'])&&isset($_GET['bhgn'])&&isset($_GET['pgjr'])) {
         $hari= $_GET['hari'];
        $bahagian= $_GET['bhgn'];
        $pengajar1= $_GET['pgjr'];
            
                $query= "select * from jadual where bahagian=$bahagian and id_pen=$pengajar1 and hari='$hari'";
                $res=mysqli_query($connection,$query);
                
                
                echo "<select id='ganti_pelajard' name='ganti_pelajard' onclick='gpelajar()' class='form-control' required>";
                echo "<option value=''>";
                echo "Pilih Slot";
                echo "</option>";
                if($hari!=""){
                while($row=mysqli_fetch_array($res))
                    
                    {   
                    
                        echo "<option value='$row[idj]' kelass='$row[kelas]' sesis='$row[sesi]'>"; 
                        echo $row["slot"]; 
                        echo "</option>";
                    
                    }  
        
            }
        }

 if (isset($_GET['kelasp'])&&isset($_GET['sesip'])&&isset($_GET['bahagianp'])&&isset($_GET['gt'])) {
        $kelas_pelajar= $_GET['kelasp'];
        $sesi_pelajar= $_GET['sesip'];
        $bahagian_pelajar= $_GET['bahagianp'];
        $slot_pelajar= $_GET['gt'];
    

                $query3= "select * from pelajar where bahagian=$bahagian_pelajar and kelas=$kelas_pelajar and sesi='$sesi_pelajar'";
                $res3=mysqli_query($connection,$query3);

              if($slot_pelajar!=""){
                while($row=mysqli_fetch_array($res3))
    
                    {   
                    
                                $pid=$row['id_pelajar'];                         
                                                $pnm  = $row['nama_pelajar'];
                                                
                                                
                                                
                                                echo "<tr>";
                                                echo "<td>";
                                                echo "<input  name='idpk[]' type='hidden' value='$pid' >"; 
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