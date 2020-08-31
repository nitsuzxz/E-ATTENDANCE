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
            
            
             echo "<select id='sesi' name='sesi' onchange='pilihSesi();' class='form-control' required>";
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

    if(isset($_GET['sesi'])&&isset($_GET['bahagian2'])){
         
        $sesi=$_GET['sesi'];
        $bhgn=$_GET['bahagian2'];

         if($sesi!=""){
            $res=mysqli_query($connection,"select * from subjek
            where bahagian=$bhgn AND sesi=$sesi");
         
            echo "<select id='jssd' name='jssd' onchange='pilihkelas();' class='form-control' required>";
            echo "<option value=''>";
            echo "Pilih Subjek";
            echo "</option>";
            while($row=mysqli_fetch_array($res))
            {

            echo "<option value='$row[idsub]'>"; 
            echo $row["subjek"]; 
            echo "</option>";
            } 
         }
    }

if (isset($_GET['kelas'])) {
        $hr = $_GET['kelas'];


        if($hr!=""){  
            
             echo "<select id='jks' name='jks' onchange='pilihari()' class='form-control' required>";
             echo "<option value=''>";
             echo "Pilih Kelas";
             echo "</option>";
             echo "<option value='1'>";
             echo "Kelas 1";
             echo "</option>";
             echo "<option value='2'>";
             echo "Kelas 2";
             echo "</option>";
             echo "<option value='3'>";
             echo "Kelas 3";
             echo "</option>";
             echo "<option value='4'>";
             echo "Kelas 4";
             echo "</option>";
             
          
     
        }
        }

if (isset($_GET['hari'])) {
        $hr = $_GET['hari'];


        if($hr!=""){  
            
             echo "<select id='jhd' name='jhd' onchange='pilihslot()' class='form-control' required>";
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
if (isset($_GET['slot'])) {
        $st = $_GET['slot'];

  
        if($st== "JUMAAT"){  

                        echo"<div id='jst' class='form-check-inline form-check'>";
                        echo" <label  class='form-check-label'>";
                        echo"<input type='checkbox' name='kslot[]'  value='1' class='form-check-input' >";
                        echo"Slot 1";
                        echo"</label>";
                        echo"<label  class='form-check-label'>";
                        echo"<input type='checkbox' name='kslot[]'  value='2' class='form-check-input' >";
                        echo"Slot 2";
                        echo"</label>";
                        echo"<label class='form-check-label'>";
                        echo" <input type='checkbox' name='kslot[]'  value='3' class='form-check-input' >";
                        echo"Slot 3";
                        echo"</label>";
                        echo" <label  class='form-check-label'>";
                        echo"<input type='checkbox' name='kslot[]'  value='4' class='form-check-input' >";
                        echo"Slot 4";
                        echo"</label>";
                        echo"<label  class='form-check-label'>";
                        echo"<input type='checkbox' name='kslot[]'  value='5' class='form-check-input' >";
                        echo"Slot 5";
                        echo"</label>";
                       
    } else{
            
                        echo"<div id='jst' class='form-check-inline form-check'>";
                        echo" <label  class='form-check-label'>";
                        echo"<input type='checkbox' name='kslot[]'  value='1' class='form-check-input' >";
                        echo"Slot 1";
                        echo"</label>";
                        echo"<label  class='form-check-label'>";
                        echo"<input type='checkbox' name='kslot[]'  value='2' class='form-check-input' >";
                        echo"Slot 2";
                        echo"</label>";
                        echo"<label class='form-check-label'>";
                        echo" <input type='checkbox' name='kslot[]'  value='3' class='form-check-input' >";
                        echo"Slot 3";
                        echo"</label>";
                        echo" <label  class='form-check-label'>";
                        echo"<input type='checkbox' name='kslot[]'  value='4' class='form-check-input' >";
                        echo"Slot 4";
                        echo"</label>";
                        echo"<label  class='form-check-label'>";
                        echo"<input type='checkbox' name='kslot[]'  value='5' class='form-check-input' >";
                        echo"Slot 5";
                        echo"</label>";
                        echo"<label class='form-check-label'>";
                        echo" <input type='checkbox' name='kslot[]'  value='6' class='form-check-input' >";
                        echo"Slot 6";
                        echo"</label>"; 
                        echo"<label class='form-check-label'>";
                        echo" <input type='checkbox' name='kslot[]'  value='7' class='form-check-input' >";
                        echo"Slot 7";
                        echo"</label>";
                        echo"</div>";
                        echo" </div> ";
            
        }
}
                            
?>
