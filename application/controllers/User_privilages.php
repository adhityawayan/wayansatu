  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_privilages extends MY_Controller {
	function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('User_privilages_model');
        $this->load->model('Menu_model');
    }
	public function form($id = null){
		$data["caption"] 	= "Form Hak Akses User";
		$data["breadcrumb"]	= array(
								array(
									"label" => "User Type",
									"url" => "Type_user"
								),
								array(
									"label" => "Hak Akses User",
									"url" => ""
								)
							);
		if (empty($id)) {
            $data['row']       = null;
            $data['id']        = '';
        }else{
			$row = $this->Menu_model->get_all(array("parent"=> null));
			if($row){
				$data['parent'] = $row;
				foreach($data['parent'] as $parent){
					$data['child'][$parent->id] = $this->Menu_model->getChild($parent->id, $id);
				}
				$data['type_user'] = $this->type_user_model->get($id);
			} else {
                show_error('Data not found');
            }
			
		}
		$data["action"] 	= "User_privilages/form_action";
		$data["action_back"] 	= "Type_user";
		$this->template('user_privilages/form', $data);
		// var_dump($data['child'][1]);
	}
	public function form_action()
	{
		// var_dump($this->input->post());
		$res['success'] = false;
        $res['message'] = 'Simpan gagal';
		$i = 0;
		
		foreach($this->input->post('menu') as $id){
			$data = array(
				'tipe_user' => $this->input->post('id_user'),
				'menu' => $this->input->post('menu')[$i],
				'create' => @$this->input->post('create')[$i] ? $this->input->post('create')[$i] : 0,
				'read' => @$this->input->post('read')[$i] ? $this->input->post('read')[$i] : 0,
				'update' => @$this->input->post('update')[$i] ? $this->input->post('update')[$i] : 0,
				'delete' => @$this->input->post('delete')[$i] ? $this->input->post('delete')[$i] : 0
            );
			
			if (empty($this->input->post('id')[$i])) {
                if($this->User_privilages_model->insert($data)){
                    $res['url']     = site_url('User_privilages/form/'.$this->input->post('id_user'));
                    $res['success'] = true;
                    $res['message'] = 'Simpan berhasil';
                }
            }else{//edit
				$row = $this->User_privilages_model->get($this->input->post('id')[$i]);
				
				if ($row) {
					if($this->User_privilages_model->update($data,$this->input->post('id')[$i])){
						$res['url']     = site_url('User_privilages/form/'.$this->input->post('id_user'));
                        $res['success'] = true;
                        $res['message'] = 'Simpan berhasil';
					}
				}else{
					$res['success'] = false;
					$res['message'] = 'Data not found';
				}
			}
			$i++;
		}
		// var_dump($res);
		$this->output->set_content_type('application/json')->set_output(json_encode($res));
	}
}
?>