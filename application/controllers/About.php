<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Country_model');
	}

	
	public function index()
	{	
		$countrys = $this->Country_model->getAll();
		$data['countrys'] = $countrys;

		$lang =  $this->session->userdata("site_lang_name");
		$data["lang"] = $lang;

		// $this->load->view('2021_theme_1/about',$data);	
		$this->load->view('pages/about',$data);	
	}
}