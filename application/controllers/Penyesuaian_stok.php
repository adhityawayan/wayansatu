 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyesuaian_stok extends MY_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Penyesuaian_stok_model');
        $this->load->model('Penyesuaian_stok_detail_model');
        $this->load->model('Barang_model');
        $this->load->model('Stok_barang_model');
        $this->load->model('Finishing_barang_model');
    }
	public function index()
	{
		$data["caption"] 	= "Penyesuaian Stok";
		$data["breadcrumb"]	= array(
								array(
									"label" => "Penyesuaian Stok",
									"url" => ""
								)
							);
							
		$this->template('penyesuaian_stok/list', $data);
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

        $t              = $this->Penyesuaian_stok_model->get_limit_data($iDisplayStart, $iDisplayLength);
        $iTotalRecords  = $t['total_rows'];
        $get_data       = $t['get_db'];
		
		$records["data"] = array();

        $i=$iDisplayStart+1;
        if ($get_data) {
            foreach ($get_data as $d) {
                $checkbok= '<input type="checkbox" name="id[]" value="'.$d->id.'">';
                // $edit    = anchor(site_url('Barang_masuk/form/'.$d->id),'<i class="fa fa-pencil-square-o fa-lg"></i>',array('target'=>'blank','title'=>'edit','class'=>'btn btn-icon-only blue'));
                $file    = anchor(site_url('Penyesuaian_stok/cetak/'.$d->id),'<i class="fa fa-file fa-lg"></i>',array('target'=>'blank','title'=>'edit','class'=>'btn btn-icon-only red'));
                // $delete  = '<button class="btn btn-icon-only red delete" title="delete" data-title="'.$d->{$this->Barang_masuk_model->label}.'" data-url="'.site_url('Barang_masuk/delete/'.$d->id).'"><i class="fa fa-trash fa-lg"></i></button>';

                $records["data"][] = array(
                    $checkbok,
                
					$d->nomor_transaksi, 
					$d->tanggal,
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
	public function form($id = null){
		$data["caption"] 	= "Form Penyesuaian Stok";
		$data["breadcrumb"]	= array(
								array(
									"label" => "Penyesuaian Stok",
									"url" => "Penyesuaian_stok"
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
            $row = $this->Penyesuaian_stok_model->get($id);

            if ($row) {
                $data['row']       = $row;
                $data['id']        = $row->id;
            } else {
                show_error('Data not found');
            }
        }					
		$data["action"] 	= "Penyesuaian_stok/formAction";
		$this->template('penyesuaian_stok/form', $data);
	}
	public function formAction(){
		$res['success'] = false;
        $res['message'] = 'Simpan gagal';
        
        $this->form_validation->set_rules('tanggal','Section','trim|required');
		
		if ($this->form_validation->run() == FALSE) {
            $res['message'] = 'Lengkapi form dengan benar';
            $res['field_error'] = $this->form_validation->error_array();
        }else {
			$data = array(
				'tanggal' => $this->input->post('tanggal'),
				'catatan' => $this->input->post('catatan')
			);
			if (empty($this->input->post('id'))) {
				$jml = $this->Penyesuaian_stok_model->count_rows("EXTRACT(year FROM tanggal) = ".date("Y"));
				$dk 	= sprintf("%03d", $jml+1);
				$seri 	= date("y").$dk."/DKJ/PS/".date("Y");
				$data["nomor_transaksi"] = $seri;
				if($this->Penyesuaian_stok_model->insert($data)){
					$idinsert 		= $this->db->insert_id();
					$i=0;
					foreach($this->input->post('barang') as $b){
						$data2 = array(
							'parent' => $idinsert,
							'barang' => $this->input->post('barang')[$i],
							'finish' => $this->input->post('finishing')[$i],
							'panjang' => $this->input->post('panjang')[$i],
							'stok_sebelum' => $this->input->post('stok_sebelum')[$i],
							'stok_koreksi' => $this->input->post('stok_koreksi')[$i],
							'catatan' => $this->input->post('catatan_det')[$i]
						);
						if($this->Penyesuaian_stok_detail_model->insert($data2)){
							$whereinv = array(
								'barang' => $this->input->post('barang')[$i],
								'finish' => $this->input->post('finishing')[$i],
								'panjang' => $this->input->post('panjang')[$i],
							);
							$inventory = $this->Stok_barang_model->get($whereinv);
							
							if($inventory){
								$datainv["stok"] = $this->input->post('stok_koreksi')[$i];
								$this->Stok_barang_model->update($datainv, $inventory->id);
							}else{
								$datainv = array(
									'barang' => $this->input->post('barang')[$i],
									'finish' => $this->input->post('finishing')[$i],
									'panjang' => $this->input->post('panjang')[$i],
									'stok' => $this->input->post('stok_koreksi')[$i]
								);
								$this->Stok_barang_model->insert($datainv);
							}
						}
					}
					$res['url']     = site_url('Penyesuaian_stok/cetak/'.$idinsert);
                    $res['success'] = true;
                    $res['message'] = 'Simpan berhasil';
				}
			}
		}
		$this->output->set_content_type('application/json')->set_output(json_encode($res));
	}
	public function cetak($id){
		$data["penyesuaian_stok"] = $this->Penyesuaian_stok_model->get($id);
		$data["penyesuaian_stok_detail"] = $this->Penyesuaian_stok_detail_model->with_barang()->with_finishing()->get_all(array("parent"=>$id));
		$this->load->view('penyesuaian_stok/cetak', $data);
	}
}
?>