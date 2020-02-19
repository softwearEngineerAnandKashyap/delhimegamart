<?php 
	defined('BASEPATH') or exit ('No direct script allow');
/**
 *  Dashboard  Controller
 */
class dashboardController extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/MenuModel');
	}
	/*
		Dashboard views
	*/
	public function index(){
		if(($this->session->userdata && isset($this->session->userdata['logged_in']))):
			$data['left_menu']		 = $this->MenuModel->adminleftmenu();
			$this->load->view('admin/dashboard/index',$data);
		else:
			$this->load->view('admin/index');
		endif;
	}
}
?>