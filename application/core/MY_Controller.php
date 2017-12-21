<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	public $data 	= array();
	public $res 	= array();
	public $jwt;


	protected $middlewares = array();
	public function __construct() {
		parent::__construct();
		$this->load->helper('jwt');
		$this->load->model('S_user_model', 'user');
		$this->load->model('Type_user_model');
		$this->load->model('Menu_model');
		$this->load->model('Stok_barang_model');
		date_default_timezone_set('Asia/Jakarta');
		$this->_run_middlewares();
	}
	public function template($view_file,$local_data = null){
		if ($local_data != null) {
            $this->data = array_merge($this->data, $local_data);
        }
        if ($view_file) {
            $this->data['page_content'] = $this->load->view($view_file,$this->data, TRUE);
        }
		
		$this->load->library('session');
		$this->data['notif'] = $this->Stok_barang_model->count_rows(array("stok <"=>0));
		$this->data['menu'] = $this->Menu_model->get_menuChild();
		$this->data['top_menu'] = $this->load->view('template/top_menu',$this->data, TRUE);
		$this->data['header_menu'] = $this->load->view('template/header_menu',$this->data, TRUE);
		$this->load->view( 'template/main',  $this->data);
		// var_dump($this->data['notif']);
	}
	protected function _run_middlewares(){
		$valid_auth = false;
		$without_login = array('auth');
		
        if (in_array($this->router->class, $without_login)) {
            $valid_auth = true;
        }
        else {
			$user_id = $this->session->userdata('authorization');
			if ($user_id) {
				if ($this->data['user'] = $this->user->with_tipe()->get($user_id)) {
					$valid_auth = true;
					$this->data['user']->logged_in = true;
				}else{
					show_error('Oooops! something wrong');
				}
			}

        }

		if (!$valid_auth) {
			if($this->input->is_ajax_request()){
				$response['success'] = false;
				$response['message'] = 'Unauthorized';
				$this->output->set_content_type('application/json')->set_output(json_encode($response));
			}else{
				redirect('Auth/login','refresh');
			}
		}
	}
	public function kekata($x) {
		$x = abs($x);
		$angka = array("", "satu", "dua", "tiga", "empat", "lima",
		"enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
		$temp = "";
		if ($x <12) {
			$temp = " ". $angka[$x];
		} else if ($x <20) {
			$temp = $this->kekata($x - 10). " belas";
		} else if ($x <100) {
			$temp = $this->kekata($x/10)." puluh". $this->kekata($x % 10);
		} else if ($x <200) {
			$temp = " seratus" . $this->kekata($x - 100);
		} else if ($x <1000) {
			$temp = $this->kekata($x/100) . " ratus" . $this->kekata($x % 100);
		} else if ($x <2000) {
			$temp = " seribu" . $this->kekata($x - 1000);
		} else if ($x <1000000) {
			$temp = $this->kekata($x/1000) . " ribu" . $this->kekata($x % 1000);
		} else if ($x <1000000000) {
			$temp = $this->kekata($x/1000000) . " juta" . $this->kekata($x % 1000000);
		} else if ($x <1000000000000) {
			$temp = $this->kekata($x/1000000000) . " milyar" . $this->kekata(fmod($x,1000000000));
		} else if ($x <1000000000000000) {
			$temp = $this->kekata($x/1000000000000) . " trilyun" . $this->kekata(fmod($x,1000000000000));
		}     
			return $temp;
	}


	public function terbilang($x, $style=4) {
		if($x<0) {
			$hasil = "minus ". trim($this->kekata($x));
		} else {
			$hasil = trim($this->kekata($x));
		}     
		switch ($style) {
			case 1:
				$hasil = strtoupper($hasil);
				break;
			case 2:
				$hasil = strtolower($hasil);
				break;
			case 3:
				$hasil = ucwords($hasil);
				break;
			default:
				$hasil = ucfirst($hasil);
				break;
		}     
		return $hasil;
	}
}
?>