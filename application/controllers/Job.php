<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		
		$this->load->model('Company_model');
		$this->load->model('Category_model');		
		$this->load->model('Config_model');	
		$this->load->model('Job_model');			
		$this->load->model('Counter_model');
		$this->load->model('cms/Menu_model');
		$this->load->model('Country_model');
		$this->load->model('Country_model');

		$this->load->model('Blog_model');
		$this->load->model('Image_manage_model');

	}

	public function index()
	{
		// $data['counter'] = $this->Counter_model->count();
		// $data["categorys"] = $this->Category_model->getAll();
		// ////////////////////// Theme ///////////////////////////////////
		// $company = $this->Company_model->getOne(1);		
		// $data['companyData'] = $company;
		// $data['meta_title'] = $company->meta_title;
		// $data['meta_keyword'] = $company->meta_keyword;
		// $data['meta_description'] = $company->meta_description;
		
		// $theme_path = $company->theme_path;
		// $data['theme_path'] = $theme_path;
		// $data["theme_assets_path"] = $company->theme_assets_path;
		
		// $data['lang'] = $this->session->userdata('site_lang');
		
		// $menus = $this->Menu_model->getMain();
		// // echo $this->db->last_query();
		// // exit();

		// foreach ($menus as $menu) {
		// 	$menu->submenu = $this->Menu_model->getsub($menu->menu_id);
		// }
		// $data['menus'] = $menus ;		
		$data['countrys'] = $this->Country_model->getAll();

		
		// $search = array();
		// $data['config'] = $this->Config_model->getConfig();		
		
		// // $data['products']  = $this->Products_model->getPopular(5,0);	
		// // $data['counter'] = $this->Counter_model->getCount();
		// ////////// Pagination ////////////////////////
		// $this->load->config('pagination',TRUE);		
		// $config = $this->config->item('pagination');	

		// $config['full_tag_open'] = '<ul class="custom-pagination pagination">';
		// $config['full_tag_close'] = '</ul>';
		// $config['cur_tag_open'] = '<li class="active"><a href="#" >';
		// $config['cur_tag_close'] = '</a></li>';

		// $config["base_url"] = base_url() . "Job/index/";
		// $config["total_rows"] = $this->Job_model->record_count($search);
		// $config["per_page"] = 16;
		// $config["uri_segment"] = 3;
		// $config['reuse_query_string'] = true;			
		// $this->pagination->initialize($config);		
		// $data["links"] = $this->pagination->create_links();
		// $data['total_rows'] =  $config["total_rows"];
		// $start = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;			
		// $data['jobs'] = $this->Job_model->getAll($config["per_page"],$start);

		// ##################################################
		
		// $this->load->view($theme_path.'/job',$data);
		$this->load->view('pages/job',$data);
	}
	

	public function detail($lang , $job_id){

		$countrys = $this->Country_model->getAll();
		
		$data['countrys'] = $countrys;
		// $data['counter'] = $this->Counter_model->count();
		// $data["categorys"] = $this->Category_model->getAll();
 	// 	////////////////////// Theme ///////////////////////////////////
		// $company = $this->Company_model->getOne(1);		
		// $data['companyData'] = $company;
		// $data['meta_title'] = $company->meta_title;
		// $data['meta_keyword'] = $company->meta_keyword;
		// $data['meta_description'] = $company->meta_description;
		
		// $theme_path = $company->theme_path;
		// $data['theme_path'] = $theme_path;
		// $data["theme_assets_path"] = $company->theme_assets_path;

 	// 	$menus = $this->Menu_model->getMain();
		// // echo $this->db->last_query();
		// // exit();

		// foreach ($menus as $menu) {
		// 	$menu->submenu = $this->Menu_model->getsub($menu->menu_id);
		// }
		// $data['menus'] = $menus ;		
		// $data['countrys'] = $this->Country_model->getAll();

		// $data['lang'] = $this->session->userdata('site_lang');
		// $data['footer_newss'] = $this->Job_model->getAll(4,0,array('news_type_id'=>0));
		
		// // $data['config'] = $this->Config_model->getConfig();		
		// // $data['language'] = array('EN'=>'eng','TH'=>'ไทย');
		// // $data['menuactive'] = 3;

		// // $data['products']  = $this->Products_model->getPopular(5,0);	
		

		// //echo $this->db->last_query();
		
		// $jobdetail = $this->Job_model->getOne($job_id);

		// $data['meta_title'] = $jobdetail->meta_title;
		// $data['meta_keyword'] = $jobdetail->meta_keyword;
		// $data['meta_description'] = $jobdetail->meta_description;

		// print_r($jobdetail);
		// $data['job'] = $jobdetail ;

		// $jobrelate = $this->Job_model->getRelate($job_id);

		// print_r($jobrelate);
		// $data['jobrelate'] = $jobrelate;

		// $limit = 3;
		// $blogall = $this->Blog_model->getLimit($limit);

		// print_r($blogall);
		// $image_group_id = 2;
		// foreach ($blogall as $blog) { 
		// 	$blog->images = $this->Image_manage_model->getinuseProduct($image_group_id,$blog->blog_id);
		// }

		
		// $data['blogall'] = $blogall;

		// print_r($data['blogall']);
		// exit();
		// // exit();
		// echo $this->db->last_query();
		// //exit();
		// ##################################################
		
		// $this->load->view($theme_path.'/job_detail',$data);
		// $this->load->view('2021_theme_1/job-detail',$data);
		$this->load->view('pages/job-detail',$data);
	}


}