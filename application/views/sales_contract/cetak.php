<?php
require('assets/global/plugins/fpdf/textbox.php');

$pdf = new PDF_TextBox();
$pdf->AddPage('L');
if($sc->pajak_stat == 1){
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
$pdf->Cell(275,8,'SALES CONTRACT', 0, 1, 'C');
$pdf->SetFont('Arial','',12);
$pdf->Cell(40,6,'DO', 0, 0, 'L');
$pdf->Cell(135,6,': '.@$sc->nomor_do, 0, 0, 'L');
$pdf->Cell(30,6,'Tanggal', 0, 0, 'L');
$pdf->Cell(70,6,': '.date_format(date_create(@$sc->tanggal), 'd-m-Y'), 0, 1, 'L');
$pdf->Cell(40,6,'Customer', 0, 0, 'L');
$pdf->Cell(135,6,': '.@$sc->customer->nama, 0, 0, 'L');
$pdf->Cell(30,6,'', 0, 0, 'L');
$pdf->Cell(70,6,'', 0, 1, 'L');
$pdf->Cell(40,6,'SC', 0, 0, 'L');
$pdf->Cell(135,6,': '.@$sc->nomor_sc, 0, 0, 'L');
$pdf->Cell(30,6,'No. Pesanan', 0, 0, 'L');
$pdf->Cell(70,6,': '.@$sc->nomor_pesanan, 0, 1, 'L');
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
$pdf->Cell(27,8,'Harga Dasar', 0, 0, 'C');
$pdf->setX($pdf->getX()-27);
$pdf->Cell(27,16,'', 1, 0, 'C');
$pdf->Cell(45,8,'Qty', 1, 0, 'C');
$pdf->Cell(30,8,'Harga', 0, 0, 'C');
$pdf->setX($pdf->getX()-30);
$pdf->Cell(30,16,'', 1, 0, 'C');
$pdf->Cell(30,16,'', 1, 0, 'C');
$pdf->setX($pdf->getX()-30);
$pdf->Cell(30,8,'Total', 0, 1, 'C');

$pdf->Cell(8,8,'', 0, 0, 'C');
$pdf->Cell(20,8,'', 0, 0, 'C');
$pdf->Cell(25,8,'', 0, 0, 'C');
$pdf->Cell(50,8,'', 0, 0, 'C');
$pdf->Cell(20,8,'(Kg/Meter)', 0, 0, 'C');
$pdf->Cell(20,8,'(Meter)', 0, 0, 'C');
$pdf->Cell(27,8,'(Rp/Kg)', 0, 0, 'C');
$pdf->Cell(20,8,'Pcs', 1, 0, 'C');
$pdf->Cell(25,8,'Kg', 1, 0, 'C');
$pdf->Cell(30,8,'(Rp/Pc)', 0, 0, 'C');
$pdf->Cell(30,8,'(Rp)', 0, 1, 'C');
$i = 0;
$totPc = 0;
$totKg = 0;
$totAmmout = 0;
if(@$detail){
	$y = $pdf->getY();
	foreach($detail as $dt)
	{
		$orderKg = $dt->panjang*$dt->barang->berat*$dt->qty_order;
		$price = $dt->panjang*$dt->barang->berat*$dt->harga_dasar;
		$ammount = $price*$dt->qty_order;
		
		$totPc = $totPc+$dt->qty_order;
		$totKg = $totKg+$orderKg;
		$totAmmout = $totAmmout+$ammount;
		
		$i++;
		$pdf->Cell(8,12,$i, 1, 0, 'C');
		$pdf->Cell(20,12,$dt->barang->section, 1, 0, 'C');
		$pdf->SetFont('Arial','B',9);
		$pdf->drawTextBox(strtoupper($dt->finishing->finishing), 25, 12, 'C', 'M');
		$pdf->setXY(63, $y);
		$pdf->SetFont('Arial','',9);
		$pdf->drawTextBox(strtoupper($dt->barang->deskripsi), 50, 12, 'L', 'M');
		$pdf->setXY(113, $y);
		$pdf->Cell(20,12,number_format($dt->barang->berat,3,",","."), 1, 0, 'R');
		$pdf->Cell(20,12,number_format($dt->panjang,2,",","."), 1, 0, 'R');
		$pdf->Cell(27,12,number_format($dt->harga_dasar,2,",","."), 1, 0, 'R');
		$pdf->Cell(20,12,number_format($dt->qty_order,0,",","."), 1, 0, 'R');
		$pdf->Cell(25,12,number_format($orderKg,2,",","."), 1, 0, 'R');
		$pdf->Cell(30,12,number_format($price,2,",","."), 1, 0, 'R');
		$pdf->Cell(30,12,number_format($ammount,2,",","."), 1, 1, 'R');
		$y = $y+12;
	}
}
$pajakvalue		= 0;
if($sc->pajak_stat == 1){
	$pajakvalue		= $sc->ppn/100*$totAmmout;
	$grandTotal 	= $totAmmout+$pajakvalue;
}else{
	$grandTotal 	= $totAmmout;
}

$pdf->SetFont('Arial','B',9);
$pdf->Cell(170,6,'', 1, 0, 'C');
$pdf->Cell(20,6,number_format($totPc,2,",","."), 1, 0, 'R');
$pdf->Cell(25,6,number_format($totKg,2,",","."), 1, 0, 'R');
$pdf->Cell(30,6,'', 1, 0, 'R');
$pdf->Cell(30,6,number_format($totAmmout,2,",","."), 1, 1, 'R');
$pdf->SetFont('Arial','',9);
$pdf->Cell(215,6,'*Masa berlaku Sales Contract ini 3 hari dari tanggal Sales Contract, apabila lebih', 0, 0, 'L');
$pdf->SetFont('Arial','B',9);
$pdf->Cell(30,6,@$sc->pajak_stat == 1 ? 'PPN ('. $sc->ppn .'%)' : '', 1, 0, 'R');
$pdf->Cell(30,6,@$sc->pajak_stat == 1? number_format($pajakvalue,2,",","."): '', 1, 1, 'R');
$pdf->SetFont('Arial','',9);
$pdf->Cell(215,6,'dari 3 hari Sales Contract ini belum di-ACC maka kami anggap batal', 0, 0, 'L');
$pdf->SetFont('Arial','B',9);
$pdf->Cell(30,6,'Total (Rp)', 1, 0, 'R');
$pdf->Cell(30,6,number_format($grandTotal,2,",","."), 1, 1, 'R');
$pdf->SetFont('Arial','',9);
$pdf->ln();
$pdf->Cell(215,6,'Disetujui', 0, 0, 'L');
$pdf->Cell(50,6,'Disetujui', 0, 1, 'L');
$pdf->SetFont('Arial','',12);
$pdf->Cell(215,6,strtoupper($sc->customer->nama), 0, 0, 'L');
$pdf->Cell(50,6,strtoupper('PT Dwi Kreasi Jaya'), 0, 1, 'L');
$pdf->SetFont('Arial','',9);
$pdf->Line(10, $pdf->GetY()+30, 70, $pdf->GetY()+30);
$pdf->Line(225, $pdf->GetY()+30, 285, $pdf->GetY()+30);
$pdf->SetY($pdf->GetY()+35);
$pdf->Cell(190,6,'Harap ditandatangani dan diemail ke : dwikreasijaya@gmail.com a/n PT Dwi Kreasi Jaya', 0, 1, 'L');
$pdf->Cell(190,6,'Barang yang sudah terproduksi menjadi tanggung jawab CUSTOMER & tidak bisa ditukar dengan Section lain', 0, 1, 'L');
$pdf->Output();
?>