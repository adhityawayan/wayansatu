 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends MY_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Penjualan_model');
        $this->load->model('Penjualan_detail_model');
        $this->load->model('Customer_model');
        $this->load->model('Stok_barang_model');
        $this->load->model('Perusahaan_bank_model');
    }
	public function index()
	{
		$data["caption"] 	= "Penjualan";
		$data["breadcrumb"]	= array(
								array(
									"label" => "Penjualan",
									"url" => ""
								)
							);
							
		$this->template('penjualan/list', $data);
	}
	public function getDatatable(){
		$customActionName=$this->input->post('customActionName');
        $records         = array();

        if ($customActionName == "delete") {
            $records=$this-> delete_checked();
        }

        $iDisplayLength = ($this->input->get_post('length')) ? $this->input->get_post('length') : 10 ;
        $iDisplayStart  = ($this->input->get_post('start')) ? $this->input->get_post('start') : 0 ;
        $sEcho          = ($this->input->get_post('draw')) ? $this->input->get_post('draw') : 1 ;

        $t              = $this->Penjualan_model->get_limit_data($iDisplayStart, $iDisplayLength);
        $iTotalRecords  = $t['total_rows'];
        $get_data       = $t['get_db'];

        $records["data"] = array();

        $i=$iDisplayStart+1;
        if ($get_data) {
            foreach ($get_data as $d) {
                $checkbok= '<input type="checkbox" name="id[]" value="'.$d->id.'">';
                $file    = anchor(site_url('Penjualan/invoice/'.$d->id),'<i class="fa fa-file fa-lg"></i>',array('title'=>'Invoice','class'=>'btn btn-icon-only blue', 'target'=>'blank'));
                $sj    = anchor(site_url('Penjualan/sj/'.$d->id),'<i class="fa fa-truck fa-lg"></i>',array('title'=>'Surat Jalan','class'=>'btn btn-icon-only red', 'target'=>'blank'));
                $delete  = '<button class="btn btn-icon-only red delete" title="delete" data-title="'.$d->{$this->Penjualan_model->label}.'" data-url="'.site_url('Penjualan/delete/'.$d->id).'"><i class="fa fa-trash fa-lg"></i></button>';

                $records["data"][] = array(
                    $checkbok,
                
					$d->nomor_transaksi, 
					@$d->customer->{$this->Customer_model->label}, 
					$d->tanggal,
                    $file.' '.$sj
                );
            }
        }
        $records["draw"] = $sEcho;
        $records["recordsTotal"] = $iTotalRecords;
        $records["recordsFiltered"] = $iTotalRecords;

        $this->output->set_content_type('application/json')->set_output(json_encode($records));
	}
	public function form()
	{
		$data["caption"] 	= "Form Penjualan";
		$data["breadcrumb"]	= array(
								array(
									"label" => "Penjualan",
									"url" => "Penjualan"
								),
								array(
									"label" => "Form",
									"url" => ""
								)
							);
							
		$data["action"] 	= "Penjualan/formAction";
		$this->template('penjualan/form', $data);
	}
	public function formAction(){
		$data = array(
				// 'nomor_transaksi' => $this->input->post('tipe'),
				'customer' => $this->input->post('customer'),
				'tanggal' => $this->input->post('tanggal'),
				'total' => str_replace(",",".",str_replace(".","",$this->input->post('totalawal'))),
				'diskon' => str_replace(",",".",str_replace(".","",$this->input->post('diskon'))),
				'diskon_type' => $this->input->post('diskon_type'),
				'grand_total' => str_replace(",",".",str_replace(".","",$this->input->post('grand_total'))),
				'jenis_pembayaran' => $this->input->post('tipe'),
				'term_of_payment' => $this->input->post('top'),
				'nama_bank' => $this->input->post('bank'),
				'nomor_akun' => $this->input->post('nomor'),
				'catatan' => $this->input->post('catatan'),
				'ppn' => str_replace(",",".",str_replace(".","",$this->input->post('ppn'))),
				'pajak_stat' => $this->input->post('ppn_stat'),
			);
		if (empty($this->input->post('id'))) {
			$wherec["EXTRACT(year FROM tanggal) ="] = date("Y");
			$wherec["pajak_stat"] = $this->input->post('ppn_stat');
			$jml = $this->Penjualan_model->count_rows($wherec);
			
			$vari = "";
			if($this->input->post('ppn_stat') == 1){
				$vari = "-P";
			}
			$dk 	= sprintf("%03d", $jml+1);
			$seri 	= date("y").$dk."/DKJ/PJ".$vari."/".date("Y");
			$data["nomor_transaksi"] = $seri;
			if($this->Penjualan_model->insert($data)){
				$idinsert 		= $this->db->insert_id();
				$i=0;
				foreach($this->input->post('barang') as $b){
					$data2 = array(
							'parent' => $idinsert,
							'barang' => $this->input->post('barang_this')[$i],
							'panjang' => @$this->input->post('panjang')[$i]==''? 0 : str_replace(",",".",str_replace(".","",$this->input->post('panjang')[$i])),
							'finishing' => @$this->input->post('finish')[$i]==''? 0 : $this->input->post('finish')[$i],
							'harga' => str_replace(",",".",str_replace(".","",$this->input->post('harga')[$i])),
							'stok' => str_replace(",",".",str_replace(".","",$this->input->post('stok')[$i])),
							'jumlah' => str_replace(",",".",str_replace(".","",$this->input->post('qty')[$i])),
							'total' => str_replace(",",".",str_replace(".","",$this->input->post('total')[$i]))
						);
						if($this->Penjualan_detail_model->insert($data2)){
							$inventory = $this->Stok_barang_model->get($this->input->post('barang')[$i]);
							
							$datainv["stok"] = $inventory->stok - $this->input->post('qty')[$i];
							$this->Stok_barang_model->update($datainv, $this->input->post('barang')[$i]);
						}
						$i++;
				}
				$res['url']     = site_url('Penjualan/invoice/'.$idinsert);
				$res['success'] = true;
				$res['message'] = 'Simpan berhasil';
			}
		}
		$this->output->set_content_type('application/json')->set_output(json_encode($res));
	}
	public function invoice($id){
		
		$data = array();
		$data["penjualan"] = $this->Penjualan_model->with_customer()->get($id);
		$data["detail"] = $this->Penjualan_detail_model->with_barang()->get_all(array("parent"=>$id));
		$data["terbilang"] = $this->terbilang($data["penjualan"]->grand_total);
		$data["bank"] = $this->Perusahaan_bank_model->get_all(array("transaksi"=>"1", "pajak_stat"=>$data["penjualan"]->pajak_stat));
		$this->load->view('penjualan/cetak', $data);
	}
	public function sj($id){
		$data = array();
		$data["penjualan"] = $this->Penjualan_model->with_customer()->get($id);
		$data["detail"] = $this->Penjualan_detail_model->with_barang()->get_all(array("parent"=>$id));
		$this->load->view('penjualan/cetak_sj', $data);
	}
}
?>