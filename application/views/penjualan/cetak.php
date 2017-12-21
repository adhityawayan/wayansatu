<?php
require('assets/global/plugins/fpdf/textbox.php');

$pdf = new PDF_TextBox();
$pdf->AddPage('L');
if($penjualan->pajak_stat == 1){
	$pdf->Image('assets/pages/img/dwikreasijaya.png', 20, 5, 200);
	$pdf->SetFont('Arial','',8);
	$pdf->ln();
	$pdf->Cell(275,4,'Royal Residence B2-100', 0, 1, 'R');
	$pdf->Cell(275,4,'Raya Babatan Wiyung', 0, 1, 'R');
	$pdf->Cell(275,4,'Surabaya, Jawa Timur - Indonesia', 0, 1, 'R');
	$pdf->Cell(275,4,'Telp: 087701111077', 0, 1, 'R');
	$pdf->Cell(275,4,'Email: dwikreasijaya@gmail.com', 0, 1, 'R');
}
$pdf->SetFont('Arial','B',18);
$pdf->ln();
$pdf->Cell(275,8,'Invoice', 0, 1, 'C');
$pdf->SetFont('Arial','',12);
$pdf->Cell(40,6,'Date', 0, 0, 'L');
$pdf->Cell(135,6,': '.date_format(date_create(@$penjualan->tanggal), 'd-m-Y'), 0, 0, 'L');
$pdf->Cell(100,6,@$penjualan->customer->nama, 0, 1, 'L');
$pdf->Cell(40,6,'No.Faktur', 0, 0, 'L');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(135,6,': '.@$penjualan->nomor_transaksi, 0, 0, 'L');
$pdf->SetFont('Arial','',12);
$pdf->Cell(100,6,@$penjualan->customer->alamat, 0, 1, 'L');
$pdf->ln();
$pdf->SetFont('Arial','',9);
$pdf->Cell(8,16,'No', 1, 0, 'C');
$pdf->Cell(20,16,'Section', 1, 0, 'C');
$pdf->Cell(25,16,'Finishing', 1, 0, 'C');
$pdf->Cell(50,16,'Deskripsi', 1, 0, 'C');
$pdf->Cell(20,8,'Berat', 0, 0, 'C');
$pdf->setX($pdf->getX()-20);
$pdf->Cell(20,16,'', 1, 0, 'C');
$pdf->Cell(20,8,'Panjang', 0, 0, 'C');
$pdf->setX($pdf->getX()-20);
$pdf->Cell(20,16,'', 1, 0, 'C');
// $pdf->Cell(27,8,'Harga Dasar', 0, 0, 'C');
// $pdf->setX($pdf->getX()-27);
// $pdf->Cell(27,16,'', 1, 0, 'C');
$pdf->Cell(45,8,'Qty', 1, 0, 'C');
$pdf->Cell(40,8,'Harga', 0, 0, 'C');
$pdf->setX($pdf->getX()-40);
$pdf->Cell(40,16,'', 1, 0, 'C');
$pdf->Cell(47,16,'', 1, 0, 'C');
$pdf->setX($pdf->getX()-47);
$pdf->Cell(47,8,'Total', 1, 1, 'C');

$pdf->Cell(8,8,'', 0, 0, 'C');
$pdf->Cell(20,8,'', 0, 0, 'C');
$pdf->Cell(25,8,'', 0, 0, 'C');
$pdf->Cell(50,8,'', 0, 0, 'C');
$pdf->Cell(20,8,'(Kg/Meter)', 0, 0, 'C');
$pdf->Cell(20,8,'(Meter)', 0, 0, 'C');
// $pdf->Cell(27,8,'(Rp/Kg)', 0, 0, 'C');
$pdf->Cell(45,8,'Pcs', 1, 0, 'C');
// $pdf->Cell(25,8,'Kg', 1, 0, 'C');
$pdf->Cell(40,8,'(Rp/Pc)', 0, 0, 'C');
$pdf->Cell(47,8,'(Rp)', 0, 1, 'C');
if($detail){
	$nomor = 0;
	$pcs = 0;
	$total = 0;
	$y = $pdf->getY();
	foreach($detail as $dt){
		$nomor ++;
		$pdf->Cell(8,12,$nomor, 1, 0, 'C');
		$pdf->Cell(20,12,$dt->barang->section, 1, 0, 'C');
		$pdf->SetFont('Arial','B',9);
		$pdf->drawTextBox(strtoupper($dt->finishing), 25, 12, 'C', 'M');
		$pdf->setY($y);
		$pdf->setX(63);
		$pdf->SetFont('Arial','',9);
		$pdf->drawTextBox(strtoupper($dt->barang->deskripsi), 50, 12, 'L', 'M');
		$pdf->setY($y);
		$pdf->setX(113);
		$pdf->Cell(20,12,number_format($dt->barang->berat,3,",","."), 1, 0, 'R');
		$pdf->Cell(20,12,number_format($dt->panjang,2,",","."), 1, 0, 'R');
		// $pdf->Cell(27,12,number_format($dt->harga/($dt->barang->berat*$dt->panjang),0,",","."), 1, 0, 'R');
		$pdf->Cell(45,12,number_format($dt->jumlah,2,",","."), 1, 0, 'R');
		// $pdf->Cell(25,12,number_format($dt->barang->berat*$dt->panjang*$dt->jumlah,2,",","."), 1, 0, 'R');
		$pdf->Cell(40,12,number_format($dt->harga,2,",","."), 1, 0, 'R');
		$pdf->Cell(47,12,number_format($dt->harga * $dt->jumlah,2,",","."), 1, 1, 'R');
		
		$y = $y+12;
		$pcs = $pcs + $dt->jumlah;
		$total = $total + $dt->harga * $dt->jumlah;
	}
}
$diskon = @$penjualan->diskon_type == 1 ? number_format($penjualan->diskon,2,",",".").'%':'Rp'.number_format($penjualan->diskon,2,",",".");
$pdf->Cell(143,8,'Total', 1, 0, 'R');
$pdf->Cell(45,8,number_format($pcs,0,",","."), 1, 0, 'R');
$pdf->Cell(40,8,'', 1, 0, 'C');
$pdf->Cell(47,8,number_format($total,2,",","."), 1, 1, 'R');
$pdf->Cell(15,16,'Terbilang:', 0, 0, 'L');
$pdf->SetFont('Arial','',10);
$pdf->Cell(175,16,ucwords($terbilang).' Rupiah', 0, 0, 'L');
$pdf->SetFont('Arial','',10);
$pdf->setX($pdf->getX()-190);
$pdf->Cell(188, 24,'', 1, 0, 'L');
$pdf->Cell(40,8,@$penjualan->diskon == 0 ? '': 'Diskon', 1, 0, 'L');
$pdf->Cell(47,8,(@$penjualan->diskon == 0) ? '' : $diskon, 1, 1, 'R');
$pdf->setX($pdf->getX()+188);
$pdf->Cell(40,8,@$penjualan->pajak_stat == 1 ? 'PPN ('.$penjualan->ppn.'%)': '', 1, 0, 'L');
$pdf->Cell(47,8,(@$penjualan->pajak_stat == 1) ? number_format(($penjualan->ppn/100)*$total,2,",","."): '', 1, 1, 'R');
$pdf->SetX(198);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,8,'Grand Total', 1, 0, 'L');
$pdf->Cell(47,8,number_format($penjualan->grand_total,2,",","."), 1, 1, 'R');
$pdf->SetFont('Arial','',10);
$pdf->Cell(215,10,'Catatan:', 0, 0, 'L');
$pdf->Cell(60,6,'Hormat Kami,', 0, 0, 'C');
$pdf->SetX(225);
// $pdf->Cell(60,30,'', 1, 1, 'C');
// $pdf->Cell(190,30,'', 0, 0, 'C');
$pdf->SetX(10);
$pdf->Cell(190,6,'', 0, 1, 'L');
$a = 18;
if($bank){
	$pdf->Cell(190,6,'Pembayaran mohon transfer ke beberapa Account bank dibawah ini:', 0, 1, 'L');
	$pdf->Cell(71.7,6,'Nama', 1, 0, 'C');
	$pdf->Cell(71.7,6,'Bank', 1, 0, 'C');
	$pdf->Cell(71.7,6,'Nomor Account', 1, 1, 'C');
	foreach($bank as $bk){
		$pdf->Cell(71.7,6,$bk->nama_akun, 1, 0, 'C');
		$pdf->Cell(71.7,6,$bk->bank, 1, 0, 'C');
		$pdf->Cell(71.7,6,$bk->nomor_akun, 1, 1, 'C');
		$a = $a+6;
	}
}
$pdf->SetY($pdf->GetY()-$a);
if($a = 18){
	$a = $a+18;
}
$pdf->Cell(215,$a,'', 1, 0, 'C');
$pdf->Cell(60,$a,'', 1, 1, 'C');
$pdf->Output();
?>