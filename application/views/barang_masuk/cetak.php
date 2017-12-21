<?php
require('assets/global/plugins/fpdf/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage('L');
$pdf->Image('assets/pages/img/dwikreasijaya.png', 20, 5, 200);
$pdf->SetFont('Arial','',8);
$pdf->ln();
$pdf->Cell(275,4,'Royal Residence B2-100', 0, 1, 'R');
$pdf->Cell(275,4,'Raya Babatan Wiyung', 0, 1, 'R');
$pdf->Cell(275,4,'Surabaya, Jawa Timur - Indonesia', 0, 1, 'R');
$pdf->Cell(275,4,'Telp: 087701111077', 0, 1, 'R');
$pdf->Cell(275,4,'Email: dwikreasijaya@gmail.com', 0, 1, 'R');
$pdf->SetFont('Arial','B',18);
$pdf->ln();
$pdf->Cell(275,8,'Barang Masuk', 0, 1, 'C');
$pdf->SetFont('Arial','',13);
$pdf->Cell(275,8,$barang_masuk->nomor_transaksi, 0, 1, 'C');
$pdf->ln();
$pdf->SetFont('Arial','',11);
$pdf->Cell(40,8,'Supplier', 0, 0, 'L');
$pdf->Cell(135,8,': '.$barang_masuk->supplier->nama, 0, 0, 'L');
$pdf->Cell(40,8,'Tanggal', 0, 0, 'L');
$tanggal = date('d-m-Y', strtotime($barang_masuk->tanggal));
$pdf->Cell(60,8,': '.$tanggal, 0, 1, 'L');
$pdf->Cell(40,8,'Nomor Surat Jalan', 0, 0, 'L');
$pdf->Cell(135,8,':'.$barang_masuk->nomor_surat_jalan, 0, 0, 'L');
$pdf->Cell(40,8,'Catatan', 0, 0, 'L');
$pdf->Cell(60,8,': '.$barang_masuk->catatan, 0, 1, 'L');
$pdf->ln();
$pdf->SetFont('Arial','',9);
$pdf->Cell(20,16,'Section', 1, 0, 'C');
$pdf->Cell(55,16,'Deskripsi', 1, 0, 'C');
$pdf->Cell(20,8,'Berat', 0, 0, 'C');
$pdf->setX($pdf->getX()-20);
$pdf->Cell(20,16,'', 1, 0, 'C');
$pdf->Cell(20,8,'Panjang', 0, 0, 'C');
$pdf->setX($pdf->getX()-20);
$pdf->Cell(20,16,'', 1, 0, 'C');
$pdf->Cell(25,16,'Finishing', 1, 0, 'C');
$pdf->Cell(35,8,'Harga Beli', 0, 0, 'C');
$pdf->setX($pdf->getX()-35);
$pdf->Cell(35,16,'', 1, 0, 'C');
$pdf->Cell(75,8,'Harga Jual', 1, 0, 'C');
$pdf->Cell(25,16,'', 1, 0, 'C');
$pdf->setX($pdf->getX()-25);
$pdf->Cell(25,8,'Jumlah', 0, 1, 'C');


$pdf->Cell(20,8,'',0 , 0, 'C');
$pdf->Cell(55,8,'', 0, 0, 'C');
$pdf->Cell(20,8,'(Kg/Meter)', 0, 0, 'C');
$pdf->Cell(20,8,'(Meter)', 0, 0, 'C');
$pdf->Cell(25,8,'', 0, 0, 'C');
$pdf->Cell(35,8,'(Rp/Kg)', 0, 0, 'C');
$pdf->Cell(35,8,'Rp/Kg', 1, 0, 'C');
$pdf->Cell(40,8,'Rp/Pc', 1, 0, 'C');
$pdf->Cell(25,8,'(Pcs)', 0, 1, 'C');
if($barang_detail){
	foreach($barang_detail as $bdt){
		$hpc = $bdt->barang->berat*$bdt->harga_jual*$bdt->panjang;
		$pdf->Cell(20,8,$bdt->barang->section, 1, 0, 'C');
		$pdf->Cell(55,8,$bdt->barang->deskripsi, 1, 0, 'L');
		$pdf->Cell(20,8,number_format($bdt->barang->berat, 3, ',', '.'), 1, 0, 'R');
		$pdf->Cell(20,8,number_format($bdt->panjang, 2, ',', '.'), 1, 0, 'R');
		$pdf->Cell(25,8,@$bdt->finishing->finishing, 1, 0, 'C');
		$pdf->Cell(35,8,number_format($bdt->harga_beli, 2, ',', '.'), 1, 0, 'R');
		$pdf->Cell(35,8,number_format($bdt->harga_jual, 2, ',', '.'), 1, 0, 'R');
		$pdf->Cell(40,8,number_format($hpc, 2, ',', '.'), 1, 0, 'R');
		$pdf->Cell(25,8,number_format($bdt->jumlah, 0, ',', '.'), 1, 1, 'R');
	}
}
$pdf->Output();
?>