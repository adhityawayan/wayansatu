 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tipe_barang extends MY_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('Tipe_barang_model');
        $this->load->library('form_validation');
    }
	public function index()
	{
		$data["caption"] 	= "Tipe Barang";
		$data["breadcrumb"]	= array(
								array(
									"label" => "Tipe Barang",
									"url" => ""
								)
							);
							
		$this->template('type_barang/list', $data);
	}
	public function form($id=null)
	{
		$data["caption"] 	= "Form Tipe Barang";
		$data["breadcrumb"]	= array(
								array(
									"label" => "Tipe Barang",
									"url" => "Tipe_barang"
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
            $row = $this->Tipe_barang_model->get($id);

            if ($row) {
                $data['row']       = $row;
                $data['id']        = $row->id;
            } else {
                show_error('Data not found');
            }
        }
							
		$data["action"] 	= "Tipe_barang/form_action";
		$data["action_back"] 	= "Tipe_barang";
		$this->template('type_barang/form', $data);
	}
	public function getDatatable()
    {
        $customActionName=$this->input->post('customActionName');
        $records         = array();

        if ($customActionName == "delete") {
            $records=$this-> delete_checked();
        }

        $iDisplayLength = ($this->input->get_post('length')) ? $this->input->get_post('length') : 10 ;
        $iDisplayStart  = ($this->input->get_post('start')) ? $this->input->get_post('start') : 0 ;
        $sEcho          = ($this->input->get_post('draw')) ? $this->input->get_post('draw') : 1 ;

        $t              = $this->Tipe_barang_model->get_limit_data($iDisplayStart, $iDisplayLength);
        $iTotalRecords  = $t['total_rows'];
        $get_data       = $t['get_db'];

        $records["data"] = array();

        $i=$iDisplayStart+1;
        if ($get_data) {
            foreach ($get_data as $d) {
                $checkbok= '<input type="checkbox" name="id[]" value="'.$d->id.'">';
                $edit    = anchor(site_url('Tipe_barang/form/'.$d->id),'<i class="fa fa-pencil-square-o fa-lg"></i>',array('title'=>'edit','class'=>'btn btn-icon-only blue'));
                $delete  = '<button class="btn btn-icon-only red delete" title="delete" data-title="'.$d->{$this->Tipe_barang_model->label}.'" data-url="'.site_url('Tipe_barang/delete/'.$d->id).'"><i class="fa fa-trash fa-lg"></i></button>';

                $records["data"][] = array(
                    $checkbok,
                
					$d->tipe_barang, 
                    $edit.$delete
                );
            }
        }
        $records["draw"] = $sEcho;
        $records["recordsTotal"] = $iTotalRecords;
        $records["recordsFiltered"] = $iTotalRecords;

        $this->output->set_content_type('application/json')->set_output(json_encode($records));
    }
	public function form_action()
    {
        $res['success'] = false;
        $res['message'] = 'Simpan gagal';
        
        $this->form_validation->set_rules('tipe_barang','Tipe barang','trim|required');

        if ($this->form_validation->run() == FALSE) {
            $res['message'] = 'Lengkapi form dengan benar';
            $res['field_error'] = $this->form_validation->error_array();
        } else {
            $data = array(
                        'tipe_barang' => $this->input->post('tipe_barang'),
                    );
            if (empty($this->input->post('id'))) {
                if($this->Tipe_barang_model->insert($data)){
                    $res['url']     = site_url('Tipe_barang');
                    $res['success'] = true;
                    $res['message'] = 'Simpan berhasil';
                }
            }else{
                $row = $this->Tipe_barang_model->get($this->input->post('id'));

                if ($row) {
                    if($this->Tipe_barang_model->update($data,$this->input->post('id'))){
                        $res['url']     = site_url('Tipe_barang');
                        $res['success'] = true;
                        $res['message'] = 'Simpan berhasil';
                    }
                } else {
                    $res['success'] = false;
                    $res['message'] = 'Data not found';
                }
            }
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($res));
    }
	public function delete($id)
    {
        $res['success'] = false;
        $res['message'] = 'Hapus gagal';
        $row = $this->Tipe_barang_model->get($id);

        if ($row) {
            $this->Tipe_barang_model->delete($id);
            $res['success'] = true;
            $res['message'] = 'Hapus berhasil';
        } else {
            $res['message'] = 'Data tidak ditemukan';
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($res));
    }

    public function delete_checked()
    {
        $id_array=$this->input->post('id[]');
        foreach ($id_array as $id) {
            $row = $this->Tipe_barang_model->get($id);

            if ($row) {
                $this->Tipe_barang_model->delete($id);
            }
        }
        $result["customActionStatus"]="OK";
        $result["customActionMessage"]="Delete Record Success";
        return $result;
    }
}