<?php
include ("../config/db.php");
include ("./get.php");
?>

<html>
<style>
table {
    font-family: arial;
    font-size:12;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}


</style>
<body>

    
    <center><strong><h1 style="font-size:16">INSTITUT LATIHAN PERINDUSTRIAN
        KUALA LUMPUR</h1></strong></center>
    
    <center><strong><h2 style="font-size:16">JABATAN TENAGA MANUSIA</h2></strong></center>
    
    <p align="right" style="font-size:12">Tel: 03-79817493</p>
     <p align="right" style="font-size:12">Faks: 03-79817493</p>
    <hr>
    
    <p align="left" style="font-size:12" >Kepada&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Pengerusi Jawatankuasa Tatatertib Pelajar II</p>
    <p align="left" style="font-size:12">Tarikh&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 23 Oktober 2010</p>
    <p align="left" style="font-size:12">Tuan/Puan&nbsp;&nbsp;&nbsp;&nbsp;: </p>
    
    <h2><strong><u style="font-size:12">Aduan Displin Pelajar </u></strong></h2>
    
    <p style="font-size:12">Merujuk kepada perkara diatas:</p>
    
    <p style="font-size:12"> 2.  Adalah dilaporkan bahawa pelajar berikut:</p>
    <p style="font-size:12">Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<?php echo $nama_pelajar ?> </p>
    <p style="font-size:12">No.K/P &nbsp;&nbsp;&nbsp;&nbsp;:<?php echo $ic ?> </p>
    <p style="font-size:12">Kursus &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<?php echo $bahagian ?></p>
    <p style="font-size:12">Semester &nbsp;&nbsp;:2(SESI 1/10) </p>
    
    <p style="font-size:12">Telah didapati melakukan kesalahan tatatertib seperti berikut: </p>
    
    <table >
  <tr>
    <th>Jenis Kesalahan</th>
    <th>Hari</th>  
    <th>Tarikh</th>
    <th>Slot</th>
  </tr>
   
        <?php include("./kehadiran.php") ?>
      
    </table>
    
    
    
    <p style="font-size:12"> 3.  sehubungan dengan itu, diharap pihak Tuan/Puan dapat mengambil tindakan yang sewajarnya terhadap pelatih ini.</p>
    <p style="font-size:12">Sekian,Terima Kasih </p>
    <h4 style="font-size:12"><strong>"BERKHIDMAT UNTUK NEGARA"</strong></h4>
    <p style="font-size:12">Yang Benar,</p>
    <p style="font-size:12">...................................</p>
      <p style="font-size:12">Nama : <?php echo $nama ?> </p>
    <p style="font-size:12">Jawatan :<?php echo $jawatan ?>&nbsp;<?php echo $bahagian ?></p>
    
</body>




</html>