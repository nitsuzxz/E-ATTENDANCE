<?php

include("../config/db.php");
require_once '../dompdf/autoload.inc.php';


use Dompdf\Dompdf;

$dompdf = new Dompdf();

    
   
        
        $query ="SELECT id_k,id_p,tarikh,hari,slot,kehadiran FROM ke AS K
                  JOIN jadual as J
                  ON K.idj=J.idj
                  WHERE tarikh BETWEEN '2018-10-01' AND '2018-10-03'
                  AND sesi='1'
                  AND kelas='1'";
        
        $query_official_report= mysqli_query($connection, $query);
        $data=array();
                                  
        if(mysqli_num_rows($query_official_report) > 0){
            
            while($rows= mysqli_fetch_array($query_official_report)){
                         $data[]= $rows;

            }
        }
        //print_r($data);
        
        foreach ($data as $datas){
             $id_kehadiran  = $datas['id_k'];
             $id_pelajar    = $datas['id_p'];
             $tarikh        = $datas['tarikh'];
             $hari          = $datas['hari'];
             $slot          = $datas['slot'];
             $kehadiran     = $datas['kehadiran']; 
            
        
            
        }
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
            <td>Tarikh</td>
            <td colspan="7">
                <?php echo $tarikh ?>
            </td>

        <tr>
            <td>SLOT</td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>

        </tr>
        <?php
    $query_pelajar="SELECT id_pelajar,nama_pelajar,no_ndp from pelajar
                    where sesi='1' AND kelas='1'";
        
     $nama_ndp= mysqli_query($connection, $query_pelajar);   
                while($row=mysqli_fetch_array($nama_ndp)){
                    
                    $id_pelajar=$row["id_pelajar"];
                    $nama=$row["nama_pelajar"];
                    $ndp=$row["no_ndp"];
                    
                    echo"<tr>";
                    echo"<td>";
                    echo $nama;
                    echo"</td>";
                    echo"<td>";
                    echo $ndp;
                    echo"</td>";
                    echo"</td>";
    
                foreach($id_pelajar as $id){
                    $query_kehadiran="SELECT tarikh,kehadiran FROM ke where id_p='$id' ";
                    $kehadiran= mysqli_query($connection, $query_kehadiran);   
                        while($row=mysqli_fetch_array($kehadiran)){
                            $tarikh=$row["tarikh"];
                            $kehadiran=$row["kehadiran"];
                            
                    echo"<td>";
                    echo $kehadiran;
                    echo"</td>";
                    echo"</td>";
                    
                    
                    
                    
                }          
            }
        }
  
?>
        <?php
$html=ob_get_clean();   
$dompdf->loadHtml($html);
// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');


// Render the HTML as PDF
$dompdf->render();
// Output the generated PDF (1 = download and 0 = preview)
$dompdf->stream("kehadiran",array("Attachment"=>0));        

?>