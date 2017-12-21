<?php

    error_reporting(E_ALL);
    ini_set('display_errors', TRUE);
    ini_set('display_startup_errors', TRUE);
    date_default_timezone_set('Europe/London');

    if (PHP_SAPI == 'cli')
        die('This example should only be run from a Web Browser');

    /** Include PHPExcel */
    require_once APPPATH . 'libraries/PHPExcel.php';


    // Create new PHPExcel object
    $objPHPExcel = new PHPExcel();

    // Set document properties
    $objPHPExcel->getProperties()->setCreator("Maarten Balliauw")
                                 ->setLastModifiedBy("Maarten Balliauw")
                                 ->setTitle("Office 2007 XLSX Test Document")
                                 ->setSubject("Office 2007 XLSX Test Document")
                                 ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
                                 ->setKeywords("office 2007 openxml php")
                                 ->setCategory("Test result file");

    // HEADER
    // Add some data
    $objPHPExcel->setActiveSheetIndex(0)
                ->setCellValue('K1', 'Royal Residence B2-100')
                ->setCellValue('K2', 'Raya Babatan Wiyung Surabaya')
                ->setCellValue('K3', 'Telp: 087701111077')
                ->setCellValue('K4', 'Email: dwikreasijaya@gmail.com')
                ->setCellValue('K5', 'NPWP : 76.023.775.0-618.000')
                ->setCellValue('B6', 'Laporan Barang Masuk')
                ->setCellValue('B8', 'Tanggal')
                ->setCellValue('C8', date('d/m/Y'))
                ->setCellValue('D8', 's/d')
                ->setCellValue('E8', date('t/m/Y'));

    $style = array(
        'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
        )
    );

    $style2 = array(
      'borders' => array(
          'allborders' => array(
              'style' => PHPExcel_Style_Border::BORDER_THIN,
          )
      )
    );

    $objPHPExcel->getActiveSheet()->mergeCells("B6:K6");
    $objPHPExcel->getActiveSheet()->getStyle("B6:K6")->applyFromArray($style);

    // DETAIL
    $objPHPExcel->setActiveSheetIndex(0)
                ->setCellValue('B10', 'Nomor Transaksi')
                ->setCellValue('C10', 'Tanggal')
                ->setCellValue('D10', 'Supplier')
                ->setCellValue('E10', 'Barang')
                ->setCellValue('E11', 'Section')
                ->setCellValue('F11', 'Deskripsi')
                ->setCellValue('G11', 'Panjang')
                ->setCellValue('H11', 'Finish')
                ->setCellValue('I11', 'Jumlah')
                ->setCellValue('J11', 'Harga Beli')
                ->setCellValue('K11', 'Harga Jual');

    $objPHPExcel->getActiveSheet()->mergeCells("B10:B11");
    $objPHPExcel->getActiveSheet()->mergeCells("C10:C11");
    $objPHPExcel->getActiveSheet()->mergeCells("D10:D11");
    $objPHPExcel->getActiveSheet()->mergeCells("E10:K10");
    $objPHPExcel->getActiveSheet()->getStyle("B10:K10")->applyFromArray($style);
    $objPHPExcel->getActiveSheet()->getStyle("B11:K11")->applyFromArray($style);

    $idx = 12;
    for ($i = 0; $i < 1; $i++) { 
        $objPHPExcel->setActiveSheetIndex(0)
                    ->setCellValue('B'.$idx, '')
                    ->setCellValue('C'.$idx, date('d/m/Y'))
                    ->setCellValue('D'.$idx, '')
                    ->setCellValue('E'.$idx, '')
                    ->setCellValue('F'.$idx, '')
                    ->setCellValue('G'.$idx, 0)
                    ->setCellValue('H'.$idx, '')
                    ->setCellValue('I'.$idx, 0)
                    ->setCellValue('J'.$idx, 0)
                    ->setCellValue('K'.$idx, 0);

        $objPHPExcel->getActiveSheet()->getStyle('G'.$idx)->getNumberFormat()->setFormatCode('#,##0.00');
        $objPHPExcel->getActiveSheet()->getStyle('I'.$idx)->getNumberFormat()->setFormatCode('#,##0.00');
        $objPHPExcel->getActiveSheet()->getStyle('J'.$idx)->getNumberFormat()->setFormatCode('#,##0.00');
        $objPHPExcel->getActiveSheet()->getStyle('K'.$idx)->getNumberFormat()->setFormatCode('#,##0.00');
        $objPHPExcel->getActiveSheet()->getStyle("B".$idx.":K".$idx)->applyFromArray($style2);

        $idx++;
    }

    // Set active sheet index to the first sheet, so Excel opens this as the first sheet
    $objPHPExcel->setActiveSheetIndex(0);
    $judulFile = 'Laporan Barang Masuk';

    ob_end_clean();
    // Redirect output to a client’s web browser (Excel2007)
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="'.$judulFile.'.xlsx"');
    header('Cache-Control: max-age=0');
    // If you're serving to IE 9, then the following may be needed
    header('Cache-Control: max-age=1');

    // If you're serving to IE over SSL, then the following may be needed
    header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
    header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
    header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
    header ('Pragma: public'); // HTTP/1.0
    ob_end_clean();

    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
    $objWriter->save('php://output');
