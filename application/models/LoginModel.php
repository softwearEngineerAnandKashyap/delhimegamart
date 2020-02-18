<?php 
defined('BASEPATH') or die('No Direct Script Allow');
/**
 * User Authentication model store all method 
 to related user like login,register, logouts etc
 */
class LoginModel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	/*Get row for check email is already exist or not befor created new account*/
		public function getRow($felidName,$tbl_name,$where){
			$this->db->select($felidName)
			->from($tbl_name)
			->where($where);
			$query = $this->db->get();
			return $query->num_rows();
		}
		/*Here we created final registration*/
		public function RegisterStore($tbl_name,$data){
			$this->db->insert($tbl_name,$data);
			$insert_id = $this->db->insert_id();
			return  $insert_id;
		}
	public function doLogin($array){
		$this->db->select('admin_login_id_pk,email,password,salt');
		$this->db->from('tbl_admin_login');
		$this->db->where('email',$this->db->escape_str($array));
		$query = $this->db->get();
		if($query->num_rows() > 0):
			return $query->row_object();
		else:
			return false;
		endif;
	}
}
?>