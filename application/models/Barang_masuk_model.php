<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Barang_masuk_model extends MY_Model
{
	public $table = 'barang_masuk';
    public $primary_key = 'id';
    public $label = 'nomor_transaksi';
    public $fillable = array(); // If you want, you can set an array with the fields that can be filled by insert/update
    public $protected = array('id'); // ...Or you can set an array with the fields that cannot be filled by insert/update
	
	function __construct()
    {
        parent::__construct();
        $this->soft_deletes = TRUE;
		$this->has_one['supplier'] = array('Supplier_model','id','supplier');
    }
	function get_limit_data($limit, $start) {
        $order            = $this->input->post('order');
        $dataorder = array();
        $where = array();

        $i=1;
        $dataorder[$i++] = 'nomor_transaksi';
        $dataorder[$i++] = 'suplier';
        $dataorder[$i++] = 'tanggal';
        $dataorder[$i++] = 'nomor_surat_jalan';
        $dataorder[$i++] = 'catatan';
		
        if(!empty($this->input->post('nomor_transaksi'))){
            $where['LOWER(nomor_transaksi) LIKE'] = '%'.strtolower($this->input->post('nomor_transaksi')).'%';
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
        if(!empty($this->input->post('nomor_surat_jalan'))){
            $where['LOWER(nomor_surat_jalan) LIKE'] = '%'.strtolower($this->input->post('nomor_surat_jalan')).'%';
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
							->with_supplier()
                            ->get_all();
        return $result;
    }
}
?>