<?php
include("../config/db.php");
global $connection;



        if (isset($_GET['bahagian'])) {
        $bhgn = $_GET['bahagian'];


        if($bhgn!=""){

            $res=mysqli_query($connection,"select * from pengajar where bahagian='$bhgn'");
            
            
             echo "<select id='jdp' name='jdp' onclick='cjp();' class='form-control' required>";
             echo "<option value=''>";
             echo "Pilih Pengajar";
             echo "</option>";
             while($row=mysqli_fetch_array($res))
                {
                   
                    echo "<option value='$row[id_pengajar]'>"; 
                    echo $row["nama_pengajar"]; 
                    echo "</option>";
                }  
     
        }
        }

   if (isset($_GET['pengajar'])) {
        $pgjr = $_GET['pengajar'];


        if($pgjr!=""){

            $res=mysqli_query($connection,"select * from sesi ");
            
            
             echo "<select id='sesi' name='sesi' onchange='pilihari();' class='form-control' required>";
             echo "<option value=''>";
             echo "Pilih Sesi";
             echo "</option>";
             while($row=mysqli_fetch_array($res))
                {
                   
                    echo "<option value='$row[ids]'>"; 
                    echo $row["sesi"]; 
                    echo "</option>";
                }  
     
        }
        }


   if (isset($_GET['hari'])) {
        $hr = $_GET['hari'];


        if($hr!=""){  
            
             echo "<select id='jh' name='jh' onchange='pilihslot()' class='form-control' required>";
             echo "<option value=''>";
             echo "Pilih Hari";
             echo "</option>";
             echo "<option value='ISNIN'>";
             echo "ISNIN";
             echo "</option>";
             echo "<option value='SELASA'>";
             echo "SELASA";
             echo "</option>";
             echo "<option value='RABU'>";
             echo "RABU";
             echo "</option>";
             echo "<option value='KHAMIS'>";
             echo "KHAMIS";
             echo "</option>";
             echo "<option value='JUMAAT'>";
             echo "JUMAAT";
             echo "</option>";
          
     
        }
        }

  
?>