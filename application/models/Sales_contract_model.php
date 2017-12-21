<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Sales_contract_model extends MY_Model
{
	public $table = 'sales_contract';
    public $primary_key = 'id';
    public $label = 'nomor_sc';
    public $fillable = array(); // If you want, you can set an array with the fields that can be filled by insert/update
    public $protected = array('id'); // ...Or you can set an array with the fields that cannot be filled by insert/update
	
	function __construct()
    {
        parent::__construct();
        $this->soft_deletes = TRUE;
		$this->has_one['customer'] = array('Customer_model','id','customer');
		$this->has_one['supplier'] = array('Supplier_model','id','supplier');
		$this->has_one['status'] = array('Status_distribusi_model','id','status');
    }
	function get_limit_data($limit, $start) {
        $order            = $this->input->post('order');
        $dataorder = array();
        $where = array();

        $i=1;
        $dataorder[$i++] = 'nomor_do';
        $dataorder[$i++] = 'customer';
        $dataorder[$i++] = 'nomor_sc';
        $dataorder[$i++] = 'tanggal';
		
		if(!empty($this->input->post('nomor_do'))){
            $where['LOWER(nomor_do) LIKE'] = '%'.strtolower($this->input->post('nomor_do')).'%';
        }
		if(!empty($this->input->post('customer'))){
            $where['customer'] = $this->input->post('customer');
        }
		if(!empty($this->input->post('nomor_sc'))){
            $where['LOWER(nomor_sc) LIKE'] = '%'.strtolower($this->input->post('nomor_sc')).'%';
        }
        if(!empty($this->input->post('tanggal_start'))){
            $where['tanggal >='] = $this->input->post('tanggal_start');
        }
        if(!empty($this->input->post('tanggal_end'))){
            $where['tanggal <='] = $this->input->post('tanggal_end');
        }

        $this->where($where);
        $result['total_rows'] = $this->count_rows();
        
        $this->where($where);
        if ($order) {
            $this->order_by( $dataorder[$order[0]["column"]],  $order[0]["dir"]);
        }
        $this->limit($start, $limit);
        $result['get_db']=$this
							->with_customer()
							->with_supplier()
							->with_status()
                            ->get_all();
        return $result;
    }
}
?>