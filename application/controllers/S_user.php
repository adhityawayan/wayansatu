 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class S_user extends MY_Controller {
	function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
    }
	public function index(){
		$data["caption"] 	= "User";
		$data["breadcrumb"]	= array(
								array(
									"label" => "User",
									"url" => ""
								)
							);
							
		$this->template('user/list', $data);
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
		
		$t              = $this->user->get_limit_data($iDisplayStart, $iDisplayLength);
        $iTotalRecords  = $t['total_rows'];
        $get_data       = $t['get_db'];
		
		$records["data"] = array();
		
		$i	=	$iDisplayStart+1;
		
		if ($get_data) {
			foreach ($get_data as $d) {
				$checkbok= '<input type="checkbox" name="id[]" value="'.$d->id.'">';
				$edit    = anchor(site_url('S_user/form/'.$d->id),'<i class="fa fa-pencil-square-o fa-lg"></i>',array('title'=>'edit','class'=>'btn btn-icon-only blue'));
				$delete  = '<button class="btn btn-icon-only red delete" title="delete" data-title="'.$d->{$this->user->label}.'" data-url="'.site_url('S_user/delete/'.$d->id).'"><i class="fa fa-trash fa-lg"></i></button>';
				
				$records["data"][] = array(
                    $checkbok,
                
					@$d->tipe->{$this->Type_user_model->label},
					$d->nama,
					$d->telepon,
					$d->username,
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
		$data["caption"] 	= "Form User";
		$data["breadcrumb"]	= array(
								array(
									"label" => "User",
									"url" => "S_user"
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
            $row = $this->user->get($id);

            if ($row) {
                $data['row']       = $row;
                $data['id']        = $row->id;
            } else {
                show_error('Data not found');
            }
        }
		
		$data["action"] 	= "S_user/form_action";
		$data["action_back"] 	= "S_user";
		
		$this->template('user/form', $data);
	}
	public function form_action(){
		$res['success'] = false;
        $res['message'] = 'Simpan gagal';
		$id = $this->input->post('id');
		
		//validasi set_rules([name],[label],[validasi])
		$this->form_validation->set_rules('tipe','Tipe user','trim|required');
        $this->form_validation->set_rules('nama','Nama','trim|required');
        $this->form_validation->set_rules('username','Username','trim|required');
		if ($this->input->post('password') != "" || empty($id)){
          $this->form_validation->set_rules('password','password','trim|required');
        }
		
		if ($this->form_validation->run() == FALSE) {
            $res['message'] = 'Lengkapi form dengan benar';
            $res['field_error'] = $this->form_validation->error_array();
        }else{
			$data = array(
				'tipe' => $this->input->post('tipe'),
				'nama' => $this->input->post('nama'),
				'telepon' => $this->input->post('telepon'),
				'username' => $this->input->post('username')
            );
			if ($this->input->post('password') != "") {
				$data['password'] = password_hash($this->input->post('password',TRUE), PASSWORD_DEFAULT);
			}
			if (empty($this->input->post('id'))) {
                if($this->user->insert($data)){
                    $res['url']     = site_url('S_user');
                    $res['success'] = true;
                    $res['message'] = 'Simpan berhasil';
                }
            }else{//edit
				$row = $this->user->get($this->input->post('id'));
				
				if ($row) {
					if($this->user->update($data,$this->input->post('id'))){
						$res['url']     = site_url('S_user');
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
        $row = $this->user->get($id);

        if ($row) {
            $this->user->delete($id);
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
            $row = $this->user->get($id);

            if ($row) {
                $this->user->delete($id);
            }
        }
        $result["customActionStatus"]="OK";
        $result["customActionMessage"]="Delete Record Success";
        return $result;
    }
	public function update(){
		$this->user->update();
	}
}
?>