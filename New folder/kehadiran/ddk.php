<?php
include ("../config/db.php");

        if (isset($_GET['hari'])&&isset($_GET['ssb'])&&isset($_GET['ssp'])) {
        $hari= $_GET['hari'];
        $bahagian= $_GET['ssb'];
        $pengajar= $_GET['ssp'];
              
                $query= "select * from jadual where bahagian=$bahagian and id_pen=$pengajar and hari='$hari'";
                $res=mysqli_query($connection,$query);
                
                
                echo "<select id='k_sesi' name='k_sesi' onchange='change_tarikh()' class='form-control' required>";
                echo "<option value=''>";
                echo "Pilih Slot";
                echo "</option>";
                if($hari!=""){
                while($row=mysqli_fetch_array($res))
                    
                    {   
                    
                        echo "<option value='$row[idj]' kelas='$row[kelas]' sesi='$row[sesi]'>"; 
                        echo $row["slot"];
                        echo "</option>";
                    
                    }  
        
            }
        }

if(isset($_GET['kelas'])&&isset($_GET['sesi'])&&isset($_GET['idj'])&&isset($_GET['bahagian'])&&isset($_GET['tarikh'])){
    
    $kelasp= $_GET['kelas'];
    $sesip= $_GET['sesi'];
    $idj= $_GET['idj'];
    $bahagianp= $_GET['bahagian'];
    $tarikh= $_GET['tarikh'];

    
    
     echo $kelasp;
    echo $sesip;
    echo $idj;
    echo $bahagianp;
    echo $tarikh;
            $query2= "select * from pelajar where bahagian=$bahagianp and kelas=$kelasp and sesi='$sesip'";
            $res2=mysqli_query($connection,$query2);
    
            if($idj!=""){
                                while($row=mysqli_fetch_array($res2)) {
                                
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