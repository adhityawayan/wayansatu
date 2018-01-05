<?php
require('assets/global/plugins/fpdf/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->Image('assets/pages/img/dwikreasijaya.png');
$pdf->SetFont('Arial','',13);
$pdf->Cell(190,8,'Royal Residence B2-100, Raya Babatan Wiyung Surabaya', 0, 1, 'C');
$pdf->SetFont('Arial','',10);
$pdf->Cell(190,6,'087701111077 | dwikreasijaya@gmail.com', 0, 1, 'C');
$pdf->Line(5, 46, 205, 46);
$pdf->SetFont('Arial','B',16);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,10,'Penyesuaian Harga', 0, 1, 'C');
$pdf->SetFont('Arial','',13);
$pdf->Cell(190,8,$penyesuaian_harga->nomor_transaksi, 0, 1, 'C');
$pdf->ln();
$pdf->ln();
$pdf->Cell(40,8,'Tanggal', 0, 0, 'L');
$pdf->Cell(120,8,':'.date_format(date_create(@$penyesuaian_harga->tanggal), 'd-m-Y'), 0, 1, 'L');
$pdf->Cell(40,8,'Catatan', 0, 0, 'L');
$pdf->Cell(120,8,':'.$penyesuaian_harga->catatan, 0, 1, 'L');
$pdf->ln();
$pdf->ln();
$pdf->Cell(50,8,'Finish', 1, 0, 'L');
$pdf->Cell(40,8,'Harga Sebelum', 1, 0, 'L');
$pdf->Cell(40,8,'Harga Koreksi', 1, 0, 'L');
$pdf->Cell(50,8,'Catatan', 1, 1, 'L');
if($penyesuaian_harga_detail){
	foreach($penyesuaian_harga_detail as $bdt){
		$pdf->Cell(50,8,$bdt->finishing->finishing, 1, 0, 'L');
		$pdf->Cell(40,8,number_format($bdt->harga_sebelum,2,",","."), 1, 0, 'R');
		$pdf->Cell(40,8,number_format($bdt->harga_koreksi,2,",","."), 1, 0, 'R');
		$pdf->Cell(50,8,$bdt->catatan, 1, 1, 'L');
	}
}
$pdf->Output();
?>