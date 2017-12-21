 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends MY_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Barang_masuk_model');
        $this->load->model('Barang_masuk_detail_model');
        $this->load->model('Supplier_model');
        $this->load->model('Stok_barang_model');
        $this->load->model('Finishing_barang_model');
        $this->load->model('Penyesuaian_stok_model');
        $this->load->model('Penyesuaian_stok_detail_model');
		$this->load->model('Penyesuaian_harga_model');
        $this->load->model('Penyesuaian_harga_detail_model');
		$this->load->model('Penjualan_model');
		$this->load->model('Penjualan_detail_model');
		$this->load->model('Sales_contract_model');
    }
	public function barang_masuk()
	{
		$data["caption"] 	= "Laporan Barang Masuk";
		$data["breadcrumb"]	= array(
								array(
									"label" => "Laporan Barang Masuk",
									"url" => ""
								)
							);
							
		$this->template('laporan/barang_masuk/list', $data);
	}
	public function getDatatableBarang_masuk(){
		$customActionName=$this->input->post('customActionName');
        $records         = array();

        if ($customActionName == "delete") {
            $records=$this-> delete_checked();
        }

        $iDisplayLength = ($this->input->get_post('length')) ? $this->input->get_post('length') : 10 ;
        $iDisplayStart  = ($this->input->get_post('start')) ? $this->input->get_post('start') : 0 ;
        $sEcho          = ($this->input->get_post('draw')) ? $this->input->get_post('draw') : 1 ;

        $t              = $this->Barang_masuk_model->get_limit_data($iDisplayStart, $iDisplayLength);
        $iTotalRecords  = $t['total_rows'];
        $get_data       = $t['get_db'];

        $records["data"] = array();

        $i=$iDisplayStart+1;
        if ($get_data) {
            foreach ($get_data as $d) {
                $checkbok= '<input type="checkbox" name="id[]" value="'.$d->id.'">';

                $records["data"][] = array(
                    $checkbok,
                
					$d->nomor_transaksi, 
					@$d->supplier->{$this->Supplier_model->label}, 
					$d->tanggal, 
					$d->nomor_surat_jalan, 
					$d->catatan,
                    ''
                );
            }
        }
        $records["draw"] = $sEcho;
        $records["recordsTotal"] = $iTotalRecords;
        $records["recordsFiltered"] = $iTotalRecords;

        $this->output->set_content_type('application/json')->set_output(json_encode($records));
	}
	public function excelBarang_masuk()
	{
		$where = array();
		// print_r($_POST);
		if(!empty($this->input->post('nomor_transaksi'))){
			$where['LOWER(nomor_transaksi) LIKE'] = '%'.strtolower($this->input->post('nomor_transaksi')).'%';
		}
		if(!empty(@$this->input->post('suplier'))){
			$where['suplier'] = $this->input->post('suplier');
        }
		if(!empty($this->input->post('tanggal_start'))){
			$where['tanggal >='] = $this->input->post('tanggal_start');
		}
		if(!empty($this->input->post('tanggal_end'))){
			$where['tanggal <='] = $this->input->post('tanggal_end');
		}
        if(!empty($this->input->post('nomor_surat_jalan'))){
			$where['LOWER(nomor_surat_jalan) LIKE'] = '%'.strtolower($this->input->post('nomor_surat_jalan')).'%';
        }
        if(!empty($this->input->post('catatan'))){
			$where['LOWER(catatan) LIKE'] = '%'.strtolower($this->input->post('catatan')).'%';
        }

		// print_r($where);
		$data = $this->Barang_masuk_model->with_supplier()->get_all($where);
		// print_r($data);
		// exit();

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
	                ->setCellValue('C8', $this->input->post('tanggal_start'))
	                ->setCellValue('D8', 's/d')
	                ->setCellValue('E8', $this->input->post('tanggal_end'));
					
		$gdImage = imagecreatefrompng('assets/pages/img/dwikreasijaya.png');
		// Add a drawing to the worksheetecho date('H:i:s') . " Add a drawing to the worksheet\n";
		$objDrawing = new PHPExcel_Worksheet_MemoryDrawing();
		$objDrawing->setName('Sample image');$objDrawing->setDescription('Sample image');
		$objDrawing->setImageResource($gdImage);
		$objDrawing->setRenderingFunction(PHPExcel_Worksheet_MemoryDrawing::RENDERING_JPEG);
		$objDrawing->setMimeType(PHPExcel_Worksheet_MemoryDrawing::MIMETYPE_DEFAULT);
		$objDrawing->setHeight(60);
		$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());
		
		$objDrawing->setCoordinates('B1');

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
	    $objPHPExcel->getActiveSheet()->getStyle("B10:K10")->applyFromArray($style2);
	    $objPHPExcel->getActiveSheet()->getStyle("B11:K11")->applyFromArray($style2);

	    $idx = 12;
		if($data){
			foreach ($data as $v) {
				$detail = $this->Barang_masuk_detail_model->with_barang()->with_finishing()->get_all(array("parent"=>$v->id));
				if($detail){
					foreach($detail as $dt){
						$objPHPExcel->setActiveSheetIndex(0)
									->setCellValue('B'.$idx, $v->nomor_transaksi)
									->setCellValue('C'.$idx, date('d/m/Y', strtotime($v->tanggal)))
									->setCellValue('D'.$idx, $v->supplier->nama)
									->setCellValue('E'.$idx, $dt->barang->section)
									->setCellValue('F'.$idx, $dt->barang->deskripsi)
									->setCellValue('G'.$idx, $dt->panjang)
									->setCellValue('H'.$idx, $dt->finishing->finishing)
									->setCellValue('I'.$idx, $dt->jumlah)
									->setCellValue('J'.$idx, $dt->harga_beli)
									->setCellValue('K'.$idx, $dt->harga_jual);

						$objPHPExcel->getActiveSheet()->getStyle('G'.$idx)->getNumberFormat()->setFormatCode('#,##0.00');
						$objPHPExcel->getActiveSheet()->getStyle('I'.$idx)->getNumberFormat()->setFormatCode('#,##0.00');
						$objPHPExcel->getActiveSheet()->getStyle('J'.$idx)->getNumberFormat()->setFormatCode('#,##0.00');
						$objPHPExcel->getActiveSheet()->getStyle('K'.$idx)->getNumberFormat()->setFormatCode('#,##0.00');
						$objPHPExcel->getActiveSheet()->getStyle("B".$idx.":K".$idx)->applyFromArray($style2);

						$idx++;
					}
				}
			}
		}

	    // Set active sheet index to the first sheet, so Excel opens this as the first sheet
	    $objPHPExcel->setActiveSheetIndex(0);
	    $judulFile = 'Laporan Barang Masuk';

	    ob_end_clean();
	    // Redirect output to a client’s web browser (Excel2007)
	    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	    // header('Content-Disposition: attachment;filename="'.$judulFile.'.xls"');
	    header('Cache-Control: max-age=0');
	    // If you're serving to IE 9, then the following may be needed
	    header('Cache-Control: max-age=1');

	    // If you're serving to IE over SSL, then the following may be needed
	    header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
	    header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
	    header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
	    header ('Pragma: public'); // HTTP/1.0
	    // ob_end_clean();

	    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
	    $objWriter->save('php://output');
	}
	public function stok_barang()
	{
		$data["caption"] 	= "Laporan Stok Barang";
		$data["breadcrumb"]	= array(
								array(
									"label" => "Laporan Stok Barang",
									"url" => ""
								)
							);
							
		$this->template('laporan/stok_barang/list', $data);
	}
	public function excelStok(){
		$where = array();
		
		if(!empty($this->input->post('barang'))){
            $where['barang'] = $this->input->post('barang');
        }
        if(!empty($this->input->post('panjang'))){
            $where['panjang'] = $this->input->post('panjang');
        }
		if(!empty($this->input->post('finish'))){
            $where['finish'] = $this->input->post('finish');
        }
		
		$data = $this->Stok_barang_model->with_barang()->with_finishing()->get_all($where);
		
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
					->setCellValue('B6', 'Laporan Stok Barang')
					->setCellValue('B8', 'Tanggal')
					->setCellValue('C8', date('d/m/Y'));
		
		$gdImage = imagecreatefrompng('assets/pages/img/dwikreasijaya.png');
		// Add a drawing to the worksheetecho date('H:i:s') . " Add a drawing to the worksheet\n";
		$objDrawing = new PHPExcel_Worksheet_MemoryDrawing();
		$objDrawing->setName('Sample image');$objDrawing->setDescription('Sample image');
		$objDrawing->setImageResource($gdImage);
		$objDrawing->setRenderingFunction(PHPExcel_Worksheet_MemoryDrawing::RENDERING_JPEG);
		$objDrawing->setMimeType(PHPExcel_Worksheet_MemoryDrawing::MIMETYPE_DEFAULT);
		$objDrawing->setHeight(60);
		$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());
		
		$objDrawing->setCoordinates('B1');
		
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
					->setCellValue('B10', 'Section')
					->setCellValue('C10', 'Deskripsi')
					->setCellValue('D10', 'Panjang')
					->setCellValue('E10', 'Finish')
					->setCellValue('F10', 'Jumlah');

		$objPHPExcel->getActiveSheet()->getStyle("B10:F10")->applyFromArray($style);
		$objPHPExcel->getActiveSheet()->getStyle("B10:F10")->applyFromArray($style2);

		$idx = 11;
		if($data){
			foreach ($data as $d) {
				$objPHPExcel->setActiveSheetIndex(0)
							->setCellValue('B'.$idx, $d->barang->section)
							->setCellValue('C'.$idx, $d->barang->deskripsi)
							->setCellValue('D'.$idx, $d->panjang)
							->setCellValue('E'.$idx, $d->finishing->finishing)
							->setCellValue('F'.$idx, $d->stok);

				$objPHPExcel->getActiveSheet()->getStyle('D'.$idx)->getNumberFormat()->setFormatCode('#,##0.00');
				$objPHPExcel->getActiveSheet()->getStyle('F'.$idx)->getNumberFormat()->setFormatCode('#,##0.00');
				$objPHPExcel->getActiveSheet()->getStyle("B".$idx.":F".$idx)->applyFromArray($style2);

				$idx++;
			}
		}

		// Set active sheet index to the first sheet, so Excel opens this as the first sheet
		$objPHPExcel->setActiveSheetIndex(0);
		$judulFile = 'Laporan Stok Barang';

		ob_end_clean();
	    // Redirect output to a client’s web browser (Excel2007)
	    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	    // header('Content-Disposition: attachment;filename="'.$judulFile.'.xls"');
	    header('Cache-Control: max-age=0');
	    // If you're serving to IE 9, then the following may be needed
	    header('Cache-Control: max-age=1');

	    // If you're serving to IE over SSL, then the following may be needed
	    header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
	    header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
	    header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
	    header ('Pragma: public'); // HTTP/1.0
	    // ob_end_clean();

	    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
	    $objWriter->save('php://output');
	}
	public function penyesuaian_stok()
	{
		$data["caption"] 	= "Laporan Penyesuaian Stok Barang";
		$data["breadcrumb"]	= array(
								array(
									"label" => "Laporan Penyesuaian Stok Barang",
									"url" => ""
								)
							);
							
		$this->template('laporan/penyesuaian_stok/list', $data);
	}
	public function excelPenyesuaianStok(){
		$where = array();
		if(!empty($this->input->post('nomor_transaksi'))){
            $where['LOWER(nomor_transaksi) LIKE'] = '%'.strtolower($this->input->post('nomor_transaksi')).'%';
        }
		if(!empty($this->input->post('tanggal_start'))){
            $where['tanggal >='] = $this->input->post('tanggal_start');
        }
        if(!empty($this->input->post('tanggal_end'))){
            $where['tanggal <='] = $this->input->post('tanggal_end');
        }
        if(!empty($this->input->post('catatan'))){
            $where['LOWER(catatan) LIKE'] = '%'.strtolower($this->input->post('catatan')).'%';
        }
		$data = $this->Penyesuaian_stok_model->get_all($where);
		
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
									 
		$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('K1', 'Royal Residence B2-100')
            ->setCellValue('K2', 'Raya Babatan Wiyung Surabaya')
            ->setCellValue('K3', 'Telp: 087701111077')
            ->setCellValue('K4', 'Email: dwikreasijaya@gmail.com')
            ->setCellValue('K5', 'NPWP : 76.023.775.0-618.000')
            ->setCellValue('B6', 'Laporan Penyesuaian Stok')
            ->setCellValue('B8', 'Tanggal')
            ->setCellValue('C8', $this->input->post('tanggal_start'))
            ->setCellValue('D8', 's/d')
            ->setCellValue('E8', $this->input->post('tanggal_end'));
			
		$gdImage = imagecreatefrompng('assets/pages/img/dwikreasijaya.png');
		// Add a drawing to the worksheetecho date('H:i:s') . " Add a drawing to the worksheet\n";
		$objDrawing = new PHPExcel_Worksheet_MemoryDrawing();
		$objDrawing->setName('Sample image');$objDrawing->setDescription('Sample image');
		$objDrawing->setImageResource($gdImage);
		$objDrawing->setRenderingFunction(PHPExcel_Worksheet_MemoryDrawing::RENDERING_JPEG);
		$objDrawing->setMimeType(PHPExcel_Worksheet_MemoryDrawing::MIMETYPE_DEFAULT);
		$objDrawing->setHeight(60);
		$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());
		
		$objDrawing->setCoordinates('B1');
		
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
					->setCellValue('D10', 'Catatan')
					->setCellValue('E10', 'Section')
					->setCellValue('F10', 'Deskripsi')
					->setCellValue('G10', 'Panjang')
					->setCellValue('H10', 'Finish')
					->setCellValue('I10', 'Stok Sebelum')
					->setCellValue('J10', 'Stok Koreksi')
					->setCellValue('K10', 'Catatan');

		$objPHPExcel->getActiveSheet()->getStyle("B10:K10")->applyFromArray($style);
		$objPHPExcel->getActiveSheet()->getStyle("B10:K10")->applyFromArray($style2);

		$idx = 11;
		if($data){
			foreach ($data as $v) {
				$detail = $this->Penyesuaian_stok_detail_model->with_barang()->with_finishing()->get_all(array("parent"=>$v->id));
				foreach($detail as $dt){
					$objPHPExcel->setActiveSheetIndex(0)
								->setCellValue('B'.$idx, $v->nomor_transaksi)
								->setCellValue('C'.$idx, date('d/m/Y', strtotime($v->tanggal)))
								->setCellValue('D'.$idx, $v->nomor_transaksi)
								->setCellValue('E'.$idx, $dt->barang->section)
								->setCellValue('F'.$idx, $dt->barang->deskripsi)
								->setCellValue('G'.$idx, $dt->panjang)
								->setCellValue('H'.$idx, $dt->finishing->finishing)
								->setCellValue('I'.$idx, $dt->stok_sebelum)
								->setCellValue('J'.$idx, $dt->stok_koreksi)
								->setCellValue('K'.$idx, $dt->catatan);

					$objPHPExcel->getActiveSheet()->getStyle('G'.$idx)->getNumberFormat()->setFormatCode('#,##0.00');
					$objPHPExcel->getActiveSheet()->getStyle('I'.$idx)->getNumberFormat()->setFormatCode('#,##0.00');
					$objPHPExcel->getActiveSheet()->getStyle('J'.$idx)->getNumberFormat()->setFormatCode('#,##0.00');
					$objPHPExcel->getActiveSheet()->getStyle('K'.$idx)->getNumberFormat()->setFormatCode('#,##0.00');
					$objPHPExcel->getActiveSheet()->getStyle("B".$idx.":K".$idx)->applyFromArray($style2);

					$idx++;
				}
			}
		}

		// Set active sheet index to the first sheet, so Excel opens this as the first sheet
		$objPHPExcel->setActiveSheetIndex(0);
		$judulFile = 'Laporan Stok Barang';

		ob_end_clean();
	    // Redirect output to a client’s web browser (Excel2007)
	    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	    // header('Content-Disposition: attachment;filename="'.$judulFile.'.xls"');
	    header('Cache-Control: max-age=0');
	    // If you're serving to IE 9, then the following may be needed
	    header('Cache-Control: max-age=1');

	    // If you're serving to IE over SSL, then the following may be needed
	    header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
	    header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
	    header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
	    header ('Pragma: public'); // HTTP/1.0
	    // ob_end_clean();

	    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
	    $objWriter->save('php://output');
	}
	public function penyesuaian_harga()
	{
		$data["caption"] 	= "Laporan Penyesuaian Harga Barang";
		$data["breadcrumb"]	= array(
								array(
									"label" => "Laporan Penyesuaian Harga Barang",
									"url" => ""
								)
							);
							
		$this->template('laporan/penyesuaian_harga/list', $data);
	}
	public function excelPenyesuaianHarga(){
		$where = array();
		if(!empty($this->input->post('nomor_transaksi'))){
            $where['LOWER(nomor_transaksi) LIKE'] = '%'.strtolower($this->input->post('nomor_transaksi')).'%';
        }
		if(!empty($this->input->post('tanggal_start'))){
            $where['tanggal >='] = $this->input->post('tanggal_start');
        }
        if(!empty($this->input->post('tanggal_end'))){
            $where['tanggal <='] = $this->input->post('tanggal_end');
        }
        if(!empty($this->input->post('catatan'))){
            $where['LOWER(catatan) LIKE'] = '%'.strtolower($this->input->post('catatan')).'%';
        }
		$data = $this->Penyesuaian_harga_model->get_all($where);
		
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
									 
		$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('K1', 'Royal Residence B2-100')
            ->setCellValue('K2', 'Raya Babatan Wiyung Surabaya')
            ->setCellValue('K3', 'Telp: 087701111077')
            ->setCellValue('K4', 'Email: dwikreasijaya@gmail.com')
            ->setCellValue('K5', 'NPWP : 76.023.775.0-618.000')
            ->setCellValue('B6', 'Laporan Penyesuaian Harga')
            ->setCellValue('B8', 'Tanggal')
            ->setCellValue('C8', $this->input->post('tanggal_start'))
            ->setCellValue('D8', 's/d')
            ->setCellValue('E8', $this->input->post('tanggal_end'));
			
		$gdImage = imagecreatefrompng('assets/pages/img/dwikreasijaya.png');
		// Add a drawing to the worksheetecho date('H:i:s') . " Add a drawing to the worksheet\n";
		$objDrawing = new PHPExcel_Worksheet_MemoryDrawing();
		$objDrawing->setName('Sample image');$objDrawing->setDescription('Sample image');
		$objDrawing->setImageResource($gdImage);
		$objDrawing->setRenderingFunction(PHPExcel_Worksheet_MemoryDrawing::RENDERING_JPEG);
		$objDrawing->setMimeType(PHPExcel_Worksheet_MemoryDrawing::MIMETYPE_DEFAULT);
		$objDrawing->setHeight(60);
		$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());
		
		$objDrawing->setCoordinates('B1');
		
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
					->setCellValue('D10', 'Catatan')
					->setCellValue('E10', 'Section')
					->setCellValue('F10', 'Deskripsi')
					->setCellValue('G10', 'Panjang')
					->setCellValue('H10', 'Finish')
					->setCellValue('I10', 'Harga Sebelum')
					->setCellValue('J10', 'Harga Koreksi')
					->setCellValue('K10', 'Catatan');

		$objPHPExcel->getActiveSheet()->getStyle("B10:K10")->applyFromArray($style);
		$objPHPExcel->getActiveSheet()->getStyle("B10:K10")->applyFromArray($style2);

		$idx = 11;
		if($data){
			foreach ($data as $v) {
				$detail = $this->Penyesuaian_harga_detail_model->with_barang()->with_finishing()->get_all(array("parent"=>$v->id));
				foreach($detail as $dt){
					$objPHPExcel->setActiveSheetIndex(0)
								->setCellValue('B'.$idx, $v->nomor_transaksi)
								->setCellValue('C'.$idx, date('d/m/Y', strtotime($v->tanggal)))
								->setCellValue('D'.$idx, $v->catatan)
								->setCellValue('E'.$idx, $dt->barang->section)
								->setCellValue('F'.$idx, $dt->barang->deskripsi)
								->setCellValue('G'.$idx, $dt->panjang)
								->setCellValue('H'.$idx, $dt->finishing->finishing)
								->setCellValue('I'.$idx, $dt->harga_sebelum)
								->setCellValue('J'.$idx, $dt->harga_koreksi)
								->setCellValue('K'.$idx, $dt->catatan);

					$objPHPExcel->getActiveSheet()->getStyle('G'.$idx)->getNumberFormat()->setFormatCode('#,##0.00');
					$objPHPExcel->getActiveSheet()->getStyle('I'.$idx)->getNumberFormat()->setFormatCode('#,##0.00');
					$objPHPExcel->getActiveSheet()->getStyle('J'.$idx)->getNumberFormat()->setFormatCode('#,##0.00');
					$objPHPExcel->getActiveSheet()->getStyle('K'.$idx)->getNumberFormat()->setFormatCode('#,##0.00');
					$objPHPExcel->getActiveSheet()->getStyle("B".$idx.":K".$idx)->applyFromArray($style2);

					$idx++;
				}
			}
		}

		// Set active sheet index to the first sheet, so Excel opens this as the first sheet
		$objPHPExcel->setActiveSheetIndex(0);
		$judulFile = 'Laporan Harga Barang';

		ob_end_clean();
	    // Redirect output to a client’s web browser (Excel2007)
	    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	    // header('Content-Disposition: attachment;filename="'.$judulFile.'.xls"');
	    header('Cache-Control: max-age=0');
	    // If you're serving to IE 9, then the following may be needed
	    header('Cache-Control: max-age=1');

	    // If you're serving to IE over SSL, then the following may be needed
	    header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
	    header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
	    header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
	    header ('Pragma: public'); // HTTP/1.0
	    // ob_end_clean();

	    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
	    $objWriter->save('php://output');
	}
	public function penjualan()
	{
		$data["caption"] 	= "Laporan Penjualan";
		$data["breadcrumb"]	= array(
								array(
									"label" => "Laporan Penjualan",
									"url" => ""
								)
							);
							
		$this->template('laporan/penjualan/list', $data);
	}
	public function excelPenjualan(){
		$where=array();
		if(!empty($this->input->post('nomor_transaksi'))){
            $where['LOWER(section) LIKE'] = '%'.strtolower($this->input->post('section')).'%';
        }
		if(!empty($this->input->post('customer'))){
            $where['suplier'] = $this->input->post('suplier');
        }
        if(!empty($this->input->post('tanggal_start'))){
            $where['tanggal >='] = $this->input->post('tanggal_start');
        }
        if(!empty($this->input->post('tanggal_end'))){
            $where['tanggal <='] = $this->input->post('tanggal_end');
        }
		
		$data = $this->Penjualan_model->with_customer()->get_all($where);
		
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
									 
		$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('K1', 'Royal Residence B2-100')
            ->setCellValue('K2', 'Raya Babatan Wiyung Surabaya')
            ->setCellValue('K3', 'Telp: 087701111077')
            ->setCellValue('K4', 'Email: dwikreasijaya@gmail.com')
            ->setCellValue('K5', 'NPWP : 76.023.775.0-618.000')
            ->setCellValue('B6', 'Laporan Penjualan')
            ->setCellValue('B8', 'Tanggal')
            ->setCellValue('C8', $this->input->post('tanggal_start'))
            ->setCellValue('D8', 's/d')
            ->setCellValue('E8', $this->input->post('tanggal_end'));
			
		$gdImage = imagecreatefrompng('assets/pages/img/dwikreasijaya.png');
		// Add a drawing to the worksheetecho date('H:i:s') . " Add a drawing to the worksheet\n";
		$objDrawing = new PHPExcel_Worksheet_MemoryDrawing();
		$objDrawing->setName('Sample image');$objDrawing->setDescription('Sample image');
		$objDrawing->setImageResource($gdImage);
		$objDrawing->setRenderingFunction(PHPExcel_Worksheet_MemoryDrawing::RENDERING_JPEG);
		$objDrawing->setMimeType(PHPExcel_Worksheet_MemoryDrawing::MIMETYPE_DEFAULT);
		$objDrawing->setHeight(60);
		$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());
		
		$objDrawing->setCoordinates('B1');
		
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
					->setCellValue('D10', 'Customer')
					->setCellValue('E10', 'Total Transaksi')
					->setCellValue('F10', 'Diskon')
					->setCellValue('G10', 'Grand Total');
					
		$objPHPExcel->getActiveSheet()->getStyle("B10:K10")->applyFromArray($style);
		$objPHPExcel->getActiveSheet()->getStyle("B10:G10")->applyFromArray($style2);
		
		$idx = 11;
		if($data){
			foreach ($data as $v) {
				$objPHPExcel->setActiveSheetIndex(0)
								->setCellValue('B'.$idx, $v->nomor_transaksi)
								->setCellValue('C'.$idx, date('d/m/Y', strtotime($v->tanggal)))
								->setCellValue('D'.$idx, $v->customer->nama)
								->setCellValue('E'.$idx, $v->total)
								->setCellValue('F'.$idx, $v->diskon_type == 1 ? $v->diskon.'%': 'Rp.'. $v->diskon)
								->setCellValue('G'.$idx, $v->grand_total);

					$objPHPExcel->getActiveSheet()->getStyle('G'.$idx)->getNumberFormat()->setFormatCode('#,##0.00');
					$objPHPExcel->getActiveSheet()->getStyle('I'.$idx)->getNumberFormat()->setFormatCode('#,##0.00');
					$objPHPExcel->getActiveSheet()->getStyle('J'.$idx)->getNumberFormat()->setFormatCode('#,##0.00');
					$objPHPExcel->getActiveSheet()->getStyle('K'.$idx)->getNumberFormat()->setFormatCode('#,##0.00');
					$objPHPExcel->getActiveSheet()->getStyle("B".$idx.":G".$idx)->applyFromArray($style2);

					$idx++;
			}
		}
		
		// Set active sheet index to the first sheet, so Excel opens this as the first sheet
		$objPHPExcel->setActiveSheetIndex(0);
		$judulFile = 'Laporan Penjualan';

		ob_end_clean();
	    // Redirect output to a client’s web browser (Excel2007)
	    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	    // header('Content-Disposition: attachment;filename="'.$judulFile.'.xls"');
	    header('Cache-Control: max-age=0');
	    // If you're serving to IE 9, then the following may be needed
	    header('Cache-Control: max-age=1');

	    // If you're serving to IE over SSL, then the following may be needed
	    header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
	    header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
	    header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
	    header ('Pragma: public'); // HTTP/1.0
	    // ob_end_clean();

	    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
	    $objWriter->save('php://output');
	}
	public function sc()
	{
		$data["caption"] 	= "Laporan Sales Contract";
		$data["breadcrumb"]	= array(
								array(
									"label" => "Laporan Sales Contract",
									"url" => ""
								)
							);
							
		$this->template('laporan/sc/list', $data);
	}
	public function excelSc(){
		$where = array();
		if(!empty($this->input->post('nomor_do'))){
            $where['LOWER(nomor_do) LIKE'] = '%'.strtolower($this->input->post('nomor_do')).'%';
        }
		if(!empty($this->input->post('customer'))){
            $where['customer'] = $this->input->post('customer');
        }
		if(!empty($this->input->post('nomor_sc'))){
            $where['LOWER(nomor_sc) LIKE'] = '%'.strtolower($this->input->post('nomor_sc')).'%';
        }
        if(!empty($this->input->post('tanggal_start'))){
            $where['tanggal >='] = $this->input->post('tanggal_start');
        }
        if(!empty($this->input->post('tanggal_end'))){
            $where['tanggal <='] = $this->input->post('tanggal_end');
        }
		
		$data = $this->Sales_contract_model->with_customer()->with_supplier()->with_status()->get_all($where);
		
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
									 
		$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('K1', 'Royal Residence B2-100')
            ->setCellValue('K2', 'Raya Babatan Wiyung Surabaya')
            ->setCellValue('K3', 'Telp: 087701111077')
            ->setCellValue('K4', 'Email: dwikreasijaya@gmail.com')
            ->setCellValue('K5', 'NPWP : 76.023.775.0-618.000')
            ->setCellValue('B6', 'Laporan Sales Coontract')
            ->setCellValue('B8', 'Tanggal')
            ->setCellValue('C8', $this->input->post('tanggal_start'))
            ->setCellValue('D8', 's/d')
            ->setCellValue('E8', $this->input->post('tanggal_end'));
			
			$gdImage = imagecreatefrompng('assets/pages/img/dwikreasijaya.png');
		// Add a drawing to the worksheetecho date('H:i:s') . " Add a drawing to the worksheet\n";
		$objDrawing = new PHPExcel_Worksheet_MemoryDrawing();
		$objDrawing->setName('Sample image');$objDrawing->setDescription('Sample image');
		$objDrawing->setImageResource($gdImage);
		$objDrawing->setRenderingFunction(PHPExcel_Worksheet_MemoryDrawing::RENDERING_JPEG);
		$objDrawing->setMimeType(PHPExcel_Worksheet_MemoryDrawing::MIMETYPE_DEFAULT);
		$objDrawing->setHeight(60);
		$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());
		
		$objDrawing->setCoordinates('B1');
		
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
		
		$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('B10', 'Nomor DO')
            ->setCellValue('C10', 'Customer')
            ->setCellValue('D10', 'Supplier')
            ->setCellValue('E10', 'Nomor SC')
            ->setCellValue('F10', 'Tanggal')
            ->setCellValue('G10', 'Nomor Pesanan')
            ->setCellValue('H10', 'Tanggal Disetujui')
            ->setCellValue('I10', 'Status')
            ->setCellValue('J10', 'Catatan');
			
			$objPHPExcel->getActiveSheet()->getStyle("B10:K10")->applyFromArray($style);
			$objPHPExcel->getActiveSheet()->getStyle("B10:J10")->applyFromArray($style2);
			
		$idx = 11;
		if($data){
			foreach ($data as $v) {
				 $objPHPExcel->setActiveSheetIndex(0)
					->setCellValue('B'.$idx, $v->nomor_do)
					->setCellValue('C'.$idx, $v->customer->nama)
					->setCellValue('D'.$idx, @$v->suplier->nama)
					->setCellValue('E'.$idx, $v->nomor_sc)
					->setCellValue('F'.$idx, date('d/m/Y', strtotime($v->tanggal)))
					->setCellValue('G'.$idx, $v->nomor_pesanan)
					->setCellValue('H'.$idx, $v->tanggal_disetujui== "" ? '' : date('d/m/Y', strtotime($v->tanggal_disetujui)))
					->setCellValue('I'.$idx, $v->status->status)
					->setCellValue('J'.$idx, $v->catatan);

				$objPHPExcel->getActiveSheet()->getStyle("B".$idx.":J".$idx)->applyFromArray($style2);

				$idx++;
			}
		}			
			
			// Set active sheet index to the first sheet, so Excel opens this as the first sheet
		$objPHPExcel->setActiveSheetIndex(0);
		$judulFile = 'Laporan Sales Contract';

		ob_end_clean();
	    // Redirect output to a client’s web browser (Excel2007)
	    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	    // header('Content-Disposition: attachment;filename="'.$judulFile.'.xls"');
	    header('Cache-Control: max-age=0');
	    // If you're serving to IE 9, then the following may be needed
	    header('Cache-Control: max-age=1');

	    // If you're serving to IE over SSL, then the following may be needed
	    header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
	    header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
	    header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
	    header ('Pragma: public'); // HTTP/1.0
	    // ob_end_clean();

	    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
	    $objWriter->save('php://output');
	}
	public function lr()
	{
		$data["caption"] 	= "Laporan Laba - Rugi";
		$data["breadcrumb"]	= array(
								array(
									"label" => "Laporan Laba - Rugi",
									"url" => ""
								)
							);
							
		$this->template('laporan/lr/list', $data);
	}
	public function excelLr(){
		$data = $this->Stok_barang_model->with_barang()->with_finishing()->get_all();
		
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
					->setCellValue('B6', 'Laporan Laba - Rugi');
					// ->setCellValue('B8', 'Tanggal')
					// ->setCellValue('C8', date('d/m/Y'));
		
		$gdImage = imagecreatefrompng('assets/pages/img/dwikreasijaya.png');
		// Add a drawing to the worksheetecho date('H:i:s') . " Add a drawing to the worksheet\n";
		$objDrawing = new PHPExcel_Worksheet_MemoryDrawing();
		$objDrawing->setName('Sample image');$objDrawing->setDescription('Sample image');
		$objDrawing->setImageResource($gdImage);
		$objDrawing->setRenderingFunction(PHPExcel_Worksheet_MemoryDrawing::RENDERING_JPEG);
		$objDrawing->setMimeType(PHPExcel_Worksheet_MemoryDrawing::MIMETYPE_DEFAULT);
		$objDrawing->setHeight(60);
		$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());
		
		$objDrawing->setCoordinates('B1');
		
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
					->setCellValue('B10', 'Section')
					->setCellValue('C10', 'Deskripsi')
					->setCellValue('D10', 'Panjang')
					->setCellValue('E10', 'Finish')
					->setCellValue('F10', 'Pembelian')
					->setCellValue('I10', 'Penjualan')
					->setCellValue('F11', 'masuk')
					->setCellValue('G11', 'harga')
					->setCellValue('H11', 'ammount')
					->setCellValue('I11', 'terjual')
					->setCellValue('J11', 'harga')
					->setCellValue('K11', 'ammount');
		
		$objPHPExcel->getActiveSheet()->mergeCells("B10:B11");
	    $objPHPExcel->getActiveSheet()->mergeCells("C10:C11");
	    $objPHPExcel->getActiveSheet()->mergeCells("D10:D11");
	    $objPHPExcel->getActiveSheet()->mergeCells("E10:E11");
	    $objPHPExcel->getActiveSheet()->mergeCells("F10:H10");
	    $objPHPExcel->getActiveSheet()->mergeCells("I10:K10");
		$objPHPExcel->getActiveSheet()->getStyle("B10:K11")->applyFromArray($style);
		$objPHPExcel->getActiveSheet()->getStyle("B10:K11")->applyFromArray($style2);
		
		$idx = 12;	
		$pemix = $idx;
		$penix = $idx;
		if($data){
			foreach($data as $dt){
				
				$objPHPExcel->setActiveSheetIndex(0)
					->setCellValue('B'.$idx, $dt->barang->section)
					->setCellValue('C'.$idx, $dt->barang->deskripsi)
					->setCellValue('D'.$idx, $dt->panjang)
					->setCellValue('E'.$idx, $dt->finishing->finishing);
				$wheredet = array(
					"barang" => $dt->barang->id,
					"finish" => $dt->finishing->id,
					"panjang" =>$dt->panjang
				);
				$wheredetpen = array(
					"barang" => $dt->barang->id,
					"finishing" => $dt->finishing->finishing,
					"panjang" =>$dt->panjang
				);	
				$pembelian = $this->Barang_masuk_detail_model->get_all($wheredet);
				if($pembelian){
					$pemix = $idx;
					foreach($pembelian as $pb){
						$objPHPExcel->setActiveSheetIndex(0)
							->setCellValue('F'.$pemix, $pb->jumlah)
							->setCellValue('G'.$pemix, $pb->harga_beli)
							->setCellValue('H'.$pemix, $pb->jumlah*$pb->harga_beli);
							$objPHPExcel->getActiveSheet()->getStyle("B".$idx.":K".$pemix)->applyFromArray($style2);
							$pemix++;
					}
				}
				
				$penjualan = $this->Penjualan_detail_model->get_all($wheredetpen);
				if($penjualan){
					$penix = $idx;
					foreach($penjualan as $pj){
						$objPHPExcel->setActiveSheetIndex(0)
							->setCellValue('I'.$penix, $pj->jumlah)
							->setCellValue('J'.$penix, $pj->harga)
							->setCellValue('K'.$penix, $pj->jumlah*$pj->harga);
							
							$objPHPExcel->getActiveSheet()->getStyle("B".$idx.":K".$penix)->applyFromArray($style2);
							$penix++;
					}
				}
				
				$objPHPExcel->getActiveSheet()->getStyle('D'.$idx)->getNumberFormat()->setFormatCode('#,##0.00');
				$objPHPExcel->getActiveSheet()->getStyle("B".$idx.":K".$idx)->applyFromArray($style2);
				$idx = $pemix>$penix ? $pemix: $penix;
				$idx++;
			}
		}
		
		// Set active sheet index to the first sheet, so Excel opens this as the first sheet
	    $objPHPExcel->setActiveSheetIndex(0);
	    $judulFile = 'Laporan Laba - Rugi';

	    ob_end_clean();
	    // Redirect output to a client’s web browser (Excel2007)
	    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	    // header('Content-Disposition: attachment;filename="'.$judulFile.'.xls"');
	    header('Cache-Control: max-age=0');
	    // If you're serving to IE 9, then the following may be needed
	    header('Cache-Control: max-age=1');

	    // If you're serving to IE over SSL, then the following may be needed
	    header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
	    header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
	    header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
	    header ('Pragma: public'); // HTTP/1.0
	    // ob_end_clean();

	    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
	    $objWriter->save('php://output');
	}
}
?>