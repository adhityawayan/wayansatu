<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Supplier_model extends MY_Model
{
	public $table = 'supplier';
    public $primary_key = 'id';
    public $label = 'nama';
    public $fillable = array(); // If you want, you can set an array with the fields that can be filled by insert/update
    public $protected = array('id'); // ...Or you can set an array with the fields that cannot be filled by insert/update
	
	function __construct()
    {
        parent::__construct();
        $this->soft_deletes = TRUE;
    }
	function get_limit_data($limit, $start) {
		$order      = $this->input->post('order');
        $dataorder	= array();
        $where 		= array();
		
		$i=1;
        $dataorder[$i++] = 'nama';
        $dataorder[$i++] = 'alamat';
        $dataorder[$i++] = 'telepon';
        $dataorder[$i++] = 'fax';
        $dataorder[$i++] = 'email';
        $dataorder[$i++] = 'contact_person';
		
		if(!empty($this->input->post('nama'))){
            $where['LOWER(nama) LIKE'] = '%'.strtolower($this->input->post('nama')).'%';
        }
		if(!empty($this->input->post('alamat'))){
            $where['LOWER(alamat) LIKE'] = '%'.strtolower($this->input->post('alamat')).'%';
        }
		if(!empty($this->input->post('telepon'))){
            $where['LOWER(telepon) LIKE'] = '%'.strtolower($this->input->post('telepon')).'%';
        }
		if(!empty($this->input->post('fax'))){
            $where['LOWER(fax) LIKE'] = '%'.strtolower($this->input->post('fax')).'%';
        }
		if(!empty($this->input->post('email'))){
            $where['LOWER(email) LIKE'] = '%'.strtolower($this->input->post('email')).'%';
        }
		if(!empty($this->input->post('contact_person'))){
            $where['LOWER(contact_person) LIKE'] = '%'.strtolower($this->input->post('contact_person')).'%';
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