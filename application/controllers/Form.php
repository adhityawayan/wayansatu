<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

	public function index()
	{

	}

	public function dd($m='', $w='', $field= '')
	{

		$this->load->model($m);
		$limit  = ($this->input->get('limit')) ? $this->input->get('limit') : 30 ;
		$page   = ($this->input->get('page')) ? $this->input->get('page') : 1 ;
		$page	= $page - 1;
		if ($this->input->get('q')) {
			$this->db->like($this->$m->label, $this->input->get('q'));
		}
		if($w != ''){
			if($field != ''){
				$this->db->where($field, $w);
			}else{
				$this->db->where($this->$m->primary_key, $w);
			}
		}
		$this->db->limit($limit,($page*$limit));
		$data_db =$this->{$m}->get_all();
		$res     =array();
		if ($data_db) {
			foreach ($data_db as $r) {
				$item=array();
				$item['id']    = $r->{$this->$m->primary_key};
				$item['title'] = $r->{$this->$m->label};
				if(isset($r->deskripsi)){
					$item['desc'] = $r->deskripsi;
				}
				$res[] = $item;
			}
		}
		$output["items"]=$res;
		$output["total_count"]=$this->{$m}->count_rows();
		$this->output->set_content_type('application/json')->set_output(json_encode($output));
	}

	public function route()
	{
		$this->load->model('Menu_model');
		$w = array('controller IS NOT NULL' => NULL );
		$s=$this->Menu_model->get_all($w);
		if ($s) {
			foreach ($s as $r) {
				echo '$route[\''.$r->link.'\'] = \''.$r->controller.'\'; <br/>';
			}
		}
	}
	public function update(){
		$sql = "ALTER TABLE perusahaan_bank ADD COLUMN transaksi char(1);
				ALTER TABLE perusahaan_bank ADD COLUMN pajak_stat char(1);

				ALTER TABLE penjualan ADD COLUMN pajak_stat char(1) NULL;

				ALTER TABLE sales_contract ADD COLUMN ppn FLOAT NULL;
				ALTER TABLE sales_contract ADD COLUMN pajak_stat char(1) NULL;

				ALTER TABLE pengiriman ADD COLUMN customer INTEGER NULL;";
		$query = $this->db->query($sql);
	}
}

/* End of file Form.php */
/* Location: ./application/controllers/Form.php */
