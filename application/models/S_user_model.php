<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class S_user_model extends MY_Model
{
	public $table = 's_user';
    public $primary_key = 'id';
    public $label = 'nama';
    public $fillable = array(); // If you want, you can set an array with the fields that can be filled by insert/update
    public $protected = array('id'); // ...Or you can set an array with the fields that cannot be filled by insert/update
	
	function __construct()
    {
        parent::__construct();
        $this->soft_deletes = TRUE;
        $this->has_one['tipe'] = array('Type_user_model','id','tipe');
    }
	
	function get_limit_data($limit, $start) {
		$order      = $this->input->post('order');
        $dataorder	= array();
        $where 		= array();
		
		$i=1;
        $dataorder[$i++] = 'tipe';
        $dataorder[$i++] = 'nama';
        $dataorder[$i++] = 'telepon';
        $dataorder[$i++] = 'username';
		
		if(!empty($this->input->post('tipe'))){
            $where['tipe'] = $this->input->post('tipe');
        }
		if(!empty($this->input->post('nama'))){
            $where['LOWER(nama) LIKE'] = '%'.strtolower($this->input->post('nama')).'%';
        }
        if(!empty($this->input->post('telepon'))){
            $where['LOWER(telepon) LIKE'] = '%'.strtolower($this->input->post('telepon')).'%';
        }
        if(!empty($this->input->post('username'))){
            $where['LOWER(username) LIKE'] = '%'.strtolower($this->input->post('username')).'%';
        }
		
		$this->where($where);
        $result['total_rows'] = $this->count_rows();
        
        $this->where($where);
        if ($order) {
            $this->order_by( $dataorder[$order[0]["column"]],  $order[0]["dir"]);
        }
		
		$this->limit($start, $limit);
        $result['get_db']=$this
							->with_tipe()
                            ->get_all();
        return $result;
	}
	
	function create_random_code($length = 8, $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ')
	{

        $str = '';
        $max = strlen($keyspace)-1;
        for ($i = 0; $i < $length; ++$i) {
            $str .= $keyspace[random_int(0, $max)];
        }
        return $str;

    }

    public function encrypt_password($pass)
    {
        return password_hash($pass, PASSWORD_BCRYPT);
    }

    public function check_password($pass,$encrypt_pass)
    {
        return password_verify($pass, $encrypt_pass);
    }
	public function updatesss(){
	$sql = "ALTER TABLE perusahaan_bank ADD COLUMN transaksi char(1);
				ALTER TABLE perusahaan_bank ADD COLUMN pajak_stat char(1);

				ALTER TABLE penjualan ADD COLUMN pajak_stat char(1) NULL;

				ALTER TABLE sales_contract ADD COLUMN ppn FLOAT NULL;
				ALTER TABLE sales_contract ADD COLUMN pajak_stat char(1) NULL;

				ALTER TABLE pengiriman ADD COLUMN customer INTEGER NULL;";
		$query = $this->db->query($sql);
	}
}
?>
	