<?php

include("../config/db.php");
                
ob_start();
    ?>



<style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    th {
        width: 4cm;
        padding: 1mm;
        text-align: center
    }

    td {

        padding: 1mm;
        text-align: center
    }

</style>

<body>

    <table>

        <tr>
            <th rowspan="2">Nama</th>
            <th rowspan="2">NDP</th>
            <td id='header_tarikh'>Tarikh</td>

 

        
        
        
<?php
        $query ="SELECT DISTINCT tarikh,slot FROM ke AS K
                  JOIN jadual as J
                  ON K.idj=J.idj
                  WHERE tarikh BETWEEN '2018-10-01' AND '2018-10-03'
                  AND sesi='1'
                  AND kelas='1'";

        
     $nama_ndp= mysqli_query($connection, $query);   
                while($row=mysqli_fetch_array($nama_ndp)){
          
                  $slot=$row["slot"];
                    $tarikh=$row["tarikh"];
                    
                          
                            echo"<td>";
                            echo $tarikh;
                            echo"</td>";
                      
 ?>
            
 <?php
                    
                }   
 ?>
        </tr>
               <tr >
            <td>SLOT</td>
            <td id='header_slot'>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
</tr>

