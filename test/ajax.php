<?php
        $host='localhost';
        $user='root';
        $dbpass='';
        $db_name='eattendance';

        $connection= mysqli_connect($host,$user,$dbpass,$db_name) or die("Not connected.");


        if (isset($_GET['bahagian'])) {
        $bhgn = $_GET['bahagian'];
        $bhgnid_res = mysqli_query($connection,"select id from bahagian where bahagian='$bhgn'");
        $row1 = mysqli_fetch_array($bhgnid_res);
        $bhgn_id = $row1[0];
        // echo $bhgn;
        if($bhgn!=""){

            $res=mysqli_query($connection,"select * from pengajar where bahagian='$bhgn_id'");
            echo "<div class='input-field col s12'>";
            echo "<select id='pgjrdd' onchange='change_pengajar;()'>";
            echo "<option value=''>"; 
            echo "Pilih Pengajar"; 
            echo "</option>";

            while($row=mysqli_fetch_array($res))
                {
                   
                    echo "<option value='$row[id_pengajar]'>"; 
                    echo $row["nama_pengajar"]; 
                    echo "</option>";
                }
            echo "</select>";
            
            echo "</div>";
     
        }
            
        if (isset($_GET['pengajar'])) {
        $pgjr = $_GET['pengajar'];
        $pgjrid_res = mysqli_query($connection,"select id from pengajar where bahagian='$bhgn'");
        $row2 = mysqli_fetch_array($pgjrid_res);
        $pgjr_id = $row2[0];
            
            $res=mysqli_query($connection,"SELECT n.id_sp,s.id_s,p.id_p
                                  from subpen as n
                                  join pengajar as p
                                  on n.id_p=p.nama_pengajar
                                  join subjek as s
                                  on n.id_s=p.idsub
                                 
                                  WHERE n.id_s='{$pgjr'");
            echo "<div class='input-field col s12'>";
            echo "<select id='subjekdd' >";
            echo "<option value=''>"; 
            echo "Pilih Subjek"; 
            echo "</option>";

            while($row=mysqli_fetch_array($res))
                {
                    echo "<option value='$row[id]'>"; 
                    echo $row["subjek"]; 
                    echo "</option>";
                }
            echo "</select>";
            
            echo "</div>";
        }
    } 
     else {
        
    }
?>
