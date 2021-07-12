<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
	function __construct(){
		parent::__construct();

		
		$this->load->model('Company_model');
		$this->load->model('Category_model');
		$this->load->model('Country_model');
		$this->load->model('Banner_model');
		$this->load->model('Products_model');
		$this->load->model('Products_picture_model');		
		$this->load->model('News_model');
		$this->load->model('Counter_model');
		$this->load->model('Brand_model');
		$this->load->model('Promotion_model');
		$this->load->model('Image_manage_model');
		$this->load->model('cms/Menu_model');

	}

	public function uset($langu="",$pro_id=0){
		if ($pro_id>=0) {
			unset($_SESSION["brand"][$pro_id]);
			unset($_SESSION["brandid"][$pro_id]);
		}
		redirect($this->session->userdata('site_lang_name').'/Products');
	}

	public function index($lang="",$params= '')
	{
		
		$countrys = $this->Country_model->getAll();
		$data['counter'] = $this->Counter_model->count();
		$data['countrys'] = $countrys;

		// ----------------------------- Need ----------------------------- 

		$companyData = $this->Company_model->getComContact();
		$company = $this->Company_model->getOne(1);

		$data['meta_title'] = $company->meta_title;
		$data['meta_keyword'] = $company->meta_keyword;
		$data['meta_description'] = $company->meta_description;

		$data['companyData'] = $company;
		$categorys = $this->Category_model->getAllFooter();
		$data['categorys'] = $categorys;
		
		
		// $data['site_lang_name'] = $this->session->userdata('site_lang_name');

		// // $data['counter'] = $this->Counter_model->count();

		$search = array();
		$data["categorys"] = $this->Category_model->getAll();

		// print_r($data["categorys"]);

		$data["brands"] = $this->Brand_model->getAll();


		// print_r($data["brands"]);

		$keyword = $this->input->GET('keyword');

		$tag = $this->input->GET('tags');

		if($keyword != '') {
			$search = array('keyword'=>$keyword);
		}
		if($tag != '') {
			$search = array('tag'=>$tag);
		}
		
		
		if(strlen($params)>0 ){

			list($name) = explode(':', $params);

			if($name=='cid'){
				list($name,$id) = explode(':', $params);
				$cat_id = $id;
				$search['cat_id'] = $id;
			}else{
				$cat_id = 0;
			}

			if($name=='bid'){
				list($name,$id) = explode(':', $params);

				$brand_id = $id;

				$search['brand_id'] = $id;

			}else{
				$brand_id = 0;
			}
			if ($name!='cid' or $name!='bid') {
				$countnews = $name;
			}
		}else{
			$cat_id = 0;
			$brand_id = 0;
			$countnews =0;
		}

		$data["cat_name"] = '';
		if ($cat_id != '') {
			$cat_name = $this->Category_model->getOne($cat_id);

			$data["cat_name"] = $cat_name->cat_name;
			$data["cat_id"] = $cat_name->cat_id;
			// print_r($data["cat_name"]);
		}

		if (isset($_SESSION["brand"])) {
		// 	// print_r($_SESSION["brand"]);
		// exit();
			$iss=0;
			if ($brand_id > 0 ) {

				unset($_SESSION["bid"]);
				if ( array_key_exists($brand_id ,$_SESSION["brand"]) ){
					

				}else{
					$_SESSION["brand"][$brand_id] = $brand_id ;
					$_SESSION["brandid"][$brand_id] = $brand_id ;
				}
				$iss++;
			}
		} else {
			$_SESSION["brand"] = array();
			$_SESSION["brandid"] = array();
		}

		


		$search['brand_id']= $_SESSION["brand"];

		// print_r($search['brand_id']);

		$this->load->config('pagination',TRUE);		
		$config = $this->config->item('pagination');	

		$config["per_page"] = 16;

		// if ($cat_id != '') {

		// 	$config["base_url"] = base_url() . "".$this->session->userdata('site_lang_name')."/cid:".$cat_id."_".$cat_name->cat_name."";

		// } else if ($brand_id != '') {

		// 	$brand_name = $this->Brand_model->getOne($brand_id);
		// 	$config["base_url"] = base_url() . "".$this->session->userdata('site_lang_name')."/bid:".$brand_id."_".$brand_name->brand_name."";

		// } else {
		// 	$config["base_url"] = base_url() . "".$this->session->userdata('site_lang_name')."/Products/index/";
		// }
		
		$config["total_rows"] = $this->Products_model->record_count($search);

		if ($cat_id != '' || $brand_id != '') {

		} else {
			$config["uri_segment"] = 4;
		}



		$config['reuse_query_string'] = true;			
		$this->pagination->initialize($config);		
		$data["links"] = $this->pagination->create_links();
		$data['total_rows'] =  $config["total_rows"];

		if ($cat_id != '' || $brand_id != '') {
			$start = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;	
		} else {
			$start = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;	
		}
		

		$orderby="`products`.`orders` asc";

		$products = $this->Products_model->getAll($config["per_page"],$start,$search,$orderby);

		// print_r($this->db->last_query());

		
		$image_group_id = 1;
		foreach ($products as $product) { 
			$product->images = $this->Image_manage_model->getinuseProduct($image_group_id,$product->pro_id);
		}

		$data['products'] = $products;

		

		// print_r($products);
		
		// $tags_all = $this->Products_model->getProductsTag();

		// $data['tags_all'] = $tags_all;
		

		// $this->load->view('2021_theme_1/products',$data);
		$this->load->view('pages/products',$data);


	}


	public function detail($lang = '',$pro_id = ''){
		// $langu="",$pro_id
		// $data['site_lang_name'] = $this->session->userdata('site_lang_name');

		// if ($data['lang']=221) {
		// 	$data['language'] = "เปลี่ยนภาษา";
		// }else{
		// 	$data['language'] = "Change Language";
		// }
		
		// $data['counter'] = $this->Counter_model->count();
		// $data["categorys"] = $this->Category_model->getAll();
		// $company = $this->Company_model->getOne(1);		
		// $data['companyData'] = $company;
		$countrys = $this->Country_model->getAll();
		$data['countrys'] = $countrys;
		// print_r($data['companyData'])
		// $theme_path = $company->theme_path;
		// $data['theme_path'] = $theme_path;
		// $data["theme_assets_path"] = $company->theme_assets_path;

		// $menus = $this->Menu_model->getMain();
		// // echo $this->db->last_query();
		// // exit();

		// foreach ($menus as $menu) {
		// 	$menu->submenu = $this->Menu_model->getsub($menu->menu_id);
		// }
		// $data['menus'] = $menus ;		
		// $data['countrys'] = $this->Country_model->getAll();

		// $data['lang'] = $this->session->userdata('site_lang');
		// // $data['config'] = $this->Config_model->getConfig();
		// $data['footer_newss'] = $this->News_model->getAll(4,0,array('news_type_id'=>0));

		// $image_group_id = 1;
		// $product  = $this->Products_model->getOne($pro_id);

		// $data['meta_title'] = $product->meta_title;
		// $data['meta_keyword'] = $product->meta_keyword;
		// $data['meta_description'] = $product->meta_description;

		// print_r($this->db->last_query());

		// $product->images = $this->Image_manage_model->getinuseProduct($image_group_id,$product->pro_id);

		// $cat_id = $product->cat_id?$product->cat_id:0;

		// $tagarr = array();

		// $data['tag'] = $this->Products_model->getTagId($pro_id);
		

		// print_r($tags);
		// $brand_id = $product->brand_id?$product->brand_id:0;
		// $promotion_id = $product->promotion_id?$product->promotion_id:0;

		// $data['category'] = $this->Category_model->getOne($cat_id);		
		
		// $data['brand'] = $this->Brand_model->getOne($brand_id);
		// $data['promotion'] = $this->Promotion_model->getOne($promotion_id);

		// $data['product'] = $product;
		// print_r($data['product']);
		// $data['categorys'] = $this->Category_model->getAll();

		// $realatedproducts = $this->Products_model->getRelateProduct(array('cat_id'=>$cat_id),$pro_id);

		// print_r($this->db->last_query());

		// $image_group_id = 1;
		// foreach ($realatedproducts as $product) { 
		// 	$product->images = $this->Image_manage_model->getinuseProduct($image_group_id,$product->pro_id);
		// }
		
		// $data['realatedproducts'] = $realatedproducts;


		// print_r($data['realatedproducts']);
		// exit();
		// $countrealatedproducts = 0;
		// foreach ($realatedproducts as $key => $realatedproductss) {
		// 	$countrealatedproducts = $countrealatedproducts+1;
		// }
		// $data['realatedproductscount'] = $countrealatedproducts;
		
		// $data['leftpro'] = $this->Products_model->getAll(20, 0,array(),'rand()');
		
		// $data['rightpro'] = $this->Products_model->getAll(20, 0,array(),'rand()');

		

		// $data['pro_id'] = $pro_id;

		// $pictures = $this->Products_picture_model->getAll($pro_id);
		
		// $count_pic = 0;
		// foreach ($pictures as $key => $pictures_new) {
		// 	$count_pic = $count_pic + 1;
		// }
		// $data['pictures'] = $pictures;

		// $data['count_pic'] = $count_pic;
		
		// $data['colors'] = $this->Products_picture_model->getAllColor($pro_id);
		
		// $data['menuactive'] = 2;
		// $data['pages'] = "product/detail";
		
		// /////////////////////// get products /////////////////////////////
		
		// $cartarr = array();
		// foreach ($this->cart->contents() as $carts) {
		// 	$cartarr[]  = array($this->Products_model->getOne($carts['id']),$carts['qty'],$carts['rowid']);
		// }
		// $data['cartarr'] = $cartarr;

		// $this->load->view('2021_theme_1/product-detail',$data);
		$this->load->view('pages/product-detail',$data);

	}

	public function cart() {

		$data['countrys'] = $this->Country_model->getAll();

		$this->load->view('pages/cart',$data);

	}

	public function compare() {
		$data = array();
		$data['counter'] = $this->Counter_model->count();
		$data['countrys'] = $this->Country_model->getAll();
		$company = $this->Company_model->getOne(1);		
		$data['meta_title'] = $company->meta_title;
		$data['meta_keyword'] = $company->meta_keyword;
		$data['meta_description'] = $company->meta_description;
		$data['companyData'] = $company;

		$image_group_id = "1";

		$product = array();

		foreach ($this->cart->contents() as $key => $compare) {

			$products = $this->Products_model->getOne($compare['id']);
			$products->rowid = $compare['rowid'];
			if ($products->pro_id > 0) {
				$products->images = $this->Image_manage_model->getinuseProduct($image_group_id,$products->pro_id);
				
			}
			$product[] = $products;
		}

		$data['compares'] = $product;
		
		$this->load->view('2021_theme_1/product-compare',$data);

	}

	public function know_detail() {
		$data = array();

		$this->load->view('2021_theme_1/know-detail',$data);

	}


	public function sendenquiry_complete($pro_id=0)
	{
		$data['counter'] = $this->Counter_model->count();
		$data["categorys"] = $this->Category_model->getAll();
		$company = $this->Company_model->getOne(1);		
		$data['companyData'] = $company;
		$data['meta_title'] = $company->meta_title;
		$data['meta_keyword'] = $company->meta_keyword;
		$data['meta_description'] = $company->meta_description;
		
		$data['countrys'] = $this->Country_model->getAll();


		$data['lang'] = $this->session->userdata('site_lang');
		$data['config'] = $this->Company_model->getOne(1);
		$data['footer_newss'] = $this->News_model->getAll(4,0,array('news_type_id'=>0));
		
		$this->load->view('2021_theme_1/product_complete',$data);
	}

	public function quotation($pro_id){

		$company = $this->Config_model->getConfig();
		$data["categorys"] = $this->Category_model->getAll();
		$company = $this->Company_model->getOne(1);		
		$data['companyData'] = $company;
		$data['meta_title'] = $company->meta_title;
		$data['meta_keyword'] = $company->meta_keyword;
		$data['meta_description'] = $company->meta_description;
		
		$data['theme_path'] = $theme_path;
		$data["theme_assets_path"] = $company->theme_assets_path;

		$menus = $this->Menu_model->getMain();
		// echo $this->db->last_query();
		// exit();

		foreach ($menus as $menu) {
			$menu->submenu = $this->Menu_model->getsub($menu->menu_id);
		}
		$data['menus'] = $menus ;		
		$data['countrys'] = $this->Country_model->getAll();



		$qtybutton = $this->input->get('qtybutton');
		$data['qtybutton'] = $qtybutton;

		$data['widget'] = $this->recaptcha->getWidget();
		$data['script'] = $this->recaptcha->getScriptTag();  

		$data['lang'] = $this->session->userdata('site_lang');
		$data['config'] = $this->Config_model->getConfig();
		$data['footer_newss'] = $this->News_model->getAll(4,0,array('news_type_id'=>0));
		$data['language'] = array('EN'=>'eng','TH'=>'ไทย');
		
		$product  = $this->Products_model->getOne($pro_id);
		$cat_id = $product->cat_id;
		$realatedproducts = $this->Products_model->getrealated($cat_id);
		$data['realatedproducts'] = $realatedproducts;
		$countrealatedproducts = 0;
		foreach ($realatedproducts as $key => $realatedproductss) {
			$countrealatedproducts = $countrealatedproducts+1;
		}
		$data['realatedproductscount'] = $countrealatedproducts;
		$data['product'] = $product;
		$data['pro_id'] = $pro_id;
		$data['counter'] = $this->Counter_model->count();
		
		// print_r($data);
		// exit();
		
		$this->load->view($theme_path.'/product_quotation',$data);

	}
	
	public function sentquotation(){

			// foreach ($this->input->post() as $key => $value) {

			// 	echo '$'.$key.' = $this->input->post(\''.$key.'\');<br>';
			// }
			// exit();

		$grecaptcharesponse = $this->input->post('g-recaptcha-response');



		$pro_id = $this->input->post('pro_id');

		if(!$grecaptcharesponse){
			$this->session->set_flashdata('errors', 'Recaptcha Error');	
			redirect("Products/quotation/$pro_id");
		}


		$fullname = $this->input->post('fullname');
		$company_name = $this->input->post('company_name');
		$email = $this->input->post('email');
		$telephone = $this->input->post('telephone');
		$detail = $this->input->post('detail');


		$product = $this->Products_model->getOne($pro_id);
		$company = $this->Config_model->getConfig();



		$ref = 'http://coldroom-freezerroom.com/products/detail/$pro_id';

		$body = "
		<table width='100%' border='0' cellpadding='0' cellspacing='0' style='font-size:11pt;font-family:Calibri,sans-serif;'>
		<tr>
		<td></td>					
		<td><b>สินค้า</b></td>
		</tr>

		<tr>
		<td><img src='http://coldroom-freezerroom.com/images/product_new/pro_{$pro_id}01.jpg' width='100' style='width:100px;height:auto;'></td>
		<td>{$product->pro_name_th}</td>
		</tr>

		</table>					
		<br><br>
		<h4>รายละเอียดเพิ่มเติม</h4>					 
		$detail<br>


		<h4>ข้อมูลลูกค้าเพื่อติดต่อกลับ</h4>

		Name = $fullname <br>
		Company = $company_name <br>
		E-mail = $email <br>
		Telephone = $telephone <br>

		";


		$x = '<table width="100%" border="0" cellspacing="0" cellpadding="0" style="width:100%;">
		<tbody><tr>
		<td style="background-color:#EFEFEF;padding:7.5pt;"><span style="background-color:#EFEFEF;">

		<div style="margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;">&nbsp;</span></font></div>

		<div align="center">
		<table width="875" border="0" cellspacing="0" cellpadding="0" style="width:525pt;">
		<tbody><tr>
		<td style="background-color:white;padding:29.25pt;border:1pt solid #D9D9D9;"><span style="background-color:white;">
		<table width="775" border="0" cellspacing="0" cellpadding="0" style="width:465pt;background-color:white;">
		<tbody><tr>
		<td style="padding:0;">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" style="width:100%;">
		<tbody><tr>
		<td style="padding:7.5pt;">
		<div style="margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;"><font face="Arial,sans-serif" size="4" color="red"><span style="font-size:15pt;"><b>

		ใบร้องขอราคา จากลูกค้า เวิด์ล คูล เอ็นจิเนียริ่ง บจก.
		</b></span></font></span></font></div>
		</td>
		</tr>
		<tr>
		<td style="padding:7.5pt;">
		<div><font face="Arial,sans-serif" size="2" color="black"><span style="font-size:9pt; font-weight:bold;">
		เรียน  ผู้เกี่ยวข้อง
		</span></font></div>

		<div style="margin-top:14pt;margin-bottom:14pt;">
		<font face="Arial,sans-serif" size="2" color="black">
		<span style="font-size:9pt;">

		เนื่องจากได้มีลูกค้าของเราสนใจสินค้าในเว็ปไซต์ของท่านตามรายละเอียดดังนี้ :<br><br><br><br>

		'.$body.'
		</span></font>
		</div>
		</td>
		</tr>
		</tbody></table>
		<div style="margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;">&nbsp;</span></font></div>
		<table border="0" cellspacing="0" cellpadding="0" style="margin-left:7.5pt;">
		<tbody><tr height="43" style="height:26.25pt;">
		<td width="312" style="width:187.5pt;height:26.25pt;background-color:red;padding:0;border:1pt solid #FF9001;">
		<span style="background-color:red;">

		<div align="center" style="text-align:center;margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;"><a href="'.$ref.'" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" id="LPlnk185225"><font face="Arial,sans-serif" size="3" color="white"><span style="font-size:12pt;"><b>กดดูข้อมูลอ้างอิง</b></span></font></a></span></font></div>

		</span></td>
		</tr>
		</tbody></table>
		<div style="margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;">&nbsp;</span></font></div>
		<table border="0" cellspacing="0" cellpadding="0">
		<tbody><tr>
		<td style="padding:7.5pt;">
		<div style="margin:9.75pt 0 0 0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;"><font face="Arial,sans-serif" size="2" color="black"></font></span></font></div>

		</td>
		</tr>
		</tbody></table>
		</div>
		';
		
		//Username:	sendmail@spprubberparts.com
		// Password:	eMm7FMA3cP
		// Pop/Imap Server:	mail.spprubberparts.com
		// Smtp Server:	mail.spprubberparts.com

		$params = array();
		$params["cdate"] =date('Y-m-d h:i:s');  
		$params["com_id"] = 1;  
		$params["pro_id"] = $pro_id;  
		$params["fullname"] = $fullname;  
		$params["company"] = $company_name;  
		$params["email"] = $email;  
	        // $params["lineid"] = $lineid;  
		$params["phone"] = $telephone;  
		$params["fax"] = $fax;  
		$params["message"] = $detail;  
		$params["msg_email"] = $x;  


		$this->db->insert('quotation',$params);

		$config['protocol']    = 'smtp';
		$config['smtp_host']    = 'mail.brandexdirectory.com';
		$config['smtp_port']    = '587';
		$config['smtp_timeout'] = '7';
		$config['smtp_user']    = 'pongpet@brandexdirectory.com';
		$config['smtp_pass']    = '12345678af';
		$config['charset']    = 'utf-8';
		$config['newline']    = "\r\n";
        $config['mailtype'] = 'html'; // text or html
        $config['validation'] = TRUE; // bool whether to validate email or not

        $company = $this->Config_model->getConfig();

        $this->email->initialize($config);
        $this->email->from("no-reply@system.com");
        $to = $company->com_email;
   		// $to = "korn@brandexdirectory.com";
        $this->email->to($to);   		
        $this->email->subject('ร้องขอใบเสนอราคา จาก ' .$fullname. ' '.date('d M F h:i:s a'));
        $this->email->message($x);

        if($this->email->send()){
     		// echo "Send OK";
        	redirect("Products/sendenquiry_complete");
        }
        else{
        	echo "Send error";
        }
			// $this->session->set_flashdata('msg','Submit Complete');

			// echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";

    }
}
