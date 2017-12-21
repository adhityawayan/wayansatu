<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pembayaran_distribusi_model extends MY_Model
{
	public $table = 'pembayaran_distribusi';
    public $primary_key = 'id';
    public $label = 'no_transaksi';
    public $fillable = array(); // If you want, you can set an array with the fields that can be filled by insert/update
    public $protected = array('id'); // ...Or you can set an array with the fields that cannot be filled by insert/update
	
	function __construct()
    {
        parent::__construct();
        $this->soft_deletes = TRUE;
		$this->has_one['parent'] = array('Invoice_distribusi_model','id','parent');
    }
}
?>