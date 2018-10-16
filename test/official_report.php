<?php

include("../config/db.php");
require_once '../dompdf/autoload.inc.php';

global $connection;
// Reference the Dompdf namespace
use Dompdf\Dompdf;


$dompdf = new Dompdf();
           

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
        width: 3.5cm;
        height: 3cm;
        text-align: center;
       font-size: 11;
    }

    td {

        width: 0.5cm;
        height: 0.5cm;
        text-align: center;
        font-size: 10;
    }

    .rotate {

        transform: rotate(-90.0deg);
        font-size: 10;
      
    }

</style>

<body>

    <table>

        <tr>
            <th rowspan="2">Nama</th>
            <th rowspan="2">NDP</th>
            <td id='header_tarikh'>Tarikh</td>



            <?php
        $query ="SELECT  tarikh,slot FROM ke AS K
                  JOIN jadual as J
                  ON K.idj=J.idj
                  WHERE K.tarikh BETWEEN '2018-10-01' AND '2018-10-10'
                  AND J.sesi='1'
                  AND J.kelas='1'
                  GROUP BY K.tarikh";

        
        $tarikh_slot= mysqli_query($connection, $query);   
                   while($row=mysqli_fetch_array($tarikh_slot)){
          
                       $slot=$row["slot"];
                       $tarikh=$row["tarikh"];
                    
                            echo"<td class='rotate'>";
                            echo $tarikh;
                            echo"</td>";
                   }
                      

  
 ?>
        </tr>
        <tr>
            <td>SLOT</td>
           <?php
            
             $slotheader= mysqli_query($connection, $query);   
                   while($row=mysqli_fetch_array($slotheader)){
                       
                         $slot=$row["slot"];
                
                            echo"<td>";
                            echo $slot;
                            echo"</td>";
                       
                   }
            
            ?>

        </tr>


        <?php
        $q_pelajar ="SELECT  id_pelajar,nama_pelajar,no_ndp FROM pelajar
                     WHERE sesi='1'
                     AND kelas='1'";

        
        $pelajar= mysqli_query($connection, $q_pelajar);   
                   while($row=mysqli_fetch_array($pelajar)){
          
                       $id_pelajar=$row["id_pelajar"];
                       $nama_pelajar=$row["nama_pelajar"];
                       $no_ndp=$row["no_ndp"];
                            echo"<tr>";
                            echo"<td >";
                            echo $nama_pelajar;
                            echo"</td>";
                            echo"<td >";
                            echo $no_ndp;
                            echo"</td>";
                             echo"<td >";
                            echo"</td>";
                       

                                      $kehadiran_query="SELECT kehadiran FROM ke WHERE id_p='$id_pelajar'";

                                      $Kehadiran= mysqli_query($connection, $kehadiran_query);   

                                        while($row=mysqli_fetch_array($Kehadiran)){

                                       $attendance=$row["kehadiran"];

                                        echo"<td >";
                                        echo $attendance;
                                        echo"</td>";
                      }
                   }
    

  
 ?>

    </table>
