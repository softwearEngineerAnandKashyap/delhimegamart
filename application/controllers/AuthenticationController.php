<?php 
	defined('BASEPATH') or die('No Direct Script Allow');
	/**
	 * 
	 */
	class AuthenticationController extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}
		/*Login View*/
		public function login(){
			$this->load->view('login');
		}
	}
?>