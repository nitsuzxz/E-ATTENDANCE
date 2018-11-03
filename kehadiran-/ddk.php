<?php
include ("../config/db.php");

if(isset($_GET['pengajar'])){
    $pgjr=$_GET['pengajar'];
    
            if($pgjr!=""){
             echo "<select id='hari' name='hari' onchange='ganti_slot()' class='form-control' required>";
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

if (isset($_GET['pengajar1']) && isset ($_GET['hari'])){
    $pengajar   = $_GET['pengajar1'];
    $hari       = $_GET['hari'];
    
    if($hari!=""){
        
        
                $query= "select * from jadual where  id_pen=$pengajar and hari='$hari'";
                $res=mysqli_query($connection,$query);
                
                
                echo "<select id='k_slot' name='k_slot'  class='form-control' required>";
                echo "<option value=''>";
                echo "Pilih Slot";
                echo "</option>";
                while($row=mysqli_fetch_array($res)){   
                    
                        echo "<option value='$row[idj]' kelas='$row[kelas]' sesi='$row[sesi]'>"; 
                        echo $row["slot"]; 
                        echo "</option>";
                    
                    }  
    }
}

if(isset($_GET['id_pgjr'])&&isset($_GET['idj'])&&isset($_GET['tarikh'])
   &&isset($_GET['kelas'])&&isset($_GET['sesi'])&&isset($_GET['bahagian'])) {

    
     $id_pengajar= $_GET['id_pgjr'];
     $idj        = $_GET['idj'];
     $tarikh     = $_GET['tarikh'];
     $kelas      = $_GET['kelas'];
     $sesi       = $_GET['sesi'];
     $bahagian   = $_GET['bahagian'];
        
                
                $validation="SELECT * FROM ke as K 
                JOIN pelajar as P
                on K.id_p=P.id_pelajar
                WHERE idj='$idj' AND tarikh='$tarikh'  ";
                $res1=mysqli_query($connection,$validation);
                
    
                if (mysqli_num_rows($res1) == 0) {
                $query2= "select * from pelajar where bahagian=$bahagian and kelas=$kelas and sesi='$sesi'";
                $res2=mysqli_query($connection,$query2);
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
                else{
                      
                        while($row=mysqli_fetch_array($res1)){
                                    $id=$row['id_pelajar']; 
                                    $nama=$row['nama_pelajar']; 
                                    $kehadiran=$row['kehadiran']; 
                                                echo "<tr>";
                                                echo "<td>";
                                                echo "<input  name='idpk[]' type='hidden' value='$id' >"; 
                                                echo $nama; 
                                                echo "</input>";
                                                echo "</td>";
                                                echo "<td>";
                                                echo "<select  name='kehadiranpelajar[]'  class='form-control' required>"; ?>
                                                 <option  value="/"<?php echo (isset($kehadiran) && $kehadiran == '/') ? ' selected=selected' : ''; ?>>Hadir</option>
                                                 <option  value="o"<?php echo (isset($kehadiran) && $kehadiran == 'o') ? ' selected=selected' : ''; ?>>Tidak Hadir</option>
                                                 <option  value="k"<?php echo (isset($kehadiran) && $kehadiran == 'k') ? ' selected=selected' : ''; ?>>kebenaran</option>
                <?php                         
                                        
                                                echo "</tr>";
    }
    
}
}
                    
?>
