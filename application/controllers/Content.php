<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends CI_Controller {

	function __construct(){
		parent::__construct();
		
		$this->load->model('Company_model');
		$this->load->model('Company_splash_model');
		$this->load->model('Products_model');
		$this->load->model('News_model');
		$this->load->model('Blog_model'); 
		$this->load->model('Counter_model');
		$this->load->model('Country_model');
		$this->load->model('Category_model');
		$this->load->model('Gallery_model');
		$this->load->model('Slide_model');
		$this->load->model('Group_model');
		$this->load->model('Image_manage_model');

		$this->load->model('cms/Content_model');
		$this->load->model('cms/Content_row_model');
		$this->load->model('cms/Content_row_item_model');
		$this->load->model('cms/Content_row_item_template_model');
		$this->load->model('cms/Menu_model');

	}

	public function index($content_id)
	{
		

		$data = array();
		$data['lang'] = $this->session->userdata('site_lang');

		$data['site_lang_name'] = $this->session->userdata('site_lang_name');

		
		////////////// Counter//////////////////
		$data['counter'] = $this->Counter_model->count();

		////////////////////// Theme ///////////////////////////////////
		$company = $this->Company_model->getOne(1);		
		// echo $this->db->last_query();
		// exit();
		$data['companyData'] = $company;
		$data['meta_title'] = $company->meta_title;
		$data['meta_keyword'] = $company->meta_keyword;
		$data['meta_description'] = $company->meta_description;

		$theme_path = $company->theme_path;
		$data['theme_path'] = $theme_path;		
		$data["theme_assets_path"] = $company->theme_assets_path;

		////////////////////// Menu ///////////////////////////////////
		$menus = $this->Menu_model->getMain();		

		foreach ($menus as $menu) {
			$menu->submenu = $this->Menu_model->getsub($menu->menu_id);
		}
		$data['menus'] = $menus ;

		$data['countrys'] = $this->Country_model->getAll();		
		
		///////////////////////// Get content home /////////////////////////////
		$homepage = $this->Content_model->getOne($content_id);
		
		$homepagerows = $this->Content_row_model->getAll($homepage->content_id);
		$image_group_id = 1 ;
		foreach ($homepagerows as $row) {
			$row->div = $this->Content_row_item_model->getAllDiv($row->row_id);		
			foreach ($row->div as $box) {
					$box->component = $this->Content_row_item_model->getAll($box->div_id);
					foreach ($box->component as $item) { 
						if ($item->template_id==4) {
							
							$i2 = json_decode($item->jsondata);
							$group = $this->Group_model->getAllSelectGroup($i2->group_id);
							
							foreach ($group as $group_sub) { 
									$item->product[] = $this->Group_model->getAllSelectGroupData($group_sub->type_id, $group_sub->id);
									foreach ($item->product as $product) { 
											$product->images = $this->Image_manage_model->getinuseProduct($image_group_id,$product->pro_id);
									}

									// print_r($this->db->last_query());
							}
						}
						if ($item->template_id==5) {
							$i2 = json_decode($item->jsondata);
							if ($i2->blog_type==3) {
								$count = 3;
							}
							if ($i2->blog_type==2) {
								$count = 4;
							}
							if ($i2->blog_type==1) {
								$count = 5;
							}
							$blogs = $this->Blog_model->getAll($count,0);
							$image_group_blog_id = 2;
							foreach ($blogs as $blogsnew) { 
								$blogsnew->images = $this->Image_manage_model->getinuseProduct($image_group_blog_id,$blogsnew->blog_id);
							}

							$data["blogs"] = $blogs; 
						}
					}
				}	
		}
		
		$box2 = $homepagerows;
		$data['box2'] = $box2;

		$homepage->rows = $homepagerows;
		$data['homepage'] = $homepage;
		
		/////////////////////// GET Product index ///////////////////////////		
		
		// echo $this->db->last_query();
		// exit();
		
		$data["news"] = $this->News_model->getAll(12,0);

		$data['gallerys'] = $this->Gallery_model->getAll(10,0);
		
		$data['splash'] = $this->Company_splash_model->getActive();

		/////////////////////// get products /////////////////////////////
		
		$cartarr = array();
		foreach ($this->cart->contents() as $carts) {
			$cartarr[]  = array($this->Products_model->getOne($carts['id']),$carts['qty'],$carts['rowid']);

		}
		
		$data['cartarr'] = $cartarr;


		$this->load->view($theme_path.'/content',$data);		

	}

}