<?php
require('assets/global/plugins/fpdf/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
if($po->parent->pajak_stat == 1){
$pdf->Image('assets/pages/img/dwikreasijaya.png');
$pdf->SetFont('Arial','',8);
$pdf->Cell(190,4,'Royal Residence B2-100 Raya Babatan Wiyung', 0, 1, 'R');
$pdf->Cell(190,4,'Surabaya, Jawa Timur - Indonesia', 0, 1, 'R');
$pdf->Cell(190,4,'Telp: 087701111077', 0, 1, 'R');
$pdf->Cell(190,4,'Email: dwikreasijaya@gmail.com', 0, 1, 'R');
}
$pdf->SetFont('Arial','B',18);
$pdf->ln();
$pdf->Cell(190,8,'Purchase Order', 0, 1, 'C');
$pdf->SetFont('Arial','',12);
$pdf->Cell(120,8,'Kepada:', 0, 0, 'L');
$pdf->Cell(25,8,'No. PO', 0, 0, 'L');
$pdf->Cell(45,8,': '.@$po->nomor_transaksi, 0, 1, 'L');

$pdf->Cell(120,8,strtoupper(@$supplier->nama), 0, 0, 'L');
$pdf->Cell(25,8,'Tanggal', 0, 0, 'L');
$pdf->Cell(45,8,':'.date_format(date_create(@$po->tanggal), 'd-m-Y'), 0, 1, 'L');
$pdf->ln();

$pdf->Cell(20,8,'Up', 0, 0, 'L');
$pdf->Cell(100,8,': '.@$po->up, 0, 0, 'L');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(25,8,'URGENT', 1, 1, 'C');
$pdf->SetFont('Arial','',12);

$pdf->Cell(20,8,'Telepon', 0, 0, 'L');
$pdf->Cell(95,8,': '.@$po->telepon, 0, 1, 'L');
$pdf->ln();

$pdf->Cell(190,8,'Mohon dibuatkan konfirmasi order dari pesanan alumunium sesuai perincian berikut:', 0, 1, 'L');
$pdf->ln();


$pdf->Cell(10,8,'No', 1, 0, 'C');
$pdf->Cell(40,8,'Section', 1, 0, 'C');
$pdf->Cell(60,8,'Finishing', 1, 0, 'C');
$pdf->Cell(40,8,'Panjang', 1, 0, 'C');
$pdf->Cell(40,8,'Qty', 1, 1, 'C');
if($detail){
	$i=0;
	foreach($detail as $dt){
		$i++;
		$pdf->Cell(10,8,$i, 1, 0, 'C');
		$pdf->Cell(40,8,$dt->barang->section, 1, 0, 'C');
		$pdf->Cell(60,8,$dt->finishing->finishing, 1, 0, 'C');
		$pdf->Cell(40,8,$dt->panjang, 1, 0, 'R');
		$pdf->Cell(40,8,$dt->qty_order, 1, 1, 'R');
	}
}
$pdf->ln();$pdf->ln();$pdf->ln();
$pdf->Cell(20,8,'', 0, 0, 'L');
$pdf->Cell(100,8,'', 0, 0, 'L');
$pdf->Cell(25,8,'PT. DWI KREASI JAYA', 0, 1, 'C');

$pdf->Output();
?>