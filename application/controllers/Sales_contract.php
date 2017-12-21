 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales_contract extends MY_Controller {
	function __construct()
    {
		parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Sales_contract_model');
        $this->load->model('Sales_contract_detail_model');
        $this->load->model('Customer_model');
        $this->load->model('Supplier_model');
        $this->load->model('Barang_model');
        $this->load->model('Finishing_barang_model');
        $this->load->model('Status_distribusi_model');
        $this->load->model('Setting_pajak_model');
        $this->load->model('Purchase_order_model');
	}
	public function index()
	{
		$data["caption"] 	= "Distribusi";
		$data["breadcrumb"]	= array(
								array(
									"label" => "Sales Contract",
									"url" => ""
								)
							);
							
		$this->template('sales_contract/list', $data);
	}
	public function getDatatable($param = null){
		$customActionName=$this->input->post('customActionName');
        $records         = array();

        if ($customActionName == "delete") {
            $records=$this-> delete_checked();
        }

        $iDisplayLength = ($this->input->get_post('length')) ? $this->input->get_post('length') : 10 ;
        $iDisplayStart  = ($this->input->get_post('start')) ? $this->input->get_post('start') : 0 ;
        $sEcho          = ($this->input->get_post('draw')) ? $this->input->get_post('draw') : 1 ;

        $t              = $this->Sales_contract_model->get_limit_data($iDisplayStart, $iDisplayLength);
        $iTotalRecords  = $t['total_rows'];
        $get_data       = $t['get_db'];

        $records["data"] = array();

        $i=$iDisplayStart+1;
        if ($get_data) {
            foreach ($get_data as $d) {
                $checkbok= '<input type="checkbox" name="id[]" value="'.$d->id.'">';
                $edit    = anchor(site_url('Sales_contract/form/'.$d->id),'<i class="fa fa-search fa-lg"></i>',array('title'=>'Distribusi','class'=>'btn btn-icon-only blue'));
                // $delete  = '<button class="btn btn-icon-only red delete" title="delete" data-title="'.$d->{$this->Penjualan_model->label}.'" data-url="'.site_url('Penjualan/delete/'.$d->id).'"><i class="fa fa-trash fa-lg"></i></button>';
				if($param == 2){
					$edit= "";
				}
                $records["data"][] = array(
                    $checkbok,
                
					$d->nomor_do, 
					@$d->customer->{$this->Customer_model->label}, 
					$d->nomor_sc, 
					date_format(new DateTime($d->tanggal),'d-m-Y'),
					$d->status->{$this->Status_distribusi_model->label},
                    $edit
                );
            }
        }
        $records["draw"] = $sEcho;
        $records["recordsTotal"] = $iTotalRecords;
        $records["recordsFiltered"] = $iTotalRecords;

        $this->output->set_content_type('application/json')->set_output(json_encode($records));
	}
	public function form($id = null){
		$data["caption"] 	= "Alur Distribusi";
		$data["breadcrumb"]	= array(
								array(
									"label" => "Distribusi",
									"url" => "Sales_contract"
								),
								array(
									"label" => "Alur",
									"url" => ""
								)
							);
		 if (empty($id)) {
            $data['row']       = null;
            $data['detail']       = null;
            $data['id']        = '';
        }else{
            $row = $this->Sales_contract_model->get($id);
            $detail = $this->Sales_contract_model->get($id);

            if ($row) {
                $data['row']       = $row;
                $data['detail']    = $this->Sales_contract_detail_model->with_parent()->with_barang()->with_finishing()->get_all(array("parent"=>$row->id));
                $data['po']    		= $this->Purchase_order_model->with_parent()->get(array("parent"=>$row->id));
                $data['id']        = $row->id;
            } else {
                show_error('Data not found');
            }
        }					
		$data["action"] 	= "Sales_contract/form_action";
		$data["action2"] 	= "Sales_contract/form_action_po";
		$this->template('sales_contract/form', $data);
	}
	public function form_action(){
		$this->form_validation->set_rules('customer','Customer','trim|required');
        $this->form_validation->set_rules('tanggal','Tanggal','trim|required');
			
		if (empty($this->input->post('id'))) {
			if ($this->form_validation->run() == FALSE) {
				$res['message'] = 'Lengkapi form dengan benar';
				$res['field_error'] = $this->form_validation->error_array();
			} else {
				$data = array(
					'customer' => $this->input->post('customer'),
					'tanggal' => $this->input->post('tanggal'),
					'nomor_pesanan' => $this->input->post('nomorpocusts'),
					'status' => '1',
					'pajak_stat' =>$this->input->post('ppn_stat'),
					'ppn' => @$this->input->post('ppn_stat') == 1 ? $this->Setting_pajak_model->get()->value: 0
				);
				$inis = $this->Customer_model->get($this->input->post('customer'))->inisial;
				$romawi = array('', 'I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII');
				
				$wherec["EXTRACT(year FROM tanggal) ="] = date("Y");
				$wherec["pajak_stat"] = $this->input->post('ppn_stat');
				$jml = $this->Sales_contract_model->count_rows($wherec);
				$vari = "";
				if($this->input->post('ppn_stat') == 1){
					$vari = "-P";
				}
				$dk 	= sprintf("%03d", $jml+1);
				$seri 	= date("y").$dk."/DKJ/DO".$vari."/".date("Y");
				$nosc	= date("y").$dk."/DKJ-".$inis."/".$romawi[date("n")].$vari."/".date("Y");
				$data["nomor_do"] = $seri;
				$data["nomor_sc"] = $nosc;
				if($this->Sales_contract_model->insert($data)){
					$idinsert 		= $this->db->insert_id();
					$i=0;
					foreach($this->input->post('barang') as $b){
						$data2 = array(
							'parent' => $idinsert,
							'barang' => $this->input->post('barang')[$i],
							'harga_dasar' => str_replace(",",".",str_replace(".","",$this->input->post('harga_kg')[$i])),
							'panjang' => str_replace(",",".",str_replace(".","",$this->input->post('panjang')[$i])),
							'finishing' => $this->input->post('finishing')[$i],
							'harga_finishing' => 0,
							'ppn_status' => '1',
							'qty_order' => str_replace(",",".",str_replace(".","",$this->input->post('pc')[$i])),
						);
						$this->Sales_contract_detail_model->insert($data2);
						$i++;
					}
					$res['url']     = site_url('Sales_contract/cetak/'.$idinsert);
					$res['success'] = true;
					$res['message'] = 'Simpan berhasil';
				}
				
			}
		}else{
				$res['url']     = site_url('Sales_contract/cetak/'.$this->input->post('id'));
				$res['success'] = true;
				$res['message'] = '';
			}
		$this->output->set_content_type('application/json')->set_output(json_encode($res));
	}
	public function cetak($id){
		$data = array();
		$data["sc"] = $this->Sales_contract_model->with_customer()->get($id);
		$data["detail"] = $this->Sales_contract_detail_model->with_parent()->with_barang()->with_finishing()->get_all(array("parent"=>$id));
		$data["pajak"] = $this->Setting_pajak_model->get();
		$this->load->view('sales_contract/cetak', $data);
		// var_dump($data["pajak"]->value);
	}
	public function konfirm($id){
		$success = false;
		$data = array(
			'status' => '2',
			'tanggal_disetujui' => date("Y-m-d h:i:s"),
		);
		if($this->Sales_contract_model->update($data, $id)){
			$success = true;
		}
		echo json_encode($success);
	}
	public function form_action_po(){
		if (empty($this->input->post('id'))) {
			$data = array(
				'parent' => $this->input->post('id_sc'),
				'nomor_transaksi' => $this->input->post('nomorpo'),
				'tanggal' => date("Y-m-d"),
				'up' => $this->input->post('up'),
				'telepon' => $this->input->post('telepon'),
			);
			if($this->Purchase_order_model->insert($data)){
				$data2 = array(
					'status' => '3',
					'supplier' => $this->input->post('supplier')
				);
				if($this->Sales_contract_model->update($data2, $this->input->post('id_sc'))){
					$success = true;
				}
				$res['url']     = site_url('Sales_contract/cetak_PO/'.$this->input->post('id_sc'));
				$res['success'] = true;
				$res['message'] = 'Simpan berhasil';
				
			}
		}else{
			$res['url']     = site_url('Sales_contract/cetak_PO/'.$this->input->post('id_sc'));
			$res['success'] = true;
			$res['message'] = '';
		}
		
		$this->output->set_content_type('application/json')->set_output(json_encode($res));
	}
	public function cetak_PO($id){
		$data = array();
		$data["po"] = $this->Purchase_order_model->with_parent()->get(array("parent"=>$id));
		$sup = $data["po"]->parent->supplier;
		$data["supplier"] = $this->Supplier_model->get($sup);
		$data["detail"] = $this->Sales_contract_detail_model->with_parent()->with_barang()->with_finishing()->get_all(array("parent"=>$id));
		$this->load->view('sales_contract/cetak_po', $data);
		
	}
	public function cetak_sj($id){
		$data = array();
		$data["sc"] = $this->Sales_contract_model->with_customer()->get($id);
		$data["detail"] = $this->Sales_contract_detail_model->with_parent()->with_barang()->with_finishing()->get_all(array("parent"=>$id));
		$this->load->view('sales_contract/cetak_sj', $data);
		
	}
}
?>
	