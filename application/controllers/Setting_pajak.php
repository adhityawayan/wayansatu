 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting_pajak extends MY_Controller {
	function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Setting_pajak_model');
    }
	public function form($id=1){
		$data["caption"] 	= "Form Setting PPN";
		$data["breadcrumb"]	= array(
								array(
									"label" => "Setting PPN",
									"url" => ""
								)
							);
		if (empty($id)) {
            $data['row']       = null;
            $data['id']        = '';
        }else{
            $row = $this->Setting_pajak_model->get($id);

            if ($row) {
                $data['row']       = $row;
                $data['id']        = $row->id;
            } else {
                show_error('Data not found');
            }
        }
		
		$data["action"] 	= "Setting_pajak/form_action";
		$data["action_back"] 	= "";
		
		$this->template('setting_pajak/form', $data);
	}
	public function form_action(){
		$res['success'] = false;
        $res['message'] = 'Simpan gagal';
		
		//validasi set_rules([name],[label],[validasi])
		$this->form_validation->set_rules('ppn','PPN','trim|required|numeric');
		
		if ($this->form_validation->run() == FALSE) {
            $res['message'] = 'Lengkapi form dengan benar';
            $res['field_error'] = $this->form_validation->error_array();
        }else{
			$data = array(
				'value' => $this->input->post('ppn'),
			);
			
			if (empty($this->input->post('id'))) {//create
				if($this->Setting_pajak_model->insert($data)){
                    $res['url']     = site_url('Setting_pajak/form');
                    $res['success'] = true;
                    $res['message'] = 'Simpan berhasil';
                }
			}else{//edit
				$row = $this->Setting_pajak_model->get($this->input->post('id'));
				
				if ($row) {
					if($this->Setting_pajak_model->update($data,$this->input->post('id'))){
						$res['url']     = site_url('Setting_pajak/form');
                        $res['success'] = true;
                        $res['message'] = 'Simpan berhasil';
					}
				}else{
					$res['success'] = false;
					$res['message'] = 'Data not found';
				}
			}
		}
		$this->output->set_content_type('application/json')->set_output(json_encode($res));
	}
	public function getPajak(){
		$pajak = $this->Setting_pajak_model->get();
		echo json_encode($pajak);
	}
}
?>