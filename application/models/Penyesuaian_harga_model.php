<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Penyesuaian_harga_model extends MY_Model
{
	public $table = 'penyesuaian_harga';
    public $primary_key = 'id';
    public $label = 'nomor_trasaksi';
    public $fillable = array(); // If you want, you can set an array with the fields that can be filled by insert/update
    public $protected = array('id'); // ...Or you can set an array with the fields that cannot be filled by insert/update
	
	function __construct()
    {
        parent::__construct();
        $this->soft_deletes = TRUE;
    }
	function get_limit_data($limit, $start) {
        $order            = $this->input->post('order');
        $dataorder = array();
        $where = array();

        $i=1;
        $dataorder[$i++] = 'nomor_transaksi';
        $dataorder[$i++] = 'tanggal';
        $dataorder[$i++] = 'catatan';
		
		if(!empty($this->input->post('nomor_transaksi'))){
            $where['LOWER(nomor_transaksi) LIKE'] = '%'.strtolower($this->input->post('nomor_transaksi')).'%';
        }
		if(!empty($this->input->post('tanggal_start'))){
            $where['tanggal >='] = $this->input->post('tanggal_start');
        }
        if(!empty($this->input->post('tanggal_end'))){
            $where['tanggal <='] = $this->input->post('tanggal_end');
        }
        if(!empty($this->input->post('catatan'))){
            $where['LOWER(catatan) LIKE'] = '%'.strtolower($this->input->post('catatan')).'%';
        }
		
		$this->where($where);
        $result['total_rows'] = $this->count_rows();
        
        $this->where($where);
        if ($order) {
            $this->order_by( $dataorder[$order[0]["column"]],  $order[0]["dir"]);
        }
        $this->limit($start, $limit);
        $result['get_db']=$this
                            ->get_all();
        return $result;
	}
}
?>