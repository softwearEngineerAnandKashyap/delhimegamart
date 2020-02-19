<?php
defined('BASEPATH') OR exit('No Direct Script Allow');
class MenuModel extends CI_Model
{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function adminleftmenu(){
		// Get Main Left menu for admin dashboard 
		$this->db->select('id,menu_name,parent_id,i_order,url,menu_icon');
		$this->db->from('tbl_admin_menu');
		$this->db->where("tbl_admin_menu.parent_id = '0' AND tbl_admin_menu.status='1'");
		$query = $this->db->get();
		$left_menu = $query->result_array();
		// Get Nested Left Menu
		foreach ($left_menu as $key => $value) {
			$this->db->select('id,menu_name,parent_id,i_order,url,menu_icon');
			$this->db->from('tbl_admin_menu');
			$this->db->where("tbl_admin_menu.parent_id = '".$value['id']."' AND tbl_admin_menu.status='1'");
			$query = $this->db->get();
			$nested_left_menu = $query->result_array();     
			$left_menu[$key]['nested_menu'] = $nested_left_menu;
		}

		if(sizeof($left_menu) > 0){
			return $left_menu;
		}else{
			return array();         
		}
	}
	public function websitePages(){
		$this->db->select('id,menu_name');
		$this->db->from('tbl_website_menu');
		$query = $this->db->get();
		return $query->result_array();
	}
}

?>