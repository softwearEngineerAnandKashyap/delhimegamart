<?php
defined('BASEPATH') or exit('No Direct Script allow');

	class ProductController extends CI_Controller {
		protected $tbl_product = "tbl_product";
		protected $tbl_product_price = "tbl_product_price";
		protected $tbl_product_feature = "tbl_product_feature";
		function __construct() {
			parent::__construct();
			$this->load->model('admin/MenuModel');
			$this->load->model('admin/ProductModel');

		}
	/**
	 * Display a listing of the resource.
	 */
	public function index($rowno = 0) {
		if(($this->session->userdata && isset($this->session->userdata['logged_in']))){
		die('here');
			 # Pagination Search Part Start From Here
            $search_text = "";
            if ($this->input->post('submit') != NULL) {
                $search_text = $this->input->post('search');
                $this->session->set_userdata(array(
                    "search" => $search_text
                ));
            } else {
                if ($this->session->userdata('search') != NULL) {
                    $search_text = $this->session->userdata('search');
                }
            }
            # Pagination Search Part Ends From Here
            $rowperpage = 10; # database rows showing on par page 10
            if ($rowno != 0) {
                $rowno = ($rowno - 1) * $rowperpage; # 1 multiply by 10 = 10 data show pagination number click
            }
            // All records count
            $allcount                   = $this->ProductModel->getrecordCount($search_text);
            // Get records
            $users_record               = $this->ProductModel->getData($rowno, $rowperpage, $search_text);
            // Pagination Configuration
            $config['base_url']         = base_url() . 'admin/news/';
            $config['use_page_numbers'] = TRUE;
            $config['total_rows']       = $allcount;
            $config['per_page']         = $rowperpage;
            $config['cur_tag_open']     = '&nbsp;<a href="javascript:void(0);" style="background-color: #2169B1; color:#fff;">';
            $config['cur_tag_close']    = '</a>';
            $config['next_link']        = 'Next';
            $config['prev_link']        = 'Previous';
            // Initialize
            $this->pagination->initialize($config);
            $data['pagination'] = $this->pagination->create_links();
            $data['result']     = $users_record;
            $data['row']        = $rowno;
            $data['search']     = $search_text;
            $data['title']      = 'News | Blogs | Apple Therapeutics';
            // Load view
			$data["left_menu"]		=		$this->MenuModel->adminleftmenu();
			$data["title"]			=		"Product List";
            $this->load->view('admin/product/listing', $data);
		}else{
			redirect(base_url().'admin/');
		}
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 */
	public function create() {
		if (($this->session->userdata && isset($this->session->userdata['logged_in']))):
			$data['left_menu'] = $this->MenuModel->adminleftmenu();
			$data['title'] = 'News | Blogs | Apple Therapeutics';
			$this->load->view('admin/product/create', $data);
		else:
			redirect(base_url().'admin');
		endif;
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store() {
		if(($this->session->userdata && isset($this->session->userdata['logged_in']))){
			$data 	=	$this->input->post();
			/*Product table Array*/
				$dataProduct	=	array(
					'product_name'	=>		$data['proName'],			
					'pro_sku'	=>		$data['proSku'],			
					'pro_price'			=>		$data['proPrice'],			
					'pro_mim_qty'			=>		$data['proQty'],			
					'pro_code'			=>		$data['proCode'],			
					'ideal_for_id_fk'			=>		$data['idealFor'],			
					'appreal_cat_id_fk'			=>		$data['apprealFor'],			
					'description'			=>		trim($data['description'])			
				);

				$lastId	=	$this->ProductModel->insert('tbl_product',$dataProduct);
				 	$getImgExtn     	=   explode('.',$_FILES["proImage"]["name"]);
				    $fileImgAdd     =    random_string('alnum',20).'.'.$getImgExtn[1];
		            $target         =   "assets/img/product-image/".$fileImgAdd;
		        	if(move_uploaded_file($_FILES["proImage"]["tmp_name"],$target) == true){
		        		$proImage 	= 	array(
		        			"product_id_fk"		=>	$lastId,
		        			"product_image"		=>	$fileImgAdd
		        		);
		        		$this->ProductModel->insert('product_image',$proImage);
		        	}

		}else{
			redirect(base_url().'admin');
		}
	}

	/**
	 * Display the specified resource.
	 */
	public function show($id) {
		if(($this->session->userdata && isset($this->session->userdata["logged_in"]))){
			$data["result"]			=	$this->ProductModel->getProductDetails($id);
			$data["left_menu"]		=	$this->MenuModel->adminleftmenu();
			$this->load->view('admin/product/show',$data);
		}else{
			redirect(base_url().'admin');
		}
	}
	/*
		
	*/
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Photo  $photo
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Photo $photo) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Photo  $photo
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Photo $photo) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Photo  $photo
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Photo $photo) {
		//
	}
}
?>