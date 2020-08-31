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
    $step = '+1 day';
	$output_format = 'Y-m-d';
	$html = '';

    ?>



	<style>
		table.resultTable,
		table.resultTable th,
		table.resultTable td {
			border: 1px solid black;
			border-collapse: collapse;
		}

		table.resultTable th {
			width: 1cm;
			height: 3cm;
			padding: 1mm;
			text-align: center;
			
		}

		table.resultTable td {

			width: 0.1cm;
			height: 1.5cm;
			padding: 1mm;
			text-align: center;
		   
		}
        .footer {
    position: fixed;
            height: 0.5cm;
    left: 0;
    bottom: 0;
    text-align: left;
}
		
		.page-break  { display: block; page-break-after: always; }
		  
	</style>
<body>
    
	
	<?php
	$start = strtotime($q_mula);
	$end = strtotime($q_akhir);
    $querybahagian="select * from bahagian where id='$q_bahagian' ";
    $resbahagian=mysqli_query($connection,$querybahagian);
    while($row= mysqli_fetch_array($resbahagian)){
                          $jbahagian =$row['bahagian'];
                         $jkod =$row['kod'];
    };
    
     $querysesi="select * from sesi where ids='$q_sesi' ";
    $ressesi=mysqli_query($connection,$querysesi);
    while($row= mysqli_fetch_array($ressesi)){
                          $jsesis =$row['sesi'];
    };
    $html .='
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

<p align="left" style="font-size:12">INSTITUT&nbsp;:INSTITUT LATIHAN PERINDUSTRIAN KUALA LUMPUR</p>

<p> DARI:';
    $html .=$q_mula;
    $html .=' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
HINGGA:';
  $html .=  $q_akhir;     
$html .='</p>
        <hr>
        <br><p align="left" style="font-size:12">BAHAGIAN&nbsp;:';
     $html .=$jbahagian;
    $html .='</p>
<p align="left" style="font-size:12">KOD KURSUS&nbsp;:';
    $html .=$jkod;
 $html .='</p>
<p align="left"style="font-size:12">SESI KEMASUKAN&nbsp;:';
     $html .=$jsesis;
    $html .='</p> ';
$html .= '<div class="page-break"></div>';
	while( $start <= $end ) {
		$curr = date("D", $start);
		if ($curr == 'Mon' || $curr == 'Tue' || $curr == 'Wed' || $curr == 'Thu' || $curr == 'Fri') {
			$dates[] = date($output_format, $start);
		}
		$start = strtotime($step, $start);
	}

	//Pages Setup
	$dayPerPage = 5;
	$totalItem = count($dates);
	$totalPage = ceil($totalItem/$dayPerPage);
	$curPage = 1;
	
	//Extra Day Column
	if (count($dates) < ($dayPerPage * $totalPage)) {
		$extraCol = ($dayPerPage * $totalPage) - count($dates);
		$extraStart = 1;
		while( $extraStart <= $extraCol ) {
			$dates[] = date($output_format, $start);
			$start = strtotime($step, $start);
			$extraStart += 1;
		}
	}
	while ($curPage <= $totalPage) {
		$res = mysqli_query($connection, "select * from sesi WHERE ids='$q_sesi'  ");
		while($row=mysqli_fetch_array($res)) {
			$sesi= $row['sesi'];
		}
		$html .= '

		<table width="775" border="1" cellspacing="0" cellpadding="0" class="resultTable">

			<tr>
				<th rowspan="2" colspan="2" style="font-size:12">Nama</th>
				<th rowspan="2" style="font-size:12">NDP</th>
				<td id="header_tarikh" style="font-size:11">Tarikh</td>';
		$offset = (($curPage - 1) * $dayPerPage) - 1;	
		$dayCol = 1;
		while( $dayCol <= 5 ) {
			$html .= "<td colspan='7'>";
			$html .= $dates[$offset + $dayCol];
			$html .= "</td>";
			$dayCol += 1;
		}
		$html .= "<td colspan='2' style='font-size:10'>JUMLAH SLOT</td>
        </tr>
		<tr>
        <td>SLOT</td>";
		
		$dayCol = 1;
		while( $dayCol <= 5 ) {
			$totalSlot = 1;
			while( $totalSlot <= 7 ) {
				$html .= "<td style='font-size:10'>";
				$html .= $totalSlot;
				$html .= "</td>";
				$totalSlot += 1;
			}
			$dayCol += 1;
		} 
			      
		$html .= "  <td  style='font-size:10'>TIDAK HADIR</td>
              <td  style='font-size:10'>HADIR</td>
                    </tr>";
		
		$q_pelajar ="SELECT  id_pelajar,nama_pelajar,no_ndp FROM pelajar
					 WHERE sesi='$q_sesi'
					 AND kelas='$q_kelas'
					  AND bahagian='$q_bahagian'";

		
		$pelajar= mysqli_query($connection, $q_pelajar);   
		while($row=mysqli_fetch_array($pelajar)){
 $totalHadir=0;
                $totalXHadir=0;
			$id_pelajar=$row["id_pelajar"];
			$nama_pelajar=$row["nama_pelajar"];
			$no_ndp=$row["no_ndp"];
			
			$html .= '<tr>';
			$html .= '<td colspan="2" style="font-size:12" >';
			$html .= $nama_pelajar;
			$html .= '</td>';
			$html .= '<td style="font-size:10" >';
			$html .= $no_ndp;
			$html .= '</td>';
			$html .= '<td >';
			$html .= '</td>';
			
			//Kedatangan
			$dayCol = 1;
            
			while( $dayCol <= 5 ) {
				$totalSlot = 1;
         
				$curDate = $dates[$offset + $dayCol];
				while( $totalSlot <= 7 ) {
					//get kedatangan on date and slot
					$kehadiran_query="SELECT `ke`.*, `j`.`slot` FROM `ke` INNER JOIN `jadual` AS `j` ON `ke`.`idj` = `j`.`idj`WHERE id_p='$id_pelajar' AND tarikh = '$curDate' AND slot = '$totalSlot'";
					$Kehadiran= mysqli_query($connection, $kehadiran_query);
					if (mysqli_num_rows($Kehadiran) != 0) {
						while($row=mysqli_fetch_array($Kehadiran)){
							$attendance = $row["kehadiran"];
                                     if ($attendance == '/' || $attendance == 'k') {
                                            $totalHadir += 1;
                                          
                                        } 
                            else  if($attendance == 'o' ) {
                                            $totalXHadir += 1;
                                          

                                        }
							$html .= '<td style="font-size:10">';
							$html .= $attendance;
							$html .= '</td>';
						}
                        
					} else {
						$html .= '<td style="font-size:10">';
						$html .= '</td>';
					}
        
					$totalSlot += 1;
				}
				$dayCol += 1;
        
			} 
            
               $html .= '<td style="font-size:10">';
							$html .= $totalXHadir;
							$html .= '</td>';
             $html .= '<td style="font-size:10">';
							$html .= $totalHadir;
							$html .= '</td>';

					
     
  
			
			//end Kira kehadiran
			
			$html .= "
            </tr>";
            $html .='<p class="footer"; >Disahkan oleh   :</p>';
		}
		$html .= "</table>";
		if ($curPage < $totalPage) {
			$html .= '<div class="page-break"></div>';
		}
		$curPage += 1;
	}
}

echo $html; 
         
$html=ob_get_clean();
$dompdf = new Dompdf();
$dompdf->loadHtml($html);
// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');


// Render the HTML as PDF
$dompdf->render();
// Output the generated PDF (1 = download and 0 = preview)
$dompdf->stream(" laporan rasmi",array("Attachment"=>1));
header("Location: ./index.php");
?>
