<?php
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf(['format' =>[100,100]]);
$mpdf->SetWatermarkImage('caps_logo.png');
$mpdf->showWatermarkImage = true;
$mpdf->WriteHTML('<h1>Hello world!</h1>');
$mpdf->Output();
?>