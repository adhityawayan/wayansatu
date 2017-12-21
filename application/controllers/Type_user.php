 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Type_user extends MY_Controller {
	function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
    }
	public function index(){
		$data["caption"] 	= "User Tipe";
		$data["breadcrumb"]	= array(
								array(
									"label" => "User Tipe",
									"url" => ""
								)
							);
							
		$this->template('type_user/list', $data);
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
		
		$t              = $this->Type_user_model->get_limit_data($iDisplayStart, $iDisplayLength);
        $iTotalRecords  = $t['total_rows'];
        $get_data       = $t['get_db'];
		
		$records["data"] = array();
		
		$i	=	$iDisplayStart+1;
		
		if ($get_data) {
			foreach ($get_data as $d) {
				$checkbok= '<input type="checkbox" name="id[]" value="'.$d->id.'">';
				$user    = anchor(site_url('User_privilages/form/'.$d->id),'<i class="fa fa-file fa-lg"></i>',array('title'=>'Hak Akses','class'=>'btn btn-icon-only yellow'));
				$edit    = anchor(site_url('Type_user/form/'.$d->id),'<i class="fa fa-pencil-square-o fa-lg"></i>',array('title'=>'edit','class'=>'btn btn-icon-only blue'));
				$delete  = '<button class="btn btn-icon-only red delete" title="delete" data-title="'.$d->{$this->Type_user_model->label}.'" data-url="'.site_url('Type_user/delete/'.$d->id).'"><i class="fa fa-trash fa-lg"></i></button>';
				
				$records["data"][] = array(
                    $checkbok,
                
					$d->tipe_user, 
                    $user.$edit.$delete
                );
			}
		}
		
		$records["draw"] = $sEcho;
        $records["recordsTotal"] = $iTotalRecords;
        $records["recordsFiltered"] = $iTotalRecords;

        $this->output->set_content_type('application/json')->set_output(json_encode($records));
	}
	
	public function form($id=null){
		$data["caption"] 	= "Form Tipe User";
		$data["breadcrumb"]	= array(
								array(
									"label" => "Tipe User",
									"url" => "Type_user"
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
            $row = $this->Type_user_model->get($id);

            if ($row) {
                $data['row']       = $row;
                $data['id']        = $row->id;
            } else {
                show_error('Data not found');
            }
        }
		
		$data["action"] 	= "Type_user/form_action";
		$data["action_back"] 	= "Type_user";
		
		$this->template('type_user/form', $data);
	}
	
	public function form_action(){
		$res['success'] = false;
        $res['message'] = 'Simpan gagal';
		
		//validasi set_rules([name],[label],[validasi])
		$this->form_validation->set_rules('tipe_user','Tipe user','trim|required');
		
		if ($this->form_validation->run() == FALSE) {
            $res['message'] = 'Lengkapi form dengan benar';
            $res['field_error'] = $this->form_validation->error_array();
        }else{
			$data = array(
				'tipe_user' => $this->input->post('tipe_user'),
			);
			
			if (empty($this->input->post('id'))) {//create
				if($this->Type_user_model->insert($data)){
                    $res['url']     = site_url('Type_user');
                    $res['success'] = true;
                    $res['message'] = 'Simpan berhasil';
                }
			}else{//edit
				$row = $this->Type_user_model->get($this->input->post('id'));
				
				if ($row) {
					if($this->Type_user_model->update($data,$this->input->post('id'))){
						$res['url']     = site_url('Type_user');
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
	public function delete($id)
    {
        $res['success'] = false;
        $res['message'] = 'Hapus gagal';
        $row = $this->Type_user_model->get($id);

        if ($row) {
            $this->Type_user_model->delete($id);
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
            $row = $this->Type_user_model->get($id);

            if ($row) {
                $this->Type_user_model->delete($id);
            }
        }
        $result["customActionStatus"]="OK";
        $result["customActionMessage"]="Delete Record Success";
        return $result;
    }
}
?>