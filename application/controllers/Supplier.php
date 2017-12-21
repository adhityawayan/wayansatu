 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends MY_Controller {
	function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Supplier_model');
    }
	public function index(){
		$data["caption"] 	= "Supplier";
		$data["breadcrumb"]	= array(
								array(
									"label" => "Supplier",
									"url" => ""
								)
							);
							
		$this->template('supplier/list', $data);
	}
	public function getDatatable(){
		$customActionName	= $this->input->post('customActionName');
        $records         	= array();

        if ($customActionName == "delete") {
            $records=$this-> delete_checked();
        }
		
		$iDisplayLength = ($this->input->get_post('length')) ? $this->input->get_post('length') : 10 ;
        $iDisplayStart  = ($this->input->get_post('start')) ? $this->input->get_post('start') : 0 ;
        $sEcho          = ($this->input->get_post('draw')) ? $this->input->get_post('draw') : 1 ;
		
		$t              = $this->Supplier_model->get_limit_data($iDisplayStart, $iDisplayLength);
        $iTotalRecords  = $t['total_rows'];
        $get_data       = $t['get_db'];
		
		$records["data"] = array();
		
		$i	=	$iDisplayStart+1;
		
		if ($get_data) {
			foreach ($get_data as $d) {
				$checkbok= '<input type="checkbox" name="id[]" value="'.$d->id.'">';
				$edit    = anchor(site_url('Supplier/form/'.$d->id),'<i class="fa fa-pencil-square-o fa-lg"></i>',array('title'=>'edit','class'=>'btn btn-icon-only blue'));
				$delete  = '<button class="btn btn-icon-only red delete" title="delete" data-title="'.$d->{$this->Supplier_model->label}.'" data-url="'.site_url('Supplier/delete/'.$d->id).'"><i class="fa fa-trash fa-lg"></i></button>';
				
				$records["data"][] = array(
                    $checkbok,
                
					$d->nama, 
					$d->alamat, 
					$d->telepon,
					$d->email, 
					$d->contact_person, 
                    $edit.$delete
                );
			}
		}
		
		$records["draw"] = $sEcho;
        $records["recordsTotal"] = $iTotalRecords;
        $records["recordsFiltered"] = $iTotalRecords;

        $this->output->set_content_type('application/json')->set_output(json_encode($records));
	}
	
	public function form($id=null){
		$data["caption"] 	= "Form Suplier";
		$data["breadcrumb"]	= array(
								array(
									"label" => "Supplier",
									"url" => "Supplier"
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
            $row = $this->Supplier_model->get($id);

            if ($row) {
                $data['row']       = $row;
                $data['id']        = $row->id;
            } else {
                show_error('Data not found');
            }
        }
		
		$data["action"] 	= "Supplier/form_action";
		$data["action_back"] 	= "Supplier";
		
		$this->template('supplier/form', $data);
	}
	public function form_action()
    {
        $res['success'] = false;
        $res['message'] = 'Simpan gagal';
        
        $this->form_validation->set_rules('nama','Nama Supplier','trim|required');
        $this->form_validation->set_rules('alamat','Alamat','trim|required');
        $this->form_validation->set_rules('telepon','Telepon','trim|required');
        $this->form_validation->set_rules('email','Email','valid_email');

        if ($this->form_validation->run() == FALSE) {
            $res['message'] = 'Lengkapi form dengan benar';
            $res['field_error'] = $this->form_validation->error_array();
        } else {
            $data = array(
				'nama' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'telepon' => $this->input->post('telepon'),
				'email' => $this->input->post('email'),
				'contact_person' => $this->input->post('contact_person'),
			);
            if (empty($this->input->post('id'))) {
                if($this->Supplier_model->insert($data)){
                    $res['url']     = site_url('Supplier');
                    $res['success'] = true;
                    $res['message'] = 'Simpan berhasil';
                }
            }else{
                $row = $this->Supplier_model->get($this->input->post('id'));

                if ($row) {
                    if($this->Supplier_model->update($data,$this->input->post('id'))){
                        $res['url']     = site_url('Supplier');
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
        $row = $this->Supplier_model->get($id);

        if ($row) {
            $this->Supplier_model->delete($id);
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
            $row = $this->Supplier_model->get($id);

            if ($row) {
                $this->Supplier_model->delete($id);
            }
        }
        $result["customActionStatus"]="OK";
        $result["customActionMessage"]="Delete Record Success";
        return $result;
    }
}
?>