 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan_bank extends MY_Controller {
	function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Perusahaan_bank_model');
    }
	public function delete($id)
    {
        $res['success'] = false;
        $res['message'] = 'Hapus gagal';
        $row = $this->Perusahaan_bank_model->get($id);

        if ($row) {
            $this->Perusahaan_bank_model->delete($id);
            $res['success'] = true;
            $res['message'] = 'Hapus berhasil';
        } else {
            $res['message'] = 'Data tidak ditemukan';
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($res));
    }
}
?>