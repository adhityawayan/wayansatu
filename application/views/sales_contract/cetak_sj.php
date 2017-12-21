<?php
require('assets/global/plugins/fpdf/textbox.php');

$pdf = new PDF_TextBox();
$pdf->AddPage();
if($sc->pajak_stat == 1){
$pdf->Image('assets/pages/img/dwikreasijaya.png');
$pdf->SetFont('Arial','',8);
$pdf->Cell(190,4,'Royal Residence B2-100 Raya Babatan Wiyung', 0, 1, 'R');
$pdf->Cell(190,4,'Surabaya, Jawa Timur - Indonesia', 0, 1, 'R');
$pdf->Cell(190,4,'Telp: 087701111077', 0, 1, 'R');
$pdf->Cell(190,4,'Email: dwikreasijaya@gmail.com', 0, 1, 'R');
}
$pdf->SetFont('Arial','B',18);
$pdf->ln();
$pdf->Cell(190,8,'Surat Jalan', 0, 1, 'C');
$pdf->SetFont('Arial','',12);
$pdf->Cell(120,8,'Kepada:', 0, 0, 'L');
$pdf->Cell(25,8,'No. SJ', 0, 0, 'L');
$pdf->Cell(45,8,': '.str_replace("DO","SJ",@$sc->nomor_do), 0, 1, 'L');

$pdf->Cell(120,8,strtoupper(@$sc->customer->nama), 0, 0, 'L');
$pdf->Cell(25,8,'No. SC', 0, 0, 'L');
$pdf->Cell(45,8,': '.$sc->nomor_sc, 0, 1, 'L');
$pdf->drawTextBox('asdadasd', 100, 20, 'L', 'T', FALSE);
$pdf->SetY($pdf->GetY()+20);

$pdf->Cell(190,8,'Mohon Diterima Barang Tersebut Dibawah Ini:', 0, 1, 'L');
$pdf->ln();


$pdf->Cell(10,8,'No', 1, 0, 'C');
$pdf->Cell(40,8,'Section', 1, 0, 'C');
$pdf->Cell(40,8,'Deskripsi', 1, 0, 'C');
$pdf->Cell(40,8,'Finishing', 1, 0, 'C');
$pdf->Cell(30,8,'Panjang(M)', 1, 0, 'C');
$pdf->Cell(30,8,'Qty', 1, 1, 'C');
if($detail){
	$i=0;
	$y = $pdf->GetY();
	foreach($detail as $dt){
		$i++;
		$pdf->Cell(10,12,$i, 1, 0, 'C');
		$pdf->Cell(40,12,$dt->barang->section, 1, 0, 'C');
		$pdf->SetXY(60, $y);
		$pdf->drawTextBox($dt->barang->deskripsi, 40,12, 'L', 'M');
		$pdf->SetXY(100, $y);
		$pdf->Cell(40,12,$dt->finishing->finishing, 1, 0, 'C');
		$pdf->Cell(30,12,number_format($dt->panjang,2,",","."), 1, 0, 'R');
		$pdf->Cell(30,12,number_format($dt->qty_order,0,",","."), 1, 1, 'R');
		$y = $y+12;
	}
}
$pdf->ln();$pdf->ln();$pdf->ln();
$pdf->Cell(50,8,@$sc->customer->nama, 0,0, 'L');
$pdf->Cell(90,8,'', 0, 0, 'L');
$pdf->Cell(50,8,'PT. DWI KREASI JAYA', 0, 1, 'C');

$pdf->Output();
?>