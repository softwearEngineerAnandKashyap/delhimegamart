<?php 
	/**
	 * Product Model
	 */
	class ProductModel extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function getProductMix(){
			$this->db->select(
				'tbl_product.product_id_pk,tbl_product.product_name,tbl_product.pro_price,tbl_product.appreal_cat_id_fk,tbl_appreal_category.appreal_cat_id_pk,tbl_appreal_category.appreal_category,product_image.product_id_fk,product_image.product_image'
			);
			$this->db->from('tbl_product');
			$this->db->join('tbl_appreal_category','tbl_product.appreal_cat_id_fk = tbl_appreal_category.appreal_cat_id_pk');
			$this->db->join('product_image','tbl_product.product_id_pk = product_image.product_id_fk');
			$query = $this->db->get();
			return $query->result_array();
		}
		
		public function getMenCollection(){
			$this->db->select(
				'tbl_product.product_id_pk,tbl_product.product_name,tbl_product.pro_price,tbl_product.ideal_for_id_fk,tbl_product.appreal_cat_id_fk,tbl_appreal_category.appreal_cat_id_pk,tbl_appreal_category.appreal_category,product_image.product_id_fk,product_image.product_image'
			);
			$this->db->from('tbl_product');
			$this->db->join('tbl_appreal_category','tbl_product.appreal_cat_id_fk = tbl_appreal_category.appreal_cat_id_pk');
			$this->db->join('product_image','tbl_product.product_id_pk = product_image.product_id_fk');
			$this->db->where('tbl_product.ideal_for_id_fk',2);
			$query = $this->db->get();
			return $query->result_array();
		}
		public function getMomenCollection(){
			$this->db->select(
				'tbl_product.product_id_pk,tbl_product.product_name,tbl_product.pro_price,tbl_product.ideal_for_id_fk,tbl_product.appreal_cat_id_fk,tbl_appreal_category.appreal_cat_id_pk,tbl_appreal_category.appreal_category,product_image.product_id_fk,product_image.product_image'
			);
			$this->db->from('tbl_product');
			$this->db->join('tbl_appreal_category','tbl_product.appreal_cat_id_fk = tbl_appreal_category.appreal_cat_id_pk');
			$this->db->join('product_image','tbl_product.product_id_pk = product_image.product_id_fk');
			$this->db->where('tbl_product.ideal_for_id_fk',1);

			$query = $this->db->get();
			return $query->result_array();
		}
		public function getKidsCollection(){
			$this->db->select(
				'tbl_product.product_id_pk,tbl_product.product_name,tbl_product.pro_price,tbl_product.ideal_for_id_fk,tbl_product.appreal_cat_id_fk,tbl_appreal_category.appreal_cat_id_pk,tbl_appreal_category.appreal_category,product_image.product_id_fk,product_image.product_image'
			);
			$this->db->from('tbl_product');
			$this->db->join('tbl_appreal_category','tbl_product.appreal_cat_id_fk = tbl_appreal_category.appreal_cat_id_pk');
			$this->db->join('product_image','tbl_product.product_id_pk = product_image.product_id_fk');
			$this->db->where('tbl_product.ideal_for_id_fk',3);

			$query = $this->db->get();
			return $query->result_array();
		}
	}
?>