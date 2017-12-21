<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_privilages_model extends MY_Model
{
	public $table = 'user_privilages';
    public $primary_key = 'id';
    public $label = 'menu';
    public $fillable = array(); // If you want, you can set an array with the fields that can be filled by insert/update
    public $protected = array('id'); // ...Or you can set an array with the fields that cannot be filled by insert/update
	
	function __construct()
    {
        parent::__construct();
        $this->soft_deletes = TRUE;
        $this->has_one['tipe_user'] = array('Tipe_user_model','id','tipe');
        $this->has_one['menu'] = array('Menu_model','id','menu');
    }
	function get_uniqParent(){
	}
}
?>
	