<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('ProductModel');
	}
	public function index()
	{
		$data["mixProduct"]		=	$this->ProductModel->getProductMix();
		$this->load->view('index',$data);
	}
}
