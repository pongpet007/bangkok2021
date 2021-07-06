<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Company_model');
		$this->load->model('Products_model');
		$this->load->model('Category_model');
		$this->load->model('Blog_model');
		$this->load->model('Counter_model');
		$this->load->model('Image_manage_model');
		$this->load->model('News_model');
		$this->load->model('Job_model');
		$this->load->model('Country_model');
		
	}

	public function index()
	{	

		$urlhome = $this->uri->segment(2);
		
		if ($urlhome!="") {

		}else{
			redirect($this->session->userdata('site_lang_name')."/Home");
		}

		// $ipAddress = $_SERVER['REMOTE_ADDR'];
		// if(($this->session->userdata('viewed')==''))
		// {

		// 	$params = array();
		// 	$params['ip'] = $ipAddress;
		// 	$params['dt'] = date('Y-m-d H:i:s');

		// 	$this->db->insert('counter',$params);

		// 	$this->session->set_userdata('viewed',1);
		// }
		
		$countrys = $this->Country_model->getAll();
		$data['countrys'] = $countrys;

		$lang =  $this->session->userdata("site_lang_name");
		$data["lang"] = $lang;


		// $companyData = $this->Company_model->getComContact();
		// $company = $this->Company_model->getOne(1);

		// $data['meta_title'] = $company->meta_title;
		// $data['meta_keyword'] = $company->meta_keyword;
		// $data['meta_description'] = $company->meta_description;

		// $data['companyData'] = $companyData;
		
		// $historys = $this->Company_model->getHistory();

		// // print_r($this->db->last_query());
		// // print_r($historys);

		// $data['historys'] = $historys;

		// $comVision = $this->Company_model->getOne('1');

		// $data['visions'] =  $comVision;

		// $com_groups = $this->Company_model->getGroupCom();
		// // print_r($com_groups);
		// $data['com_groups'] = $com_groups;

		// $categorys = $this->Category_model->getAll();

		// $data['categorys'] = $categorys;

		// $blogall = $this->Blog_model->getAll();
		// $image_group_id = 2;
		// foreach ($blogall as $blog) { 
		// 	$blog->images = $this->Image_manage_model->getinuseProduct($image_group_id,$blog->blog_id);
		// }

		// $data['blogall'] = $blogall;

		// $newsall = $this->News_model->getAll();
		// $image_group_id = 3;
		// foreach ($newsall as $news) { 
		// 	$news->images = $this->Image_manage_model->getinuseProduct($image_group_id,$news->news_id);
		// }

		// $data['newsall'] = $newsall;
		
		// $joinus = $this->Job_model->getAll();

		// $data['joinus'] = $joinus;
		// // print_r($joinus);
		// // exit();
		// $data['widget'] = $this->recaptcha->getWidget();
  //       $data['script'] = $this->recaptcha->getScriptTag();  

		// $this->load->view('2021_theme_1/index2',$data);	
		$this->load->view("pages/index",$data);
		


	}

	public function stat()
	{
		
		$data["categorys"] = $this->Category_model->getAll();
		$data['lang'] = $this->session->userdata('site_lang');

		if ($data['lang']=221) {
			$data['language'] = "เปลี่ยนภาษา";
		}else{
			$data['language'] = "Change Language";
		}
		$keyword = $this->input->post('keyword');
		$location = $this->input->post('location');
		$search_type = $this->input->post('search_type');
		$order = $this->input->get('order');
		$showitem = $this->input->get('showitem');
		$display = $this->input->get('display');
		$group = $this->input->get('group');
		$data['order'] = $order;
		$data['showitem'] = $showitem;
		$data['display'] = empty($display)?'list':$display;
		$search['keyword'] = $keyword;
		$search['location'] = $location;
		$search['search_type'] = $search_type;
		$data['links'] = '';
		$data['search'] = $search;
		////////////////////// Theme ///////////////////////////////////
		$company = $this->Company_model->getOne(1);		
		$data['companyData'] = $company;
		$data['meta_title'] = $company->meta_title;
		$data['meta_keyword'] = $company->meta_keyword;
		$data['meta_description'] = $company->meta_description;

		$data['countrys'] = $this->Country_model->getAll();

		$mName = array('Jan','Feb','Mar','Apr',
			'May','Jun','Jul','Aug',
			'Sep','Oct','Nov','Dec');
		$today = date('m-Y');
		list($cm,$cy) = explode('-',$today);
		if(!empty($_REQUEST['m']))
			$m = $_REQUEST['m'];
		else
			$m=$cm;	
		
		if(!empty($_REQUEST['y']))
			$y = $_REQUEST['y'];
		else
			$y=$cy;	

		if(empty($_REQUEST['display']))
			$display = "month";
		else
			$display = $_REQUEST['display'];
		if($display=="year")
		{
			$sql ="select year(dt) as y ,count(ip) as c 
			from counter		
			group by year(dt)
			";
			$query = $this->db->query($sql);
			$table = $query->result();
		}
		if($display=="month")
		{
			$sql="select month(dt) as m ,count(ip) as c 
			from counter 
			where year(dt) = $y
			group by month(dt)
			";
			$query = $this->db->query($sql);
			$table = $query->result();
		}
		if($display=="day")
		{
			$sql = "
			select day(dt) as d ,count(ip) as c 
			from counter  
			where year(dt)= $y and month(dt)= $m
			group by day(dt)
			";
			$query = $this->db->query($sql);
			$table = $query->result();
		}
		$data['table'] = $table; 
		$data['y'] = $y;
		$data['m'] = $m;
		$data['display'] = $display;
		$data['mName'] = $mName;
		$data['counter'] = $this->Counter_model->count();

		/////////////////////// get products /////////////////////////////
		
		$cartarr = array();
		foreach ($this->cart->contents() as $carts) {
			$cartarr[]  = array($this->Products_model->getOne($carts['id']),$carts['qty'],$carts['rowid']);

		}
		
		$data['cartarr'] = $cartarr;

		$this->load->view('2021_theme_1/stat',$data);		
	}
}
