<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Country_model');
		$this->load->model('Company_model');
		$this->load->model('Category_model');
	}

	
	public function index()
	{	
		$countrys = $this->Country_model->getAll();
		$data['countrys'] = $countrys;

		$lang =  $this->session->userdata("site_lang_name");
		$data["lang"] = $lang;


		// ----------------------------- Need ----------------------------- 

		$companyData = $this->Company_model->getComContact();
		$company = $this->Company_model->getOne(1);

		$data['meta_title'] = $company->meta_title;
		$data['meta_keyword'] = $company->meta_keyword;
		$data['meta_description'] = $company->meta_description;

		$data['companyData'] = $company;
		$categorys = $this->Category_model->getAllFooter();
		$data['categorys'] = $categorys;







		

		// $this->load->view('2021_theme_1/about',$data);	
		$this->load->view('pages/about',$data);	
	}
}