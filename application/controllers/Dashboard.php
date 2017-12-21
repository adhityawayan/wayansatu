<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Menu_model');
		$this->load->model('User_privilages_model');
	}
	
	public function index()
	{
		$data["initial"] = "dashboard";
		// $uniqParent = $this->Menu_model->getParent();
		$data["menu"] = $this->Menu_model->getParent();
		$this->template('dashboard/dashboard', $data);
		// var_dump($data["menu"]);
	}
	public function route($id){
		$this->load->library('session');
		$ses = array(
			'parentmenu' => $id
		);
		$this->load->library('session');
		$this->session->set_userdata($ses);
		$target = $this->Menu_model->get(array("parent" =>$id))->url;
		
		$this->load->helper('url');
		
		redirect($target);
		// var_dump($target);
	}
}
?>
