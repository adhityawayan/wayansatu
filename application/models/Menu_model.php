<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Menu_model extends MY_Model
{
	public $table = 'menu';
    public $primary_key = 'id';
    public $label = 'menu';
    public $fillable = array(); // If you want, you can set an array with the fields that can be filled by insert/update
    public $protected = array('id'); // ...Or you can set an array with the fields that cannot be filled by insert/update
	
	function __construct()
    {
        parent::__construct();
        $this->soft_deletes = TRUE;
    }
	function getChild($parent, $type_user){
		$sql = "select menu.*, user_privilages.create,user_privilages.read, user_privilages.update, user_privilages.delete, user_privilages.id as id_priv
from menu left join user_privilages ON (menu.id = user_privilages.menu AND user_privilages.tipe_user = ".$type_user.")
WHERE PARENT = ".$parent;
		$query = $this->db->query($sql);
		return $query->result();
	}
	function getParent(){
		$sql = "SELECT DISTINCT
					( parent.parent ) AS idparent,
					menu.* 
				FROM
					(
				SELECT
					a.menu,
					b.parent 
				FROM
					user_privilages a
					LEFT JOIN menu b ON ( a.menu = b.id ) 
				WHERE
					a.tipe_user = ".$this->user->with_tipe()->get($this->session->userdata('authorization'))->tipe->id." 
					AND a.READ = 1 
					) parent
					LEFT JOIN menu ON ( parent.parent = menu.id )
				ORDER BY menu.index";
					
		$query = $this->db->query($sql);
		
		return $query->result_object();
	}
	public function get_menuChild(){
		$where= array(
			"parent"=>$this->session->userdata("parentmenu")
		);
		$this->db->order_by("index", "ASC");
		
		return $this->get_all($where);
	}
}
?>
	
	