<?php 
	defined('BASEPATH') or die('No Direct Script Allow');
	/**
	 * 
	 */
	class AuthenticationController extends CI_Controller
	{
		protected $tbl_users =	"users";
		function __construct()
		{
			parent::__construct();
			$this->load->model('LoginModel');

		}
		/*Register View*/
		public function register(){
			$this->load->view('register');
		}
		/*public function create news account*/
		public function create(){
			$data 	=	$this->security->xss_clean($this->input->post());
			$felidName		=	array("email");
			$where			=	array('email'=>$data['email']);
			$data 			=  $this->LoginModel->getRow($felidName,$this->tbl_users,$where);
			/*Here we check email is already exist*/
			if($data > 0):
				$response = array(
					"message"	=>	"This email is already exits !"
				);
	      	else:
	      		if($this->input->post('password') != $this->input->post('cpassword')){
		      			$response = array(
						"message"	=>	"Password not match!"
					);
	      		}else{
	     			$salt                         = sha1(rand());
		            $salt                         = substr($salt, 0, 10);
		            $encrypted_password           = base64_encode(sha1($this->input->post('cpassword') . $salt, true) . $salt);
					/*Here we created registration*/
					$arrayRegister = array(
						'name'				=> 		strip_tags($this->input->post('name')),
						'email'				=> 		strip_tags($this->input->post('email')),
						'password'			=>		strip_tags($encrypted_password),
						'salt'				=>		strip_tags($salt),
						/*'create_date'		=>		date('Y-m-d h:i:s', time()),*/
						'ip'		=>		$this->input->ip_address()
					);
					$data	=	$this->LoginModel->RegisterStore($this->tbl_users,$arrayRegister);
					if($data > 0){
						$sessionArray = array(
							"user_id"		=>	$data,
							"user_name"		=>	$this->input->post('name')
						);
						$this->session->set_userdata('logged_in',$sessionArray);
						redirect(base_url());						
					}
	      		}
	   		 endif;
	    	 	$this->session->set_flashdata('message',$response);
    			$this->session->set_flashdata('alert-danger');	
    		    redirect(base_url(). 'register');
		}
		/*Login View*/
		public function login(){
			$this->load->view('login');
		}
	}
?>