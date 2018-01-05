<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pengiriman_model extends MY_Model
{
	public $table = 'pengiriman';
    public $primary_key = 'id';
    public $label = 'tanggal_kirim';
    public $fillable = array(); // If you want, you can set an array with the fields that can be filled by insert/update
    public $protected = array('id'); // ...Or you can set an array with the fields that cannot be filled by insert/update
	
	function __construct()
    {
        parent::__construct();
        $this->soft_deletes = TRUE;
		$this->has_one['supplier'] = array('Supplier_model','id','supplier');
		$this->has_one['customer'] = array('Customer_model','id','customer');
    }
	public function get_limit_data($limit, $start){
		$order            = $this->input->post('order');
        $dataorder = array();
        $where = array();
		
		$i=1;
        $dataorder[$i++] = 'nomor_surat_jalan';
        $dataorder[$i++] = 'customer';
        $dataorder[$i++] = 'supplier';
        $dataorder[$i++] = 'tanggal';
        $dataorder[$i++] = 'tujuan_pengiriman';
		
		if(!empty($this->input->post('nomor_surat_jalan'))){
            $where['LOWER(nomor_surat_jalan) LIKE'] = '%'.strtolower($this->input->post('nomor_surat_jalan')).'%';
        }
		if(!empty($this->input->post('customer'))){
            $where['customer'] = $this->input->post('customer');
        }
		if(!empty($this->input->post('suplier'))){
            $where['suplier'] = $this->input->post('suplier');
        }
		if(!empty($this->input->post('tanggal_start'))){
            $where['tanggal >='] = $this->input->post('tanggal_start');
        }
        if(!empty($this->input->post('tanggal_end'))){
            $where['tanggal <='] = $this->input->post('tanggal_end');
        }
		if(!empty($this->input->post('tujuan_pengiriman'))){
            $where['LOWER(tujuan_pengiriman) LIKE'] = '%'.strtolower($this->input->post('tujuan_pengiriman')).'%';
        }
		 $this->where($where);
        $result['total_rows'] = $this->count_rows();
        
        $this->where($where);
        if ($order) {
            $this->order_by( $dataorder[$order[0]["column"]],  $order[0]["dir"]);
        }
        $this->limit($start, $limit);
        $result['get_db']=$this
							->with_supplier()
							->with_customer()
                            ->get_all();
        return $result;
	}
}
?>