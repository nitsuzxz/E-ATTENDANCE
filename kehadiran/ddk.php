<?php
include("../config/db.php");
global $connection;



        if (isset($_GET['hari'])) {
        $hari= $_GET['hari'];


        if($hari!=""){

            $res=mysqli_query($connection,"select * from sesi ");
            
            
             echo "<select id='ksesi' name='ksesi' onclick='kkelas();' class='form-control' required>";
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
if (isset($_GET['sesi'])) {
        $ss = $_GET['sesi'];
        if($ss!=""){  
            
             echo "<select id='kk' name='kk' onchange='psub()' class='form-control' required>";
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
   if(isset($_GET['kelas'])&&isset($_GET['bahagian'])&&isset($_GET['pengajar'])){
         
        $ss=$_GET['sesi'];
        $bhgn=$_GET['bahagian'];
        $pgjr=$_GET['id_pengajar'];
       
       
         if($kls!=""){
             
            $res=mysqli_query($connection,"select p.subjek from jadual as j
                    JOIN subjek as p 
                    on j.id_sub=p.idsub
                    where j.bahagian='$bhgn' AND j.sesi='$ss' and j.id_pen='$pgjr'");
         
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
                            
?>