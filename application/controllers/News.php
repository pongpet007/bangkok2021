<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('Company_model');			
		$this->load->model('Image_manage_model');		
		$this->load->model('Country_model');							
		$this->load->model('News_model');			
		$this->load->model('Counter_model');

	}

	public function index($lang = ""){

		// if($this->session->userdata('clickednew')!=$news_id)
		// {			
		// 	$this->db->query("update news set count=count+1 where news_id = $news_id");
		// 	$this->session->set_userdata('clickednew',$news_id);
		// }

		// $data['site_lang_name'] = $this->session->userdata('site_lang_name');
		// $data['counter'] = $this->Counter_model->count();

 		////////////////////// Theme ///////////////////////////////////

		// $company = $this->Company_model->getOne(1);		

		// $data['companyData'] = $company;
		
		
		$data['countrys'] = $this->Country_model->getAll();

		// $news = $this->News_model->getOne($news_id);

		// $image_group_news_id = 3;
		// if (isset($news)) {
		// 	$news->images = $this->Image_manage_model->getinuseProduct($image_group_news_id,$news->news_id);
		// }
				
		// $data['news'] = $news;
		// $newsall = $this->News_model->getRelate(10,0,$news_id);
		// foreach ($newsall as $newsalls) {
		// 	$newsalls->images = $this->Image_manage_model->getinuseProduct($image_group_news_id,$newsalls->news_id);
		// }
		// $data['newsall'] = $newsall;

		// $Allpop = $this->News_model->getAllpop(5,0);
		// foreach ($Allpop as $Allpops) {
		// 	$Allpops->images = $this->Image_manage_model->getinuseProduct($image_group_news_id,$Allpops->news_id);
		// }
		// $data['Allpop'] = $Allpop;


		// $data['meta_title'] = $news->meta_title;
		// $data['meta_keyword'] = $news->meta_keyword;
		// $data['meta_description'] = $news->meta_description;


		// $this->load->view('2021_theme_1/news-detail',$data);

		$this->load->view('pages/news',$data);

	}

	public function detail($langu="",$news_id = ''){

		// if($this->session->userdata('clickednew')!=$news_id)
		// {			
		// 	$this->db->query("update news set count=count+1 where news_id = $news_id");
		// 	$this->session->set_userdata('clickednew',$news_id);
		// }

		// $data['site_lang_name'] = $this->session->userdata('site_lang_name');
		// $data['counter'] = $this->Counter_model->count();

 		////////////////////// Theme ///////////////////////////////////

		// $company = $this->Company_model->getOne(1);		

		// $data['companyData'] = $company;
		
		
		$data['countrys'] = $this->Country_model->getAll();

		// $news = $this->News_model->getOne($news_id);

		// $image_group_news_id = 3;
		// if (isset($news)) {
		// 	$news->images = $this->Image_manage_model->getinuseProduct($image_group_news_id,$news->news_id);
		// }
				
		// $data['news'] = $news;
		// $newsall = $this->News_model->getRelate(10,0,$news_id);
		// foreach ($newsall as $newsalls) {
		// 	$newsalls->images = $this->Image_manage_model->getinuseProduct($image_group_news_id,$newsalls->news_id);
		// }
		// $data['newsall'] = $newsall;

		// $Allpop = $this->News_model->getAllpop(5,0);
		// foreach ($Allpop as $Allpops) {
		// 	$Allpops->images = $this->Image_manage_model->getinuseProduct($image_group_news_id,$Allpops->news_id);
		// }
		// $data['Allpop'] = $Allpop;


		// $data['meta_title'] = $news->meta_title;
		// $data['meta_keyword'] = $news->meta_keyword;
		// $data['meta_description'] = $news->meta_description;


		// $this->load->view('2021_theme_1/news-detail',$data);

		$this->load->view('pages/news-detail',$data);

	}


}