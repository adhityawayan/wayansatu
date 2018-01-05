<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Stok_barang_model extends MY_Model
{
	public $table = 'stok_barang';
    public $primary_key = 'id';
    public $label = 'barang';
    public $fillable = array(); // If you want, you can set an array with the fields that can be filled by insert/update
    public $protected = array('id'); // ...Or you can set an array with the fields that cannot be filled by insert/update
	
	function __construct()
    {
        parent::__construct();
        $this->soft_deletes = TRUE;
		$this->has_one['barang'] = array('Barang_model','id','barang');
		$this->has_one['finishing'] = array('Finishing_barang_model','id','finish');
    }
	function get_limit_data($limit, $start, $param  = null) {
		$order            = $this->input->post('order');
        $dataorder = array();
        $where = array();
        // $wherebarang = array();

        $i=1;
        $dataorder[$i++] = 'barang';
        $dataorder[$i++] = 'panjang';
        $dataorder[$i++] = 'finish';
        $dataorder[$i++] = 'stok';
		
		if(!empty($this->input->post('barang'))){
            $where['barang'] = $this->input->post('barang');
        }
        if(!empty($this->input->post('panjang'))){
            $where['CAST(panjang as text) like'] = '%'.$this->input->post('panjang').'%';
        }
		if(!empty($this->input->post('finish'))){
            $where['finish'] = $this->input->post('finish');
        }
		if(!empty($this->input->post('stok'))){
            $where['CAST(stok as text) like'] = '%'.$this->input->post('stok').'%';
        }
		if($param != null){
			 $where['stok <'] = '0';
		}
		
		$this->where($where);
        $result['total_rows'] = $this->count_rows();
        
        $this->where($where);
        if ($order) {
            $this->order_by( $dataorder[$order[0]["column"]],  $order[0]["dir"]);
        }
        $this->limit($start, $limit);
        $result['get_db']=$this
							->with_barang()
							->with_finishing()
                            ->get_all();
        return $result;
	}
}
?>