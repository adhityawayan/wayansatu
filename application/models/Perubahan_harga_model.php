<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Perubahan_harga_model extends MY_Model
{
	public $table = 'perubahan_harga';
    public $primary_key = 'id';
    public $label = 'transaksi';
    public $fillable = array(); // If you want, you can set an array with the fields that can be filled by insert/update
    public $protected = array('id'); // ...Or you can set an array with the fields that cannot be filled by insert/update
	
	function __construct()
    {
        parent::__construct();
        $this->soft_deletes = TRUE;
		$this->has_one['barang'] = array('Barang_model','id','barang');
    }
}
?>