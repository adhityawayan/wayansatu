<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
        $this->load->model('S_user_model', 'user');
        $this->load->library('form_validation');
	}

	public function index(){
		$this->login();
	}
	public function login(){
		$user_id = $this->session->userdata('authorization');
		if($user_id){
			redirect('Dashboard','refresh');
		}else{
			$this->load->view('auth/login');
		}
	}
	public function login_action()
	{
		$res['success'] = false;
		$res['message'] = 'Maaf, telah terjadi kesalahan.';

		$this->load->library('form_validation');
		$this->form_validation->set_rules('login_username', 'Username', 'trim|required');
		$this->form_validation->set_rules('login_password', 'Password', 'trim|required');

		if ($this->form_validation->run() == TRUE) {
			$w = array('username' => $this->input->post('login_username') );
			if ($user = $this->user->get($w)) {
				if ($this->user->check_password($this->input->post('login_password'), $user->password) ) {
					if($user->deleted_at != 'NULL'){
						$this->load->library('session');
						$ses = array(
							'authorization' => $user->id
						);
						$this->load->library('session');
						$this->session->set_userdata($ses);


						$res['success'] 	= true;
						$res['message'] 	= 'Login success';
						$res['url']     	= site_url('Dashboard');
					}
				} else {
					$res['success'] 	= false;
			    		$res['message'] 	= 'Username dan Password tidak sesuai';
				}

			} else {
				$res['success'] 	= false;
			    	$res['message'] 	= 'Username tidak ditemukan';
			}

		} else {
		    $res['field_error'] = $this->form_validation->error_array();
		    $res['message'] = 'Lengkapi form dengan benar';
		}

		$this->output->set_content_type('application/json')->set_output(json_encode($res));
	}
	// log the user out
	public function logout()
	{
		$this->data['title'] = "Logout";

		//session
		$this->session->sess_destroy();

		redirect('auth/login', 'refresh');
	}
}
