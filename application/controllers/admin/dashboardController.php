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
	}

	/*
		Dashboard views
	*/
	public function index(){
		$this->load->view('admin/dashboard/index');
	}
}
?>