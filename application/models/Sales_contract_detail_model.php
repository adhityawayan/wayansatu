<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Sales_contract_detail_model extends MY_Model
{
	public $table = 'sales_contract_detail';
    public $primary_key = 'id';
    public $label = 'parent';
    public $fillable = array(); // If you want, you can set an array with the fields that can be filled by insert/update
    public $protected = array('id'); // ...Or you can set an array with the fields that cannot be filled by insert/update
	
	function __construct()
    {
        parent::__construct();
        $this->soft_deletes = TRUE;
		$this->has_one['parent'] = array('Sales_contract_model','id','parent');
		$this->has_one['barang'] = array('Barang_model','id','barang');
		$this->has_one['finishing'] = array('Finishing_barang_model','id','finishing');
    }
}
?>