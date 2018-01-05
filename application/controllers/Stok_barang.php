<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stok_barang extends MY_Controller {
	function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Stok_barang_model');
        $this->load->model('Barang_model');
    }
	public function index($param  = null){
		$data["caption"] 	= "Stok Barang";
		$data["param"] 	= $param;
		$data["breadcrumb"]	= array(
								array(
									"label" => "Stok Barang",
									"url" => ""
								)
							);
							
		$this->template('stok/list', $data);
	}
	public function getDatatable($param  = null){
		$customActionName	= $this->input->post('customActionName');
        $records         	= array();

        if ($customActionName == "delete") {
            $records=$this-> delete_checked();
        }
		
		$iDisplayLength = ($this->input->get_post('length')) ? $this->input->get_post('length') : 10 ;
        $iDisplayStart  = ($this->input->get_post('start')) ? $this->input->get_post('start') : 0 ;
        $sEcho          = ($this->input->get_post('draw')) ? $this->input->get_post('draw') : 1 ;
		
		$t              = $this->Stok_barang_model->get_limit_data($iDisplayStart, $iDisplayLength, $param);
        $iTotalRecords  = $t['total_rows'];
        $get_data       = $t['get_db'];
		
		$records["data"] = array();

        $i=$iDisplayStart+1;
        if ($get_data) {
            foreach ($get_data as $d) {
                $checkbok= '<input type="checkbox" name="id[]" value="'.$d->id.'">';
       

                $records["data"][] = array(
                    $checkbok,
                
					@$d->barang->{$this->Barang_model->label},
					number_format($d->panjang,2,",","."), 
					@$d->finishing->{$this->Finishing_barang_model->label},
					number_format($d->stok,0,",","."), 
					''
                );
            }
        }
		$records["draw"] = $sEcho;
        $records["recordsTotal"] = $iTotalRecords;
        $records["recordsFiltered"] = $iTotalRecords;

        $this->output->set_content_type('application/json')->set_output(json_encode($records));
	}
	public function getCurrentStok(){
		if(empty($this->input->post('barang'))|| empty($this->input->post('finishing')) || empty($this->input->post('panjang'))){
		 echo false;
		}else{
			$where = array(
				"barang"=>$this->input->post('barang'),
				"finish"=>$this->input->post('finishing'),
				"panjang"=>$this->input->post('panjang')
			);
			
			echo json_encode($this->Stok_barang_model->get($where));
		}
	}
	public function getStokDropdown(){
		$limit  = ($this->input->get('limit')) ? $this->input->get('limit') : 30 ;
		$page   = ($this->input->get('page')) ? $this->input->get('page') : 1 ;
		$page	= $page - 1;
		
		
		$this->db->limit($limit,($page*$limit));
		if ($this->input->get('q')) {
			$data_db =$this->Stok_barang_model->with_barang('where: section like \'%'.$this->input->get('q').'%\'')->with_finishing()->get_all();
		}else{
			$data_db =$this->Stok_barang_model->with_barang()->with_finishing()->get_all();
		}
		$res     =array();
		if ($data_db) {
			foreach ($data_db as $r) {
				
					$item=array();
					$item['id']    = $r->{$this->Stok_barang_model->primary_key};
					$item['title'] = @$r->barang->section;
					$item['desc'] = @$r->finishing->finishing.' ('.$r->panjang.' m)';
					if($item['title'] != null){
						$res[] = $item;
					}
			}
		}
		$output["items"]=$res;
		$output["total_count"]=$this->Stok_barang_model->count_rows();
		$this->output->set_content_type('application/json')->set_output(json_encode($output));
	}
	public function getStok($id=null){
		$data = array();
		if($id != null){
			$data = $this->Stok_barang_model->with_barang()->with_finishing()->get($id);		
		}
		echo json_encode($data);
	}
}
?>