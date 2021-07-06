<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalogue extends CI_Controller {
	function __construct(){
		parent::__construct();

		
		$this->load->model('Company_model');
		$this->load->model('Category_model');
		$this->load->model('Country_model');
		$this->load->model('Banner_model');
		// $this->load->model('Slider_model');
		// $this->load->model('Youtube_model');
		$this->load->model('Products_model');
		$this->load->model('Products_picture_model');		
		$this->load->model('News_model');
		$this->load->model('Counter_model');
		$this->load->model('Brand_model');
		$this->load->model('Promotion_model');
		$this->load->model('Image_manage_model');
		$this->load->model('cms/Menu_model');

	}

	public function index($lang)	{
		
		$countrys = $this->Country_model->getAll();
		$data['counter'] = $this->Counter_model->count();
		$data['countrys'] = $countrys;
		
		// $search = array();
		// $data['site_lang_name'] = $this->session->userdata('site_lang_name');

		// // $data['counter'] = $this->Counter_model->count();
		// $data["categorys"] = $this->Category_model->getAll();

		// $data["brands"] = $this->Brand_model->getAll();

		// $keyword = $this->input->GET('keyword');

		// $tag = $this->input->GET('tags');

		// if($keyword != '') {
		// 	$search = array('keyword'=>$keyword);
		// }
		// if($tag != '') {
		// 	$search = array('tag'=>$tag);
		// }
		
		
		
		// // print_r($search);
		// $company = $this->Company_model->getOne(1);		
		// $data['companyData'] = $company;
		// $data['meta_title'] = $company->meta_title;
		// $data['meta_keyword'] = $company->meta_keyword;
		// $data['meta_description'] = $company->meta_description;
		
		// // $theme_path = $company->theme_path;
		// // $data['theme_path'] = $theme_path;
		// // $data["theme_assets_path"] = $company->theme_assets_path;

		// // $menus = $this->Menu_model->getMain();
		// // // echo $this->db->last_query();
		// // // exit();

		// // foreach ($menus as $menu) {
		// // 	$menu->submenu = $this->Menu_model->getsub($menu->menu_id);
		// // }
		// // $data['menus'] = $menus ;		
		// // $data['countrys'] = $this->Country_model->getAll();
		
		
		// if(strlen($params)>0 ){

		// 	list($name) = explode(':', $params);

		// 	if($name=='cid'){
		// 		list($name,$id) = explode(':', $params);
		// 		$cat_id = $id;
		// 		$search['cat_id'] = $id;
		// 	}else{
		// 		$cat_id = 0;
		// 	}

		// 	if($name=='bid'){
		// 		list($name,$id) = explode(':', $params);

		// 		$brand_id = $id;

		// 		$search['brand_id'] = $id;

		// 	}else{
		// 		$brand_id = 0;
		// 	}
		// 	if ($name!='cid' or $name!='bid') {
		// 		$countnews = $name;
		// 	}
		// }else{
		// 	$cat_id = 0;
		// 	$brand_id = 0;
		// 	$countnews =0;
		// }


		// if ($cat_id != '') {
		// 	$cat_name = $this->Category_model->getOne($cat_id);
		// }

		

		// $this->load->config('pagination',TRUE);		
		// $config = $this->config->item('pagination');	

		// $config["per_page"] = 6;

		// if ($cat_id != '') {

		// 	$config["base_url"] = base_url() . "".$this->session->userdata('site_lang_name')."/cid:".$cat_id."_".$cat_name->cat_name."";

		// } else if ($brand_id != '') {

		// 	$brand_name = $this->Brand_model->getOne($brand_id);
		// 	$config["base_url"] = base_url() . "".$this->session->userdata('site_lang_name')."/bid:".$brand_id."_".$brand_name->brand_name."";

		// } else {
		// 	$config["base_url"] = base_url() . "".$this->session->userdata('site_lang_name')."/Products/index/";
		// }
		
		// $config["total_rows"] = $this->Products_model->record_count($search);

		// if ($cat_id != '' || $brand_id != '') {

		// } else {
		// 	$config["uri_segment"] = 4;
		// }



		// $config['reuse_query_string'] = true;			
		// $this->pagination->initialize($config);		
		// $data["links"] = $this->pagination->create_links();
		// $data['total_rows'] =  $config["total_rows"];

		// if ($cat_id != '' || $brand_id != '') {
		// 	$start = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;	
		// } else {
		// 	$start = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;	
		// }
		

		// $orderby="`products`.`orders` asc";


		// $products = $this->Products_model->getAll($config["per_page"],$start,$search,$orderby);

		// print_r($this->db->last_query());

		
		// $image_group_id = 1;
		// foreach ($products as $product) { 
		// 	$product->images = $this->Image_manage_model->getinuseProduct($image_group_id,$product->pro_id);
		// }

		// $data['products'] = $products;
		
		// $tags_all = $this->Products_model->getProductsTag();

		// $data['tags_all'] = $tags_all;
		
		// $this->load->view('2021_theme_1/products',$data);

		
		$this->load->view('pages/catalogue',$data);


	}

	

}
