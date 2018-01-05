 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_masuk extends MY_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Barang_masuk_model');
        $this->load->model('Barang_masuk_detail_model');
        $this->load->model('Supplier_model');
        $this->load->model('Stok_barang_model');
        $this->load->model('Finishing_barang_model');
    }
	public function index()
	{
		$data["caption"] 	= "Barang Masuk";
		$data["breadcrumb"]	= array(
								array(
									"label" => "Barang Masuk",
									"url" => ""
								)
							);
							
		$this->template('barang_masuk/list', $data);
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

        $t              = $this->Barang_masuk_model->get_limit_data($iDisplayStart, $iDisplayLength);
        $iTotalRecords  = $t['total_rows'];
        $get_data       = $t['get_db'];

        $records["data"] = array();

        $i=$iDisplayStart+1;
        if ($get_data) {
            foreach ($get_data as $d) {
                $checkbok= '<input type="checkbox" name="id[]" value="'.$d->id.'">';
                $edit    = anchor(site_url('Barang_masuk/form/'.$d->id),'<i class="fa fa-pencil-square-o fa-lg"></i>',array('target'=>'blank','title'=>'edit','class'=>'btn btn-icon-only blue'));
                $file    = anchor(site_url('Barang_masuk/cetak/'.$d->id),'<i class="fa fa-file fa-lg"></i>',array('target'=>'blank','title'=>'cetak','class'=>'btn btn-icon-only red'));
                $delete  = '<button class="btn btn-icon-only red delete" title="delete" data-title="'.$d->{$this->Barang_masuk_model->label}.'" data-url="'.site_url('Barang_masuk/delete/'.$d->id).'"><i class="fa fa-trash fa-lg"></i></button>';

                $records["data"][] = array(
                    $checkbok,
                
					$d->nomor_transaksi, 
					@$d->supplier->{$this->Supplier_model->label}, 
					$newDate = date("d-m-Y", strtotime($d->tanggal)), 
					$d->nomor_surat_jalan, 
					$d->catatan,
                    $file
                );
            }
        }
        $records["draw"] = $sEcho;
        $records["recordsTotal"] = $iTotalRecords;
        $records["recordsFiltered"] = $iTotalRecords;

        $this->output->set_content_type('application/json')->set_output(json_encode($records));
	}
	public function form($id=null)
	{
		$data["caption"] 	= "Form Barang Masuk";
		$data["breadcrumb"]	= array(
								array(
									"label" => "Barang Masuk",
									"url" => "Barang_masuk"
								),
								array(
									"label" => "Form",
									"url" => ""
								)
							);
		if (empty($id)) {
            $data['row']       = null;
            $data['id']        = '';
        }else{
            $row = $this->Barang_masuk_model->get($id);

            if ($row) {
                $data['row']       = $row;
                $data['id']        = $row->id;
            } else {
                show_error('Data not found');
            }
        }					
		$data["action"] 	= "Barang_masuk/formAction";
		$this->template('barang_masuk/form', $data);
	}
	public function formAction(){
		$res['success'] = false;
        $res['message'] = 'Simpan gagal';
        
        $this->form_validation->set_rules('supplier','Supplier','trim|required');
        $this->form_validation->set_rules('tanggal','Tanggal','trim|required');
		
		
		if ($this->form_validation->run() == FALSE) {
            $res['message'] = 'Lengkapi form dengan benar';
            $res['field_error'] = $this->form_validation->error_array();
        }else {
			$data = array(
				//'nomor_transaksi' => $this->input->post('nomor_transaksi'),
				'supplier' => $this->input->post('supplier'),
				'tanggal' => $this->input->post('tanggal'),
				'nomor_surat_jalan' => $this->input->post('nomor_surat_jalan'),
				'catatan' => $this->input->post('catatan')
			);
			if (empty($this->input->post('id'))) {
				$jml = $this->Barang_masuk_model->count_rows("EXTRACT(year FROM tanggal) = ".date("Y"));
				$dk 	= sprintf("%03d", $jml+1);
				$seri 	= date("y").$dk."/DKJ/BM/".date("Y");
				$data["nomor_transaksi"] = $seri;
				if($this->Barang_masuk_model->insert($data)){
					$idinsert 		= $this->db->insert_id();
					$i=0;
					foreach($this->input->post('barang') as $b){
						$data2 = array(
							'parent' => $idinsert,
							'barang' => $this->input->post('barang')[$i],
							'finish' => @$this->input->post('finishing')[$i]==''? 0 : $this->input->post('finishing')[$i],
							'panjang' => str_replace(",",".",str_replace(".","",@$this->input->post('panjang')[$i]==''? 0 : $this->input->post('panjang')[$i])),
							'harga_beli' => str_replace(",",".",str_replace(".","",$this->input->post('harga_beli')[$i])),
							'harga_jual' => str_replace(",",".",str_replace(".","",$this->input->post('harga_jual')[$i])),
							'jumlah' => str_replace(",",".",str_replace(".","",$this->input->post('jumlah')[$i]))
						);
						if($this->Barang_masuk_detail_model->insert($data2)){
							if($this->input->post('finishing')[$i] != null){
								$whereinv = array(
									'barang' => $this->input->post('barang')[$i],
									'finish' => @$this->input->post('finishing')[$i]==''? 0 : $this->input->post('finishing')[$i],
									'panjang' => str_replace(",",".",str_replace(".","",@$this->input->post('panjang')[$i]==''? 0 : $this->input->post('panjang')[$i])),
								);
								$inventory = $this->Stok_barang_model->get($whereinv);
								if($inventory){//tambah stok
									$datainv["stok"] = $inventory->stok + str_replace(",",".",str_replace(".","",$this->input->post('jumlah')[$i]));
									$this->Stok_barang_model->update($datainv, $inventory->id);
								}else{
									$datainv = array(
										'barang' => $this->input->post('barang')[$i],
										'finish' => @$this->input->post('finishing')[$i]==''? 0 : $this->input->post('finishing')[$i],
										'panjang' => str_replace(",",".",str_replace(".","",@$this->input->post('panjang')[$i]==''? 0 : $this->input->post('panjang')[$i])),
										'harga' => str_replace(",",".",str_replace(".","",$this->input->post('harga_jual')[$i])),
										'stok' => str_replace(",",".",str_replace(".","",$this->input->post('jumlah')[$i]))
									);
									$this->Stok_barang_model->insert($datainv);
								}
								if($this->input->post('finishing')[$i]!=''){
								$finish = $this->Finishing_barang_model->get($this->input->post('finishing')[$i]);
								
								if(str_replace(",",".",str_replace(".","",$this->input->post('harga_jual')[$i])) > $finish->harga){
									$datafinish = array(
										"harga" =>str_replace(".","",$this->input->post('harga_jual')[$i])
									);
									
									$this->Finishing_barang_model->update($datafinish, $finish->id);
								}
								}
							}else{
								$inventory = $this->Stok_barang_model->get(array("barang"=> $this->input->post('barang')[$i]));
								if($inventory){
									$datainv["stok"] = $inventory->stok + str_replace(",",".",str_replace(".","",$this->input->post('jumlah')[$i]));
									$this->Stok_barang_model->update($datainv, $inventory->id);
								}else{
									$datainv = array(
										'barang' => $this->input->post('barang')[$i],
										'panjang'=>0,
										'finish'=>'0',
										'harga' => str_replace(",",".",str_replace(".","",$this->input->post('harga_jual')[$i])),
										'stok' => str_replace(",",".",str_replace(".","",$this->input->post('jumlah')[$i]))
									);
									$this->Stok_barang_model->insert($datainv);
								}
							}
						}
						$i++;
					}
					
					$res['url']     = site_url('Barang_masuk/cetak/'.$idinsert);
                    $res['success'] = true;
                    $res['message'] = 'Simpan berhasil';
				}
			}
		}
		$this->output->set_content_type('application/json')->set_output(json_encode($res));
	}
	public function cetak($id){
		$data["barang_masuk"] = $this->Barang_masuk_model->with_supplier()->get($id);
		$data["barang_detail"] = $this->Barang_masuk_detail_model->with_barang()->with_finishing()->get_all(array("parent"=>$id));
		$this->load->view('barang_masuk/cetak', $data);
	}
}
?>