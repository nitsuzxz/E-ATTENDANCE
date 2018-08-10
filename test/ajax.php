<?php
    global $connection;


        if (isset($_GET['bahagian'])) {
        $bhgn = $_GET['bahagian'];
        $bhgnid_res = mysqli_query($connection,"select id from bahagian where bahagian=$bhgn");
        $row1 = mysqli_fetch_array($bhgnid_res);
        $bhgn_id = $row1[0];

        if($bhgn!=""){

            $res=mysqli_query($connection,"select * from pengajar where bahagian='$bhgn_id'");
            echo "<div class='input-field col s12'>";
            echo "<select id='pgjrdd' onchange='change_pengajar;()'>";

            while($row=mysqli_fetch_array($res))
                {
                    echo "<option value='$row[id_pengajar]'>"; 
                    echo $row["nama_pengajar"]; 
                    echo "</option>";
                }
            echo "</select>";
            
            echo "</div>";
        }
    } elseif (isset($_GET['pengajar'])) {
        $pgjr = $_GET['pengajar'];
        if($pgjr!=""){

            $res=mysqli_query($connection,"select * from subjek where bahagian='$pgjr'");
            $row=mysqli_fetch_array($res);
            echo "<div class='input-field col s12'>";
            echo "<select>";

            while($row=mysqli_fetch_array($res))
                {
                    echo "<option value='$row[id]'>"; 
                    echo $row["subjek"]; 
                    echo "</option>";
                }
            echo "</select>";
            echo "<label>Select subjek</label>";
            echo "</div>";
        }
    } else {
        
    }
?>
