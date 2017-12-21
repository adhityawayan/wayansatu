 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting_perusahaan extends MY_Controller {
	function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Setting_perusahaan_model');
        $this->load->model('Perusahaan_bank_model');
        $this->load->model('Perusahaan_bank_model');
    }
	public function form($id=1){
		$data["caption"] 	= "Form Setting Perusahaan";
		$data["breadcrumb"]	= array(
								array(
									"label" => "Setting Perusahaan",
									"url" => ""
								)
							);
		if (empty($id)) {
            $data['row']       = null;
            $data['bank']       = null;
        }else{
            $row 		= $this->Setting_perusahaan_model->get($id);
            $bank 		= $this->Perusahaan_bank_model->get_all();

            if ($row) {
                $data['row']       = $row;
                $data['bank']       = $bank;
                $data['id']        = $row->id;
            } else {
                show_error('Data not found');
            }
        }
		
		$data["action"] 	= "Setting_perusahaan/form_action";
		$data["action_back"] 	= "";
		
		$this->template('setting_perusahaan/form', $data);
	}
	public function form_action(){
		$res['success'] = false;
        $res['message'] = 'Simpan gagal';
		$id = $this->input->post('id');
		
		//validasi set_rules([name],[label],[validasi])
		$this->form_validation->set_rules('alamat','Alamat','trim|required');
        $this->form_validation->set_rules('telepon','Telepon','trim|required');
        $this->form_validation->set_rules('email','Email','valid_email');
		
		if ($this->form_validation->run() == FALSE) {
            $res['message'] = 'Lengkapi form dengan benar';
            $res['field_error'] = $this->form_validation->error_array();
        }else{
			$data = array(
				'alamat' => $this->input->post('alamat'),
				'telepon' => $this->input->post('telepon'),
				'fax' => $this->input->post('fax'),
				'email' => $this->input->post('email')
            );
			if (empty($this->input->post('id'))) {
                if($this->Setting_perusahaan_model->insert($data)){
                    $res['url']     = site_url('Setting_perusahaan/form');
                    $res['success'] = true;
                    $res['message'] = 'Simpan berhasil';
                }
            }else{//edit
				$row = $this->Setting_perusahaan_model->get($this->input->post('id'));
				
				if ($row) {
					if($this->Setting_perusahaan_model->update($data,$this->input->post('id'))){
						$res['url']     = site_url('Setting_perusahaan/form');
                        $res['success'] = true;
                        $res['message'] = 'Simpan berhasil';
					}
				}else{
					$res['success'] = false;
					$res['message'] = 'Data not found';
				}
			}
			$i = 0;
			foreach($this->input->post('id_det') as $id_det){
				$data_detail = array(
					'nama_akun' => $this->input->post('nama_akun')[$i],
					'bank' => $this->input->post('bank')[$i],
					'nomor_akun' => $this->input->post('nomor_akun')[$i],
					'transaksi' => $this->input->post('transaksi')[$i],
					'pajak_stat' => $this->input->post('ppn')[$i]
				);
				$i++;
				if (empty($id_det)) {
					if($this->Perusahaan_bank_model->insert($data_detail)){
						$res['url']     = site_url('Setting_perusahaan/form');
						$res['success'] = true;
						$res['message'] = 'Simpan berhasil';
					}
				}else{//edit
					$row = $this->Perusahaan_bank_model->get($id_det);
					
					if ($row) {
						if($this->Perusahaan_bank_model->update($data_detail,$id_det)){
							$res['url']     = site_url('Setting_perusahaan/form');
							$res['success'] = true;
							$res['message'] = 'Simpan berhasil';
						}
					}else{
						$res['success'] = false;
						$res['message'] = 'Data not found';
					}
				}
			}
		}
		$this->output->set_content_type('application/json')->set_output(json_encode($res));
	}
}
?>