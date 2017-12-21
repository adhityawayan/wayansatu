<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Barang_model extends MY_Model
{
	public $table = 'barang';
    public $primary_key = 'id';
    public $label = 'section';
    public $fillable = array(); // If you want, you can set an array with the fields that can be filled by insert/update
    public $protected = array('id'); // ...Or you can set an array with the fields that cannot be filled by insert/update
	
	function __construct()
    {
        parent::__construct();
        $this->soft_deletes = TRUE;
		$this->has_one['tipe'] = array('Tipe_barang_model','id','tipe_barang');
		$this->has_one['supplier'] = array('Supplier_model','id','supplier');
    }
	function get_limit_data($limit, $start) {
        $order            = $this->input->post('order');
        $dataorder = array();
        $where = array();

        $i=1;
        $dataorder[$i++] = 'tipe_barang';
        $dataorder[$i++] = 'suplier';
        $dataorder[$i++] = 'section';
        $dataorder[$i++] = 'deskripsi';
        $dataorder[$i++] = 'berat';
		
		if(!empty($this->input->post('tipe_barang'))){
            $where['tipe_barang'] = $this->input->post('tipe_barang');
        }
		if(!empty($this->input->post('suplier'))){
            $where['suplier'] = $this->input->post('suplier');
        }
        if(!empty($this->input->post('section'))){
            $where['LOWER(section) LIKE'] = '%'.strtolower($this->input->post('section')).'%';
        }
        if(!empty($this->input->post('deskripsi'))){
            $where['LOWER(deskripsi) LIKE'] = '%'.strtolower($this->input->post('deskripsi')).'%';
        }
		if(!empty($this->input->post('berat'))){
            $where['CAST(berat as text) LIKE'] = '%'.$this->input->post('berat').'%';
        }

        $this->where($where);
        $result['total_rows'] = $this->count_rows();
        
        $this->where($where);
        if ($order) {
            $this->order_by( $dataorder[$order[0]["column"]],  $order[0]["dir"]);
        }
        $this->limit($start, $limit);
        $result['get_db']=$this
							->with_tipe()
							->with_supplier()
                            ->get_all();
        return $result;
    }
	function checkSectionEdit(){
		$where["section"] = $this->input->post('section');
		$where["id != "] = $this->input->post('id');
		
		$this->where($where);
		
		return $this->get();
	}
}
?>