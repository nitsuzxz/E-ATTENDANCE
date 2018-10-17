<?php

include("../config/db.php");
require_once '../dompdf/autoload.inc.php';

global $connection;
// Reference the Dompdf namespace
use Dompdf\Dompdf;

// Instantiate and use the dompdf class
$dompdf = new Dompdf();
           

ob_start();
if (isset($_POST['download'])) {
    $q_kelas    = $_POST['pilih_kelas'];
    $q_sesi     = $_POST['sel_sesi'];
    $q_mula     = $_POST['date'];
    $q_akhir    = $_POST['date2'];
    $q_bahagian = $_POST['jbahagian'];
    

    ?>



<style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    th {
        width: 2cm;
        height: 3cm;
        padding: 1mm;
        text-align: center;
        
    }

    td {

         width: 0.1cm;
        height: 1.5cm;
        padding: 1mm;
        text-align: center;
       
    }

      
</style>

<body>
    <br>
     <br>
    <center><img src="../images/jata.png" style="height=3.5cm; width:3.5cm"></center>
<center><strong>
        <h1 style="font-size:20">INSTITUT LATIHAN JABATAN TENAGA MANUSIA (ILJTM)
            KUALA LUMPUR</h1>
    </strong></center>

<center><strong>
        <h2 style="font-size:20">KEMENTERIAN SUMBER MANUSIA</h2>
    </strong></center>
    <center><strong>
        <h2 style="font-size:20">DAFTAR KEHADIRAN PELAJAR (INDIVIDU)</h2>
    </strong></center>
<br>
    <br>
<br>
       <?php 
        $res = mysqli_query($connection, "select * from sesi WHERE ids='$q_sesi'  ");

                                while($row=mysqli_fetch_array($res)) {
                                      $sesi= $row['sesi'];
      
                                }
    ?>
<p align="left" style="font-size:12">INSTITUT&nbsp;:INSTITUT LATIHAN PERINDUSTRIAN KUALA LUMPUR</p>
<p>SESI LATIHAN:<?php echo $sesi ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; DARI:<?php echo $q_mula ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; HINGGA:<?php echo $q_akhir ?></p>    

<hr>
    
    <br><p align="left" style="font-size:12">BAHAGIAN&nbsp;:INSTITUT LATIHAN PERINDUSTRIAN KUALA LUMPUR</p>
<p align="left" style="font-size:12">KOD KURSUS&nbsp;:INSTITUT LATIHAN PERINDUSTRIAN KUALA LUMPUR</p>
<p align="left"style="font-size:12">SESI KEMASUKAN&nbsp;:INSTITUT LATIHAN PERINDUSTRIAN KUALA LUMPUR</p>

            <p style="page-break-before: always;"></p>
    

    <table>

        <tr>
            <th rowspan="2" style="font-size:12">Nama</th>
            <th rowspan="2" style="font-size:12">NDP</th>
            <td id='header_tarikh' style="font-size:11">Tarikh</td>



            <?php
        $query ="SELECT  tarikh,slot FROM ke AS K
                  JOIN jadual as J
                  ON K.idj=J.idj
                  WHERE K.tarikh BETWEEN '$q_mula' AND '$q_akhir'
                  AND J.sesi='$q_sesi'
                  AND J.kelas='$q_kelas'
                  AND J.bahagian='$q_bahagian'
                  GROUP BY K.tarikh";

        
        $tarikh_slot= mysqli_query($connection, $query);   
                   while($row=mysqli_fetch_array($tarikh_slot)){
          
                       $slot=$row["slot"];
                       $tarikh=$row["tarikh"];
                    
                            echo"<td>";
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
                
                            echo"<td style='font-size:10'>";
                            echo $slot;
                            echo"</td>";
                       
                   }
            
            ?>

        </tr>


        <?php
        $q_pelajar ="SELECT  id_pelajar,nama_pelajar,no_ndp FROM pelajar
                     WHERE sesi='$q_sesi'
                     AND kelas='$q_kelas'
                      AND bahagian='$q_bahagian'";

        
        $pelajar= mysqli_query($connection, $q_pelajar);   
                   while($row=mysqli_fetch_array($pelajar)){
          
                       $id_pelajar=$row["id_pelajar"];
                       $nama_pelajar=$row["nama_pelajar"];
                       $no_ndp=$row["no_ndp"];
                            echo"<tr>";
                            echo"<td style='font-size:10' >";
                            echo $nama_pelajar;
                            echo"</td>";
                            echo"<td style='font-size:10' >";
                            echo $no_ndp;
                            echo"</td>";
                             echo"<td >";
                            echo"</td>";
                       

                                      $kehadiran_query="SELECT kehadiran FROM ke WHERE id_p='$id_pelajar' AND tarikh BETWEEN '$q_mula' AND '$q_akhir' ";

                                      $Kehadiran= mysqli_query($connection, $kehadiran_query);   

                                        while($row=mysqli_fetch_array($Kehadiran)){

                                       $attendance=$row["kehadiran"];

                                        echo"<td style='font-size:10'>";
                                        echo $attendance;
                                        echo"</td>";
                      }
                   }
}

        
         
$html=ob_get_clean();
$dompdf->loadHtml($html);
// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');


// Render the HTML as PDF
$dompdf->render();
// Output the generated PDF (1 = download and 0 = preview)
$dompdf->stream(" laporan rasmi",array("Attachment"=>1));
header("Location: ./index.php");
  
 ?>

    </table>
