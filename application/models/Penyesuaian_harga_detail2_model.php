<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Penyesuaian_harga_detail2_model extends MY_Model
{
	public $table = 'penyesuaian_harga_detail2';
    public $primary_key = 'id';
    public $label = 'parent';
    public $fillable = array(); // If you want, you can set an array with the fields that can be filled by insert/update
    public $protected = array('id'); // ...Or you can set an array with the fields that cannot be filled by insert/update
	
	function __construct()
    {
        parent::__construct();
        $this->soft_deletes = TRUE;
		$this->has_one['parent'] = array('Penyesuaian_harga_model','id','parent');
		$this->has_one['finishing'] = array('Finishing_barang_model','id','finishing');
    }
}
?>