<?php

require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf(['format' =>[166,300]]);
$mpdf->SetDefaultBodyCSS('background', "url('invoice2x.png')");

ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Kode Boking</title>
</head>
<body><br><br><br><br><br>
	<div align="center">
		<h2 align="center">Lur, Rahmad Alhidayat Tuloh</h2>
		<h3 align="center">Terima Kasih sudah mempercayai layanan kami<br>
		berikut kode Booking dan rincian Booking Anda
		</h3>
	</div><br><br>
	<h3 align="center">Kode Booking:</h3>
	<h1 align="center" style="color:#3498db;">XX00981212121</h1>
	<br><br><br><br>
		<h3 align="center">Rincian Booking:</h3>
		<p>
	<h3 align="center">Nama Customer:</h3>
	<h2 align="center">Rahmad Alhidayat Tuloh</h2>
	<p><p><p><p>
	<h3 align="center">Tanggal Booking:</h3>
	<h2 align="center">Minggu, 24 Juli 2020</h2>
	<p><p><p>
	<h3 align="center">Jam Booking:</h3>
	<h2 align="center">10:00</h2>
<p><p>
	<h3 align="center">Device:<p align="center">iPhone 11 Pro Max</h3>
</body>
</html>
<?php
	$html = ob_get_contents(); 
	ob_end_clean();
	$mpdf->WriteHTML(utf8_encode($html));
	$mpdf->Output("kodeboking.pdf" ,'I');
?>