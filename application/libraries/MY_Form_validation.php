<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Form_validation extends CI_Form_validation {

    function __construct()
  {
    parent::__construct();
  }

   //Extends the is_unique validation test to allow update of same record without conflict
   public function is_unique($str, $field)
   {
      if (substr_count($field, '.') == 3)
      {
         list($table,$field,$id_field,$id_val) = explode('.', $field);
         $query = $this->CI->db->limit(1)->where($field,$str)->where($id_field.' != ',$id_val)->get($table);
      }
      else
      {
         list($table, $field)=explode('.', $field);
         $query = $this->CI->db->limit(1)->get_where($table, array($field => $str));
      }

      return $query->num_rows() === 0;
    }

    public function is_exist($str, $field)
    {
        list($table, $field)=explode('.', $field);
        $query = $this->CI->db->limit(1)->get_where($table, array($field => $str));
        $this->set_message('is_exist', "{field} not exist");
        return $query->num_rows() !== 0;
    }

    public function date($str='')
    {
        if (!DateTime::createFromFormat('Y-m-d', $str)) //yes it's YYYY-MM-DD
		{
		    $this->set_message('date', 'The {field} has not a valid date format');
		    return FALSE;
		}
		else
		{
		    return TRUE;
		}
    }

   // public function error_array()
   // {
   //  if (count($this->_error_array) === 0)
   //    return FALSE;
   //  else
   //    return $this->_error_array;
   // }

}
