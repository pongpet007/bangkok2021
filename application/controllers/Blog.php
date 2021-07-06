<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	
	function __construct(){
		parent::__construct();

		
		$this->load->model('Company_model');
		$this->load->model('Category_model');	
		$this->load->model('Country_model');	
		$this->load->model('Config_model');
		$this->load->model('Image_manage_model');
		$this->load->model('Blog_model');			
		$this->load->model('Counter_model');
		$this->load->model('Products_model');
		$this->load->model('cms/Menu_model');

	}

	public function detail($langu="",$blog_id){

		

		if($this->session->userdata('clicked')!=$blog_id)
		{			
			$this->db->query("update blog set count=count+1 where blog_id = $blog_id");
			$this->session->set_userdata('clicked',$blog_id);
		}

		$data['site_lang_name'] = $this->session->userdata('site_lang_name');
		$data['counter'] = $this->Counter_model->count();
 		////////////////////// Theme ///////////////////////////////////

		$company = $this->Company_model->getOne(1);		

		$data['companyData'] = $company;
		
		
		$data['countrys'] = $this->Country_model->getAll();

		$blog = $this->Blog_model->getOne($blog_id);
		$image_group_blog_id = 2;
		if (isset($blog)) {
			$blog->images = $this->Image_manage_model->getinuseProduct($image_group_blog_id,$blog->blog_id);
		}
				
		$data['blog'] = $blog;
		$blogall = $this->Blog_model->getAll(10,0);
		foreach ($blogall as $blogalls) {
			$blogalls->images = $this->Image_manage_model->getinuseProduct($image_group_blog_id,$blogalls->blog_id);
		}
		$data['blogall'] = $blogall;

		$Allpop = $this->Blog_model->getAllpop(5,0);
		foreach ($Allpop as $Allpops) {
			$Allpops->images = $this->Image_manage_model->getinuseProduct($image_group_blog_id,$Allpops->blog_id);
		}
		$data['Allpop'] = $Allpop;

		
		$data['meta_title'] = $blog->meta_title;
		$data['meta_keyword'] = $blog->meta_keyword;
		$data['meta_description'] = $blog->meta_description;

		// print_r($data['blog']);
		// exit();
		//echo $this->db->last_query();
		//exit();
		##################################################
			
		$this->load->view('2021_theme_1/know-detail',$data);

	}
}