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
		$data["getMenCollection"]		=	$this->ProductModel->getMenCollection();
		$data["getMomenCollection"]		=	$this->ProductModel->getMomenCollection();
		$data["getKidsCollection"]		=	$this->ProductModel->getKidsCollection();
		$this->load->view('index',$data);
	}
}
