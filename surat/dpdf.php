<?php
// Include autoloader
require_once '../dompdf/autoload.inc.php';

// Reference the Dompdf namespace
use Dompdf\Dompdf;

// Instantiate and use the dompdf class
$dompdf = new Dompdf();


// Load content from html file
$html = file_get_contents("surat.php");
$dompdf->loadHtmlfile($html);
// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'potrait');


// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF (1 = download and 0 = preview)
$dompdf->stream('kehadiran'.'.php');

?>