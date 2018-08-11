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
     

            $res=mysqli_query($connection,"select * from subjek where bahagian='$bhgn_id'");
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
