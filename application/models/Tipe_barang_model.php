<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tipe_barang_model extends MY_Model
{
	public $table = 'tipe_barang';
    public $primary_key = 'id';
    public $label = 'tipe_barang';
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
        $dataorder[$i++] = 'tipe_barang';
        if(!empty($this->input->post('tipe_barang'))){
            $where['LOWER(tipe_barang) LIKE'] = '%'.strtolower($this->input->post('tipe_barang')).'%';
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